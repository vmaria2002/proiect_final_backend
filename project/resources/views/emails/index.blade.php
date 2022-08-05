<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('tasks.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" style="background-color: green; color:white; margin-left: 29px;">Invite</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                        <br></br>
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <div class="form-group">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search description">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>