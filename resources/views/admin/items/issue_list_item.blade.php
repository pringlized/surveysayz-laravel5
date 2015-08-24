<div class="issue-list-item">
    <div class="row">
        <div class="col-md-1"><span class="fa fa-3x {{ issueStatusIcon($issue->status) }}"></span></div>
        <div class="col-md-9">
            <a href="{{ url('/admin/issues') }}/{{ $issue->id }}" class="issue-list-title">{{ $issue->title }}</a>
            <small><strong>Created by <a href="/users/{{ $issue->created_by_id }}">{{ formatUsername($issue->created_by_id) }}</a> <i class="fa fa-clock-o"></i> {{ $issue->created_at->format('h:i a - m.d.y') }}</strong></small></br>
        </div>
		<div class="col-md-2 text-right">
            <span class="small font-bold">Last Updated </span><br>
            <span class="small">{{ $issue->updated_at->format('h:i a - m.d.y') }}</span>
        </div>
    </div>
</div>