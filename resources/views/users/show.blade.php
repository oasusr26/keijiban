@extends('layouts.app')

@section('content')

    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img src="{{ Gravator::src($user->email, 500) }}" class="media-object img-rounded img-responsive" alt="" />
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="#">HOME</a></li>
                <li><a href="#">フォロー</a></li>
                <li><a href="#">フォロワー数</a></li>
            </ul>
            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts', => $microposts])
            @endif
        </div>
    </div>
@endsection