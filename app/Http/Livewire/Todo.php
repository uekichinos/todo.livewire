<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $task;
    public $tasks = [];

    public function submit() 
    {
        if(isset($this->task) && !empty($this->task)) {
            $this->tasks[] = ['title' => $this->task, 'time' => date('Y-m-d H:i:s')];
        }
        $this->task = '';
    }

    public function done($id)
    {
        unset($this->tasks[$id]);
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
