<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Friends
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-6 gap-6">

            <div class="col-span-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="space-y-3">
                            <h2 class="text-lg font-semibold">friends</h2>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <a href="#">friend</a> 
                                    <div class="space-x-2">
                                        <button>Unfriend</button>
                                        
                                    </div> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 space-y-6">
                        <div class="space-y-3">
                            <h2 class="text-lg font-semibold">Friend Request</h2>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <a href="#">friend</a> 
                                    <div class="space-x-2">
                                        <button>Accept</button>
                                        <button>Reject</button>
                                    </div> 
                                </div>
                                
                            </div>
                        </div>

                        <div class="space-y-3">
                            <h2 class="text-lg font-semibold">Pending Friend Request</h2>
                            <div class="space-y-3">

                                @foreach($pendingFriendsTo as $pendingFriend)
                                <div class="flex items-center justify-between">
                                    <a href="{{route('profile',$pendingFriend)}}">{{$pendingFriend->name}}</a> 
                                    <div class="space-x-2">
                                        <form action="{{route('friends.destroy',$pendingFriend)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-indigo-600">Cancel Friend Request</button>
                                        </form>
                                        
                                    </div> 
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</x-app-layout>
