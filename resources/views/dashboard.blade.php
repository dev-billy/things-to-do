<x-app-layout>
    <x-slot name="header">
        <div style="display:flex; justify-content: space-between; align-items: center;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Things To Do') }}
            </h2>
            <a href="{{ url('addItem') }}">
                <button
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Add Item
                </button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            @foreach ($items as $item)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-5">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="POST" id='myForm' action="{{ route('updateItem') }}"
                            style="display: flex; justify-content: space-between">
                            @method('PATCH')
                            {{ csrf_field() }}
                            <input type="hidden" name="itemId" value={{ $item->id }}>
                            @if ($item->completed)
                                <p style="text-decoration: line-through;">{{ $item->name }}</p>
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; width: 10%">
                                    <input type="checkbox" checked onclick="this.form.submit()">
                                    <a href={{ route('deleteItem', [$item->id]) }} style="color:red">Delete</a>
                                </div>
                            @else
                                <p>{{ $item->name }}</p>
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; width: 10%">
                                    <input type="checkbox" onclick="this.form.submit()">
                                    <a href={{ route('deleteItem', [$item->id]) }} style="color:red">Delete</a>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
