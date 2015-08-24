<div class="feed-element">
    <div class="media-body ">
        <a href="{{ url('/admin/issues') }}/{{ $doLater->id }}">{{ $doLater->title }}</a><br>
        <small class="text-muted">Added {{ $doLater->created_at }}</small>
    </div>
</div>