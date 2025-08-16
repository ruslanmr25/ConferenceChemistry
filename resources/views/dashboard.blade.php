<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    @if (auth()->user()->is_admin)
        <div class="py-12">
            <div class="mx-auto ps-4 pe-4 sm:px-6 lg:px-8">
                <div class="bg-white p-6 shadow-sm sm:rounded-lg">



                    <div class="overflow-auto">

                        <table class="  border border-gray-300 overflow-auto ">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2 border">ID</th>
                                    <th class="px-4 py-2 border">Elektron pochta</th>
                                    <th class="px-4 py-2 border">F.I.O</th>
                                    <th class="px-4 py-2 border">Tezis</th>

                                    <th class="px-4 py-2 border">Darajasi</th>
                                    <th class="px-4 py-2 border">Tashkilot</th>
                                    <th class="px-4 py-2 border">Shahar / Mamlakat</th>
                                    <th class="px-4 py-2 border">Telefon</th>
                                    <th class="px-4 py-2 border">Qatnashish turi</th>
                                    <th class="px-4 py-2 border">Seksiya</th>
                                    <th class="px-4 py-2 border">Maruza mavzusi</th>
                                    <th class="px-4 py-2 border">Mehmonxona band qilish kerakmi?
                                    </th>
                                    <th class="px-4 py-2 border">Kelish sanasi</th>
                                    <th class="px-4 py-2 border">Ketish sanasi</th>
                                    <th class="px-4 py-2 border">Ekskursiyada qatnashasizmi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                @foreach ($users as $participant)
                                    <tr class="hover:bg-gray-100 transition-colors">
                                        <td class="px-4 py-2 border">{{ $participant->id }}</td>
                                        <td class="px-4 py-2 border">{{ $participant->email }}</td>
                                        <td class="px-4 py-2 border">{{ $participant->full_name }}</td>


                                        <td class="px-4 py-2 border"><a
                                                href="{{ asset('storage/' . $participant->tezis ?? '-') }}">Yuklab
                                                olish</a>
                                        </td>

                                        <td class="px-4 py-2 border">{{ $participant->degree ?? '-' }}</td>
                                        <td class="px-4 py-2 border">{{ $participant->organization ?? '-' }}</td>
                                        <td class="px-4 py-2 border">{{ $participant->city_country ?? '-' }}</td>
                                        <td class="px-4 py-2 border">{{ $participant->phone ?? '-' }}</td>
                                        <td class="px-4 py-2 border">
                                            {{ $participant->participation == 'online' ? 'Online' : "An'anaviy" }}</td>
                                        <td class="px-4 py-2 border">{{ $participant->section ?? '-' }}</td>
                                        <td class="px-4 py-2 border">{{ $participant->presentation ?? '-' }}</td>
                                        <td class="px-4 py-2 border">{{ $participant->hotel ? 'Ha' : "Yo'q" }}</td>
                                        <td class="px-4 py-2 border">{{ $participant->arrival_date ?? '-' }}</td>
                                        <td class="px-4 py-2 border">{{ $participant->departure_date ?? '-' }}</td>
                                        <td class="px-4 py-2 border">{{ $participant->tour ? 'Ha' : "Yo'q" }}</td>
                                    </tr>
                                @endforeach
                            </tbody>


                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
        </div>
    @else
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __('messages.completed') }}
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
