@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

@endsection

@section('footerjs')
    @parent   
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
	            toastr.success('2nd test', 'Yo yo');
	        }, 1300);
	    });
	</script>
@endsection