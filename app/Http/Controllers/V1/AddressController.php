<?php
namespace App\Http\Controllers\V1;

use App\Facades\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\City\CityCollection;
use App\Http\Resources\City\CityResource;
use App\Http\Resources\District\DistrictCollection;
use App\Http\Resources\District\DistrictResource;
use App\Http\Resources\Ward\WardCollection;
use App\Http\Resources\Ward\WardResource;
use App\Repository\Cities\CityRepositoryContract;
use App\Repository\Districts\DistrictRepositoryContract;
use App\Repository\Wards\WardRepositoryContract;

/**
 *
 */
class AddressController extends Controller
{
    /**
     * @var CityRepositoryContract
     */
    protected $city;
    /**
     * @var DistrictRepositoryContract
     */
    protected $district;
    /**
     * @var WardRepositoryContract
     */
    protected $ward;

    /**
     * @param CityRepositoryContract $city
     * @param DistrictRepositoryContract $district
     * @param WardRepositoryContract $ward
     */
    public function __construct(CityRepositoryContract $city, DistrictRepositoryContract $district, WardRepositoryContract $ward)
    {
        $this->city = $city;
        $this->district = $district;
        $this->ward = $ward;
    }

    /**
     * @return CityCollection
     */
    public function cities(){
        $city = $this->city->paginate(20);
        return $city ? CityCollection::make($city) : Api::errors(404, "Not found");
    }

    /**
     * @param $id
     * @return mixed
     */
    public function city($id){
        $city = $this->city->find($id);
        return $city ? Api::success(CityResource::make($city)) : Api::errors(404, "Not found");
    }

    /**
     * @param string $id
     * @return CityCollection
     */
    public function cityDistricts(string $id)
    {
        $city = $this->city->with("districts")->find($id);
        return $city ? CityCollection::make($city->districts) : Api::errors(404, "Not found");
    }


    /**
     * @return DistrictCollection
     */
    public function districts()
    {
        $districts = $this->district->paginate(20);
        return $districts ? DistrictCollection::make($districts) : Api::errors(404, "Not found");
    }

    /**
     * @param $id
     * @return mixed
     */
    public function district($id)
    {
        $district = $this->district->find($id);
        return $district ? Api::success(DistrictResource::make($district)) : Api::errors(404, "Not found");
    }

    /**
     * @param string $id
     * @return WardCollection
     */
    public function districtWards(string $id)
    {
        $district = $this->district->with("wards")->find($id);
        return $district ? WardCollection::make($district->wards) : Api::errors(404, "Not found");
    }

    public function wards()
    {
        $wards = $this->ward->paginate(20);
        return $wards ? WardCollection::make($wards) : Api::errors(404, "Not found");
    }

    /**
     * @param $id
     * @return mixed
     */
    public function ward($id)
    {
        $ward = $this->ward->find($id);
        return $ward ? Api::success(WardResource::make($ward)) : Api::errors(404, "Not found");
    }

}
