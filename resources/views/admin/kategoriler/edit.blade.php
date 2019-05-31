@extends('admin.template')

@section('icerik')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Kategori Düzenle :{{$kategori->baslik}}</h5>
                </div>


                <div class="widget-content nopadding">
                    <form action="{{route('kategoriler.update',$kategori->id)}}"  method="post" class="form-horizontal" >
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="control-group">
                            <label class="control-label">Ust Kategori :</label>
                            <div class="controls">
                                <select name="ust_id" class="span11">
                                    <option value="">Ana Kategori Yap</option>
                                    @foreach($tumkategoriler as $tumkategori)
                                        <option value="{{$tumkategori->id}}" {{$tumkategori->id==old('ust_id',$kategori->ust_id) ? 'selected' : ''}}>{{$tumkategori->baslik}}</option>


                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Kategori Baslik :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="baslik" value="{{$kategori->baslik}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Site Açıklama :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="aciklama" value="{{$kategori->aciklama}}" />
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Kategori Düzenle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('css')

@endsection
@section('js')

@endsection