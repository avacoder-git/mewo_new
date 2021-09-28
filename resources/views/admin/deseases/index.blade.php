<x-admin-master>

    @section('content')

        <h1 class="h3 mb-2 text-gray-800">Болезни</h1>
        <!-- DataTales Example -->


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-12">
                        <h6 class="m-0 font-weight-bold text-primary">Болезни</h6>
                    </div>
                </div>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Название</th>
                            <th>Контент</th>
                            <th>Дата</th>
                            <th>Изменить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deseases as $desease)

                            <tr>
                                <td>{{$desease->id}}</td>
                                <td>{{$desease->head}}</td>
                                <td>{{Str::limit($desease->body, 100)}}</td>
                                <td>{{$desease->created_at->format('d.m.Y')}}</td>
                                <td><a href="{{route('deseases.edit', $desease)}}" class="btn btn-success">Изменить</a></td>
                            </tr>


                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>

        </div>

    @endsection


    @section('scripts')
    @endsection



</x-admin-master>
