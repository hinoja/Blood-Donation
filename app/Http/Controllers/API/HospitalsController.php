<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            $Hospitals = Hospital::where('is_active', true)
                ->with('services')
                ->latest()
                ->get();
            $formattedHospitals = [];
            foreach ($Hospitals as $Hospital) {
                // get all services foreeach Hospitals
                $servicesHospitals = [];
                $services = $Hospital->services;
                foreach ($services as $service) {
                    $serviceHospital = [
                        'name' => $service->name
                    ];
                    array_push($servicesHospitals, $serviceHospital);
                }

                $formattedHospital = [

                    'id' => $Hospital->id,
                    'title' => $Hospital->name,
                    'slug' => $Hospital->slug,
                    'logo' => env('APP_URL') . '/storage/hospitals/' . $Hospital->logo,
                    'longitude' => $Hospital->longitude,
                    'latitude' => $Hospital->latitude,
                    'region' => $Hospital->region,
                    'country' => $Hospital->country,
                    'town' => $Hospital->town,
                    'email' => $Hospital->email,
                    // 'services' => $Hospital->services,
                    'services' => $servicesHospitals,
                    'birth' => $Hospital->FormatDate($Hospital->birth),
                ];
                array_push($formattedHospitals, $formattedHospital);
            }

            return response()->json([
                'status' => 'true',
                'hospitals' => $formattedHospitals

            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Staus' => 'false',
                'message' => $e->getMessage(),
            ]);
        }
    }
}
