@extends('layouts.app')

@section('content')
    <div class="container ltr">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-right">

                            <a href="{{ url('admin/posts/create') }}" 
                             class="btn btn-default pull-left">ایجاد مطلب جدید</a>
                            مطالب
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table" style="direction: rtl">
                            <thead>
                                <tr>
                                    <th  class="text-right">عنوان</th>
                                    <th  class="text-right">متن اصلی</th>
                                    <th  class="text-right">نویسنده</th>
                                    <th  class="text-right">دسته بندی</th>
                                    <th  class="text-right">تگها</th>
                                    <th  class="text-right">عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ str_limit($post->body, 60) }}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>{{ $post->tags->implode('name', ', ') }}</td>
                                        <td>
                                            @if (Auth::user()->is_admin)
                                                @php
                                                    if($post->published == 'Yes') {
                                                        $label = 'Draft';
                                                    } else {
                                                        $label = 'Publish';
                                                    }
                                                @endphp
                                                <a href="{{ url("/admin/posts/{$post->id}/publish") }}" 
                                                data-method="PUT" 
                                                data-token="{{ csrf_token() }}" 
                                                data-confirm="Are you sure?"
                                                class="btn btn-xs btn-warning">{{ $label }}</a>
                                            @endif
                                            <a href="{{ url("/admin/posts/{$post->id}") }}" 
                                            class="btn btn-xs btn-success">نمایش</a>
                                            <a href="{{ url("/admin/posts/{$post->id}/edit") }}"
                                             class="btn btn-xs btn-info">ویرایش</a>
                                            <a href="{{ url("/admin/posts/{$post->id}") }}" 
                                                data-method="DELETE" 
                                                data-token="{{ csrf_token() }}" 
                                                data-confirm="آیا مطمئن هستید؟" 
                                                class="btn btn-xs btn-danger">حذف</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="text-right">
                                        <td colspan="6">مطلبی وجود ندارد</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $posts->links() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
