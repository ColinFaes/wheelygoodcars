@extends('layouts.app')
@section('content')
    <form action="{{ Route('check_license_plate') }}" method="post">
        @csrf
        <div class="kenteken-container">
            <div class="kenteken">
                <div class="inset">
                    <div class="blue"></div>
                    <div class="license_plate_group"></div>
                    <input type="text" name="license_plate" placeholder="J-700-SX" required=""/>
                </div>
                <input type="submit" class="btn btn-primary" style="margin-top: 10px"/>
            </div>
        </div>
    </form>
@endsection
