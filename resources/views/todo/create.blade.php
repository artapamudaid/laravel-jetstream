<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('To Do') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('todo.store') }}" method="POST">
                    <div class="w-full p-6">
                        @csrf
                        <label class="mb-4 block uppercase tracking-wide text-gray-700 text xs font-bold">To
                            Do</label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mb-4"
                            type="text" name="todo">

                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 mb-6 bg-indigo-500 hover:bg-indigo-700 text-white font-bold rounded">
                            Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>