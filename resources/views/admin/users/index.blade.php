<x-admin-master>

    @section('content')
        <div class="container-fluid">

            @if(session()->has('delete_user'))
                <div class="row">
                    <div class="alert alert-danger alert-dismissible fade show col-lg-6" role="alert">
                        {{session('deleted')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @elseif(session()->has('updated_user'))
                <div class="row">
                    <div class="alert alert-warning alert-dismissible fade show col-lg-6" role="alert">
                        {{session('updated_user')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @elseif(session()->has('created_user'))
                <div class="row">
                    <div class="alert alert-success alert-dismissible fade show col-lg-6" role="alert">
                        {{session('create_user')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif

        <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Пользователи</h1>
            <!-- DataTales Example -->


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="m-0 font-weight-bold text-primary">Пользователи</h6>
                        </div>
                            <div class="ml-auto">
                            @if(auth()->user()->userHasRole('administrator')||auth()->user()->userHasRole('owner'))
                                <a class="btn btn-lg btn-primary btn-icon-split" href="{{route('users.create')}}">
                                <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                    <span class="text">Новый</span>
                                </a>
                            @endif
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
                                <th>Эл. адрес</th>
                                <th>Активность</th>
                                <th>Роль</th>
                                <th>Создано в</th>
                                @if(auth()->user()->userHasRole('administrator')||auth()->user()->userHasRole('owner'))
                                    <th>Удалить</th>
                                    @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                @continue($user->role->slug=='owner')
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <a href="{{route('users.edit', $user->id)}}">
                                            {{$user->name}}
                                        </a>
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->is_active)
                                            <div class="badge badge-success">Active</div>
                                        @else
                                            <div class="badge badge-danger">inactive</div>

                                        @endif
                                    </td>
                                    <td>
                                        {{$user->role->name}}
                                    </td>
                                    <td>{{$user->created_at->format('d.m.Y')}}</td>
                                    <td>
                                        @if(auth()->user()->userHasRole('administrator')||auth()->user()->userHasRole('owner'))
                                            <form action="{{route('users.destroy', $user)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" value="{{$user->id}}">
                                                <button class="btn btn-danger" >
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            @endif
                                    </td>
                                </tr>


                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            {{$users->links()}}

        </div>
    @endsection


    @section('scripts')
    @endsection



</x-admin-master>
