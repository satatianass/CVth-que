<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cv as ModelsCv;
use App\Http\Requests\cvRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UpladedFile;
use APP\Models\Experience;

class CvController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // lister les cvs
    public function index(){

        // $listcv = ModelsCv::all();
        // $listcv = ModelsCv::where('user_id', Auth::user()->id)->get();
        if(Auth::user()->is_admin){
            $listcv = ModelsCv::all();
        }else{
            $listcv = Auth::user()->cvs;
        }
        return view('cv.index', ['cvs' => $listcv]);

    }

    // Affiche le formulaire de creation de cv
    public function create(){
        return view('cv.create');
    }

    // Enregister un cv
    public function store(cvRequest  $request){

        $cv = new ModelsCv();
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->user_id = Auth::user()->id;
        if($request->hasFile('photo')){
            $cv->photo = $request->photo->store('images');
        }
        $cv->save();
        session()->flash('success', 'le cv à été bien enregistré !!');
        return redirect('cvs');

    }

    // permer de récupérer un cv puis de le mettre dans un formulaire
    public function edit($id){

        $cv = ModelsCv::find($id);
        $this->authorize('update', $cv);
        return view('cv.edit', [ 'cv' => $cv]);

    }

    // permer de modifier un cv
    public function update(cvRequest $request,$id){

        $cv = ModelsCv::find($id);
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        if($request->hasFile('photo')){
            $cv->photo = $request->photo->store('images');
        }
        $cv->save();
        return redirect('cvs');

    }

    // permet de supprimer un cv
    public function destroy(Request $request, $id){

        $cv = ModelsCv::find($id);
        $this->authorize('delete', $cv);
        $cv->delete();
        return redirect('cvs');

    }
    public function show($id){
        return view('cv.show', ['id' => $id]);
    }

    public function getexperiences(){

        $experiences = Experience::all();
        return $experiences;

    }


}
