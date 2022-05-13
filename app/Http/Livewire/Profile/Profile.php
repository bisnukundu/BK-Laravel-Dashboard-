<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    protected $listeners =['refresh' => '$refresh'];
    public $user;
    public function mount()
    {
        $this->user = User::find(Auth::id());
    }
    public function render()
    {
        return view('livewire.profile.profile');
    }
}
