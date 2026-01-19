<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DetailPage;
use App\Models\aboutus;
use App\Models\education;
use App\Models\experience;
use App\Models\service;
use App\Models\skills;
use App\Models\project;
use App\Models\blogs;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\contacts;
use App\Models\contactsimage;




class HomePage extends Component
{
    public $homepage;
    public $about;
    public $education;
    public $experience;
    public $service;
    public $skills;
    public $project;
    public $blogs;

    public $name='';
    public $email='';
    public $subject='';
    public $message='';
    public $contacts;
    public $contactimage;
    

     public function mount()
    {
        $this->homepage = DetailPage::orderBy('id', 'asc')->get(); // ✅ load data
        $this->about = aboutus::orderBy('id', 'asc')->get();
        $this->education=education::orderBy('id', 'asc')->get();
        $this->experience=experience::orderBy('id', 'asc')->get();
        $this->service=service::orderBy('id', 'asc')->get();
        $this->skills=skills::orderBy('id', 'asc')->get();
        $this->project=project::orderBy('id', 'asc')->get();
        $this->blogs=blogs::orderBy('id', 'asc')->get();
        $this->contacts=contacts::orderBy('id', 'asc')->get();
        $this->contactimage=contactsimage::orderBy('id', 'asc')->get();
    }

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
    ];

    public function submit()
{
    $this->validate();

    $mailData = [
        'subjects' => 'You have a new contact message',
        'name'     => $this->name,
        'email'    => $this->email,
        'subject'  => $this->subject,
        'message'  => $this->message,
    ];

    Mail::to('santoshbhattarai287@gmail.com')
        ->send(new ContactEmail($mailData));

    session()->flash('success', 'Your message has been sent successfully!');

    return redirect()->to('/');
}


     public function render()
    {
        return view('livewire.home-page');
    }
}
