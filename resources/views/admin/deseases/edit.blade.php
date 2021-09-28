<x-admin-master>

    @section('content')

        <link rel="stylesheet" href="{{asset('css/style.css')}}" />


        <h1>Редактировать {{$desease->head}}</h1>


        <form action="{{route('deseases.update',$desease)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Редактировать {{$desease->head}}</h6>
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Имя</span>
                                </div>
                                <input value="{{$desease->head}}" type="text" name="head" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Имя uz</span>
                                </div>
                                <input value="{{$desease->head_uz}}" type="text" name="head_uz" class="form-control" required aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Контент</span>
                                </div>
                                <textarea name="body" id="" cols="30" class="form-control" style="resize: none" rows="5" required>{{$desease->body}}</textarea>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Контент уз</span>
                                </div>
                                <textarea name="body_uz" id="" cols="30" class="form-control" style="resize: none" rows="5" required aria-required="true">{{$desease->body_uz}}</textarea>
                            </div>





                            <button type="submit" class="btn btn-primary btn-lg">Применить</button>




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
