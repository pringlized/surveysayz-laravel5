@extends('layouts.admin')

@section('title', 'Issue')
			
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
                <a href="{{ url('/admin/issues') }}">Issues</a>
            </li>
            <li class="active">
                <strong>Issue</strong>
            </li>
        </ol>
    </div>
</div>
<!--  END PAGE HEADER WITH BREADCRUMBS -->

<!-- START ISSUE PAGE CONTENT-->    
<div class="row">

    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeIn">

            <div class="ibox-content">
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="m-b-md">
                            <h2>{{ $issue->title }}</h2>
                        </div>
                        <p><small>{{ $issue->motive }}</small></p>
                    </div>
                </div>
                
                <div class="row m-t-md">
                    <div class="col-lg-12">
                        <dl class="dl-horizontal">
                            <dt>Status:</dt> <dd><strong>{{ ucfirst($issue->status) }}</strong></dd>
                            <dt>Created by:</dt> <dd><a href="{{ url('/admin/users') }}/{{ $issue->created_by_id }}">{{ formatUsername($issue->created_by_id) }}</a></dd>
                            <dt>Last Updated:</dt> <dd><li class="fa fa-clock-o"></li> {{ $issue->updated_at->format('h:m a - m.d.Y') }}</dd>
                            <dt>Created:</dt> <dd><li class="fa fa-clock-o"></li> {{ $issue->created_at->format('h:m a - m.d.Y') }}</dd>
                        </dl>
                    </div>
                </div>
                
                <!-- START TABS -->
                <div class="row m-t-sm">
                    <div class="col-lg-12">
                        <div class="panel blank-panel">
                            <div class="panel-heading">
                                <div class="panel-options">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab-2" data-toggle="tab">Questions</a></li>
                                        <li><a href="#tab-info" data-toggle="tab">Info</a></li>
                                        <li><a href="#tab-3" data-toggle="tab">Issue activity</a></li>
                                    </ul>
                                </div>
                            </div>

							<div class="panel-body">
								<div class="tab-content">
            
									<!-- TAB INFO -->
									<div id="tab-info" class="tab-pane">
										<div class="m-t-md">
										<p><strong>NOTE: This should be be viewable, then editable after clicknig a button.</strong></p>
				                            <form method="get" class="form-horizontal">
				                                <div class="form-group"><label class="col-sm-2 control-label">Title</label>
				                                    <div class="col-sm-10">
    				                                    <input name="title" class="form-control" type="text" value="{{ $issue->title }}" @if ($editable == false) disabled @endif>
    				                                </div>
				                                </div>
				                                <div class="hr-line-dashed"></div>
				                                <div class="form-group"><label class="col-sm-2 control-label">Select</label>
				                                    <div class="col-sm-10">
    				                                    <select class="form-control m-b" name="status">
	                                    			    @foreach ($availableStatus as $status)
    				                                        <option value="{{ $status }}" @if ($status == $issue->status) selected @endif>{{ ucfirst($status) }}</option>
				                                        @endforeach
                                                        </select>
				
				                                    </div>
				                                </div>  
				                                <div class="hr-line-dashed"></div>
				                                <div class="form-group"><label class="col-sm-2 control-label">Motive</label>
				                                    <div class="col-sm-10">
					                                    <textarea name="motive" class="form-control" type="text" rows="10" @if ($editable == false) disabled @endif>{{ $issue->motive }}</textarea>
					                                    <span class="help-block m-b-none">The description of the Issue.</span>
				                                    </div>
				                                </div>
				                                <div class="hr-line-dashed"></div>
				                                <div class="form-group">
				                                    <div class="col-sm-4 col-sm-offset-2">
					                                    <button class="btn btn-white" type="submit">Edit</button> -->
				                                        <button class="btn btn-white" type="submit">Cancel</button>
				                                        <button class="btn btn-primary" type="submit">Save changes</button>
				                                    </div>
				                                </div>
				                            </form>
				                        </div>

									</div>
									<!-- END TAB INFO -->
            
									<!-- TAB 2 -->
									<div class="tab-pane active" id="tab-2">
										<div class="col-lg-12">
											<div class="ibox ">  
					                            
					                            @if ($editable == true)
												<form id="frmAddQuestion" method="post" action="{{ url('/api/v1/admin/question') }}">
												{!! csrf_field() !!}
												<input type="hidden" name="issueId" value="{{ $issue->id }}">
					                            <div class="row wrapper m-t-sm m-b-sm">
													<label class="radio-inline">
													  <input type="radio" name="questionType" id="questionType" value="single_choice" checked> Single Choice
													</label>
													<label class="radio-inline">
													  <input type="radio" name="questionType" id="questionType" value="multiple_choice"> Multiple Choice
													</label>
													<label class="radio-inline">
													  <input type="radio" name="questionType" id="questionType" value="essay"> Essay
													</label>
					                            </div> 
					                            
					                            <!-- ADD QUESTION INPUT GROUP -->
												<div class="row m-b-lg">
												  <div class="col-lg-12">
												    <div class="input-group">
												      <input name="question" id="questionInput" type="text" class="form-control" placeholder="Enter question...">
												      <span class="input-group-btn">
												        <button id="btnAddQuestion" class="btn btn-primary" type="button">Add</button>
												      </span>
												    </div><!-- /input-group -->
												  </div><!-- /.col-lg-12 -->
												</div><!-- /.row -->
					                            <!-- END QUESTION INPUT GROUP -->
												</form>
					                            @endif

												<!-- NESTABLE SORTABLE LIST -->
					                            <div class="dd" id="nestable2" data-issue="{{ $issue->id }}">
					                                <ol class="dd-list">
                                                        @forelse ($questions as $question)
                                        				    @include('admin.items.question_list_item')
                                                        @empty
                                                            @include('admin.items.question_list_item_none')
                                                        @endforelse
					                                </ol>
					                            </div>
					                            <!-- END NESTABLE SORTABLE LIST -->

        									</div>
    									</div>
                    				</div>
                    				<!-- END TAB 2 -->
                    				
                    				<!-- TAB 3 -->
	                                <div class="tab-pane" id="tab-3">
	
	                                    <table class="table table-striped">
	                                        <thead>
	                                        <tr>
	                                            <th>Action</th>
	                                            <th>User</th>
	                                            <th>Date</th>
	                                            <th>Notes</th>
	                                        </tr>
	                                        </thead>
	                                        <tbody>
		                                        
		                                    <!-- ISSUE ACTIVITY LIST ITEM -->
	                                        <tr>
	                                            <td>
	                                               Issue Created
	                                            </td>
	                                            <td><a href="user_profile.html">allKindsOfIssues</a></td>
	                                            <td>07.16.2015 <i class="fa fa-clock-o"></i> 10:10:1</td>
	                                            <td>
	                                            <p class="small">
	                                                This is a spot for any notes..
	                                            </p>
	                                            </td>
	                                        </tr>	
		                                    <!-- ISSUE ACTIVITY LIST ITEM -->
	
	                                        </tbody>
	                                    </table>
	
	                                </div>
	                                <!-- END TAB 3 -->
	                                
                            	</div>
                            </div>
                            <!-- END PANEL BODY -->

                        </div>
                    </div>
				</div>
               	<!-- END START TABS -->
               	
            </div>
            <!-- END ibox-content -->
                
        </div>
    </div>

</div>
<!-- END ISSUE PAGE CONTENT -->	
@endsection

@section('footerjs')
    @parent
	<script src="/js/plugins/nestable/jquery.nestable.js"></script>
	<script src="/js/plugins/jeditable/jquery.jeditable.js"></script>
	<script src="/js/modules/questions_module.js"></script>
	<script src="/js/modules/answers_module.js"></script>
@endsection