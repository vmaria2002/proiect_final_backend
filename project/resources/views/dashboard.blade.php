<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Presentation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-header">
                        Tasks
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>If you are an admin, you can add, delete, search and view  for a task</p>
                            <p>Otherwise, you can add, search and view a task</p>
                           
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card">
                        <div class="card-header">
                            Users
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                            <p>If you are an admin, you can add, delete(but you cannot delete your own account), search and view  for a user. Also, you can also invite a user.</p>
                            <p>Otherwise, you can search and view a user</p>
                            <p><b>Very important, invited and added users will receive an email for confirmation</b></p>

                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>
    



        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card">
                        <div class="card-header">
                        Online Shopping
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>You can buy everything you want!</p>
                                 </blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</x-app-layout>