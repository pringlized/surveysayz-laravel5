<div class="feed-element">
    <div class="media-body">
        <div class="col-md-1">
				<span class="fa fa-3x {{ issueStatusIcon($issue->status) }} pull-left"></span>
        </div>
        <div class="col-md-11">
            <a href="{{ url('/admin/issues') }}/{{ $issue->id }}">{{ $issue->title }}</a><br>
            <small class="text-muted">Added <li class="fa fa-clock-o"></li> {{ $issue->created_at->format('h:i a - m.d.y') }}</small><br>
            <small class="text-muted">Updated <li class="fa fa-clock-o"></li> {{ $issue->updated_at->format('h:i a - m.d.y') }}</small><br>
        </div>

    </div>
</div>