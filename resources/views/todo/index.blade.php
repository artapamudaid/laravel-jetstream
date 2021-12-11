<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <a href="{{ route('todo.create') }}"
                    class="inline-flex items-center px-4 py-2 mt-6 mb-6 ml-6 bg-indigo-500 hover:bg-indigo-700 text-white font-bold rounded">
                    Create To Do</a>
                <table class="table-auto-m-full ml-6 mb-6">
                    <tr>
                        <th class="border px-4 py-2" width="10%">ID</th>
                        <th class="border px-4 py-2" width="70%">To Do</th>
                        <th class="border px-4 py-2" width="20%">Aksi</th>
                    </tr>
                    @forelse ($todos as $todo)
                    <tr>
                        <td class="border px-4 py-2">{{ $todo->id }}</td>
                        <td class="border px-4 py-2">{{ $todo->todo }}</td>
                        <td class="border px-4 py-2"><a href="{{ route('todo.edit', $todo->id) }}">Edit</a>
                            <form action="{{ route('todo.destroy', $todo->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty

                    @endforelse
                </table>
            </div>
        </div>
    </div>
</x-app-layout>