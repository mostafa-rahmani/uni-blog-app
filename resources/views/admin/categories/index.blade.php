@extends('layouts.app')

@section('content')
    <div class="container ltr">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-right">

                            <a href="{{ url('admin/categories/create') }}" 
                                class="btn btn-default pull-left">ایجاد دسته بندی</a>
                            دسته بندیها
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table text-right" style="direction: rtl">
                            <thead>
                                <tr>
                                    <th  class="text-right">نام</th>
                                    <th  class="text-right">تعداد پستها</th>
                                    <th  class="text-right">عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->posts_count }}</td>
                                        <td>
                                            <a href="{{ url("/admin/categories/{$category->id}/edit") }}" class="btn btn-xs btn-info">ویرایش</a>
                                            <a href="{{ url("/admin/categories/{$category->id}") }}" data-method="DELETE" 
                                                data-token="{{ csrf_token() }}" data-confirm="آیا مطمئن هستید؟" 
                                                class="btn btn-xs btn-danger">حذف</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="text-right">
                                        <td colspan="3">هیچ دسته بندی ای وجود ندارد</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $categories->links() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
