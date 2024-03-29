<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $model;

    protected $listeners = ['refresh'=>'$refresh'];

    public $newCommentState = ['body' => ''];

    protected $validationAttributes = ['newCommentState.body' => 'comment'];

    public function postComment()
    {
        $this->validate([
            'newCommentState.body' => 'required'
        ]);

        $comment = $this->model->comments()->make($this->newCommentState);
        $comment->user()->associate(auth()->user());

        $comment->save();

        $this->newCommentState = ['body' => ''];
        
    }

    public function render()
    {
        $comments = $this->model->comments()->latest()->get();
        return view('livewire.comments',[
            'comments' => $comments
        ]);
    }
}
