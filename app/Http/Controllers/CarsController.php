<?php

namespace App\Http\Controllers;

use App\Models\Car;
use illuminate\support\Str;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CarsController extends Controller
{
    public function show_all_cars()
    {
        $cars = Car::all();
        return view('cars/cars', [
            'cars' => $cars,
        ]);
    }

    public function show_personal_cars()
    {
        $cars = Car::where('user_id', Auth::user()->id)->get();
        return view('cars/personal_cars', [
            'cars' => $cars,
        ]);
    }

    public function createOffer(){
        return view('cars/createOffer');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect()->route('show_personal_cars')->with('success', 'Car deleted successfully');
    }

    public function show_car_details($id)
    {
        $car = Car::find($id);

        return view('cars/car_details', [
            'car' => $car,
        ]);
    }

    public function check_license_plate(Request $request){
        $request->validate([
            'license_plate' => 'required|regex:/^[A-z0-9-]+$/'
        ]);

        $license_plate = $request->license_plate;

        if(Car::where('license_plate', $request->license_plate)->exists()) {
            return redirect();
        }

        return view('cars/createOfferStep2')->with('license_plate', $license_plate);
    }

    public function create_new_car(Request $request){
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'seats' => 'required|numeric',
            'doors' => 'required|numeric',
            'weight' => 'required|numeric',
            'production_year' => 'required|numeric',
            'color' => 'required',
            'mileage' => 'required|numeric',
            'price' => 'required|numeric',
            'license_plate' => 'required|regex:/^[A-z0-9-]+$/',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        $car = new Car;
        $car->make = $request->make;
        $car->model = $request->model;
        $car->seats = $request->seats;
        $car->doors = $request->doors;
        $car->weight = $request->weight;
        $car->production_year = $request->production_year;
        $car->color = $request->color;
        $car->mileage = $request->mileage;
        $car->price = $request->price;
        $car->license_plate = $request->license_plate;
        $car->user_id = Auth::user()->id;
        $car->image = $imageName;
        $car->save();

        return redirect()->route('home')->with('success', 'Car created successfully');
    }
}
