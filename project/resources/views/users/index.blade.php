<x-app-layout>


    <x-slot name="header">
        Users List
        </h2>
    </x-slot>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" style=" background-color:red; padding:5px;text-align:center">
            <strong>Error! You can't delete this account! {{ session()->get('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>

        @endif
        <div>
            <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8  text-white font-bold py-2 px-4 rounded">
                @if(Auth::user()->rol=="admin")
                <br></br>

                <a href="{{ route('home.send') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" style="background-color: green; color:white; margin-left: 29px; margin-bottom:5px">Invite User</a>
                <br></br>

                @endif

                @endif
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 w-full">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ID
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email
                                            </th>

                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Roles
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 p-7">
                                        @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $user->id }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $user->name }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $user->email }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    {{ $user->rol }}
                                                </span>

                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <a href="{{ route('users.show', $user->id) }}" class="text-blue-600 hover:text-white mb-2 mr-2" style="color:black">View</a>

                                                @if(Auth::user()->rol=="admin")
                                                <a href="{{ route('users.edit', $user->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                                @endif
                                                @if($user->id != Auth::user()->id)
                                                @if(Auth::user()->rol=="admin")
                                                <!-- <form class="inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">

                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                                </form> -->

                                                <button type="button" class="btn" data-id="<?php echo $user->id; ?>" onclick="confirmDelete(this);">Delete</button>


                                                <div id="myModal" class="modal">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="color:black">Delete User</h4>
                                                                <button type="button" class="close" style="color:black" data-dismiss="modal">×</button>
                                                            </div>

                                                            <div class="modal-body" style="color:black">
                                                                <p>Are you sure you want to delete this user ?</p>
                                                                <form method="POST" action="{{ route('users.destroy', $user->id) }}" id="form-delete-user">
                                                                    <input type="hidden" name="id">
                                                                </form>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" onclick="closeWin(this);">Close</button>
                                                                <button type="submit" form="form-delete-user" class="btn btn-danger">Delete</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                @endif
                                                @else
                                                @if(Auth::user()->rol=="admin")
                                                <form class="inline-block" action="{{ route('users.show', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">


                                                    <input type="hidden" name="_method" value="DELETE">

                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" style="color:green" value="Delete">
                                                    @endif
                                                    @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><br></br>@if(Auth::user()->rol=="admin")


                        <div class="block mb-8">
                            <a href="{{ route('users.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" style="background-color: green; color:white; margin-left: 29px; margin-bottom:5px">Add User</a>
                            <br></br>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span>
            {{$users->links()}}
        </span>




</x-app-layout>
<script>
    function confirmDelete(self) {
        var id = self.getAttribute("data-id");

        document.getElementById("form-delete-user").id.value = id;
        $("#myModal").modal("show");
    }
</script>

<script>
    function closeWin() {
        myWindow.close();
    }
</script>