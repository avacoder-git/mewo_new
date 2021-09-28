<x-admin-master>

    @section('content')

        <h1 class="h3 mb-2 text-gray-800">Сертификаты</h1>
        <!-- DataTales Example -->


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-12">
                        <h6 class="m-0 font-weight-bold text-primary">Сертификаты</h6>
                    </div>
                    <div class="ml-auto mr-4">
                        <a class="btn btn-lg btn-primary btn-icon-split" href="{{route('certificates.create')}}">
                                <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                            <span class="text">Новый</span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Изображение</th>
                            <th>Дата</th>
                            <th>Изменить</th>
                            <th>Удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($certificates as $certificate)

                            <tr>
                                <td>{{$certificate->id}}</td>
                                <td><img height="100px" src="{{$certificate->image}}" alt=""></td>
                                <td>{{$certificate->created_at->format('d.m.Y')}}</td>
                                <td><a href="{{route('certificates.edit', $certificate)}}" class="btn btn-success">Изменить</a></td>
                                <td>
                                    <form action="{{route('certificates.destroy', $certificate)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" value="{{$certificate->id}}">
                                        <button class="btn btn-danger" >
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>


                        @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('video_comments',  ['size'=>25])}}"> 25</a> /  <a href="{{route('video_comments',  ['size'=>50])}}"> 50</a> /   <a href="{{route('video_comments',  ['size'=>100])}}"> 100</a> /   <a href="{{route('video_comments',  ['size'=>200])}}"> 200</a>


                </div>
            </div>

        </div>
        {{$certificates->links()}}

    @endsection


    @section('scripts')
    @endsection



</x-admin-master>
