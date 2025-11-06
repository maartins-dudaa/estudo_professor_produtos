<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{

    public $search = '';
    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search. '%')->get();
        return view('livewire.user.user-index', compact('users'));
    }

    // função de delete

    public function delete($userId){
        $user = User::find($userId);
        if($user){
            $user->delete();
            session()->flash('success', 'Excluiído');
        }
    }
}
