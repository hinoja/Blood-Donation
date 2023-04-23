<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Hospital;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Stevebauman\Location\Facades\Location;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class RegisterHospital extends Component
{

    // Step
    public $step;

    public $i = 1, $servicesInput = [];

    // Account
    public $hospital_name, $email, $website, $birth_date, $urgency_number, $description;

    // AdminData
    // public $manager_name, $manager_email, $call_number, $password;

    // services
    public $services;
    // File
    public $logo, $description_file;

    use WithFileUploads, LivewireAlert;


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
    // public function submit()
    // {
    //     $action=$this->stepAction[$this->step];
    //     $this->$action();
    // }
    public function submit1()
    {
        $this->validate([
            'hospital_name' => ['required', 'max:255', 'string', 'unique:hospitals,name'],
            'birth_date' => ['required', 'date', 'before_or_equal:now'],
            'urgency_number' => ['required', 'numeric', 'min:200000'],
            'email' => ['required', 'email', 'unique:hospitals,email'],
            // 'description' => ['required', 'string'],
        ]);

        $this->step++;
    }
    public function submit2()
    {
        $this->validate([
            'logo' => ['required', 'image', 'mimes:png,jpg,ico,jpeg', 'max:1024'],
            'website' => ['nullable', 'url'],
            'description_file' => ['nullable', 'image', 'file', 'max:1024']
        ]);
        $this->step++;
    }
    public function submit3()
    {
        $this->validate([
            // 'services.0' => 'required|string|max:255',
            'services.*' => 'required|string|distinct:ignore_case|max:255'
            // 'description' => ['nullable', 'files', 'min:1024'],
        ]);
        // dd('test');
        $this->step++;
    }

    public function submit4(): void
    {
        // location
        // $ip = request()->ip(); /*Dynamic IP address */
        $ip = '129.0.76.71'; /* Static IP address */
        $location = Location::get($ip);

        // store logo
        $logoname = (Str::slug($this->hospital_name)) . '.' . $this->logo->extension();
        $this->logo->storeAs('public/hospitals/logo', $logoname);

        // sore description files
        if ($this->description_file) {
            $filename = (Str::slug($this->hospital_name)) . '.' . $this->description_file->extension();
            $this->files->storeAs('public/hospitals/description', $filename);
        } else {
            $filename = null;
        }
        $data = [
            'name' => $this->hospital_name,
            'slug' => Str::slug($this->hospital_name),
            'birth' => $this->birth_date,
            'urgenceNumber' => "+237 6" . $this->urgency_number,
            'email' => $this->email,
            'description_file' =>  $filename,
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
        $message = trans('Your Hospital has been successfully registered. It will be studied and you will be informed of its publication or not as soon as possible');
        // Alert::alert('success', trans('Your message has been successfully sent to the platform administrator. You will receive an email as soon as possible.'), 'success')->autoclose(7000);
        Alert::success('Good job', trans('Your Hospital has been successfully registered. It will be studied and you will be informed of its publication or not as soon as possible'))->autoclose(7000);
        // return redirect()->route('front.register.hospital');
        $this->redirectRoute('front.register.hospital');
    }

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
