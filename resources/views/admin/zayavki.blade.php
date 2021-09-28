<x-admin-master>

    @section('content')

            <h1 class="h3 mb-2 text-gray-800">Заявки</h1>
            <!-- DataTales Example -->


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="m-0 font-weight-bold text-primary">Заявки</h6>
                        </div>
                        <div class="ml-auto mr-4">
                            <a href="{{route('excel.export')}}" class="btn btn-success">Export Excel</a>
                        </div>
                        <div class="mr-4">
                            <form action="{{route('applications.deleteAll')}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" >
                                    Удалить все <span class="ml-3"></span>
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>

                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Имя</th>
                                <th>Телефон</th>
                                <th>Регион</th>
                                <th>Дата</th>
                                <th>Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($applications as $application)

                                <tr>
                                    <td>{{$application->id}}</td>
                                    <td>{{$application->name}}</td>
                                    <td>{{$application->phone}}</td>
                                    <td>{{$application->region}}</td>
                                    <td>{{$application->created_at->format('d.m.Y H:i:s')}}</td>
                                    <td>
                                        <form action="{{route('applications.destroy', $application)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" value="{{$application->id}}">
                                            <button class="btn btn-danger" >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>


                            @endforeach
                            </tbody>
                        </table>

                        <a href="{{route('applications',  ['size'=>25])}}"> 25</a> /  <a href="{{route('applications',  ['size'=>50])}}"> 50</a> /   <a href="{{route('applications',  ['size'=>100])}}"> 100</a> /   <a href="{{route('applications',  ['size'=>200])}}"> 200</a>


                    </div>
                </div>

            </div>
            {{$applications->links()}}

    @endsection


    @section('scripts')
    @endsection



</x-admin-master>
