<x-admin-layout>
    <div class="row">

        <div class="content-wrapper-before blue-grey lighten-5">
        </div>


        <div class="col s12">
            <div class="container">

                <!-- Add new contact popup -->
                <div class="contact-overlay"></div>
                <div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top">
                    <a class="btn-floating btn-large primary-text gradient-shadow contact-sidebar-trigger"
                        href="#modal1">
                        <i class="material-icons">person_add</i>
                    </a>
                </div>
                <!-- Add new contact popup Ends-->

                <!-- Sidebar Area Starts -->
                <div class="sidebar-left sidebar-fixed">
                    <div class="sidebar">
                        <div class="sidebar-content">
                            <div class="sidebar-header">
                                <div class="sidebar-details">
                                    <h5 class="m-0 sidebar-title"><i
                                            class="material-icons app-header-icon text-top">perm_identity</i> Contacts
                                    </h5>
                                    <div class="mt-10 pt-2">
                                        <p class="m-0 subtitle font-weight-700">Total number of contacts</p>
                                        {{-- <p class="m-0 text-muted">1457 Contacts</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div id="sidebar-list"
                                class="sidebar-menu list-group position-relative animate fadeLeft delay-1">
                                <div class="sidebar-list-padding app-sidebar sidenav" id="contact-sidenav">
                                    <ul class="contact-list display-grid">
                                        <li class="sidebar-title">Filters</li>
                                        <li class="active"><a href="javascript:void(0)"
                                                class="text-sub"><i class="material-icons mr-2">
                                                    perm_identity </i> All
                                                Contact</a></li>

                                    </ul>
                                </div>
                            </div>
                            <a href="#" data-target="contact-sidenav" class="sidenav-trigger hide-on-large-only"><i
                                    class="material-icons">menu</i></a>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Area Ends -->

                <!-- Content Area Starts -->
                <div class="content-area content-right">
                    <div class="app-wrapper">
                        <div class="datatable-search">
                            <i class="material-icons mr-2 search-icon">search</i>
                            <input type="text" placeholder="Search Contact" class="app-filter" id="global_filter">
                        </div>
                        <div id="button-trigger" class="card card card-default scrollspy border-radius-6 fixed-width">
                            <div class="card-content p-0">
                                <table id="data-table-contact" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="background-image-none center-align">
                                                <label>
                                                    <input type="checkbox" onClick="toggle(this)" />
                                                    <span></span>
                                                </label>
                                            </th>
                                            <th>User</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Favorite</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center-align contact-checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" name="foo" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td><span class="avatar-contact avatar-online"><img
                                                        src="images/avatar/avatar-1.png" alt="avatar"></span></td>
                                            <td>John</td>
                                            <td>john@domain.com</td>
                                            <td>202-555-0119</td>
                                            <td><span class="favorite"><i class="material-icons"> star_border
                                                    </i></span></td>
                                            <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Area Ends -->

                <!--  Contact sidebar -->
                <div class="contact-compose-sidebar">
                    <div class="card quill-wrapper">
                        <div class="card-content pt-0">
                            <div class="card-header display-flex pb-2">
                                <h3 class="card-title contact-title-label">Create New Contact</h3>
                                <div class="close close-icon">
                                    <i class="material-icons">close</i>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <!-- form start -->
                            <form class="edit-contact-item mb-5 mt-5">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"> perm_identity </i>
                                        <input id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"> perm_identity </i>
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"> business </i>
                                        <input id="company" type="text" class="validate">
                                        <label for="company">Company</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"> business_center </i>
                                        <input id="business" type="text" class="validate">
                                        <label for="business">Job Title</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"> email </i>
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"> call </i>
                                        <input id="phone" type="text" class="validate">
                                        <label for="phone">Phone</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"> note </i>
                                        <input id="notes" type="text" class="validate">
                                        <label for="notes">Notes</label>
                                    </div>
                                </div>
                            </form>
                            <div class="card-action pl-0 pr-0 right-align">
                                <button class="btn-small waves-effect waves-light add-contact">
                                    <span>Add Contact</span>
                                </button>
                                <button class="btn-small waves-effect waves-light update-contact display-none">
                                    <span>Update Contact</span>
                                </button>
                            </div>
                            <!-- form start end-->
                        </div>
                    </div>
                </div>

                <!-- END RIGHT SIDEBAR NAV -->
            </div>

            <div class="content-overlay"></div>
        </div>
    </div>
</x-admin-layout>
