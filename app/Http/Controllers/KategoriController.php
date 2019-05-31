<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriler=Kategori::all();
      return view('admin.kategoriler.index',compact('kategoriler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $kategori=Kategori::where('ust_id',null)->get();
        return view('admin.kategoriler.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),array(
            'baslik'=>'required',
            'aciklama'=>'required',
        ));
        $kategori= new Kategori();
        $kategori->baslik=request('baslik');
        $kategori->aciklama=request('aciklama');
        $kategori->slug=request('baslik');
        $kategori->ust_id=request('ust_id');
        $kategori->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori=Kategori::find($id);
        $tumkategoriler=Kategori::all();
        return view('admin.kategoriler.edit',compact('kategori','tumkategoriler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate(request(),array(
            'baslik'=>'required',
            'aciklama'=>'required',
        ));
        $kategori=Kategori::find($id);
        $kategori->baslik=request('baslik');
        $kategori->aciklama=request('aciklama');
        $kategori->slug=request('baslik');
        $kategori->ust_id=request('ust_id');
        $kategori->save();
        return redirect(route('kategoriler.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::deleted($id);
        return redirect(route('kategoriler.index'));
    }
}
