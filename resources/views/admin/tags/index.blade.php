@extends('layouts.app')

@section('content')
    <div class="container ltr">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-right">
                            تگها

                            <a href="{{ url('admin/tags/create') }}" 
                                class="btn btn-default pull-left">ایجاد تگ</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table" style="direction: rtl">
                            <thead>
                                <tr>
                                    <th  class="text-right">عنوان تگ</th>
                                    <th  class="text-right">عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->name }}</td>
                                        <td>
                                            <a href="{{ url("/admin/tags/{$tag->id}/edit") }}" 
                                                class="btn btn-xs btn-info">ویرایش</a>
                                            <a href="{{ url("/admin/tags/{$tag->id}") }}" 
                                                data-method="DELETE" data-token="{{ csrf_token() }}"
                                                 data-confirm="آیا مطمئن هستید؟" 
                                                 class="btn btn-xs btn-danger">حذف</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="text-right">
                                        <td colspan="2">هیچ تگی وجود ندارد</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $tags->links() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
