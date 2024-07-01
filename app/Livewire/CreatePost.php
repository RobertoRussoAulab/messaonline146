<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    //! dichiaro i parametri
    public $title;
    public $body;

    public function save() 
    {
        $post = Post::create(
            [
                'title' => $this->title,
                'body'=> $this->body
            ]
        );
    }

    //! l' ultima funzione della mia classe
    public function render()
    {
        return view('livewire.create-post');
    }
}
