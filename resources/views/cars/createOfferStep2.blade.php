@extends('layouts.app')
@section('content')
    <form action="{{ Route('create_new_car') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="new-offer-heading">
            <h1>Nieuw aanbod</h1>
        </div>
        <div class="kenteken">
            <div class="inset">
                <div class="blue"></div>
                <input type="text" name="license_plate" value="{{ $license_plate }}" required="" />
            </div>
        </div>

        <div class="car-offer-form">
            <div class="row fw-bold">
                <div class="col-12">
                    <label for="make">Merk</label>
                    <input type="text" class="form-control" name="make" id="make">
                </div>
                <div class="col-12">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" name="model" id="model">
                </div>
                <div class="col-4">
                    <label for="seats">Zitplaatsen</label>
                    <input type="number" class="form-control" name="seats" id="seats">
                </div>
                <div class="col-4">
                    <label for="doors">Aantal deuren</label>
                    <input type="number" class="form-control" name="doors" id="doors">
                </div>
                <div class="col-4">
                    <label for="weight">Massa rijklaar</label>
                    <input type="number" class="form-control" name="weight" id="weight">
                </div>
                <div class="col-6">
                    <label for="production_year">Jaar van productie</label>
                    <input type="number" class="form-control" name="production_year" id="production_year">
                </div>
                <div class="col-6">
                    <label for="color">Kleur</label>
                    <input type="text" class="form-control" name="color" id="color">
                </div>
                <div class="form-group col-12">
                    <label class="control-label" for="mileage">Kilometerafstand</label>
                    <div class="input-group">
                        <input class="form-control" id="mileage" name="mileage" type="text" />
                        <div class="input-group-addon-kg">
                            <input value="KM" class="form-control bg-white" style="max-width: 51px" name="KM/H"
                                disabled>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <label for="image">Foto</label>
                    <input type="file" class="form-control" name="image" id="image"
                        accept="image/png, image/gif, image/jpeg, image/jpg">
                </div>
                <div class="form-group col-12">
                    <label class="control-label" for="price">Vraagprijs</label>
                    <div class="input-group">
                        <div class="input-group-addon-euro">
                            <input value="€" class="form-control bg-white" style="max-width: 38px" name="euro"
                                disabled>
                        </div>
                        <input class="form-control" id="price" name="price" type="text" />
                    </div>
                </div>
                <div class="form-group col-12">
                    <input type="submit" class="btn btn-primary form-control" style="margin-top: 24px;" value="Aanbod afronden">
                </div>
            </div>
        </div>
    </form>
@endsection
