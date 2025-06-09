<div>
    <input wire:model.live="search" type="text" placeholder="Search cars...">

    <table class="table">
        <!-- table headers... -->
        <thead>
            <tr>
                <th></th>
                <th>License Plate</th>
                <th>Price</th>
                <th>Make</th>
                <th>Model</th>
                <th>Production Year</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td><a href="{{ Route('show_car_details', $car->id) }}"><img src="{{ asset('images/' . ($car->image ?: 'no-image.jpg')) }}" alt="Car Image" style="width: 100px; height: 100px;"></a></td>
                    <td>{{ $car->license_plate }}</td>
                    <td>€{{ $car->price }}</td>
                    <td>{{ $car->make }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->production_year }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
