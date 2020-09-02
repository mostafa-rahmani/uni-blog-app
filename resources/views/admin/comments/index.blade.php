@extends('layouts.app')

@section('content')
    <div class="container ltr">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-right">
                            کامنت ها
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table" style="direction: rtl">
                            <thead>
                                <tr>
                                    <th  class="text-right">مطلب</th>
                                    <th  class="text-right">کامنت</th>
                                    <th  class="text-right">عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($comments as $comment)
                                    <tr>
                                        <td>{{ $comment->post->title }}</td>
                                        <td>{{ $comment->body }}</td>
                                        <td>
                                            <a href="{{ url("/admin/comments/{$comment->id}") }}" 
                                                data-method="DELETE" data-token="{{ csrf_token() }}" 
                                                    data-confirm="آیا مطمئن هستید؟" class="btn btn-xs btn-danger">حذف</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="text-right"> 
                                        <td colspan="3">نظری وجود ندارد</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $comments->links() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
