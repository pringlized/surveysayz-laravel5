<div class="feed-element">
    <div class="media-body ">
        <a href="{{ url('/admin/issues') }}/{{ $favorite->id }}">{{ $favorite->title }}</a><br>
        <small class="text-muted">Added {{ $favorite->created_at }}</small>
    </div>
</div>