@section('aside')
 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src={{ asset('adminImage/admin.png') }} class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Admin</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> --}}
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
           
            <!--<li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Setup</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>Add Company Basic</a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>View Company Basic</a></li>
              </ul>
            </li>
            -->

            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Notification</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
               <li><a href="{{url::to('/admin/notification-page')}}"><i class = "fa fa-circle" > Insert Notification </i></a></li>

               <li><a href="{{url::to('/admin/notification-page')}}"><i class = "fa fa-circle" >Show Statistics </i></a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Statistics</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
              
               <li><a href="{{url::to('/admin/notification-page')}}"><i class = "fa fa-circle" >Show Statistics </i></a></li>
              </ul>
            </li>
           
           
            
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
@stop