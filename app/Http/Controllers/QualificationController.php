<?php

namespace App\Http\Controllers;

use App\Models\Qualification;

use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function create() {

        return view('Formulario');
       
}
public function store(Request $request) {
  
    $request->validate([
        'name' => 'required|string',
        'note1' => 'required|numeric',
        'note2' => 'required|numeric',
        'note3' => 'required|numeric',
    ]);

    $promedio = ($request->note1 + $request->note2 + $request->note3) / 3;

    $pro = new Qualification();
    $pro->name = $request->name;  
    $pro->note1 = $request->note1;
    $pro->note2 = $request->note2;
    $pro->note3 = $request->note3;
    $pro->average = $promedio; 

    $pro->save();

    return response()->json([
        'pro' => $pro,
        'promedio' => $promedio
    ]);
}


}


