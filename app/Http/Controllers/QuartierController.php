<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use Illuminate\Http\Request;

class QuartierController extends Controller
{
    public function index()
    {
        $quartiers = Quartier::all();
        return view('quartier.list', compact('quartiers'));
    }
    public function create()
    {
        return "Je suis la pour afficher le forumulaire de quartier";
    }

    public function store(Request $request, Quartier $quartier)
    {
    }
}
