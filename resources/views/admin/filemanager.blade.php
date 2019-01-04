@extends('layouts.admin')

@section('content')
    <div id="ckfinder-widget"></div>
 <script src="{{ asset('js/ckfinder/samples/js/sf.js') }}"></script>
    <script src="{{ asset('js/ckfinder/samples/js/tree-a.js') }}"></script>
    @include('ckfinder::setup')
    <script>
        CKFinder.widget( 'ckfinder-widget', {
            width: '100%',
            height: 700
        } );
    </script>

@endsection