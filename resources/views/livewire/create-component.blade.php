<form method="post" action="{{ route('room.store') }}">
    @csrf
    @method('post')
    <div>
        <input type="text" name="class" placeholder="Class" class="text-blue-500 placeholder-blue-500" />
    </div>
    <div>
        <input type="number" name="number" placeholder="Number of the room" class="text-green-500 placeholder-green-500" />
    </div>
    <div>
        <input type="number" name="price" placeholder="Price" class="text-red-500 placeholder-red-500" />
    </div>
    <div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Create</button>
    </div>
</form>
