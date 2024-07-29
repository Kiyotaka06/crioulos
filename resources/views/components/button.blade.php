<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center p-3 bg-amber-700 rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-amber-800 hover:shadow active:bg-amber-900 transition duration-200']) }}>
    {{ $slot }}
</button>
