@extends('layouts.app')
@section('content')
    <div class="card mb-3" style="max-width: 1300px; margin-top: 5%">
        <div class="row g-0">
            <div class="col-md-6 card-image d-flex align-items-center justify-content-center"">
                <img src="{{ asset('images/' . ($car->image ?: 'no-image.jpg')) }}" alt="Car Image" style="width: 400px;">
            </div>
            <div class="col-md-6">
                <div class="card-body d-flex justify-content-center flex-column">
                    <div class="kenteken license_plate_in_card d-flex flex-column align-items-center">
                        <div class="inset">
                            <div class="blue"></div>
                            <input type="text" name="license_plate" disabled="" value="{{ $car->license_plate }}"
                                required="" />
                        </div>

                    </div>
                    <p class="card-text"><span class="fw-bold">Prijs: </span>€{{ $car->price }}</p>
                    <p class="card-text"><span class="fw-bold">Kilometerstand: </span>{{ $car->mileage }}km</p>
                    <p class="card-text"><span class="fw-bold">Bouwjaar: </span>{{ $car->production_year }}</p>
                    <p class="card-text"><span class="fw-bold">Kleur: </span>{{ $car->color }}</p>
                    <p class="card-text"><span class="fw-bold">Deuren: </span>{{ $car->doors }}</p>
                    <p class="card-text"><span class="fw-bold">Zitplaatsen: </span>{{ $car->seats }}</p>
                    <p class="card-text"><span class="fw-bold">Gewicht: </span>{{ $car->weight }}kg</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home_button" style="max-width: 200px;">
        <a href="{{ Route('show_all_cars') }}" class="btn btn-primary">Terug</a>
    </div>
@endsection
