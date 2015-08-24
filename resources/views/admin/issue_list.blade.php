@extends('layouts.admin')

@section('title', 'Issues')

@section('content')   
<!--  PAGE HEADER WITH BREADCRUMBS -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Issues</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Dashboard</a>
            </li>
            <li>
                Issues
            </li>
            <li class="active">
            	<strong>{{ $statusType }}</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="{{ url('/admin/issues/add') }}" class="btn btn-primary btn-sm">Add Issue</a>
        </div>
    </div>
</div>
<!--  END PAGE HEADER WITH BREADCRUMBS -->

<!-- START ISSUE LIST-->
<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeIn">
            
            <!-- START ISSUE LIST FILTER -->
			<div class="row">
                <div class="col-sm-7 m-b-xs issue-list-icon-group">

						<label class="btn btn-sm btn-white"><a href="{{ url('/admin/issues') }}" title="All">All</a></label>
						<label class="btn btn-sm btn-white"><a href="{{ url('/admin/issues/status/open') }}" title="Open" class="fa fa-folder-open"></a></label>
						<label class="btn btn-sm btn-white"><a href="{{ url('/admin/issues/status/review') }}" title="Review" class="fa fa-eye"></a></label>
						<label class="btn btn-sm btn-white"><a href="{{ url('/admin/issues/status/deferred') }}" title="Deferred" class="fa fa-eye-slash"></a></label>
                        <label class="btn btn-sm btn-white"><a href="{{ url('/admin/issues/status/approved') }}" title="Approved" class="fa fa-check"></a></label>
                        <label class="btn btn-sm btn-white"><a href="{{ url('/admin/issues/status/sandbox') }}" title="Sandbox" class="fa fa-dropbox"></a></label>
                        <label class="btn btn-sm btn-white"><a href="{{ url('/admin/issues/status/live') }}" title="Live" class="fa fa-comments"></a></label>
                        <label class="btn btn-sm btn-white"><a href="{{ url('/admin/issues/status/suspended') }}" title="Suspended" class="fa fa-pause"></a></label>
                        <label class="btn btn-sm btn-white"><a href="{{ url('/admin/issues/status/closed') }}" title="Closed" class="fa fa-check-square-o"></a></label>
                        <label class="btn btn-sm btn-white"><a href="{{ url('/admin/issues/status/deleted') }}" title="Deleted" class="fa fa-times-circle-o"></a></label>
   
                </div>
                <div class="col-sm-5">
                    <div class="input-group">
	                    <input placeholder="Search" class="input-sm form-control" type="text"> <span class="input-group-btn">
						<a href="search_results.html"><button type="button" class="btn btn-sm btn-primary"> Go!</button></a> </span></div>
                </div>
            </div>
            <!-- END ISSUE LIST FILTER -->

			<!-- ISSUES LIST -->
			    @forelse ($issues as $issue)
			        @include('admin.items.issue_list_item')
                @empty
                    @include('admin.items.issue_list_item_none')
                @endforelse
            <!-- END ISSUES LIST -->
                                    
		</div>
    </div>
</div>
<!-- END ISSUE LIST-->

</div>
<!-- END PAGE WRAPPER -->
@endsection