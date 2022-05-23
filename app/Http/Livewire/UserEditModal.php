<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class UserEditModal extends ModalComponent
{
    public $user_id;
    protected $listeners = ['deleteUser'];
    public function mount($user)
    {
        $this->user_id = $user;
    }
    public function render()
    {
        return view('livewire.user-edit-modal');
    }

    public function deleteUser()
    {
        dd("Delete");
    }
}
