
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          @if(auth('web')->check())
          <li class="nav-item">
            <a class="nav-link " href="{{route('panel.home')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('panel.company-information.index')}}">
              <i class="fa fa-cog menu-icon"></i>
              <span class="menu-title">Settings</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('panel/admins*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('panel.admins.index')}}">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Admins</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('panel/employees*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('panel.employees.index')}}">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Employee</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('panel/customers*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('panel.customers.index')}}">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Customer</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('panel/spots*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('panel.spots.index')}}">
              <i class="fa fa-map menu-icon"></i>
              <span class="menu-title">Spots</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('panel/vehicles*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('panel.vehicles.index')}}">
              <i class="fa fa-car menu-icon"></i>
              <span class="menu-title">Vehicles</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('panel/rentals*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('panel.rentals.index')}}">
              <i class="fa fa-bookmark menu-icon"></i>
              <span class="menu-title">Rentails</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('panel/feedback*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('panel.feedback.index')}}">
              <i class="fa fa-weixin menu-icon"></i>
              <span class="menu-title">Feedback</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('panel/contact-us*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('panel.contact-us.index')}}">
              <i class="fa fa-envelope-o menu-icon"></i>
              <span class="menu-title">Contacts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('panel.reports.spots')}}">
              <i class="fa fa-file menu-icon"></i>
              <span class="menu-title">Spot Rentails Report</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('panel.reports.vehicles')}}">
              <i class="fa fa-file menu-icon"></i>
              <span class="menu-title">Vehicle Rentails Report</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('panel.reports.customers')}}">
              <i class="fa fa-file menu-icon"></i>
              <span class="menu-title">Top Customers Report</span>
            </a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('employees.home')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('employees.vehicles.index')}}">
              <i class="fa fa-car menu-icon"></i>
              <span class="menu-title">Vehicles</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('employees.contact-us.index')}}">
              <i class="fa fa-envelope-o menu-icon"></i>
              <span class="menu-title">Contacts</span>
            </a>
          </li>
          @endif
        </ul>
      </nav>
