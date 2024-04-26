<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class Carlist extends Component
{
    public $all_cars;

    // Gán danh sách các xe trong quá trình mount
    public function mount() {
        $this->all_cars = Car::all();
    }

    public function delete($id) {
        try {
            Car::find($id)->delete();

            return $this->redirect('/cars', navigate:true);
        } catch (\Exception $e) {
            dd($e);
        }
    }
    public function render()
    {
        return view('livewire.carlist');
    }
}
