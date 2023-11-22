<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $search;

    public function render()
    {

        $post = Post::where('title', 'like', '%' . $this->search . '%')
        ->orwhere('content', 'like', '%' . $this->search . '%')
        ->get();

        return view('livewire.show-post', compact('post'));
    }
}
