<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DetailPage;
use App\Models\aboutus;


class HomePage extends Component
{
    public $homepage;
    public $about;
    

     public function mount()
    {
        $this->homepage = DetailPage::orderBy('id', 'asc')->get(); // ✅ load data
        $this->about = aboutus::orderBy('id', 'asc')->get();
    }   
     public function render()
    {
        return view('livewire.home-page');
    }
}
