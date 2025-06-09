@extends('layouts.app')
@section('content')
    <h1>Mijn auto's</h1>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
            <tr>
                <td><img src="{{ asset('images/' . ($car->image ?: 'no-image.jpg')) }}" alt="Car Image" style="width: 100px; height: 100px;"></td>
                <td>{{ $car->license_plate }}</td>
                <td>€{{ $car->price }}</td>
                <td>{{ $car->make }} {{ $car->model }} {{ $car->production_year }}</td>
                <td>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">X</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('print_car', $car->id) }}" class="btn btn-primary">Print</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
