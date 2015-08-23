@extends('layouts.admin')

@section('title', 'Users')

@section('content')
<!--  PAGE HEADER WITH BREADCRUMBS -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Users</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Dashboard</a>
            </li>
            <li>
                <a href="{{ url('/admin/users') }}">Users</a>
            </li>
            <li class="active">
                <strong>User</strong>
            </li>
        </ol>
    </div>
</div>
<!--  END PAGE HEADER WITH BREADCRUMBS -->

	    <div class="wrapper wrapper-content">

			<!-- USER PROFILE INFO -->
			<div class="row animated fadeIn">
			    <div class="col-md-4">
			        <div class="ibox float-e-margins">
			            <div class="ibox-title">
			                <h5>Profile Detail</h5>
			            </div>
			            <div>
			            <div class="ibox-content no-padding border-left-right">
			                <img alt="image" class="img-responsive" src="/img/profile_big.jpg">
			            </div>
			            <div class="ibox-content profile-content">
			                <h4><strong>{{ $user->username }}</strong></h4>
			                <p><i class="fa {{ userTypeIcon($user->role) }}"></i> {{ ucfirst($user->role) }}
			                <p><i class="fa {{ userStatusIcon($user->user_status) }}"></i> {{ ucfirst($user->user_status) }}
			                <p><i class="fa fa-envelope"></i> {{ $user->email }}</p>
			                <p><i class="fa fa-globe"></i> {{ $user->location }}</p>
			                <p><i class="fa fa-calendar"></i> {{ $user->created_at->format('h:m a - m.d.Y') }}</p>
			                <p><i class="fa fa-sign-in"></i> {{ $user->last_login }}</p>
			            </div>
			        </div>
			    </div>
			</div>
			<!-- END USER PROFILE INFO -->
	            
			<!-- USER ACTIVITY, FAVORITES & DO LATERS -->
			<div class="col-lg-8">
                <div class="panel">

                    <div class="panel-heading">
                        <div class="panel-options">

                            <ul class="nav nav-tabs">
								<li class="active"><a aria-expanded="false" data-toggle="tab" href="#tab-issues">User Created Issues</a></li>
                                <li class=""><a aria-expanded="true" data-toggle="tab" href="#tab-1">Activities</a></li>
                                <li class=""><a aria-expanded="false" data-toggle="tab" href="#tab-2">Favorites</a></li>
								<li class=""><a aria-expanded="false" data-toggle="tab" href="#tab-3">Do Later</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="tab-content">
                            
                            <!-- ACTIVITY TAB -->
                            <div id="tab-1" class="tab-pane">
                                
                                <!-- START ACTIVITY TIMELINE -->
								<div id="vertical-timeline" class="vertical-container dark-timeline">
    								
    								@forelse ($activities as $activity)
    								    @include('admin.items.activity_list_item')
    								@empty
    								    @include('admin.items.activity_list_none')
    								@endforelse
		                            
		                        </div>	
                                <!-- END ACTIVITY TIMELINE -->
                                								
							</div>
							<!-- END ACTIVITY TAB -->

							<!-- FAVORITES TAB -->
                            <div id="tab-2" class="tab-pane">
								<div class="feed-activity-list">
									
    								@forelse ($favorites as $favorite)
    								    @include('admin.items.favorites_list_item')
    								@empty
    								    @include('admin.items.favorites_list_item_none')
    								@endforelse

								</div>
                            </div>
                            <!-- END FAVORITES TAB -->
                     
							<!-- DO LATER TAB -->       
                            <div id="tab-3" class="tab-pane">
								<div class="feed-activity-list">
    								
    								@forelse ($doLaters as $doLater)
    								    @include('admin.items.dolater_list_item')
    								@empty
    								    @include('admin.items.dolater_list_item_none')
    								@endforelse

								</div>
                            </div>
                            <!-- DO LATER TAB -->
                            
							<!-- USER ISSUES TAB -->       
                            <div id="tab-issues" class="tab-pane active">
								<div class="feed-activity-list">
									
									@forelse ($issues as $issue)
									    @include('admin.items.user_issue_list_item')
                                    @empty
                                        @include('admin.items.user_issue_list_item_none')
                                    @endforelse

								</div>
                            </div>
                            <!-- END USER ISSUES TAB -->
                            
						</div>
					</div>
					<!-- END PANEL BODY -->
    
			</div>    
        </div>
        <!-- END USER ACTIVITY, FAVORITES & DO LATERS -->
        
        </div>
    </div>
</div>

<!-- END PAGE WRAPPER -->
@endsection