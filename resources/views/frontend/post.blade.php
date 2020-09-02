@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default" style="direction: rtl">
                    <div class="panel-heading text-right" >
                        <!-- <span>{{ $post->title }}</span>  -->
                        <span>
                        توسط: <span> {{ $post->user->name }} </span></span>
                        <span class="pull-left">
                            {{ $post->created_at->toDayDateTimeString() }}
                        </span>
                    </div>

                    <div class="panel-body">
                        <h3>{{$post->title}}</h3>
                        <p>{{ $post->body }}</p>
                        <p>
                            دسته بندیها: <span>{{ $post->category->name }}</span> <br>
                            تگها:
                            @forelse ($post->tags as $tag)
                                <span>{{ $tag->name }}</span>
                            @empty
                                <span>بدون تگ.</span>
                            @endforelse
                        </p>
                    </div>
                </div>

                @includeWhen(Auth::user(), 'frontend._form')

                @include('frontend._comments')

            </div>

        </dev>
    </dev>
@endsection
