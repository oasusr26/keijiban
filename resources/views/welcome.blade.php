@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>掲示板</h1>
            {!! link_to_route('signup.get', 'ユーザー登録', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection
