drawer -->
<div class="mdk-drawer js-mdk-drawer {{ $drawerClass ?? '' }}" data-align="{{ $drawerAlign ?? 'start' }}" id="default-drawer">
  <div class="mdk-drawer__content">
    <div class="sidebar sidebar-left sidebar-p-t {{ config("flowdash.sidebarClass.{$layout}") }}" data-perfect-scrollbar>
      
      <div class="sidebar-heading sidebar-m-t">Menu</div>
      <ul class="sidebar-menu">
     <!--    <li class="sidebar-menu-item {{ $dashboards_menu ?? '' ? 'active open' : '' }}">
          <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
            <span class="sidebar-menu-text">Dashboards</span>
            <span class="ml-auto sidebar-menu-toggle-icon"></span>
          </a>
          <ul class="sidebar-submenu collapse {{ $dashboards_menu ?? '' ? 'show' : '' }}" id="dashboards_menu">
            @include('flowdash::partials.dashboards-sidebar-menu')
          </ul>
        </li> -->
       <!--  <li class="sidebar-menu-item {{ $apps_menu ?? '' ? 'active open' : '' }}">
          <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
            <span class="sidebar-menu-text">Apps</span>
            <span class="ml-auto sidebar-menu-toggle-icon"></span>
          </a>
          <ul class="sidebar-submenu collapse {{ $apps_menu ?? '' ? 'show' : '' }}" id="apps_menu">
            @include('flowdash::partials.apps-sidebar-menu')
          </ul>
        </li> -->
        <li class="sidebar-menu-item {{ $pages_menu ?? '' ? 'active open' : '' }}">
          <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
            <span class="sidebar-menu-text">Pages</span>
            <span class="ml-auto sidebar-menu-toggle-icon"></span>
          </a>
          <ul class="sidebar-submenu collapse {{ $pages_menu ?? '' ? 'show' : '' }}" id="pages_menu">
            @include('flowdash::partials.pages-sidebar-menu')
          </ul>
        </li>
     <!--    <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
            <span class="sidebar-menu-text">Layouts</span>
            <span class="ml-auto sidebar-menu-toggle-icon"></span>
          </a>
          <ul class="sidebar-submenu collapse" id="layouts_menu">
            @include('flowdash::partials.layouts-sidebar-menu')
          </ul>
        </li> -->
      </ul>


    </div>
  </div>
</div>
<!-- // END drawer