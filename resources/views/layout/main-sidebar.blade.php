  <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            {{-- <li class="active treeview"> --}}
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tasks"></i> <span>Transactions</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="#"><i class="fa fa-circle"></i> Sales <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Sales Order <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> List</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> New</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Sales Invoice <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> List</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> New</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle"></i> Purchases <i class="fa fa-angle-left pull-right"></i></a>
	                  <ul class="treeview-menu">
		                    <li>
		                      <a href="#"><i class="fa fa-circle-o"></i> Purchase Order<i class="fa fa-angle-left pull-right"></i></a>
		                      <ul class="treeview-menu">
		                        <li><a href="{{ url('purchaseorder') }}"><i class="fa fa-circle-o"></i> List</a></li>
		                        <li><a href="{{ url('purchaseorder/create') }}"><i class="fa fa-circle-o"></i> New</a></li>
		                      </ul>
		                    </li>
		                    <li>
		                      <a href="#"><i class="fa fa-circle-o"></i> Purchase Requisition<i class="fa fa-angle-left pull-right"></i></a>
		                      <ul class="treeview-menu">
		                        <li><a href="{{ url('purchaserequest') }}"><i class="fa fa-circle-o"></i> List</a></li>
		                        <li><a href="{{ url('purchaserequest/create') }}"><i class="fa fa-circle-o"></i> New</a></li>
		                      </ul>
		                    </li>
                        <!--JOB ORDER-->
                         <li>
                          <a href="#"><i class="fa fa-circle-o"></i> Job Order<i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                            <li><a href="{{ url('joborder') }}"><i class="fa fa-circle-o"></i> List</a></li>
                            <li><a href="{{ url('joborder/create') }}"><i class="fa fa-circle-o"></i> New</a></li>
                          </ul>
                        </li>
	                  </ul>
                </li>

                <li>
                  <a href="#"><i class="fa fa-circle"></i> Payables <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <!--vendorbill-->
                         <li>
                          <a href="#"><i class="fa fa-circle-o"></i> Vendor Bill<i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                            <li><a href="{{ url('vendorbill') }}"><i class="fa fa-circle-o"></i> List</a></li>
                            <li><a href="{{ url('vendorbill/create') }}"><i class="fa fa-circle-o"></i> New</a></li>
                          </ul>
                        </li>
                        <!--vendorpayment-->
                         <li>
                          <a href="#"><i class="fa fa-circle-o"></i> Vendor Payment<i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                            <li><a href="{{ url('vendorpayment') }}"><i class="fa fa-circle-o"></i> List</a></li>
                            <li><a href="{{ url('vendorpayment/create') }}"><i class="fa fa-circle-o"></i> New</a></li>
                          </ul>
                        </li>
                    </ul>
                </li>

              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>