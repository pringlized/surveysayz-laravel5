<div class="vertical-timeline-block">
    <div class="vertical-timeline-icon yellow-bg">
        <i class="fa {{ activityTypeIcon($activity->activity_type) }}"></i>
    </div>
    <div class="vertical-timeline-content">
        <div class="media-body ">
            <strong><a aria-expanded="false" data-toggle="collapse" href="#act{{ $activity->id }}" class="collapsed">{{ $activity->activity_type }}</a></strong><br>
            <small class="text-muted">{{ $activity->created_at }}</small>
        </div>
        <div style="" aria-expanded="false" id="act{{ $activity->id }}" class="panel-collapse activity-data collapse">
    		{{ $activity->data }}
        </div>
    </div>
</div>