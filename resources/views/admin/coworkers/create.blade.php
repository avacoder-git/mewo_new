<x-admin-master>

    @section('content')

        <link rel="stylesheet" href="{{asset('css/style.css')}}" />


        <h1>Создать нового рекоендация</h1>


        <form action="{{route('coworkers.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Создать нового рекоендация</h6>
                        </div>
                        <div class="card-body">
                            <div class="">

                                <img src="" id="replace_img" alt="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Изображение</span>
                                    </div>
                                    <input type="file" name="image" id="image" class="form-control">
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

    @section('scripts')

        <link rel="stylesheet" href="{{asset('css/cropper.min.css')}}">

        <script>

            var image = $('#image');
            input = image;
            var replace = $('#replace_img');
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        replace.attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }

            $(input).change(function() {
                readURL(this);
                // alert("heasdfasd");
                $('#replace_img').Cropper();

            });


        </script>
    @endsection


</x-admin-master>
