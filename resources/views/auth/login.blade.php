<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-xl font-bold text-blue-800 uppercase tracking-tight mt-3">
            SMAN 1 Rimba Melintang
        </h2>
        <p class="text-xs text-gray-500 font-medium">Sistem Informasi Manajemen Sekolah</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" class="font-semibold text-gray-700" />
            <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-lg shadow-sm" 
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username" 
                placeholder="Masukkan email anda" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-semibold text-gray-700" />
            <x-text-input id="password" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-lg shadow-sm"
                type="password"
                name="password"
                required autocomplete="current-password"
                placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-500 hover:text-blue-700" href="{{ route('password.request') }}">
                    {{ __('Lupa Password?') }}
                </a>
            @endif
        </div>

        <div class="mt-8 flex gap-4">
            <a href="/" class="w-1/2 inline-flex items-center justify-center py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold uppercase tracking-widest rounded-lg transition duration-150 ease-in-out text-xs text-center shadow-sm">
                {{ __('Batal') }}
            </a>

            <x-primary-button class="w-1/2 justify-center py-3 bg-blue-800 hover:bg-blue-900 shadow-lg rounded-lg font-bold text-white uppercase tracking-widest text-xs">
                {{ __('Masuk') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>