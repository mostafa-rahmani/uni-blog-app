<ul class="nav navbar-nav">
    <li><a href="{{ url('admin/posts') }}">پستها</a></li>
    <li><a href="{{ url('admin/categories') }}">دسته بندیها</a></li>
    <li><a href="{{ url('admin/comments') }}">کامنتها</a></li>
    <li><a href="{{ url('admin/tags') }}">تگها</a></li>

    @if (Auth::user()->is_admin)
        <li><a href="{{ url('admin/users') }}">کاربران</a></li>
    @endif
</ul>
