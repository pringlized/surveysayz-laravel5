@extends('layouts.main')

@section('content')
<div id="main-region" class="container">
    <div class="issue-list">
        @forelse ($issues as $issue)
            @include('main.items.issue_list_item')
        @empty
            @include('main.items.issue_list_item_none')
        @endforelse
    </div>
</div>
@endsection