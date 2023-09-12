<div class="flex justify-center w-1/4">
    <div class="w-full max-w-full text-white">
        @if(auth()->check())
        <table class="border-collapse border" style="width: 100%;">
            <thead>
            <tr>
                <th class="border px-6 py-3">Class</th>
                <th class="border px-6 py-3">Number</th>
                <th class="border px-6 py-3">Price</th>
                @if(Auth::user()->admin === 1)
                    <th class="border px-6 py-3">Action</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @else
                <table class="border-collapse border" style="width: 100%;">
                    <thead>
                    <tr>
                        <th class="border px-6 py-3">Class</th>
                        <th class="border px-6 py-3">Number</th>
                        <th class="border px-6 py-3">Price</th>
                    </tr>
                    </thead>
                    <tbody>
            @endif
            @if(auth()->check())
            @foreach($rooms as $key => $room)
                <tr style="margin-top: {{ $key === 0 ? '20px' : '0' }}">
                    <td class="border px-6 py-3">{{ $room->class }}</td>
                    <td class="border px-6 py-3">{{ $room->number }}</td>
                    <td class="border px-6 py-3">{{ $room->price }}</td>
                    @if(Auth::user()->admin === 1)
                        <td class="border px-6 py-3">
                            <form method="POST" action="{{ route('room.delete', ['id' => $room->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </td>
                    @endif
                </tr>
                @if(!$loop->last)
                    <tr>
                        <td colspan="4" class="border-b"></td>
                    </tr>
                @endif
            @endforeach
            @else
                @foreach($rooms as $key => $room)
                    <tr style="margin-top: {{ $key === 0 ? '20px' : '0' }}">
                        <td class="border px-6 py-3">{{ $room->class }}</td>
                        <td class="border px-6 py-3">{{ $room->number }}</td>
                        <td class="border px-6 py-3">{{ $room->price }}</td>
                    </tr>
                    @if(!$loop->last)
                        <tr>
                            <td colspan="4" class="border-b"></td>
                        </tr>
                    @endif
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
