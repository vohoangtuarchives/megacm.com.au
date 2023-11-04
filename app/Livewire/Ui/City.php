<?php

namespace App\Livewire\Ui;

use App\Models\Customer;
use App\Repository\Cities\CityRepositoryContract;
use App\Repository\Districts\DistrictRepositoryContract;
use App\Repository\Wards\WardRepositoryContract;
use Livewire\Component;

class City extends Component
{
    protected $cityRepository;

    protected $districtRepository;

    protected $wardRepository;

    protected $selected;

    public $city;

    public $cities;

    public $district;

    public $districts;

    public $ward;

    public $wards;

    public $customer;

    public $address;

    public function __construct()
    {
        $this->cityRepository = app(CityRepositoryContract::class);
        $this->districtRepository = app(DistrictRepositoryContract::class);
        $this->wardRepository = app(WardRepositoryContract::class);

    }

    public function mount(Customer $customer = null){

        $this->cities = $this->cityRepository->all();
        $this->districts = null;
        $this->wards = null;

        if(is_numeric($customer)){
            $this->customer = $customer;
            $this->city = $customer->city;
            $this->district = $customer->district;
            $this->ward = $customer->ward;
            $this->address = $customer->address;
        }else{
            $this->city =  $this->cities->first()->id;
        }

        $this->districts = $this->districtRepository->where("city_id", "=", $this->city)->get();
        $this->wards = $this->wardRepository->where("district_id", "=", $this->ward)->get();
    }

    public function render()
    {
        return view('livewire.ui.city');
    }

    public function changeCity($city){
        $this->districts = null;
        $this->districts = $this->districtRepository->where("city_id", "=", $city)->get();
        $this->city = $city;
        $this->wards = null;
    }

    public function changeDistrict($district){
        $this->wards = null;
        $this->wards = $this->wardRepository->where("district_id", "=", $district)->get();
        $this->district = $district;
    }

    public function changeWard($ward){
        $this->ward = $ward;
    }

}
