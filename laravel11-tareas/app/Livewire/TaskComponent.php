<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskComponent extends Component
{
    public $user;
    public $tasks = [];
    public $modal = false;
    public function render()
    {
        return view('livewire.task-component');
    }
    public function mount(){
        $this-> user= Auth::user()->name;
        $this-> tasks=Auth::user()->tasks;
    }
    public function openCreateModal(){
        $this->modal = true;
    }
}
