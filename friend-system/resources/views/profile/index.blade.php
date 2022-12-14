<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @auth

                        @if(auth()->user()->hasPendingFriendRequestFor($user))

                        <div>
                            <span>waiting for {{$user->name}} to accept your friend request.</span>

                            <form action="{{route('friends.destroy',$user)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="text-indigo-600">Cancel Friend Request</button>
                            </form>
                        </div>
                            

                        @else
                            <form action="{{ route('friends.store', $user)}}" method="post">
                                @csrf
                                <button class="text-indigo-600">Add As Friend</button>
                            </form>
                        @endif

                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
