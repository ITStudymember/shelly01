@extends('layouts.app')

@section('content')
<form action="/new_blog" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">タイトル</div>

                    <div class="panel-body">
                        <input type="text" name="title">
                    </div>
                    <div class="panel-heading">記事の内容</div>

                    <div class="panel-body">
                        <textarea name="body"></textarea>
                    </div>
		    <div>
			<input type="file" name="article_img">
		    </div>
                </div>
            </div>
            <input type="submit" value="投稿する">
        </div>
    </div>
</form>
@endsection
