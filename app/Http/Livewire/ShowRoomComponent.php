<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowRoomComponent extends Component
{
    public $rooms;

    public function mount($rooms)
    {
        $this->rooms = $rooms;
    }

    public function render()
    {
        return view('livewire.show-room-component');
    }
}

