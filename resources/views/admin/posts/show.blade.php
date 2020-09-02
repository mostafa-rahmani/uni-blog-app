@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading ltr">
                        <h2 class="text-right">
                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-left">بازگشت</a>
                            {{ $post->title }}
                        </h2>
                    </div>

                    <div class="panel-body">
                        <p style="padding: 2rem 0">{{ $post->body }}</p>

                        <p><strong>نویسنده: </strong>{{ $post->user->name }}</p>
                        <p><strong>دسته بندی: </strong>{{ $post->category->name }}</p>
                        <p><strong>تگ: </strong>{{ $post->tags->implode('name', ', ') }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
