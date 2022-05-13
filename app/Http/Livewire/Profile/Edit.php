<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{
    use WithFileUploads;
    use LivewireAlert;
    public $name;
    public $password;
    public $email;
    public $profilepic;
    public function mount($user)
    {
        $this->name = $user["name"];
        $this->email = $user["email"];
    }


    public function render()
    {
        return view('livewire.profile.edit');
    }
    public function updatedProfilepic()
    {
        $this->validate([
            'profilepic' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // 10MB Max
        ]);
    }

    public function update_profile()
    {
        $user = User::find(Auth::id());
        if (!empty($this->name)) $user->name = $this->name;
        if (!empty($this->password)) $user->password = Hash::make($this->password);


        if (!empty($this->profilepic)) {
            $img = $this->profilepic->store('images/profile', 'public');
            $user->profile_img = $img;
        }

        $user->save();
        $this->alert('success', "Profile Update Successfully");
        $this->closeModalWithEvents([
            Profile::getName() => 'refresh'
        ]);
    }
}
