@extends('layouts.app')

@section('content')
    <div class="container ltr">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-right">
                            مطلب جدید
                            <a href="{{ url('admin/posts') }}" 
                                class="btn btn-default pull-left">بازگشت</a>

                        </h2>
                    </div>

                    <div class="panel-body" style="direction: rtl">
                        {!! Form::open(['url' => '/admin/posts', 'class' => 'form-horizontal', 'role' => 'form']) !!}

                            @include('admin.posts._form')

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        ذخیره
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
