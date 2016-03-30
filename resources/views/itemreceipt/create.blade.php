@extends('layout.content_template')

@section('title')
Create New Item Receipt
@stop

@section('content-header')
<h1>Item Receipt</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
</ol>
@stop

@section('content')
 <div class="row">
  <div class="col-md-12">
    {!! Form::open(array('url'=>'purchaseorder/itemreceipt','method'=>'post')) !!}

    <div class="transaction-buttons-container">
      <div class="trans-button">
         <button class="btn btn-block btn-primary btn-flat">Save</button>
      </div>
      <div class="trans-button">
        {!! HTML::link('purchaseorder/itemreceipt','Cancel',array('class'=>'btn btn-block btn-default btn-flat')) !!}
      </div>
    </div>
    
    <div class="box box-primary">
      <div class="box-header with-border">
              <h3 class="box-title">Primary Information</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
      </div>
      <div class="box-body">
          <!-- FIRST ROW -->
          <div class="row">
            <div class="col-md-12">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>CUSTOM FORM</label>
                            <select class="form-control select2" name=" ">
                              <option selected="selected" value="1">Alabama</option>
                              <option value="2">Alaska</option>
                              <option value="3">California</option>
                              <option value="4">Delaware</option>
                              <option value="5">Tennessee</option>
                              <option value="6">Texas</option>
                              <option value="7">Washington</option>
                            </select>
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->

                      <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>REFERENCE #</label>
                            <input type="text" class="form-control" name="refrenceno" placeholder="To be Generated">
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->

                       <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>VENDOR</label>
                            <input type="date" class="form-control" name="vendor" placeholder="To be Generated">
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->

                      <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>PRINCIPAL</label>
                            <select class="form-control select2" name="principal">
                              <option selected="selected" value="1">Alabama</option>
                              <option value="2">Alaska</option>
                              <option value="3">California</option>
                              <option value="4">Delaware</option>
                              <option value="5">Tennessee</option>
                              <option value="6">Texas</option>
                              <option value="7">Washington</option>
                            </select>
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->                     
                    </div><!-- /.col -->

                     <div class="col-md-4 col-sm-6 col-xs-12">

                      <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>CREATED FROM</label>
                            <input type="date" class="form-control" name="createdfrom" placeholder="To be Generated">
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->

                        <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>DATE</label>
                            <input type="date" class="form-control" name="date" placeholder="To be Generated">
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->

                      <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>TERMS</label>
                            <select class="form-control select2" name="terms_id">
                              <option selected="selected" value="1">Alabama</option>
                              <option value="2">Alaska</option>
                              <option value="3">California</option>
                              <option value="4">Delaware</option>
                              <option value="5">Tennessee</option>
                              <option value="6">Texas</option>
                              <option value="7">Washington</option>
                            </select>
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->
                      
                       <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>LOCATION</label>
                            <select class="form-control select2" name="paymenttype_id">
                             <option selected="selected" value="1">Alabama</option>
                              <option value="2">Alaska</option>
                              <option value="3">California</option>
                              <option value="4">Delaware</option>
                              <option value="5">Tennessee</option>
                              <option value="6">Texas</option>
                              <option value="7">Washington</option>
                            </select>
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->
                      
                    </div><!-- /.col -->

                     <div class="col-md-4 col-sm-6 col-xs-12">
                      
                      <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>POSTING PERIOD</label>
                            <select class="form-control select2" name="terms_id">
                              <option selected="selected" value="1">Alabama</option>
                              <option value="2">Alaska</option>
                              <option value="3">California</option>
                              <option value="4">Delaware</option>
                              <option value="5">Tennessee</option>
                              <option value="6">Texas</option>
                              <option value="7">Washington</option>
                            </select>
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->

                        <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>REMARKS</label>
                            <input type="text" class="form-control" name="date" placeholder="To be Generated">
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->

                        <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>RECEIVED BY</label>
                            <input type="text" class="form-control" name="receivedby" placeholder="To be Generated">
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->

                       <div class="row">
                        <div class="box-body">
                          <div class="form-group">
                            <label>DATE RECEIVED</label>
                            <input type="text" class="form-control" name="datereceived" placeholder="To be Generated">
                          </div><!-- /.form-group -->
                       </div><!-- /.box-body -->
                      </div><!-- /.row -->                     
                    </div><!-- /.col -->


          </div><!-- /.col -->

          </div>


      </div><!-- ./box-body -->
    </div><!-- /.box -->

    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">Item</a></li>
        <li><a href="#tab_2" data-toggle="tab">File</a></li>
        <li><a href="#tab_3" data-toggle="tab">Notes</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
              <div id="po-line-items"></div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">

          <div id="sublist-items"></div>

        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          It has survived not only five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
          like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>

    <div class="transaction-buttons-container">
      <div class="trans-button">
         <button class="btn btn-block btn-primary btn-flat">Save</button>
      </div>
      <div class="trans-button">
        {!! HTML::link('purchaseorder','Cancel',array('class'=>'btn btn-block btn-default btn-flat')) !!}
      </div>
    </div>

  {!! Form::close() !!}
  </div><!-- /.col -->
</div><!-- /.row -->  
@stop

@section('scripts')
<!-- REACT LIBRARY -->
{{-- <script src="{{ asset('js/react/react.min.js') }}"></script> --}}
<script src="{{ asset('js/react/react.js') }}"></script>
<script src="{{ asset('js/react/react-dom.min.js') }}"></script>
<script src="{{ asset('js/react/browser.min.js') }}"></script>

<!-- REACT PLUGINS -->
<script src="{{ asset('js/react/plugin/classnames/index.js') }}"></script> <!-- classnames -->
<script src="{{ asset('js/react/plugin/input-autosize/dist/react-input-autosize.min.js') }}"></script> <!-- input-autosize -->
<script src="{{ asset('js/react/plugin/react-select/dist/react-select.min.js') }}"></script> <!-- select -->


<!-- LINEITEM COMPONENTS -->
<script type="text/babel" src="{{ asset('js/react/components/line-items-components/item.js') }}"></script>
<script type="text/babel" src="{{ asset('js/react/components/line-items-components/uom.js') }}"></script>
<script type="text/babel" src="{{ asset('js/react/components/line-items-components/description.js') }}"></script>
<script type="text/babel" src="{{ asset('js/react/components/line-items-components/quantity.js') }}"></script>

<!-- CUSTOM REACT COMPONENT -->
<script type="text/babel" src="{{ asset('js/react/components/line-items.js') }}"></script>
<script type="text/babel" src="{{ asset('js/react/forms/purchaseorder/purchaseorder_view.js') }}"></script>
<script type="text/babel">
  var context="Create";
  ReactDOM.render(<POTable context={context} />, document.getElementById("po-line-items"));
</script>
@stop