@extends('layouts.app')

@section('content')
        <div class="center jumbotron">
            <div class="text-center">
                <h1>ここはあなたのTasklistです。</h1>
                {!! link_to_route('signup.get','今すぐサインアップ！',[],['class'=>'btn btn-lg btn-primary']) !!}
            </div>
        </div>
@endsection