@forelse ($post->comments as $comment)
    <div class="panel panel-default">
        <div class="panel-heading">
            {{ $comment->user->name }} 
            <span class="pull-left">{{ $comment->created_at->diffForHumans() }}</span>
        </div>

        <div class="panel-body">
            <p>{{ $comment->body }}</p>
        </div>
    </div>
@empty
    <div class="panel panel-default">

        <div class="panel-body">
            <p>کامنتی وجود ندارد</p>
        </div>
    </div>
@endforelse
