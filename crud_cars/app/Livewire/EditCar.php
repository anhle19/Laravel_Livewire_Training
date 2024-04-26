<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class EditCar extends Component
{
    public $car_id;
    public Car $car_data;
    public $car_name = '';
    public $brand = '';
    public $engine_capacity = '';
    public $fuel_type = '';

    public function mount($id) {
        $this->car_id = $id;
        $this->car_data = Car::find($id);
        $this->car_name = $this->car_data->car_name;
        $this->brand = $this->car_data->brand;
        $this->engine_capacity = $this->car_data->engine_capacity;
        $this->fuel_type = $this->car_data->fuel_type;
    }

    public function update() {
        try {
            $this->validate([
                'car_name' => 'required',
                'brand' => 'required',
                'engine_capacity' => 'required',
                'fuel_type' => 'required'
            ]);

            $car = Car::find($this->car_id);
            $car->car_name = $this->car_name;
            $car->brand = $this->brand;
            $car->engine_capacity = $this->engine_capacity;
            $car->fuel_type = $this->fuel_type;
            $car->update();

            return $this->redirect('/cars', navigate:true);
        } catch (\Exception $e) {
            dd($e);
        }
    }
    public function render()
    {
        return view('livewire.edit-car');
    }
}
