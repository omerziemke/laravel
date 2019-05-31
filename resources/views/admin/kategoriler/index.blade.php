@extends('admin.template')

@section('icerik')
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kategori Yönetim</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Kategori Baslik</th>
                    <th>Kategori Türü</th>
                    <th>Kategori Acıklama</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($kategoriler as $kategori)
                <tr class="gradeX">
                    <td>{{$kategori->baslik}}</td>
                    <td>
                        @if(!   empty($kategori->ust_id))
                            Alt Kategori
                            @else
                            Ana Kategori
                            @endif
                        </td>
                    <td>{{$kategori->aciklama}}</td>
                    <td class="center"><a href="{{route('kategoriler.edit',$kategori->id)}}" class="btn btn-success btn-mini">Düzenle</a></td>
                    <form action="{{route('kategoriler.destroy',$kategori->id)}}" method="DELETE"></form>
                    {{csrf_field()}}
                    <td class="center">
                        <button type="submit" class="btn btn-danger btn-mini">Sil</button>
                    </td>
                    </form>
                </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

@endsection
@section('css')
            <link rel="stylesheet" href="{{asset('/admin/css/uniform.css')}}" />
            <link rel="stylesheet" href="{{asset('/admin/css/select2.css')}}" />




@endsection

@section('js')

            <script src="{{asset('/admin/js/excanvas.min.js')}}"></script>
            <script src="{{asset('/admin/js/jquery.min.js')}}"></script>

            <script src="/admin/js/jquery.ui.custom.js"></script>
            <script src="/admin/js/bootstrap.min.js"></script>

            <script src="/admin/js/jquery.dataTables.min.js"></script>
            <script src="/admin/js/matrix.tables.js"></script>


       @endsection