<x-admin-master>

    @section('content')


        <h1>Создать нового пользователя</h1>


        <form action="{{route('users.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Создать нового пользователя</h6>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Имя</span>
                                    </div>
                                    <input type="text" name="name" class="form-control @error('name') 'is_invalid'@enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="email">Эл. почта</span>
                                    </div>
                                    <input type="email" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="email">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="password">Парол</span>
                                    </div>
                                    <input type="password" class="form-control"  name="password" aria-label="Sizing example input" aria-describedby="password">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="password_confirmation">Подтверить пароль</span>
                                    </div>
                                    <input type="password" class="form-control"  name="password_confirmation" aria-label="Sizing example input" aria-describedby="password2">
                                </div>
                                <div class="mb-3">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="checkbox"  id="checkbox">
                                        <label class="custom-control-label" for="checkbox">Активность</label>
                                    </div>
                                </div>
                                <div class="mb-3 input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="role">Позиция</label>
                                    </div>
                                    <select name="role" id="" class="custom-select" id="role">>
                                        @foreach(\App\Role::all() as $role)
                                            @continue($role->slug=="owner")
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>

                                </div>


                                <button type="submit" class="btn btn-primary btn-lg">Применить</button>


                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger mt-4">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif




                        </div>
                    </div>

                </div>
            </div>
        </form>

    @endsection




</x-admin-master>
