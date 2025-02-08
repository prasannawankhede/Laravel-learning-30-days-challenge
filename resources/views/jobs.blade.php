<x-layout>
    <x-slot name="heading">
        Jobs Page
    </x-slot>

    <h1>Welcome to the Jobs page</h1>

    @foreach($jobs as $job)
    <li><strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }} per year.</li>
@endforeach


</x-layout>
