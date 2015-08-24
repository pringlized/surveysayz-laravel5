@extends('layouts.admin')

@section('title', 'Add Issue')

@section('headercss')
    @parent
	<!-- Steps -->
    <link href="/css/plugins/steps/jquery.steps.css" rel="stylesheet"> 
@endsection
            
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
                <a href="/issues">Issues</a>
            </li>
            <li class="active">
            	<strong>Add Issue</strong>
            </li>
        </ol>
    </div>
</div>
<!--  END PAGE HEADER WITH BREADCRUMBS -->
<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>New Issue form</h5>
                </div>
                <div class="ibox-content">
                    <form id="add-issue-form" method="post" action="{{ url('/admin/issues/add') }}" class="form-horizontal">
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input id="title" name="title" type="text" class="form-control" placeholder="Enter title..">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Motive</label>
                            <div class="col-sm-10">
                                <textarea id="motive" name="motive" class="form-control" rows="6" placeholder="Type your motive.."></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                                                
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="submit">Cancel</button>
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footerjs')
    @parent
	<!-- Jquery Validate -->
	<script src="/js/plugins/validate/jquery.validate.min.js"></script>
	
    <script>
        $(document).ready(function() {
            
            $("#submitForm").on('click', function() {
                var form = $("#add-issue-form");
                if (form.valid()) {
                    console.log('form valid');
                    form.submit();
                }
            });
            
            $("#add-issue-form").validate({
                debug: true,
                focusCleanup: true,
                rules: {
                    title: {
                        required: true,
                        minlength: 2,
                        maxlength: 256
                    },
                    motive: {
                        required: true
                    }
                },
                messages: {
                    title: {
                        required: "Please enter a title"
                    },
                    motive: {
                        required: "Please enter a motive"
                    }
                }
            });
       });
    </script>
@endsection