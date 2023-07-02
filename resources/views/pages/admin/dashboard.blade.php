<x-admin-layout>
    <form method="post" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</x-admin-layout>
