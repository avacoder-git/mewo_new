<x-admin-master>

    @section('content')
        <div class="container-fluid">
        <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Отзыв</h1>
            <!-- DataTales Example -->


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="m-0 font-weight-bold text-primary">Отзыв</h6>
                        </div>
                            <div class="ml-auto">
                                <a class="btn btn-lg btn-primary btn-icon-split" href="{{route('reviews.create')}}">
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
                                <th>Автор</th>
                                <th>Текст</th>
                                <th>Изображение</th>
                                <th>Создано в</th>
                                <th>Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reviews as $review)
                                <tr>
                                    <td>{{$review->id}}</td>
                                    <td>
                                        <a href="{{route('reviews.edit', $review->id)}}">
                                            {{$review->author}}
                                        </a>
                                    </td>
                                    <td>{{$review->text}}</td>
                                    <td>
                                        <img src="{{$review->image}}" height="100px" alt="">
                                    </td>
                                    <td>{{$review->created_at->format('d.m.Y')}}</td>
                                    <td>
                                        <form action="{{route('reviews.destroy', $review)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" value="{{$review->id}}">
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
