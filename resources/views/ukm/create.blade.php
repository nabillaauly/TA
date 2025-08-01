<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Your Ukm') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg"> 
                
                <form method="POST" action="{{route('ukm.store') }} " enctype="multipart/form-data"> 
                    @csrf   
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="logo" :value="__('logo')" />
                        <x-text-input id="logo" class="block mt-1 w-full" type="file" name="logo" required autofocus autocomplete="logo" />
                        <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="about" :value="__('about')" />
                        <textarea name="about" id="about" cols="30" rows="5" class="border border-slate-300 rounded-xl w-full"></textarea>
                        <x-input-error :messages="$errors->get('about')" class="mt-2" />
                    </div>

                    <div>
                        <!-- <label for="batas_pendaftaran" class="block font-medium text-sm text-black">
                            Batas Pendaftaran
                        </label> -->
                        <x-input-label for="batas_pendaftaran" :value="__('Batas Pendaftaran')" />
                        <x-text-input id="batas_pendaftaran" class="block mt-1 w-full" type="date" name="batas_pendaftaran" :value="old('batas_pendaftaran')" required autofocus autocomplete="batas_pendaftaran" />
                        <x-input-error :messages="$errors->get('batas_pendaftaran')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Tambah Pendaftaran UKM
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
