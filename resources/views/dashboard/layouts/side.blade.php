      <!-- .app-aside -->
      <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
              <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span>
            <span class="account-summary"><span class="account-name">{{Auth::user()->name}}</span> 
          </button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                 <a class="dropdown-item" href="{{route('logout')}}"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
              </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item has-active">
                  <a href="{{route('dashboard.index')}}" class="menu-link"><span class="menu-icon fa fa-adjust"></span> <span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="{{route('dashboard.slides')}}" class="menu-link"><span class="menu-icon fa fa-home"></span> <span class="menu-text"> Home</span> </a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="{{route('dashboard.slides')}}" class="menu-link">Slider</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.services.home')}}" class="menu-link">Our Services</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.about')}}" class="menu-link">About</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.category')}}" class="menu-link">Categories</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.images.home')}}" class="menu-link">Images</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.control')}}" class="menu-link">Project & News</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.master')}}" class="menu-link">Masters</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.contact')}}" class="menu-link">Contact</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.footer')}}" class="menu-link">Footer</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fa fa-tree"></span> <span class="menu-text">About Us</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="{{route('dashboard.about.main')}}" class="menu-link">About Us</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.about.history')}}" class="menu-link">History</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.about.services')}}" class="menu-link">Services</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.about.images')}}" class="menu-link">Images</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fa fa-server"></span> <span class="menu-text">Services</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="{{route('dashboard.services.main')}}" class="menu-link">Services Page</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.services')}}" class="menu-link">Services</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-fork"></span> <span class="menu-text">Projects</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="{{route('dashboard.projects')}}" class="menu-link">All Projects</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.projects.add')}}" class="menu-link">Add Project </a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fa fa-newspaper"></span> <span class="menu-text">News</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="{{route('dashboard.news')}}" class="menu-link"> All News</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.news.add')}}" class="menu-link">Add News</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.news.allcomments')}}" class="menu-link">Comments</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="{{route('dashboard.contact.contact.message')}}" class="menu-link"><span class="menu-icon fa fa-users"></span> <span class="menu-text">Contact</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="{{route('dashboard.contact.contact.index')}}" class="menu-link">Contact page</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.contact.contact.allmessage')}}" class="menu-link">Client's Message</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->
          <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
          </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->
      