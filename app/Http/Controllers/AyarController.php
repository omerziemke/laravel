<?php

namespace App\Http\Controllers;
@include('sweetalert::alert');
use Illuminate\Http\Request;
use App\ayar;
use Alert;


class AyarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ayarlar = ayar::find(1);
        return view('admin.ayarlar.create', compact('ayarlar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function giris()
    {
        return view('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), array(
            'baslik' => 'required',
            'aciklama' => 'required'
        ));

        $ayar = Ayar::find(1);
        $ayar->baslik = request('baslik');
        $ayar->aciklama = request('aciklama');
        $ayar->email = request('email');

        if (request()->hasFile('logo')) {
            $this->validate(request(), array('logo' => 'image|mimes:png,jpg,jpeg,gif|max:2048'));
        }
        $resim = request()->file('logo');
        $dosya_adi = 'logo' . '-' . time() . '-' . $resim->extension();
        if ($resim->isValid()) {
            $hedef_klasor = 'uplaods/dosyalar';
            $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
            $resim->move('$hedef_klasor','$dosya_adi');
            $ayar->logo = $dosya_yolu;
        }
        $ayar->save();
        if ($ayar) {
            alert()->flash('basarılı','SuccessAlert', [
                'text'=>'Güncellendi...',
                'timer'=>2000
            ]);return back();
        } else {
            alert()->flash('Basarısız','Warning', [
                'text'=>'Güncellenemedi...',
                'timer'=>2000
            ]);return back();

        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function guncelle()
    {

    }
}
