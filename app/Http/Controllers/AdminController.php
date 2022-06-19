<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Cars;

class AdminController extends Controller
{
    public function submit(Request $req) {
        $validation = $req->validate([
            'Company' => 'required|max:40',
            'carName' => 'required|max:40',
            'carClass' => 'required|max:40',
            'foto' => 'required'
        ]);
        $req->foto->storeAs('public/uploads', $req->foto->getClientOriginalName());

        $cars = new Cars();
        $cars->Company = $req->input('Company');
        $cars->carName = $req->input('carName');
        $cars->carClass = $req->input('carClass');
    
        if($req->hasfile('foto')) {
            $file = $req->file('foto');
            $filename = $req->foto->getClientOriginalName();
            $cars->foto = $filename;
        }
        else {
            return $req;
        }

        $cars->save();
    
        return redirect()->route('admin')->with('success', 'Машину було додано');

    }
    public function allData() {
        $cars = new Cars;
        $allCars = Cars::all();
        // return view('messages', ['data' => $cars->orderBy('id', 'asc')->get()]);
        return view('messages', ['data' => $allCars]);
        // return view('messages', ['data' => Cars::all()]);
    }

    public function searchData(Request $req) {
        $ser = $req->input('search');
        $cars = new Cars;
        return view('messages', ['data' => $cars->where('carClass', '=', $ser)->orWhere('Company', '=', $ser)->orWhere('carName', '=', $ser)->get()]);
    }

}
