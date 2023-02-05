<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use App\Models\Chapitre;
use Illuminate\Http\Request;

class ChapitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function chapitres($id)
    {


        $cour = Cour::find($id);

        // $chapitres = Chapitre::where('cour_id', '=', $cour->id);
        $chapitres = $cour->chapitres;

        return view('cour.chapitre', compact('chapitres', 'cour'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($cour)
    {
        //
        $cour = Cour::find($cour);
        return view('creator.cours.createChapitre', compact('cour'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        
        $cour = Cour::find($id);
        
       
        $request->validate([
            'title'         => 'required',
            'number'        => 'required',
            'description'   => 'required',
        ]);
      $content = time() . '.' . $request->file('content')->extension();   
    

        Chapitre::create([
            'title'         => $request->get('title'),
            'number'        => $request->get('number'),
            'description'   => $request->get('description'),
            'content'       => $request->file('content')->storeAs('chapitres', $content),
            'cour_id'       => $cour->id,
        ]);

        //move public
        $request->file('content')->move(public_path('chapitres'), $content);


        //return back
        return redirect()->route('createur.chapitre.add', $cour->id)->with('success', 'Le chapitre a été créé avec succès');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function show(Chapitre $chapitre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapitre $chapitre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapitre $chapitre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapitre $chapitre)
    {
        //
    }
}
