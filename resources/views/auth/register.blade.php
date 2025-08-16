<x-guest-layout>

    <style>
        /* Style the file selector button */
        input[type="file"]::file-selector-button {
            background-color: #1d1d1d;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Hover effect */
        input[type="file"]::file-selector-button:hover {
            background-color: #000000;
        }
    </style>

    <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- F.I.Sh -->
        <div>
            <x-input-label for="full_name" :value="__('messages.registerSection.full_name')" />
            <x-text-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name')"
                required />
            <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('messages.registerSection.email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('messages.registerSection.password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')"
                required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Ilmiy daraja/unvon -->
        <div class="mt-4">
            <x-input-label for="degree" :value="__('messages.registerSection.degree')" />
            <x-text-input id="degree" class="block mt-1 w-full" type="text" name="degree" :value="old('degree')" />
            <x-input-error :messages="$errors->get('degree')" class="mt-2" />
        </div>

        <!-- Tashkilot/bo‘lim -->
        <div class="mt-4">
            <x-input-label for="organization" :value="__('messages.registerSection.organization')" />
            <x-text-input id="organization" class="block mt-1 w-full" type="text" name="organization"
                :value="old('organization')" required />
            <x-input-error :messages="$errors->get('organization')" class="mt-2" />
        </div>

        <!-- Shahar, mamlakat -->
        <div class="mt-4">
            <x-input-label for="city_country" :value="__('messages.registerSection.city_country')" />
            <x-text-input id="city_country" class="block mt-1 w-full" type="text" name="city_country"
                :value="old('city_country')" />
            <x-input-error :messages="$errors->get('city_country')" class="mt-2" />
        </div>

        <!-- Telefon -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('messages.registerSection.phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Ishtirok shakli -->
        <div class="mt-4">
            <x-input-label for="participation" :value="__('messages.registerSection.participation')" />
            <select id="participation" name="participation" class="block mt-1 w-full rounded-xl border p-2">
                <option value="onsite" {{ old('participation') === 'onsite' ? 'selected' : '' }}>
                    {{ __('messages.registerSection.participation_onsite') }}
                </option>
                <option value="online" {{ old('participation') === 'online' ? 'selected' : '' }}>
                    {{ __('messages.registerSection.participation_online') }}
                </option>
            </select>
            <x-input-error :messages="$errors->get('participation')" class="mt-2" />
        </div>

        <!-- Bo‘lim -->
        <div class="mt-4">
            <x-input-label for="section" :value="__('messages.registerSection.section')" />
            <x-text-input id="section" class="block mt-1 w-full" type="text" name="section" :value="old('section')"
                placeholder="e.g. Synthesis / Qo‘llanilish / ..." />
            <x-input-error :messages="$errors->get('section')" class="mt-2" />
        </div>

        <!-- Maʼruza nomi -->
        <div class="mt-4">
            <x-input-label for="presentation" :value="__('messages.registerSection.presentation')" />
            <x-text-input id="presentation" class="block mt-1 w-full" type="text" name="presentation"
                :value="old('presentation')" />
            <x-input-error :messages="$errors->get('presentation')" class="mt-2" />
        </div>

        <!-- Mehmonxona band qilish -->
        <div class="mt-4 flex items-center gap-2">
            <input id="hotel" type="checkbox" name="hotel" value="1" {{ old('hotel') ? 'checked' : '' }}>
            <x-input-label for="hotel" :value="__('messages.registerSection.hotel')" />
            <x-input-error :messages="$errors->get('hotel')" class="mt-2" />
        </div>

        <!-- Kelish va ketish sanalari -->
        <div class="mt-4 grid grid-cols-2 gap-3">
            <div>
                <x-input-label for="arrival_date" :value="__('messages.registerSection.arrival_date')" />
                <x-text-input id="arrival_date" type="date" class="block mt-1 w-full" name="arrival_date"
                    :value="old('arrival_date')" />
                <x-input-error :messages="$errors->get('arrival_date')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="departure_date" :value="__('messages.registerSection.departure_date')" />
                <x-text-input id="departure_date" type="date" class="block mt-1 w-full" name="departure_date"
                    :value="old('departure_date')" />
                <x-input-error :messages="$errors->get('departure_date')" class="mt-2" />
            </div>
        </div>

        <!-- Ekskursiya -->
        <div class="mt-4 flex items-center gap-2">
            <input id="tour" type="checkbox" value="1" name="tour" {{ old('tour') ? 'checked' : '' }}>
            <x-input-label for="tour" :value="__('messages.registerSection.tour')" />
            <x-input-error :messages="$errors->get('tour')" class="mt-2" />
        </div>

        <!-- Tezis -->
        <div class="mt-4">
            <x-input-label for="tezis" :value="__('messages.registerSection.tezis')" />
            <input type="file" name="tezis"
                class="block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
            <x-input-error :messages="$errors->get('tezis')" class="mt-2" />
        </div>

        <!-- Submit buttons -->
        <div class="flex gap-3 mt-4">
            <x-primary-button>{{ __('messages.registerSection.save') }}</x-primary-button>
            <button type="reset" class="rounded-xl bg-gray-100 px-4 py-2 hover:bg-gray-200">
                {{ __('messages.registerSection.reset') }}
            </button>
        </div>
    </form>
</x-guest-layout>
