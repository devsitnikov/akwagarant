@extends('layouts.editor')
@section('content')

    <script src="{{ asset('js/ckfinder/samples/js/sf.js') }}"></script>
    <script src="{{ asset('js/ckfinder/samples/js/tree-a.js') }}"></script>
    @include('ckfinder::setup')
    <div class="main-header blog-header" style="background-image: url('{{asset('img/headbg.jpg')}}')">
        <div class="content">
            <h1 class="header-title">{{$article->name}}</h1>
        </div>
    </div>

    <div class="article-body">
        <div id="editor">
            {!! $article->content !!}
        </div>
    </div>

    <button type="button" class="btn btn-danger open-settings-editor" data-toggle="modal" data-target="#settingsModal">Открыть настройки</button>
    <style>
        .open-settings-editor {
            position: fixed;
            top: 10px;
            left: 10px;
        }
    </style>

    <!-- Full Height Modal Right -->
    <div class="modal fade left" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="settingsModalLabel" aria-hidden="true">

        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class="modal-dialog modal-full-height modal-left" role="document">


            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="settingsModalLabel">Настройки</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- Material input -->
                    <div class="md-form">
                        <input type="text" id="inputArticleName" class="form-control" value="{{$article->name}}">
                        <label for="inputArticleName">Название статьи</label>
                    </div>

                    <!-- Material input -->
                    <div class="md-form">
                        <input type="text" id="inputTitle" class="form-control" value="{{$article->title}}">
                        <label for="inputTitle">Title</label>
                    </div>

                    <!--Basic textarea-->
                    <div class="md-form amber-textarea active-amber-textarea-2">
                        <textarea type="text" id="description" class="md-textarea form-control" rows="3">{{$article->description}}</textarea>
                        <label for="description">Description</label>
                    </div>
                    <select class="mdb-select md-form colorful-select dropdown-primary" multiple searchable="Поиск.." id="cats">
                        <option value="" disabled selected>Выбор категории</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach;
                    </select>

                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary save-article-btn">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Height Modal Right -->
    <script>
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });
    </script>
    <script>
        InlineEditor
            .create( document.querySelector( '#editor' ), {
                ckfinder: {
                    uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                },
                toolbar: [ 'ckfinder', '|', 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable'],
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]toolbar: [ 'insertTable',
                language: 'ru'
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );

        $('.save-article-btn').click(function(){
            var name = $('#inputArticleName').val();
            var title = $('#inputTitle').val();
            var description = $('#description').val();
            var categories = $('#cats').val();
            var content = editor.getData();

            if (name.length < 1 || title.length < 1 || description.length < 1 || categories.length < 1 || content.length < 1 || categories.length < 1) {
                toastr["error"]("Заполнены не все данные!");
            } else {
                $.ajax({
                    url: '{{route('updateArticle')}}',
                    type: 'POST',
                    data: {

                        id: '{{$article->id}}',
                        name: name,
                        title: title,
                        description: description,
                        categories: categories,
                        content: content
                    },
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        toastr["info"](data);
                    }
                });
            }
        });

    </script>
@endsection