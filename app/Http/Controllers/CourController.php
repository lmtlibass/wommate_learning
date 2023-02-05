<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use App\Models\Chapitre;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CourController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Gate::denies('creator_access')){
            abort(403, 'Vous n\'êtes pas autorisé à accéder à ce service');
            return redirect()->route('/');
        }
        
        //recuperer les cours et les modules rattaché aux cours
        $cours = Cour::where('user_id', auth()->user()->id)->with('module')->paginate(9);
        
    
        return view('creator.cours.show', [
            'cours'  => $cours
        ]);
    }
      

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::all();   
        return view('creator.cours.create', compact('modules'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      
        $cour = $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'module_id'     => 'required',
        ]);
        $imageName = time() . '.' . $request->file('media')->extension();   
        
        

        $cour = new Cour([
            'media'         => $request->file('media')->storeAs('cours', $imageName),
            'title'         => $request->get('title'),
            'description'   => $request->get('description'),
            'statut'        => true,
            'user_id'       => auth()->user()->id,
            'module_id'     => $request->get('module_id'),
        ]);

        $cour->save();

        return redirect()->route('createur.chapitre.add', $cour->id)->with('success', 'Le cours a été créé avec succès');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function show(Cour $cour)
    {
        //
        // return $cour = Cour::find($cour);
        // $chapitre = new Chapitre();
        // $chapitres = $chapitre->chapitres($cour);
  

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function edit(Cour $cour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cour $cour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cour $cour)
    {
        //
    }

    //recuperer les cours créés par un utilisateur

    public function getCours()
    {
        $cours = Cour::paginate(4);
        $modules = Module::all();

        return view('cour.index', compact('cours', 'modules'));
    }
}
