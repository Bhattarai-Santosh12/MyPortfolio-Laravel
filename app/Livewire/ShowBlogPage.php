<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blogs;

class ShowBlogPage extends Component
{
    public $blog;
    public $blogId;

    public function mount($id)
    {
        $this->blogId = $id;
        $this->blog = Blogs::findOrFail($this->blogId); // Load the blog data based on the provided ID
    }

    public function render()
    {
        return view('livewire.show-blog-page');
    }
}