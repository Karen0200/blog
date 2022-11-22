<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cars = Car::all();
        echo "<ul>";
        foreach ($cars as $car){
            echo "<li>";
                echo "Brand:" .  $car['Brand']; echo '<br>';
                echo "Model:" .  $car['Model']; echo '<br>';
                echo "Year:" .  $car['Year']; echo '<br>';
                echo "Mileage:" .  $car['Mileage']; echo '<br>';
                echo "Color:" .  $car['Color']; echo '<br>';
                echo "Prise:" .  $car['Prise']; echo '<br>';
            echo "</li>";

            echo '<br>';
            echo '<br>';
        }
        echo "</ul>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
