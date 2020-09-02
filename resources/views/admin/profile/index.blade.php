@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div style="padding-right: 2rem">
                        <h2>
                            پروفایل کاربر
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>نام</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>ایمیل</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>تاریخ ثبت نام</td>
                                    <td>{{ $user->created_at->format('d-m-Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <td>دسترسی ادمین</td>
                                    <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                                </tr>
                                <tr>
                                    <td>API Token</td>
                                    <td>{{ $user->api_token }}</td>
                                </tr>
                                <tr>
                                    <td>تعداد مطالب</td>
                                    <td>{{ $user->posts_count }}</td>
                                </tr>
                                <tr>
                                    <td>تعداد نظرات</td>
                                    <td>{{ $user->comments_count }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
