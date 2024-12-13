<?php

namespace App\Livewire;
use App\Models\Task;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskComponent extends Component
{
    public $user;
    public $tasks = [];
    public $modal = false;
    public $title;
    public $id;
    public $editingTask = null;
    public $description;
    public function render()
    {
        return view('livewire.task-component');
    }
    public function mount(){
        $this-> user= Auth::user()->name;
        $this-> tasks=Auth::user()->tasks;
    }
    public function getTask(){
        $this->tasks = Auth::user()->tasks;
    }

    public function clearFields(){
        $this->title = '';
        $this->description = '';
        $this->id='';
        $this->editingTask =null;
    }

    public function openCreateModal(Task $task = null){
        if ($task) {
            $this->editingTask =$task;
            $this->title = $task->title;
            $this->description = $task->description;
            $this->id=$task->id;
        }else{
            $this->clearFields();

        }
        $this->modal = true;
    }
    public function deleteTask(Task $task){
        $task->delete();
        $this->clearFields();
        $this->closeCreateModal();
        $this->getTask();
        
    }

    public function closeCreateModal(){
        $this->modal = false;
    }

    public function createTask(){
        Task::UpdateOrCreate(
            ['id'=> $this->editingTask->id],
            [
            
                'user_id' => Auth::id(),
                'title' => $this->title,
                'description' => $this->description
            ]);
        $this->clearFields();
        $this->closeCreateModal();
        $this->getTask();
    }
}
