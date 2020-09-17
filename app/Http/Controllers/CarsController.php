<?php

namespace App\Http\Controllers;

use App\Model\Car;
use App\Model\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{
    public $successStatus = 200;

    public function index(){
        $cuttings = Car::orderBy('id', 'asc')->get();
        return view('cars/index', compact('cuttings'));
    }

    public function add_cars(Request $request){



        $car = new Car;
        $car->make = $request->carMake;
        $car->model = $request->carModel;
        $car->year = $request->carYear;
        $car->plate = $request->carPlate;
        $car->state = $request->carState;
        $car->color = $request->carColor;
        $car->mileage = $request->carMileage;
        $car->manual_auto = $request->carManualAuto;

        $car->save();

        if ($car) {
            return redirect('/cars')->with('success','Successfully Add Car!');
        }else{
            return redirect('/cars')->with('error','Something Went Wrong!');
        }
    }

    public function create(){
        return view('cars/create');
    }

    public function edit($id)
    {
        $data = Car::findOrFail($id);
        return view('cars/edit', compact('data'));
    }

    public function detail_car($id)
    {
        $data = Car::findOrFail($id);
        $drivers = Driver::where('car_id', $id)->get();
        return view('cars/detail', compact('data', 'drivers'));
    }

    public function edit_car(Request $request){


        $car = Car::where('id', $request->carId)->update([
            'make' => $request->carMake,
            'model' => $request->carModel,
            'year' => $request->carYear,
            'plate' => $request->carPlate,
            'state' => $request->carState,
            'color' => $request->carColor,
            'mileage' => $request->carMileage,
            'manual_auto' => $request->carManualAuto,
        ]);

        if ($car) {
            return redirect('/cars')->with('success','Successfully Update Car!');
        }else{
            return redirect('/cars')->with('error','Something Went Wrong!');
        }
    }

    public function delete_car(Request $request){
        $car = Car::where('id', $request->id)->delete();
        if ($car) {
            return 1;
        } else {
            return 0;
        }
    }

    public function update_manual_auto(Request $request){
        $created = Car::where('id', $request->id)->first();
        if ($created->manual_auto == 0) {
            Car::where('id', $request->id)->update(['manual_auto' => 1]);
        } else {
            Car::where('id', $request->id)->update(['manual_auto' => 0]);
        }
    }

}
