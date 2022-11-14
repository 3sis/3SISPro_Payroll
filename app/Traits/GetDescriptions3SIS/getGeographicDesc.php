<?php
namespace app\Traits\GetDescriptions3SIS;
use Illuminate\Support\Facades\DB;

use App\Models\Config\Geographic\Location;
use App\Models\Config\Geographic\City;
use App\Models\Config\Geographic\Country;
use App\Models\Config\Geographic\State;

trait getGeographicDesc {
    // Location Desc
    public function getLocationDesc($id)
    {
        if (!empty($id)) {

            // We need to bring Company Id as parameter and put in where condition.

            $Location_data = Location::where('GMLMHLocationId', $id)->first();
            return $Location_data;
            // $res = [];
            // $city_data = City::where('GMCTHCityId', $id)->first();
            // $state_data = State::where('GMSMHStateId', $city_data->GMCTHStateId)->first();
            // $country_data = Country::where('GMCMHCountryId', $city_data->GMCTHCountryId)->first();
            // $res['stateId'] = $city_data['GMCTHStateId'];
            // $res['stateDesc1'] = $state_data['GMSMHDesc1'];
            // $res['countryId'] = $city_data['GMCTHCountryId'];
            // $res['countryDesc1'] = $country_data['GMCMHDesc1'];
            // return $res;
        }
    }
    // City Description
    public function getCityDesc($id)
    {
        if (!empty($id)) {
            $City_data = City::where('GMCTHCityId', $id)->first();
            return $City_data;
        }
    }
    // State Description
    public function getStateDesc($id)
    {
        if (!empty($id)) {
            $State_data = State::where('GMSMHStateId', $id)->first();
            return $State_data;
        }
    }
    // Country Description
    public function getCountryDesc($id)
    {
        if (!empty($id)) {
            $Country_data = Country::where('GMCMHCountryId', $id)->first();
            return $Country_data;
        }
    }
}
