<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use Barryvdh\DomPDF\Facade\PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generatePDF($id)
    {
        $car = Car::find($id);
        $pdf = PDF::loadView('cars.pdf', compact('car'));
        return $pdf->download('car_' . $id . '.pdf');
    }
}
