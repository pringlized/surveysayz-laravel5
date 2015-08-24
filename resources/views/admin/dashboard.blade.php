@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

@endsection

@section('footerjs')
    @parent
    
    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
    
	<script>
	    $(document).ready(function() {
	        setTimeout(function() {
	            toastr.options = {
	                closeButton: true,
	                progressBar: true,
	                showMethod: 'slideDown',
	                timeOut: 4000
	            };
	            toastr.success('Test Notification message', 'SurveySayz');
	
	        }, 1300);
	    });
	</script>
@endsection