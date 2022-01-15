<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class ListUsers extends Component
{
    public function addNew()
    {
        dd('here');
    }
    public function render()
    {
        return view('livewire.admin.users.list-users');
    }
}
