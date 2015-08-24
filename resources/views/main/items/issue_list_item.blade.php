<div class="issue-list-item" id="issue_{{ $issue->id }}">
    <p class="issue-list-item-title">
        <a class="issue-list-item-title loggedin" href="{{ url('/issues/') }}/{{ $issue->id }}">{{ $issue->title }}</a>
    </p>
    <p class="issue-list-item-tagline">
        last response <time title="Wed Jun 17 15:57:06 2015 UTC" datetime="2015-06-17T15:57:06+00:00" class="live-timestamp">TIME</time> by <a href="#" class="author">user</a>
    </p>
    <p class="issue-list-item-tagline">
        created by <a href="#" class="author">{{ formatUsername($issue->created_by_id) }}</a>
    </p>
    <ul class="issue-list-item-flat">
        <li class="issue-list-item-flat-li"><a href="#"> # responses</a></li>
    </ul>
</div>