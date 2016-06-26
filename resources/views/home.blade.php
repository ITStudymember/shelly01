@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div>
                @foreach($articles as $article)
                    <div>
			<div class="article_img"><img style="width: 20%; height: 30%;" src="/ArticleImages/{{ $article->img_path}}"></div>
                        <p><a href="/{{ $article->id }}">{{ $article->title }}</a></p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
