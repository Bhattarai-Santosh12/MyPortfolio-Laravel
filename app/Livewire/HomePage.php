<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DetailPage;
use App\Models\AboutUs;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Skills;
use App\Models\Project;
use App\Models\Blogs;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contacts;
use App\Models\ContactsImage;




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
        $this->about = AboutUs::orderBy('id', 'asc')->get();
        $this->education=Education::orderBy('id', 'asc')->get();
        $this->experience=Experience::orderBy('id', 'asc')->get();
        $this->service=Service::orderBy('id', 'asc')->get();
        $this->skills=Skills::orderBy('id', 'asc')->get();
        $this->project=Project::orderBy('id', 'asc')->get();
        $this->blogs=Blogs::orderBy('id', 'asc')->get();
        $this->contacts=Contacts::orderBy('id', 'asc')->get();
        $this->contactimage=ContactsImage::orderBy('id', 'asc')->get();
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
