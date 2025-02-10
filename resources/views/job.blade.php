<x-layout>
    <x-slot:heading>
        Job:
    </x-slot:heading>

    <ul>

                    <strong>{{ $job['title'] }}:</strong> <br>

                   <b> Pays {{ $job['salary'] }} per year. </b>
    </ul>
</x-layout>
