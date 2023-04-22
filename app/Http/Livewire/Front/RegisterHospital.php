<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Hospital;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Stevebauman\Location\Facades\Location;

class RegisterHospital extends Component
{

    // Step
    public $step;

    public $i = 1, $servicesInput = [];

    // Account
    public $hospital_name, $email, $birth_date, $urgency_number, $description;

    // AdminData
    // public $manager_name, $manager_email, $call_number, $password;

    // File
    public $logo, $description_file;


    // Step Action
    private $stepAction = [
        'submit1',
        'submit2',
        'submit3',
    ];

    // Services
    // public $service.0,$service.*;
    public function mount()
    {
        $this->step = 0;
    }

    public function previous(): void
    {
        $this->step--;
    }
    // submit
    public function submit()
    {
        $action=$this->stepAction[$this->step];
        $this->$action();
    }
    public function submit1()
    {
        $data = $this->validate([
            'hospital_name' => ['required', 'max:255', 'string', 'unique:hospitals,name'],
            'birth_date' => ['required', 'date', 'before_or_equal:now'],
            'urgency_number' => ['required', 'numeric', 'min:200000'],
            'email' => ['required', 'email', 'unique:hospitals,email'],
            'description' => ['required', 'string'],
        ]);
        $this->step++;
    }
    public function submit2()
    {
        $this->validate([
            'logo' => ['required', 'image', 'mimes:png,jpg,ico,jpeg', 'max:1024'],
            'website' => ['nullable', 'url'],
            'description_file' => ['required', 'image', 'file', 'max:1024']
        ]);
        $this->step++;
    }
    public function submit3()
    {
        $this->validate([
            'services.0' => ['required', 'string', 'max:255'],
            'services.*' => ['nullable', 'string', 'distinct'],
            // 'description' => ['nullable', 'files', 'min:1024'],
        ]);
        $this->step++;
        // location
        $ip = request()->ip(); /*Dynamic IP address */
        $ip = '129.0.76.71'; /* Static IP address */
        $location = Location::get($ip);

        // store logo
        $logoname = (Str::slug($this->hospital_name)) . '.' . $this->image->extension();
        $this->logo->storeAs('public/hospitals/logo', $logoname);

        // sore description files
        $filename = (Str::slug($this->hospital_name)) . '.' . $this->image->extension();
        $this->files->storeAs('public/hospitals/description', $filename);

        $data = [
            'name' => $this->hospital_name,
            'slug' => Str::slug($this->hospital_name),
            'birth' => $this->birth_date,
            'urgencyNumber' => $this->urgency_number,
            'email' => $this->email,
            'description_file' =>  $this->description_file ? $filename : null,
            'logo' =>  $logoname,
            'siteInternet' => $this->website ? $this->website : null,
            // 'description' => $this->description ? $this->website : null,
            'longitude' => $location->longitude,
            'latitude' => $location->latitude,
            'town' => $location->cityName,
            'region' => $location->regionName,
            'country' => $location->countryName,
        ];

        $hospital = Hospital::create($data);

        if ($this->services) {
            foreach ($this->services as $service) {
                $hospital->services()->create(['name' => $service]);
            }
        }

        Alert::alert('success', trans('Your Hospital has been successfully registered. It will be studied and you will be informed of its publication or not as soon as possible'), 'success')->autoclose(8000);
    }

    // public function next(): void
    // {
    //     $this->step++;
    // }

    public function add($i): void
    {
        $this->i = ++$i;
        array_push($this->servicesInput, $i);

        $this->resetErrorBag();
    }

    public function remove($i): void
    {
        unset($this->servicesInput[$i]);
    }

    public function render()
    {
        // location
        $ip = request()->ip(); /*Dynamic IP address */
        $ip = '129.0.76.71'; /* Static IP address */
        $location = Location::get($ip);
        //   $this->location=$location;
        //   dd($location);
        return view('livewire.front.register-hospital', ['location' => $location]);
    }
}
