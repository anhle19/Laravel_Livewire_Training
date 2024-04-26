<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Laravel 11.x + Livewire 3.x CRUD</h2>
                </div>
                <div class="col">
                    <a href="/cars" wire:navigate class="btn btn-primary btn-sm float-end">Car List</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form wire:submit="update" >
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Car name</label>
                    <input type="text" wire:model="car_name" class="form-control" id="exampleFormControlInput1">
                    @error('car_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Brand</label>
                    <input type="text" wire:model="brand"  class="form-control" id="exampleFormControlInput1">
                    @error('brand')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Engine Capacity</label>
                    <input type="number" min="1" wire:model="engine_capacity" name="engine_capacity" class="form-control" id="exampleFormControlInput1">
                    @error('engine_capacity')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fuel Type</label>
                    <select wire:model="fuel_type" name="fuel_type" class="form-control" id="exampleFormControlInput1">
                        <option value="">Select Fuel Type</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Electricity">Electricity</option>
                    </select>
                    @error('fuel_type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
