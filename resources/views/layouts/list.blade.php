@extends('layouts.default')

@section('title')
	@yield('form-title', 'ERP')
@stop

@section('additional-styles')
	<style type="text/css">
		textarea {
			max-width: 20em;
			height: 4em;
		}
	</style>
	{{-- form specific styles --}}
	@yield('style-list')
@stop

@section('content')    
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">            
            {!! Form::open( isset($parameter) ? array_add($parameter,"class","form-horizontal") : ['class'=>'form-horizontal']) !!}
            <div class="panel panel-default">           
            
                <div class="panel-heading">
                    <h3 class="panel-title">
                        @yield('form-title') 
                        <span><a href={{ URL::route("workflow.create")}} class="btn btn-primary">New</a></span>
                    </h3>
                </div>
                <div class="panel-body">                                                                       
                    
                    <div class="row">
                    	@yield('main')
                    </div>

                </div>
                <div class="panel-body panel-table">
                	<div>
                		@yield('line-item')      
                	</div>
                </div>
                <div class="panel-footer">           	
                </div>
            
            </div>
        {!! Form::close() !!}
            
        </div>
    </div>                    
    
</div>
<!-- END PAGE CONTENT WRAPPER -->         
@stop

@section('additional-scripts')
	{{-- script for handling line item will be added in here --}}
    {!! HTML::script("js/plugins/bootstrap/bootstrap-datepicker.js") !!}   

    {!! HTML::script("js/plugins/bootstrap/bootstrap-file-input.js") !!} 
    {!! HTML::script("js/plugins/bootstrap/bootstrap-select.js") !!} 
    {!! HTML::script("js/plugins/tagsinput/jquery.tagsinput.min.js") !!} 
	{{-- form type specific scripts here--}}
	@yield('script-list')
@stop