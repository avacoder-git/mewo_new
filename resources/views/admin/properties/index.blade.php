<x-admin-master>

    @section('content')
        <div class="container-fluid">
        <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Состав</h1>
            <!-- DataTales Example -->


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="m-0 font-weight-bold text-primary">Состав</h6>
                        </div>
                            <div class="ml-auto">
                                <a class="btn btn-lg btn-primary btn-icon-split" href="{{route('properties.create')}}">
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
                                <th>Заголовок</th>
                                <th>Текст</th>
                                <th>Изображение</th>
                                <th>Создано в</th>
                                <th>Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($properties as $property)
                                <tr>
                                    <td>{{$property->id}}</td>
                                    <td>
                                        <a href="{{route('properties.edit', $property->id)}}">
                                            {{$property->head}}
                                        </a>
                                    </td>
                                    <td>{{Str::limit($property->body, 100)}}</td>
                                    <td>
                                        <img src="{{$property->image}}" height="100px" alt="">
                                    </td>
                                    <td>{{$property->created_at->format('d.m.Y')}}</td>
                                    <td>
                                        <form action="{{route('properties.destroy', $property)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" value="{{$property->id}}">
                                            <button class="btn btn-danger" >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    @endsection


    @section('scripts')
    @endsection



</x-admin-master>
