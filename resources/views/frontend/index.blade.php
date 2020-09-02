@extends('layouts.app')

@section('content')
    <div class="container text-right" >
        <div class="jumbotron home-jumbotron  jumbotron-fluid">
            <div class="container ">
                <h1 class="pb-3">بلاگ شخصی</h1>
                <p class="lead mt-1">این وبلاگ با زبان پی اچ پی و به کمک فریمورک لاراول نوشته شده</p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                @forelse ($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span >
                                {{ $post->created_at->toDayDateTimeString() }}
                            </span>
                             <small>نویسنده: {{ $post->user->name }}</small>
                        </div>

                        <div class="panel-body">
                            <p>{{ str_limit($post->body, 200) }}</p>
                            <p>
                                تگها:
                                @forelse ($post->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                @empty
                                    <span class="label label-danger">تگی پیدا نشد</span>
                                @endforelse
                            </p>
                            <p>
                                <span class="btn btn-sm btn-success">{{ $post->category->name }}</span>
                                <span class="btn btn-sm btn-info">نظرات <span class="badge">{{ $post->comments_count }}</span></span>

                                <a href="{{ url("/posts/{$post->id}") }}" 
                                class="btn btn-sm btn-primary">ادامه مطلب</a>
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="panel panel-default">
                        <div class="text-right panel-body">
                            <p>مطلبی وجود ندارد</p>
                        </div>
                    </div>
                @endforelse

                <div align="center">
                    {!! $posts->appends(['search' => request()->get('search')])->links() !!}
                </div>

            </div>

        </dev>
    </dev>
@endsection
