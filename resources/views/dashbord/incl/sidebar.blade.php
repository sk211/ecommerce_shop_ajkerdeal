<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/uploads/images/{{Auth::user()->image}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> {{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="active"><a href="{{url ('/')}}"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><a href="{{url ('/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Category Menagement</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/allcates')}}"><i class="fa fa-circle-o"></i> All Category</a></li>
            <li><a href="{{url('/addCats')}}"><i class="fa fa-circle-o"></i> Add category</a></li>
            <li><a href="{{url('/addCates')}}"><i class="fa fa-circle-o"></i> Upadete category</a></li>
          </ul>
        </li>
        <li>
          <a href="{{url('/addCates')}}./pages/logo.php">
            <i class="fa fa-th"></i> <span>logo Menagement</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{url('/addCates')}}#">
          <i class="fa fa-list"></i>
            <span>Product Menagement</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/allproduct')}}"><i class="fa fa-circle-o"></i> All Product</a></li>
            <li><a href="{{url('/addProduct')}}"><i class="fa fa-circle-o"></i> Add Product</a></li>
            <li><a href="{{url('/category')}}"><i class="fa fa-circle-o"></i> Category</a></li>
            <li><a href="{{url('/brand')}}"><i class="fa fa-circle-o"></i>Brand</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{url('/addCates')}}#">
            <i class="fa fa-user"></i>
            <span>User Menagement</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/alluser')}}"><i class="fa fa-circle-o"></i> All User</a></li>
            <li><a href="{{url('/register')}}"><i class="fa fa-circle-o"></i> Add new User</a></li>
            <li><a href="{{url('/profile')}}"><i class="fa fa-circle-o"></i> My Profile</a></li>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Order Menagement</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/order')}}"><i class="fa fa-product"></i> Order List</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="{{url('/addCates')}}#">
            <i class="fa fa-table"></i> <span>Slider Menagement</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/slider')}}"><i class="fa fa-circle-o"></i>slider</a></li>
          </ul>
        </li>
        <li>
          <a href="{{url('/comments')}}">
            <i class="fa fa-comments"></i> <span>Comments</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
            </span>
          </a>
        </li>
   
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
    
          <ul class="treeview-menu">
            <li><a href="{{url('/invoice')}}"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="{{url('/profile')}}"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="{{url('/login')}}"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="{{url('/register')}}"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="{{url('/lockscreen')}}"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
           
            @guest
            @if (Route::has('register'))
                <li>
                    <a class="nav-link" href="{{ route('register') }}"> Register </a>
                </li>
            @endif
             @else
           

                   
                
            </li> 
        @endguest
          </ul>
        </li>
        
      
    </ul>
      
    
    </section>
    <!-- /.sidebar -->
  </aside>