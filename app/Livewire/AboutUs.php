<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AboutUs;

class About extends Component
{
    public $about;
    public function mount()
    {
        $this->about = AboutUs::orderBy('id', 'asc')->get(); // ✅ load data
    }  
    public function render()
    {
        return view('livewire.about-us')
        ->layout('components.layouts.app');
    }
}
