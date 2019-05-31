@extends('admin.template')

@section('icerik')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Site Ayarları</h5>
                </div>
                <div class="widget-content nopadding">
                    <form action="{{url('/yonetim/ayarlar/1')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="control-group">
                            <label class="control-label">Site Baslik :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="baslik" value="{{$ayarlar->baslik}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Site Açıklama :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="aciklama" value="{{$ayarlar->aciklama}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email Adress</label>
                            <div class="controls">
                                <input type="text"  class="span11" name="email" value="{{$ayarlar->email}}"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Site Logo :</label>
                            <div class="controls">
                                <input type="file" name="logo" class="span11"  />
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Güncelle</button>
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