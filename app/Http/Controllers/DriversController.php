<?php

namespace App\Http\Controllers;

use App\Model\Car;
use App\Model\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Http\Controllers\Controller;

class DriversController extends Controller
{
    public $successStatus = 200;

    public function index(){
        $drivers = Driver::orderBy('id', 'asc')->get();
        return view('drivers/index', compact('drivers'));
    }

    public function add_drivers(Request $request){

        $driver = new Driver;
        $driver->first_name = $request->driverFirstName;
        $driver->last_name = $request->driverLastName;
        $driver->drive_stick_shift = $request->driverStickShift;
        $driver->car_id = $request->carId;

        $driver->save();

        if ($driver) {
            return redirect('/drivers')->with('success','Successfully Add Driver!');
        }else{
            return redirect('/drivers')->with('error','Something Went Wrong!');
        }
    }

    public function create(){
        $cars = Car::orderBy('id', 'asc')->get();
        return view('drivers/create', compact('cars'));
    }

    public function edit($id)
    {
        $data = Driver::findOrFail($id);
        $cars = Car::orderBy('id', 'asc')->get();
        return view('drivers/edit', compact('data', 'cars'));
    }

    public function detail_driver($id)
    {
        $data = Driver::findOrFail($id);
        return view('drivers/detail', compact('data'));
    }

    public function edit_driver(Request $request){


        $driver = Driver::where('id', $request->driverId)->update([
            'first_name' => $request->driverFirstName,
            'last_name' => $request->driverLastName,
            'car_id' => $request->carId,
            'drive_stick_shift' => $request->driverStickShift,
        ]);

        if ($driver) {
            return redirect('/drivers')->with('success','Successfully Update Driver!');
        }else{
            return redirect('/drivers')->with('error','Something Went Wrong!');
        }
    }

    public function delete_driver(Request $request){
     

        $driver = Driver::where('id', $request->id)->delete();
        if ($driver) {
            return 1;
        } else {
            return 0;
        }
    }

    public function update_stick_shift(Request $request){
        $created = Driver::where('id', $request->id)->first();
        if ($created->drive_stick_shift == 0) {
            Driver::where('id', $request->id)->update(['drive_stick_shift' => 1]);
        } else {
           Driver::where('id', $request->id)->update(['drive_stick_shift' => 0]);
        }
    }
}
