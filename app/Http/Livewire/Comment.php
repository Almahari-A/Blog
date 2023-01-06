<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Comment extends Component
{
    use AuthorizesRequests;

    public $comment;

    public $isEditing = false;

    public function updatedIsEditing($isEditing)
    {
        if (!$isEditing) {return;}

        $this->editState = [
            'body' => $this->comment->body
        ];
    }

    public $editState = [
        'body' => ''
    ];

    public function editComment()
    {
        $this->authorize('update', $this->comment);

        $this->comment->update($this->editState);

        $this->isEditing = false;
    }

    public function deleteComment()
    {
        $this->authorize('update', $this->comment);
        
        $this->comment->delete();

        $this->emit('refresh');
    }
    
    public function render()
    {
        return view('livewire.comment');
    }
}
