<x-admin-master>

    @section('content')


        <h1>Создать новый</h1>


        <form action="{{route('properties.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Создать новый</h6>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Заголовок</span>
                                    </div>
                                    <input type="text" name="head" required class="form-control" aria-label="Sizing example input">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Заголовок uz</span>
                                    </div>
                                    <input type="text" name="head_uz" required class="form-control" aria-label="Sizing example input">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="email">Текст</span>
                                    </div>
                                    <textarea name="body" id="text" required class="form-control" style="resize: none" cols="30" rows="5"></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="email">Текст uz</span>
                                    </div>
                                    <textarea name="body_uz" id="text" required class="form-control" style="resize: none" cols="30" rows="5"></textarea>
                                </div>
                                <img src="" id="replace_img" alt="">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="password_confirmation">Изображение(1:1)</span>
                                    </div>
                                    <input type="file" class="form-control"  id="image" name="image" aria-label="Sizing example input" >
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
