@extends('layouts.app')

@section('content')
    @if(Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>掲示板</h1>
                {!! link_to_route('signup.get', 'ユーザー登録', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
