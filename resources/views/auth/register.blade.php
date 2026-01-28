<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-xl font-bold text-blue-800 uppercase tracking-tight mt-3">
            Tambah User Baru
        </h2>
        <p class="text-xs text-gray-500 font-medium">Panel Administrasi SMAN 1 Rimba Melintang</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" class="font-semibold text-gray-700" />
            <x-text-input id="name" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-lg shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Contoh: Budi Santoso" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="font-semibold text-gray-700" />
            <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-lg shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="admin@gmail.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-semibold text-gray-700" />
            <x-text-input id="password" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-lg shadow-sm"
                            type="password"
                            name="password"
                            required autocomplete="new-password" 
                            placeholder="Minimal 8 karakter" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" class="font-semibold text-gray-700" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-lg shadow-sm"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Masukkan ulang password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-8 flex gap-4">
            <a href="/dashboard" class="w-1/2 inline-flex items-center justify-center py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold uppercase tracking-widest rounded-lg transition duration-150 ease-in-out text-[10px] text-center shadow-sm">
                {{ __('Batal') }}
            </a>

            <x-primary-button class="w-1/2 justify-center py-3 bg-emerald-600 hover:bg-emerald-700 shadow-lg rounded-lg font-bold text-white uppercase tracking-widest text-[10px]">
                {{ __('Daftarkan Akun') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>