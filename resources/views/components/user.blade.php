<div class="bg-white w-full flex items-center p-2 rounded-xl shadow border m-3">
    <div class="flex items-center space-x-4">
        <x-profile-block :letter="$user->name[0]"/>
    </div>
    <div class="flex-grow p-3">
        <div class="font-semibold text-gray-700">
            {{ $user->name }}
        </div>
        <div class="text-sm text-gray-500">
            {{ $user->email }}
        </div>
        <div class="text-sm text-gray-500">
            Total Post : {{ $user->post()->count() }}
        </div>
    </div> 
</div>
