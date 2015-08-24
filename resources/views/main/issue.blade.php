@extends('layouts.main')

@section('content')
<div id="main-region" class="container"><div>
            <div style="font-size: x-large; text-decoration: underline; margin-bottom: 10px;">{{ $issue->title }}</div>
            <div style="color:#888; margin-bottom: 10px;">New, In Progress, Complete</div>
            <div style="color:#888; margin-bottom: 30px;"><p>{{ $issue->motive }}</p>
            </div>
            <div class="">
                <button type="button" class="btn btn-sm btn-primary">Do Survey</button>
                <button type="button" class="btn btn-sm btn-primary">Continue Survey</button>
                <button type="button" class="btn btn-sm btn-primary">Do Later</button>
                <button type="button" class="btn btn-sm btn-danger">Never mind</button>
                <button type="button" class="btn btn-sm btn-success" disabled="">Completed</button>
            </div>
        </div></div>
@endsection