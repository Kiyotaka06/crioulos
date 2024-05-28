<?php

namespace App\Livewire\Lexicon;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Word;
use App\Models\LanguageCode;


class InsertWord extends Component
{
    public $text = '';
    public $language_code_id;
    public $languages = [];

    public function render()
    {
        return view('livewire.lexicon.insert-word');
    }

    public function mount()
    {
        $this->languages = LanguageCode::all();
    }

    public function updated($field)
    {

        if ($field === 'text') {
            $this->text = trim($this->text);
        }

        $this->validateOnly($field, [
            'text' => 'required|unique:words,text,NULL,id,language_code_id,' . $this->language_code_id,
            'language_code_id' => 'required',
        ]);
    }

    // Insert Words
    public function insert()
    {
        $userId = Auth::id();

        $this->validate([
            'text' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (strpos($value, ' ') !== false || strpos($value, ',') !== false) {
                        $fail('Apenas uma palavra é permitida.');
                    }
                    if (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚàÀãõÃÕâêîôûÂÊÎÔÛçÇ]+$/', $value)) {
                        $fail('A palavra contém caracteres inválidos.');
                    }
                },
            ],
            'language_code_id' => 'required',
        ], [
            'text.required' => 'É necessário escrever uma palavra.',
            'language_code_id.required' => 'É necessário selecionar a linguagem da palavra.',
            'text.unique' => 'A palavra "' . trim($this->text) . '" com o código de linguagem "' . $this->language_code_id . '" já existe.',
            'language_code_id.unique' => ''
        ]);

        $trimmedText = trim($this->text);

        $wordExists = Word::where('text', $trimmedText)
            ->where('language_code_id', $this->language_code_id)
            ->exists();

        if (!$wordExists) {
            Word::create([
                'text' => strtolower($trimmedText),
                'language_code_id' => $this->language_code_id,
                'user_id' => $userId,
            ]);

            session()->flash('message', 'A palavra foi inserida na BD.');

            $this->reset(['text', 'language_code_id']);
        } else {
            $languageName = LanguageCode::find($this->language_code_id)->name;
            session()->flash('message_error', 'A palavra "' . $trimmedText . '" já existe em ' . $languageName . ' .');
        }
    }
}
