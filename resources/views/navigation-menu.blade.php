<nav x-data="{ open: false }" class="fixed w-full z-20 top-0 start-0 border-b shadow-sm bg-white">
    <!-- Primary Navigation Menu -->
    <div class="max-w-screen-xl mx-auto px-4 lg:px-6">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex space-x-2">
                        <!-- <x-application-mark class="block h-9 w-auto" /> -->
                        <x-application-mark />
                        <span class="self-center text-2xl text-amber-700 font-semibold whitespace-nowrap">Crioulos</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-4 lg:-my-px lg:ms-10 lg:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="border-b-2">
                        {{ __('Início') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('language_codes.index') }}" :active="request()->routeIs('language_codes.index')" class="border-b-2">
                        {{ __('Línguas') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('history.index') }}" :active="request()->routeIs('history.index')" class="border-b-2">
                        {{ __('História') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('unsplash.index') }}" :active="request()->routeIs('unsplash.index')" class="border-b-2">
                        {{ __('Unsplash') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('references.index') }}" :active="request()->routeIs('references.index')" class="border-b-2">
                        {{ __('Referências') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('people.index') }}" :active="request()->routeIs('people.index')" class="border-b-2">
                        {{ __('Pessoas') }}
                    </x-nav-link>
                </div>
            </div>

            @auth
            <div class="hidden lg:flex lg:items-center lg:ms-6">
                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <x-button>
                                    {{ Auth::user()->name }}

                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </x-button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Perfil') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Sair') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
            @endauth
            <!-- Hamburger -->
            <div class="-me-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-amber-700 hover:text-amber-800 active:text-amber-900 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="p-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Início') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('language_codes.index') }}" :active="request()->routeIs('language_codes.index')">
                {{ __('Línguas') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('history.index') }}" :active="request()->routeIs('history.index')">
                {{ __('História') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('unsplash.index') }}" :active="request()->routeIs('unsplash.index')">
                {{ __('Unsplash') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('references.index') }}" :active="request()->routeIs('references.index')">
                {{ __('Referências') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('people.index') }}" :active="request()->routeIs('people.index')">
                {{ __('Pessoas') }}
            </x-responsive-nav-link>
        </div>

        @auth
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="shrink-0 me-3">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="p-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Perfil') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                    {{ __('API Tokens') }}
                </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Sair') }}
                    </x-responsive-nav-link>
                </form>

            </div>
        </div>
        @endauth
    </div>
</nav>