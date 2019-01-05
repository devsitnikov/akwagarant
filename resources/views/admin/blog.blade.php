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
                    <button type="button" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
@endsection