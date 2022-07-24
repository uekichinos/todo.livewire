<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo as Todo_Model;

class Todo extends Component
{
    public $tasks = [];
    public $title;

    public function save() 
    {
        $todo_model = new Todo_Model();
        $todo_model->title = $this->title;
        $todo_model->save();

        $this->title = '';
    }

    public function delete($id)
    {
        $todo_model = Todo_Model::find($id);
        $todo_model->delete();
    }

    public function render()
    {
        $this->tasks = Todo_Model::orderBy('created_at', 'desc')->get();;
        return view('livewire.todo');
    }
}
