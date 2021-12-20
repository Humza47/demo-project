<x-admin-layout>
    <div class="row">

        <div class="content-wrapper-before blue-grey lighten-5">
        </div>


        <div class="col s12">
            <div class="container">

                <!-- Basic Kanban App -->
                <section id="kanban-wrapper" class="section">
                    <div class="kanban-overlay"></div>
                    <div class="row">
                        <div class="col s12">
                            <!-- New kanban board add button -->
                            <button type="button" class="btn waves-effect waves-light mb-1 add-kanban-btn"
                                id="add-kanban">
                                <i class='material-icons left'>add</i> Add New Board
                            </button>
                            <!-- kanban container -->
                            <div id="kanban-app"></div>
                        </div>
                    </div>

                    <!-- User new mail right area -->
                    <div class="kanban-sidebar">
                        <div class="card quill-wrapper">
                            <div class="card-content pt-0">
                                <div class="card-header display-flex pb-2">
                                    <h3 class="card-title">UI Design</h3>
                                    <div class="close close-icon">
                                        <i class="material-icons">close</i>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <!-- form start -->
                                <form class="edit-kanban-item mt-10 mb-10">
                                    <div class="input-field">
                                        <input type="text" class="edit-kanban-item-title validate" id="edit-item-title"
                                            placeholder="kanban Title">
                                        <label for="edit-item-title">Card Title</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" class="edit-kanban-item-date datepicker" id="edit-item-date"
                                            value="21/08/2019">
                                        <label for="edit-item-date">Due Date</label>
                                    </div>
                                    <div class="row">
                                        <div class="col s6">
                                            <div class="input-field mt-0">
                                                <small>Label</small>
                                                <select class="browser-default">
                                                    <option class="blue-text">Blue</option>
                                                    <option class="red-text">Red</option>
                                                    <option class="green-text">Green</option>
                                                    <option class="cyan-text">Cyan</option>
                                                    <option class="orange-text">Orange </option>
                                                    <option class="blue-grey-text">Blue-grey</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s6">
                                            <div class="input-field mt-0">
                                                <small>Member</small>
                                                <div class="display-flex">
                                                    <div class="avatar ">
                                                        <img src="images/avatar/avatar-11.png" class="circle"
                                                            height="36" width="36" alt="avtar img holder">
                                                    </div>
                                                    <a class="btn-floating btn-small pulse ml-10">
                                                        <i class="material-icons">add</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="file-field input-field">
                                        <div class="btn btn-file">
                                            <span>File</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                    <!-- Compose mail Quill editor -->
                                    <div class="input-field">
                                        <span>Comment</span>
                                        <div class="snow-container mt-2">
                                            <div class="compose-editor"></div>
                                            <div class="compose-quill-toolbar">
                                                <span class="ql-formats mr-0">
                                                    <button class="ql-bold"></button>
                                                    <button class="ql-italic"></button>
                                                    <button class="ql-underline"></button>
                                                    <button class="ql-link"></button>
                                                    <button class="ql-image"></button>
                                                    <button
                                                        class="btn btn-small cyan btn-comment waves-effect waves-light ml-25">Comment</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="card-action pl-0 pr-0">
                                    <button type="reset"
                                        class="btn-small waves-effect waves-light delete-kanban-item mr-1">
                                        <span>Delete</span>
                                    </button>
                                    <button class="btn-small blue waves-effect waves-light update-kanban-item">
                                        <span>Save</span>
                                    </button>
                                </div>
                                <!-- form start end-->
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Sample Project kanban -->

                <!-- START RIGHT SIDEBAR NAV -->
                <aside id="right-sidebar-nav">
                    <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                        <div class="row">
                            <div class="slide-out-right-title">
                                <div class="col s12 border-bottom-1 pb-0 pt-1">
                                    <div class="row">
                                        <div class="col s2 pr-0 center">
                                            <i class="material-icons vertical-text-middle"><a href="#"
                                                    class="sidenav-close">clear</a></i>
                                        </div>
                                        <div class="col s10 pl-0">
                                            <ul class="tabs">
                                                <li class="tab col s4 p-0">
                                                    <a href="#messages" class="active">
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="#settings">
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="#activity">
                                                        <span>Activity</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row slide-out-right-body pl-3">
                                <div id="messages" class="col s12 pb-0">
                                    <div class="collection border-none mb-0">
                                        <input class="header-search-input mt-4 mb-2" type="text" name="Search"
                                            placeholder="Search Messages" />
                                        <ul class="collection right-sidebar-chat p-0 mb-0">
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-online avatar-50"><img
                                                        src="images/avatar/avatar-7.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">5.00 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-online avatar-50"><img
                                                        src="images/avatar/avatar-1.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Mary Adams</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-off avatar-50"><img
                                                        src="images/avatar/avatar-2.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Caleb Richards</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-online avatar-50"><img
                                                        src="images/avatar/avatar-3.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Caleb Richards</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">9.00 PM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-online avatar-50"><img
                                                        src="images/avatar/avatar-4.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">June Lane</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-off avatar-50"><img
                                                        src="images/avatar/avatar-5.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Edward Fletcher</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">5.15 PM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-online avatar-50"><img
                                                        src="images/avatar/avatar-6.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Crystal Bates</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">8.00 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-off avatar-50"><img
                                                        src="images/avatar/avatar-7.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Nathan Watts</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">9.53 PM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-off avatar-50"><img
                                                        src="images/avatar/avatar-8.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Willard Wood</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">4.20 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-online avatar-50"><img
                                                        src="images/avatar/avatar-1.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Ronnie Ellis</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">5.20 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-online avatar-50"><img
                                                        src="images/avatar/avatar-9.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Daniel Russell</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank
                                                        you</p>
                                                </div>
                                                <span class="secondary-content medium-small">12.00 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-off avatar-50"><img
                                                        src="images/avatar/avatar-10.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Sarah Graves</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">11.14 PM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-off avatar-50"><img
                                                        src="images/avatar/avatar-11.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Andrew Hoffman</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">7.30 PM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                data-target="slide-out-chat">
                                                <span class="avatar-status avatar-online avatar-50"><img
                                                        src="images/avatar/avatar-12.png" alt="avatar" />
                                                    <i></i>
                                                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Camila Lynch</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it
                                                    </p>
                                                </div>
                                                <span class="secondary-content medium-small">2.00 PM</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="settings" class="col s12">
                                    <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                    <ul class="collection border-none">
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Notifications</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Show recent activity</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Show recent activity</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Show Task statistics</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Show your emails</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Email Notifications</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                    <ul class="collection border-none">
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>System Logs</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Error Reporting</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Applications Logs</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Backup Servers</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Audit Logs</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="activity" class="col s12">
                                    <div class="activity">
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-green active">
                                                <div class="timeline-time">Today</div>
                                                <h6 class="timeline-title">Homepage mockup design</h6>
                                                <p class="timeline-text">Melissa liked your activity.</p>
                                                <div class="timeline-content orange-text">Important</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-cyan active">
                                                <div class="timeline-time">10 min</div>
                                                <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
                                                <p class="timeline-text">Here are some news feed interactions
                                                    concepts.</p>
                                                <div class="timeline-content green-text">Resolved</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-red active">
                                                <div class="timeline-time">30 mins</div>
                                                <h6 class="timeline-title">12 new users registered</h6>
                                                <p class="timeline-text">Here are some news feed interactions
                                                    concepts.</p>
                                                <div class="timeline-content">
                                                    <img src="images/icon/pdf.png" alt="document" height="30" width="25"
                                                        class="mr-1">Registration.doc
                                                </div>
                                            </li>
                                            <li class="timeline-items timeline-icon-indigo active">
                                                <div class="timeline-time">2 Hrs</div>
                                                <h6 class="timeline-title">Tina is attending your activity</h6>
                                                <p class="timeline-text">Here are some news feed interactions
                                                    concepts.</p>
                                                <div class="timeline-content">
                                                    <img src="images/icon/pdf.png" alt="document" height="30" width="25"
                                                        class="mr-1">Activity.doc
                                                </div>
                                            </li>
                                            <li class="timeline-items timeline-icon-orange">
                                                <div class="timeline-time">5 hrs</div>
                                                <h6 class="timeline-title">Josh is now following you</h6>
                                                <p class="timeline-text">Here are some news feed interactions
                                                    concepts.</p>
                                                <div class="timeline-content red-text">Pending</div>
                                            </li>
                                        </ul>
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-green active">
                                                <div class="timeline-time">Just now</div>
                                                <h6 class="timeline-title">New order received urgent</h6>
                                                <p class="timeline-text">Melissa liked your activity.</p>
                                                <div class="timeline-content orange-text">Important</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-cyan active">
                                                <div class="timeline-time">05 min</div>
                                                <h6 class="timeline-title">System shutdown.</h6>
                                                <p class="timeline-text">Here are some news feed interactions
                                                    concepts.</p>
                                                <div class="timeline-content blue-text">Urgent</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-red">
                                                <div class="timeline-time">20 mins</div>
                                                <h6 class="timeline-title">Database overloaded 89%</h6>
                                                <p class="timeline-text">Here are some news feed interactions
                                                    concepts.</p>
                                                <div class="timeline-content">
                                                    <img src="images/icon/pdf.png" alt="document" height="30" width="25"
                                                        class="mr-1">Database-log.doc
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-green active">
                                                <div class="timeline-time">10 min</div>
                                                <h6 class="timeline-title">System error</h6>
                                                <p class="timeline-text">Melissa liked your activity.</p>
                                                <div class="timeline-content red-text">Error</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-cyan">
                                                <div class="timeline-time">1 min</div>
                                                <h6 class="timeline-title">Production server down.</h6>
                                                <p class="timeline-text">Here are some news feed interactions
                                                    concepts.</p>
                                                <div class="timeline-content blue-text">Urgent</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Out Chat -->
                    <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                        <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                            <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
                        </li>
                        <li class="chat-body">
                            <ul class="collection">
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"><img
                                            src="images/avatar/avatar-7.png" alt="avatar" />
                                    </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">hello!</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                    data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">How can we help? We're here for you!</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"><img
                                            src="images/avatar/avatar-7.png" alt="avatar" />
                                    </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">I am looking for the best admin template.?</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                    data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Materialize admin is the responsive materializecss
                                            admin template.</p>
                                    </div>
                                </li>

                                <li class="collection-item display-grid width-100 center-align">
                                    <p>8:20 a.m.</p>
                                </li>

                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"><img
                                            src="images/avatar/avatar-7.png" alt="avatar" />
                                    </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">Ohh! very nice</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                    data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Thank you.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"><img
                                            src="images/avatar/avatar-7.png" alt="avatar" />
                                    </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">How can I purchase it?</p>
                                    </div>
                                </li>

                                <li class="collection-item display-grid width-100 center-align">
                                    <p>9:00 a.m.</p>
                                </li>

                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                    data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">From ThemeForest.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                    data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Only $24</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"><img
                                            src="images/avatar/avatar-7.png" alt="avatar" />
                                    </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">Ohh! Thank you.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"><img
                                            src="images/avatar/avatar-7.png" alt="avatar" />
                                    </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">I will purchase it for sure.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                    data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Great, Feel free to get in touch on</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                    data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="center-align chat-footer">
                            <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
                                <div class="input-field">
                                    <input id="icon_prefix" type="text" class="search" />
                                    <label for="icon_prefix">Type here..</label>
                                    <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
                                </div>
                            </form>
                        </li>
                    </ul>
                </aside>
                <!-- END RIGHT SIDEBAR NAV -->
            </div>

            <div class="content-overlay"></div>
        </div>
    </div>
</x-admin-layout>
