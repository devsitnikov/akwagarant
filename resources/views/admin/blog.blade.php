@extends('layouts.admin')

@section('content')
    <div class="card mb-4">
        <div class="card-body d-sm-flex justify-content-between">
            <h4 class="pt-1 mb-2">Управление статьями</h4>
            <div class="button-group">
                <a href="{{route('addeditor')}}" target="_blank" type="button" class="btn btn-success">Добавить статью</a>
                <button type="button" class="btn btn-light-blue" data-toggle="modal" data-target="#addCatModal">Добавить категорию</button>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-7">
        @if (count($articles) > 0)
        @foreach ($articles as $article)
            <div class="card mb-3">
                <div class="card-body d-sm-flex justify-content-between">
                    <a href="{{route('article',$article->slug)}}"><h3>{{$article->name}} </h3></a>
                    <div class="buttongroup">
                        <a type="button" class="btn btn-info btn-sm" href="{{route('editeditor',$article->slug)}}" target="_blank">Редактировать</a>
                        <button type="button" class="btn btn-danger btn-sm deleteArticle" data-id="{{$article->id}}">Удалить</button>
                    </div>
                </div>
                <div class="card-footer">
                    @foreach ($article->categories as $cat)
                        <span class="badge badge-default">{{ $cat->name }}</span>
                        @endforeach

                </div>
            </div>
            @endforeach
            @else
            <div class="card">
                <div class="card-body">
                    <h3>Список статей пуст</h3>
                </div>
            </div>
            @endif
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
               <h4>Категории</h4>
                @if (count($categories) > 0)
                <ul class="list-group">
                    @foreach ($categories as $category)
                    <li class="list-group-item d-sm-flex justify-content-between">{{$category->name}}
                        <button type="button" class="btn btn-danger btn-sm deleteCat" data-id="{{$category->id}}"> Удалить</button></li>
                        @endforeach
                </ul>
                    @else
                    <ul class="list-group">
                     <li class="list-group-item">Список категорий пуст</li>
                    </ul>
                    @endif
            </div>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addCatModal" tabindex="-1" role="dialog" aria-labelledby="addCatModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить новую категорию</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="md-form form-lg">
                        <input type="text" id="inputCatName" class="form-control form-control-lg">
                        <label for="inputLGEx">Название категории</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                    <button type="button" class="btn btn-primary save-cat-btn">Сохранить</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            $('.save-cat-btn').click(function(){
                $.ajax({
                    url: '{{route('addCategory')}}',
                    type: 'POST',
                    data: {name: $('#inputCatName').val() },
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function() {
                        $('#addCatModal').modal('hide');
                        toastr["info"]("Добавлено!");
                        location.reload();
                    }
                });
            });

            $('.deleteArticle').click(function(){
                $.ajax({
                    url: '{{route('deleteArticle')}}',
                    type: 'POST',
                    data: {id: $(this).attr('data-id') },
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function() {
                        toastr["info"]("Удалено!");
                        location.reload();
                    }
                });
            });

            $('.deleteCat').click(function(){
                $.ajax({
                    url: '{{route('deleteCategory')}}',
                    type: 'POST',
                    data: {id: $(this).attr('data-id') },
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function() {
                        toastr["info"]("Удалено!");
                        location.reload();
                    }
                });
            });
        }

    </script>
@endsection