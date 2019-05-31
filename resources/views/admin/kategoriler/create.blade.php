@extends('admin.template')

@section('icerik')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Yeni Kategori Ekle</h5>
                </div>


                <div class="widget-content nopadding">
                    <form action="{{url('/yonetim/kategoriler')}}" method="post" class="form-horizontal" >
                        {{csrf_field()}}
                        <div class="control-group">
                            <label class="control-label">Ust Kategori :</label>
                            <div class="controls">
                                <select name="ust_id" class="span11">
                                         @foreach($kategori as $kategori)
                                                    <option value="{{$kategori->id}}">{{$kategori->baslik}}</option>
                                                    <option value="" selected>Ust Kategori</option>

                                               @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Kategori Baslik :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="baslik" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Site Açıklama :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="aciklama"  />
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Kategori Ekle</button>
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