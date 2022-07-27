<x-app-layout>
    <x-slot name="header">
        <div style="display:flex; justify-content: space-between; align-items: center;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Things To Do') }}
            </h2>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{route('saveItem')}}" style="display: flex; flex-direction:column; align-items:center; background: white; padding:1em 1.4em">
                {{ csrf_field() }}
                <div class="formItemGroup" style=" width: 40%;display: flex; flex-direction:row; align-items:flex-end; justify-content: space-evenly; margin-bottom: 1.5em;" >
                    <label for="itemName">Item Name</label>
                    <input id="itemName" type="text" name="itemName" style="padding: 0.2em"/>
                </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" >
                    Add Item
                </button>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
