<x-admin-master>

    @section('content')


        <h1>Обшие ссилки</h1>


        <form action="{{route('generals.store', $general)}}" method="post">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Обшие ссилки</h6>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Телефон 1</span>
                                    </div>
                                    <input type="text" value="{{$general->phone1}}" name="phone1" class="form-control @error('name') 'is_invalid'@enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Телефон 2</span>
                                    </div>
                                    <input type="text" name="phone2" value="{{$general->phone2}}"  class="form-control @error('name') 'is_invalid'@enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Instagram username</span>
                                    </div>
                                    <input type="text" name="instagram" value="{{$general->instagram}}"  class="form-control @error('name') 'is_invalid'@enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Telegram</span>
                                    </div>
                                    <input type="text" name="telegram"  value="{{$general->telegram}}"  class="form-control @error('name') 'is_invalid'@enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Youtube</span>
                                    </div>
                                    <input type="text" name="youtube" value="{{$general->youtube}}"  class="form-control @error('name') 'is_invalid'@enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Whatsapp</span>
                                    </div>
                                    <input type="text" name="whatsapp"  value="{{$general->whatsapp}}" class="form-control @error('name') 'is_invalid'@enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Аддресс</span>
                                    </div>
                                    <input type="text" name="address" value="{{$general->address}}"  class="form-control @error('name') 'is_invalid'@enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Эл. почта</span>
                                    </div>
                                    <input type="text" name="email" value="{{$general->email}}"  class="form-control @error('name') 'is_invalid'@enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
