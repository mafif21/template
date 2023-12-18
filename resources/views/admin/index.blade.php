<x-admin-layout>
    <x-slot name="title">Admin</x-slot>

    <div>
        <h1>hello admin {{ Auth::user()->username }}</h1>
    </div>
</x-admin-layout>
