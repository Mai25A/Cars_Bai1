<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = session('message');
        $cars = Car::all();
        return view('car_list',compact('cars','message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roles  = [
            'model' => 'required',
            'description' => 'required|min:5',
            'produced_on' => 'required|date',
            'img' => 'required'
        ];
        
        $messages = [
            'model.required' => 'Please enter Model',
            'description.required' => 'Please enter Description',
            'description.min' => 'Please enter more than 5 characters',
            'produced_on.required' => 'Please choose a date',
            'img.required' => 'Please choose your image'
        ];
        
        if($request->validate($roles, $messages)){
            $car = new Car();
            $car->model=$request->model;
            $car->description=$request->description;
            $car->produced_on=$request->produced_on;
            $file=$request->file('img');
            $name = time().'_'.$file->getClientOriginalName();
            $destiinationPath = public_path('img');
            $file->move($destiinationPath,$name);
            $car->image=$name;
            $car->save();
            return redirect()->route('cars.index')->with('message','Them thanh cong :0');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::find($id);
        return view('car_detail',compact('car'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
