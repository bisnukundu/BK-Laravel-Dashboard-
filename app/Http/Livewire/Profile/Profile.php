<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Debugbar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $profileEditModal;
    protected $listeners = ['refresh' => '$refresh'];
    public User $user;
    public $name;
    public $password;
    public $email;
    public $profilepic;


    public function mount()
    {
        $this->user = User::findOrFail(Auth::id());
        $this->name = $this->user->name;
    }

    public function render()
    {
        return view('livewire.profile.profile');
    }

    public function profile_update()
    {
        $this->validate([
            'profilepic' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
        ]);


        $user = User::find($this->user->id);

        if (!empty($this->name)) $user->name = $this->name;
        if (!empty($this->password)) $user->password = Hash::make($this->password);


        if (!empty($this->profilepic)) {
            $img = $this->profilepic->store('images/profile', 'public');
            $user->profile_img = $img;
        }

        $user->save();
        $this->alert('success', "Profile Update Successfully");
        $this->emitSelf('refresh');
    }
}
