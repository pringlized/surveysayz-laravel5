@extends('layouts.admin')

@section('title', 'Add User')
            
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
                <strong>Add</strong>
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
                    <h5>New User form</h5>
                </div>
                <div class="ibox-content">
                    <form id="add-user-form" name="add-user-form" method="post" action="{{ url('/admin/users/addd') }}" class="form-horizontal">
                            
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="userType">Usertype</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label> <input value="user" id="userType" name="userType" type="radio"  checked=""> User</label></div>
                                <div class="radio">
                                    <label> <input value="contributor" id="userType" name="userType" type="radio"> Contributor</label>
                                </div>
                                <div class="radio">
                                    <label> <input value="editor" id="userType" name="userType" type="radio"> Editor</label>
                                </div>
                                <div class="radio">
                                    <label> <input value="admin" id="userType" name="userType" type="radio"> Admin</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="username">Username</label>
                            <div class="col-sm-10">
                                <input id="username" name="username" type="text" class="form-control">
                                <span class="help-block m-b-none">* Required</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="email">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="email" id="email" type="text">
                                <span class="help-block m-b-none">* Required</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        
                        <div class="form-group nameGroup">
                            <label class="col-sm-2 control-label" for="firstName">First Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="firstName" id="firstName" type="text">
                                <span class="help-block m-b-none">* Required for Admins, Editors & Contributors.</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed nameGroup"></div>
                        
                        <div class="form-group nameGroup">
                            <label class="col-sm-2 control-label" for="lastName">Last Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="lastName" id="lastName" type="text">
                                <span class="help-block m-b-none">* Required for Admins, Editors & Contributors.</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed nameGroup"></div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="location">Location</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="location" id="location" type="text">
                                <span class="help-block m-b-none">* Required</span>
                            </div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="submit">Cancel</button>
                                <button class="btn btn-primary" type="submit" name="submitForm" id="submitForm">Save changes</button>
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
            
            // hide initially for user
            $(".nameGroup").hide();
            
            $("input[type='radio']").change(function() {
                var radioValue = $("input[name='userType']:checked").val();
                if (radioValue != 'user') {
                    $(".nameGroup").show();
                } else {
                    $(".nameGroup").hide();
                }
            });
            
            $("#submitForm").on('click', function() {
                var form = $("#add-user-form");
                if (form.valid()) {
                    console.log('form valid');
                    form.submit();
                }
            });
            
            $("#add-user-form").validate({
                debug: true,
                focusCleanup: true,
                rules: {
                    username: {
                        required: true,
                        remote: '/admin/api/v1/user/username/validate',
                        minlength: 4,
                        maxlength: 24
                    },
                    email: {
                        required: true,
                        email: true,
                        minlength: 6,
                        maxlength: 36
                    },
                    firstName: {
                        required: true,
                        minlength: 2,
                        maxlength: 24
                    },
                    lastName: {
                        required: true,
                        minlength: 2,
                        maxlength: 24
                    },
                    location: {
                        required: true,
                        minlength: 2,
                        maxlength: 36
                    }
                },
                messages: {
                    username:  {
                        required: "Please enter a username",
                        remote: "Username is already taken"
                    },
                    firstName: {
                        required: "Please enter the individual's first name"
                    },
                    lastName: {
                        required: "Please enter the individual's last name"
                    },
                    email: {
                        required: "Please enter the individual's email address."
                    },
                    location: {
                        required: "Please enter the individual's location."
                    }
                }
            });
       });
    </script>
@endsection