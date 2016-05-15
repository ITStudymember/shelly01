@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div>
                <p>{{ $article->title }}</p>
            </div>
            <div>
                {{ $article->body }}
            </div>
        </div>
    </div>
</div>
@endsection
