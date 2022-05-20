<?php

namespace App\Http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use WireUi\Traits\Actions;

class Test extends Component
{
    public $myModa;
    use LivewireAlert;
    use Actions;
    public function render()
    {
        return view('livewire.test');
    }
    public function test()
    {
        $this->notification()->confirm([
            'title'       => 'Are you Sure?',
            'description' => 'Save the information?',
            'acceptLabel' => 'Yes, save it',
            'method'      => 'save',
            'params'      => 141,
        ]);
    }
    public function save($t)
    {
        dd($t);
    }
}
