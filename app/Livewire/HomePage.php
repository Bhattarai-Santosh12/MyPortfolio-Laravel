<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DetailPage;
use App\Models\aboutus;
use App\Models\education;
use App\Models\experience;
use App\Models\service;


class HomePage extends Component
{
    public $homepage;
    public $about;
    public $education;
    public $experience;
    public $service;
    

     public function mount()
    {
        $this->homepage = DetailPage::orderBy('id', 'asc')->get(); // ✅ load data
        $this->about = aboutus::orderBy('id', 'asc')->get();
        $this->education=education::orderBy('id', 'asc')->get();
        $this->experience=experience::orderBy('id', 'asc')->get();
        $this->service=service::orderBy('id', 'asc')->get();
    }   
     public function render()
    {
        return view('livewire.home-page');
    }
}
