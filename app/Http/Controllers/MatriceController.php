<?php

namespace App\Http\Controllers;

use App\Models\Matrice;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MatriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:matrice-list|matrice-edit|matrice-delete', ['only' => ['index','show','search']]);
         $this->middleware('permission:matrice-create', ['only' => ['create','store']]);
         $this->middleware('permission:matrice-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:matrice-delete', ['only' => ['destroy']]);
    }
    public static function index()
    {
        //
        $listMatrice = Matrice::paginate(20);
        $listMatrice->setPath('/matrices');
        return view("matrices.index",["listMatrice" => $listMatrice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("matrices.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request["name"] = Str::upper($request["name"]);
        $request["code"] = Str::upper($request["code"]);
        $request["delai"] = Str::upper($request["delai"]);

        $matrice= new Matrice();
        $matrice->name = $request->input("name");
        $matrice->code = $request->input("code");
        $matrice->delai = $request->input("delai");
        $matrice->save();
        return redirect()->back()->with('success','Matrice ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matrice  $matrice
     * @return \Illuminate\Http\Response
     */
    public function show(Matrice $matrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matrice  $matrice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $matrice = Matrice::find($id);
        echo json_encode($matrice);
        exit();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matrice  $matrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request["name"] = Str::upper($request["name"]);
        $request["code"] = Str::upper($request["code"]);
        $request["delai"] = Str::upper($request["delai"]);

        $matrice=  Matrice::find($id);
        $matrice->name = $request->input("name");
        $matrice->code = $request->input("code");
        $matrice->delai = $request->input("delai");
        $matrice->save();
        return redirect()->back()->with('success','Matrice modifiée avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matrice  $matrice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $matrice = Matrice::find($id);
        $matrice->delete();
        return redirect()->back()->with('success','Matrice supprimée avec succès');
    }
    public static function search(Request $request){
        $buffer = $request->input("buffer");
        if(empty($buffer)) return self::index();
        $statu = "En cours";
        $listMatrice = Matrice::where("code", 'LIKE', '%' . $buffer . '%')
        ->orWhere("name", 'LIKE', '%' . $buffer . '%')
        ->get();
        return view("matrices.index",["listMatrice" => $listMatrice]);
    }
}
