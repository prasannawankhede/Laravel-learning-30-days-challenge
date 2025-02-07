<x-layout>
    <x-slot name="heading">
        Home Page
    </x-slot>

    <h1>Welcome to the home page</h1>

    @foreach($jobs as $job)

    <li>{{ $job['title'] }}: pays {{ $job['salary'] }} per year. </li>

    @endforeach
</x-layout>
