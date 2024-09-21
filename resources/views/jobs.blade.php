<x-layout>
    <x-slot:heading>
        jobs Page
    </x-slot:heading>
       <ul>
        @foreach ($jobs as $job )

     <li>
        <a href="/jobs/{{ $job['id'] }}">
            {{$job['title']}} :  Pays{{ $job['salary'] }} Per Month
        </a>
    </li>

    @endforeach
       </ul>
</x-layout>
