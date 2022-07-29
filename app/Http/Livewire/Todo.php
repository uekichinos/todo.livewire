<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo as Todo_Model;
use Illuminate\Support\Facades\Auth;

class Todo extends Component
{
    public $tasks = [];
    public $title;
    protected $rules = [
        'title' => 'required|min:6',
    ];

    public function save() 
    {
        $this->validate();

        Todo_Model::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
        ]);

        $this->title = '';
    }

    public function delete($id)
    {
        $todo_model = Todo_Model::where('id', $id)->where('user_id', Auth::id());
        $todo_model->delete();
    }

    public function render()
    {
        $this->tasks = Todo_Model::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('livewire.todo');
    }
}
