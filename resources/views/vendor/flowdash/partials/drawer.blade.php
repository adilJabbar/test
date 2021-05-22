drawer -->
<div class="mdk-drawer js-mdk-drawer {{ $drawerClass ?? '' }}" data-align="{{ $drawerAlign ?? 'start' }}" id="default-drawer">
  <div class="mdk-drawer__content">
    <div class="sidebar sidebar-left sidebar-p-t {{ config("flowdash.sidebarClass.{$layout}") }}" data-perfect-scrollbar>
      
      <div class="sidebar-heading sidebar-m-t">Menu</div>
      <ul class="sidebar-menu">

        <li class="sidebar-menu-item {{ $pages_menu ?? '' ? 'active open' : '' }}">
          <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
            <span class="sidebar-menu-text">Home Page Managment</span>
            <span class="ml-auto sidebar-menu-toggle-icon"></span>
          </a>
          <ul class="sidebar-submenu collapse {{ $pages_menu ?? '' ? 'show' : '' }}" id="pages_menu">
            @include('flowdash::partials.pages-sidebar-menu')
          </ul>
        </li>
  
      </ul>
         <ul class="sidebar-menu">

        <li class="sidebar-menu-item {{ $pages_menu ?? '' ? 'active open' : '' }}">
          <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menuu">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
            <span class="sidebar-menu-text">About Us</span>
            <span class="ml-auto sidebar-menu-toggle-icon"></span>
          </a>
          <ul class="sidebar-submenu collapse {{ $pages_menu ?? '' ? 'show' : '' }}" id="pages_menuu">
           <li class="sidebar-menu-item {{ activeClass('our-mission') }}">
              <a class="sidebar-menu-button" href="{{ url('edit-our-mission') }}">
                <span class="sidebar-menu-text">Our Mission</span>
              
              </a>
            </li>
            <li class="sidebar-menu-item {{ activeClass('our-mission') }}">
              <a class="sidebar-menu-button" href="{{ url('edit-our-vision') }}">
                <span class="sidebar-menu-text">Our Vision</span>
              
              </a>
            </li>
             <li class="sidebar-menu-item {{ activeClass('our-mission') }}">
              <a class="sidebar-menu-button" href="{{ url('edit-who-we-are') }}">
                <span class="sidebar-menu-text">Who We Are</span>
              
              </a>
            </li>
          </ul>
        </li>
  
      </ul>

         <ul class="sidebar-menu">

        <li class="sidebar-menu-item {{ $pages_menu ?? '' ? 'active open' : '' }}">
          <a class="sidebar-menu-button" href="{{ url('edit-contact') }}">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
            <span class="sidebar-menu-text">Contact</span>
         
          </a>
        
        </li>
  
      </ul>


       <ul class="sidebar-menu">

        <li class="sidebar-menu-item {{ $pages_menu ?? '' ? 'active open' : '' }}">
          <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menuuu">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
            <span class="sidebar-menu-text">Pages</span>
            <span class="ml-auto sidebar-menu-toggle-icon"></span>
          </a>
          <ul class="sidebar-submenu collapse {{ $pages_menu ?? '' ? 'show' : '' }}" id="pages_menuuu">
           <li class="sidebar-menu-item {{ activeClass('blank') }}">
              <a class="sidebar-menu-button" href="{{ route('blank') }}">
                <span class="sidebar-menu-text">About Us</span>
              
              </a>
            </li>
            <li class="sidebar-menu-item {{ activeClass('blank') }}">
              <a class="sidebar-menu-button" href="{{ route('blank') }}">
                <span class="sidebar-menu-text">Contact Us</span>
              
              </a>
            </li>
          </ul>
        </li>
  
      </ul>


 

    
<!-- 
      <div class="sidebar-p-a">
        <a href="" class="btn btn-primary btn-block">Purchase &dollar;35</a>
      </div> -->

    </div>
  </div>
</div>
<!-- // END drawer