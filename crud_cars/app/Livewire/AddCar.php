<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class AddCar extends Component
{
    public $car_name = '';
    public $brand = '';
    public $engine_capacity = '';
    public $fuel_type = '';

    public function saveCar() {
        $this->validate([
            'car_name' => 'required',
            'brand' => 'required',
            'engine_capacity' => 'required',
            'fuel_type' => 'required'
        ]);

        try {
            $car = new Car;
            $car->car_name = $this->car_name;
            $car->brand = $this->brand;
            $car->engine_capacity = $this->engine_capacity;
            $car->fuel_type = $this->fuel_type;
            $car->save();

            return $this->redirect('/cars', navigate:true);
        } catch (\Exception $e) {
            dd($e);
        }
    }
    public function render()
    {
        return view('livewire.add-car');
    }
}
