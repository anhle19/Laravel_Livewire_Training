<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Laravel 11.x + Livewire 3.x CRUD</h2>
                </div>
                <div class="col">
                    <a href="/cars/add" wire:navigate class="btn btn-success btn-sm float-end">Add New</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Car Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Engine Capacity</th>
                        <th scope="col">Fuel Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_cars as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->car_name }}</td>
                            <td>{{ $item->brand }}</td>
                            <td>{{ $item->engine_capacity }}</td>
                            <td>{{ $item->fuel_type }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="" wire:navigate wire:click="delete({{ $item->id }})"
                                        wire:confirm="Are you sure you want to delete?" type="button"
                                        wire:loading.remove
                                        wire:target="delete({{ $item->id }})"
                                        class="btn btn-danger">Delete</a>
                                    <a href="/cars/edit/{{ $item->id }}" wire:navigate type="button" class="btn btn-primary">Edit</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
