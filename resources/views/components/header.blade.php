<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed ">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock  navbar-light ">
            <div class="nav-wrapper">
                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="material-icons">search</i>
                    <input class="header-search-input z-depth-2" type="text" name="Search"
                        placeholder="Explore Materialize" data-search="template-list">
                    <ul class="search-list collection display-none"></ul>
                </div>
                <ul class="navbar-list right">
                    <li class="hide-on-med-and-down">
                        <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                            <i class="material-icons">settings_overscan</i>
                        </a>
                    </li>
                    <li class="hide-on-large-only search-input-wrapper">
                        <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
                            <i class="material-icons">search</i>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                            data-target="profile-dropdown">
                            <span class="avatar-status avatar-online">
                                <img src="images/avatar/avatar-7.png" alt="avatar"><i></i>
                            </span>
                        </a>
                    </li>
                </ul>
                {{-- <!-- translation-button-->
      <ul class="dropdown-content" id="translation-dropdown">
        <li class="dropdown-item">
          <a class="grey-text text-darken-1" href="index.html" data-language="en">
            <i class="flag-icon flag-icon-gb"></i>
            English
          </a>
        </li>
        <li class="dropdown-item">
          <a class="grey-text text-darken-1" href="index.html" data-language="fr">
            <i class="flag-icon flag-icon-fr"></i>
            French
          </a>
        </li>
        <li class="dropdown-item">
          <a class="grey-text text-darken-1" href="index.html" data-language="pt">
            <i class="flag-icon flag-icon-pt"></i>
            Portuguese
          </a>
        </li>
        <li class="dropdown-item">
          <a class="grey-text text-darken-1" href="index.html" data-language="de">
            <i class="flag-icon flag-icon-de"></i>
            German
          </a>
        </li>
      </ul> --}}
                <!-- notifications-dropdown-->

                <!-- profile-dropdown-->
                <ul class="dropdown-content" id="profile-dropdown">
                    <li>
                        <a class="grey-text text-darken-1" href="{{ route('profiler') }}">
                            <i class="material-icons">person_outline</i>
                            Profile
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="grey-text text-darken-1" href="user-lock-screen.html">
                            <i class="material-icons">lock_outline</i>
                            Lock
                        </a>
                    </li>
                    <li>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="grey-text text-darken-1">
                                <i class="material-icons">keyboard_tab</i>
                                Logout
                            </button>

                        </form>
                    </li>
                </ul>
            </div>
    </div>
    <!-- search ul  -->

    <ul class="display-none" id="page-search-title">
        <li class="auto-suggestion-title">
            <a class="collection-item" href="#">
                <h6 class="search-title">PAGES</h6>
            </a>
        </li>
    </ul>
    <ul class="display-none" id="search-not-found">
        <li class="auto-suggestion">
            <a class="collection-item display-flex align-items-center" href="#">
                <span class="material-icons">error_outline</span>
                <span class="member-info">No results found.</span>
            </a>
        </li>
    </ul>
</header>
