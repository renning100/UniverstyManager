<?php

namespace App\Http\Livewire\School\Info;

use App\Models\General\Cities;
use App\Models\General\Countries;
use Livewire\Component;

class LocationInfo extends Component
{
    public $school;
    public $countries;
    public $cities;
    public $country_id;
    public $city_id;
    public $address1;

    public function mount()
    {
        $this->setData();
        $this->countries = Countries::orderBy('country_name')->get(['id', 'country_name', 'translated_name']);
        $this->loadCities();
    }

    public function render()
    {
        return view('livewire.school.info.location-info');
    }

    public function setData()
    {
        $school = \Auth::user()->selected_school;
        $school->refresh();
        $this->country_id = $school->country_id;
        $this->city_id = $school->city_id;
        $this->address1 = $school->address1;
    }

    public function loadCities()
    {
        $this->cities = [];
        if (empty($this->country_id)) return;
        $this->cities = Cities::whereCountryId($this->country_id)->orderBy('city_name')->get(['id', 'city_name', 'translated_name']);
    }

    protected function rules()
    {
        return [
            'country_id' => ['required'],
            'city_id' => ['required'],
            'address1' => ['required'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();
        $user = \Auth::user();
        $user->selected_school->update($validatedData);
        $this->setData();
        session()->flash('status', 'School Information Updated!');
    }
}
