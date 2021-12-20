 <aside
     class="sidenav-main nav-expanded nav-lock nav-collapsible gradient-45deg-deep-purple-blue sidenav-gradient   sidenav-active-rounded  sidenav-dark">
     <div class="brand-sidebar">
         <h1 class="logo-wrapper">
             <a class="brand-logo darken-1" href="index.html">
                 <img class="show-on-medium-and-down hide-on-med-and-up" src="images/logo/materialize-logo-color.png"
                     alt="materialize logo" />
                 <img class="hide-on-med-and-down" src="images/logo/materialize-logo.png" alt="materialize logo" />

                 <span class="logo-text hide-on-med-and-down">
                     GYM
                 </span>
             </a>
             <a class="navbar-toggler" href="javascript:void(0)"><i class="material-icons">radio_button_checked</i></a>
         </h1>
     </div>
     <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
         data-menu="menu-navigation" data-collapsible="menu-accordion">
         <li class="bold ">
             <div class="collapsible-body">
                 <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                     <li class="">
                         <a href="javascript:void(0) " class="collapsible-header waves-effect waves-cyan ">
                             <i class="material-icons">radio_button_unchecked</i>
                             <span data-i18n="Vertical">Vertikale</span>
                         </a>
                         <div class="collapsible-body">
                             <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                                 <li class="">
                                     <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/"
                                         class=" ">
                                         <i class="material-icons">radio_button_unchecked</i>
                                         <span data-i18n="Modern Menu">Modernes Menü</span>
                                     </a>
                                 </li>

                                 <li class="">
                                     <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/"
                                         class=" ">
                                         <i class="material-icons">radio_button_unchecked</i>
                                         <span data-i18n="Navbar Dark">Navbar Dark</span>
                                     </a>
                                 </li>

                                 <li class="">
                                     <a href="index.html" class=" ">
                                         <i class="material-icons">radio_button_unchecked</i>
                                         <span data-i18n="Gradient Menu">Verlaufsmenü</span>
                                     </a>
                                 </li>

                                 <li class="">
                                     <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-4/"
                                         class=" ">
                                         <i class="material-icons">radio_button_unchecked</i>
                                         <span data-i18n="Dark Menu">Dunkles Menü</span>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </li>

                     <li class="">
                         <a href="javascript:void(0) " class="collapsible-header waves-effect waves-cyan ">
                             <i class="material-icons">radio_button_unchecked</i>
                             <span data-i18n="Horizontal">Horizontal</span>
                         </a>
                         <div class="collapsible-body">
                             <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                                 <li class="">
                                     <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-5/"
                                         class=" ">
                                         <i class="material-icons">radio_button_unchecked</i>
                                         <span data-i18n="Horizontal Menu">Horizontales Menü</span>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                 </ul>
             </div>
         </li>
         <li class="navigation-header">
             <a class="navigation-header-text">Applications</a>
             <i class="navigation-header-icon material-icons">more_horiz</i>
         </li>
         <li class="">
            <a href="{{ route('dashboard') }}" class=" ">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Modern">Dashbaord</span>
            </a>
          </li>
         <li class="bold ">
            <a class="waves-effect waves-cyan " href="{{ route('kanban') }}">
                <i class="material-icons">format_list_bulleted</i>
                <span class="menu-title" data-i18n="Kanban">Trello Boards</span>
            </a>
        </li>
         <li class="bold ">
             <a class="waves-effect waves-cyan " href="{{ route('filemanager') }}">
                 <i class="material-icons">content_paste</i>
                 <span class="menu-title" data-i18n="File Manager">File Manager</span>
             </a>
         </li>
         <li class="bold ">
             <a class="waves-effect waves-cyan " href="{{ route('contacts') }}">
                 <i class="material-icons">import_contacts</i>
                 <span class="menu-title" data-i18n="Contacts">Contacts</span>
             </a>
         </li>
         <li class="bold ">
             <a class="waves-effect waves-cyan " href="{{ route('calender') }}">
                 <i class="material-icons">today</i>
                 <span class="menu-title" data-i18n="Calendar">Calender</span>
             </a>
         </li>
 </aside>
