<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        return view('region.list', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('region.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $region = new Region();
        $region->nom = $request->nom;
        $region->supperfice = $request->supperfice;
        $region->save();
        if ($region) {
            return redirect('regions')->with(['status' => 'Region ajouter avec success']);
        } else {
            return redirect('regions/create')->with(['status' => "echc d'ajout de la Region"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $region = Region::find($id);
        return $region;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $region = Region::find($id);
        return view('region.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        // $region = Region::find($id);
        $region->nom = $request->nom;
        $region->supperfice = $request->supperfice;
        $region->save();
        $request->validate([
            'nom' => 'required|max:100',
            'supperfice' => 'required|max:10'
        ]);
        // $region->update($request->all());
        $region->update();
        return redirect('regions')->with(["status" => "Region modifier avec succees"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        $region->delete();
        return redirect('regions')->with(['status' => "region supprimer avec success"]);
    }
}
