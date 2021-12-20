<x-admin-layout>
    <div class="row">
        <div class="content-wrapper-before blue-grey lighten-5">
        </div>
        <div class="col s12">
            <div class="container">
                <div class="section app-file-manager-wrapper">
                    <!-- File Manager app overlay -->
                    <div class="app-file-overlay"></div>
                    <!-- /File Manager app overlay -->
                    <!-- sidebar left start -->
                    <div class="sidebar-left">
                        <!--left sidebar of file manager start -->
                        <div class="app-file-sidebar display-flex">
                            <!-- App File sidebar - Left section Starts -->
                            <div class="app-file-sidebar-left">
                                <!-- sidebar close icon starts -->
                                <span class="app-file-sidebar-close hide-on-med-and-up"><i
                                        class="material-icons">close</i></span>
                                <!-- sidebar close icon ends -->
                                <div class="input-field add-new-file mt-0">
                                    <!-- Add File Button -->
                                    <button class="add-file-btn btn btn-block waves-effect waves-light mb-10">
                                        <i class="material-icons">add</i>
                                        <span>Add File</span>
                                    </button>
                                    <!-- file input  -->
                                    <div class="getfileInput">
                                        <input type="file" id="getFile">
                                    </div>
                                </div>
                                <div class="app-file-sidebar-content">
                                    <!-- App File Left Sidebar - Drive Content Starts -->
                                    <span class="app-file-label">My Drive</span>
                                    <div class="collection file-manager-drive mt-3">
                                        <a href="#" class="collection-item file-item-action active">
                                            <div class="fonticon-wrap display-inline mr-3">
                                                <i class="material-icons">folder_open</i>
                                            </div>
                                            <span>All Files</span>
                                            <span class="chip red lighten-5 float-right red-text">2</span>
                                        </a>

                                        <a href="#" class="collection-item file-item-action">
                                            <div class="fonticon-wrap display-inline mr-3">
                                                <i class="material-icons">delete</i>
                                            </div>
                                            <span> Deleted Files</span>
                                        </a>
                                    </div>
                                    <!-- App File Left Sidebar - Drive Content Ends -->

                                    <!-- App File Left Sidebar - Labels Content Starts -->
                                    <span class="app-file-label">Labels</span>
                                    <div class="collection file-manager-drive mt-3">
                                        <a href="#" class="collection-item file-item-action">
                                            <div class="fonticon-wrap display-inline mr-3">
                                                <i class="material-icons">content_paste</i>
                                            </div>
                                            <span> Documents</span>
                                        </a>
                                        <a href="#" class="collection-item file-item-action">
                                            <div class="fonticon-wrap display-inline mr-3">
                                                <i class="material-icons">filter</i>
                                            </div>
                                            <span>Images</span>
                                        </a>
                                        <a href="#" class="collection-item file-item-action">
                                            <div class="fonticon-wrap display-inline mr-3">
                                                <i class="material-icons">ondemand_video</i>
                                            </div>
                                            <span>Videos</span>
                                        </a>
                                        <a href="#" class="collection-item file-item-action">
                                            <div class="fonticon-wrap display-inline mr-3">
                                                <i class="material-icons">music_note</i>
                                            </div>
                                            <span> Audio</span>
                                        </a>
                                        <a href="#" class="collection-item file-item-action">
                                            <div class="fonticon-wrap display-inline mr-3">
                                                <i class="material-icons">storage</i>
                                            </div>
                                            <span>Zip Files</span>
                                        </a>
                                    </div>
                                    <!-- App File Left Sidebar - Labels Content Ends -->
                                </div>
                            </div>
                        </div>
                        <!--left sidebar of file manager start -->
                    </div>
                    <!--/ sidebar left end -->
                    <!-- content-right start -->
                    <div class="content-right">
                        <!-- file manager main content start -->
                        <div class="app-file-area">
                            <!-- File App Content Area -->
                            <!-- App File Header Starts -->
                            <div class="app-file-header">
                                <!-- Header search bar starts -->
                                <div class="sidebar-toggle show-on-medium-and-down mr-1 ml-1">
                                    <i class="material-icons">menu</i>
                                </div>
                                <div class="app-file-header-search">
                                    <div class="input-field m-0">
                                        <i class="material-icons prefix">search</i>
                                        <input type="search" id="email-search" placeholder="Search files">
                                    </div>
                                </div>
                                <!-- Header search bar Ends -->

                                <!-- Header Icons Starts -->
                                <div class="app-file-header-icons display-flex align-items-center">
                                    <div class="fonticon-wrap display-inline">
                                        <i class="material-icons">person_outline</i>
                                    </div>
                                    <div class="fonticon-wrap display-inline">
                                        <i class="material-icons">delete</i>
                                    </div>
                                    <div class="fonticon-wrap display-inline ">
                                        <i class="material-icons">more_vert</i>
                                    </div>
                                </div>
                                <!-- Header Icons Ends -->
                            </div>
                            <!-- App File Header Ends -->

                            <!-- App File Content Starts -->
                            <div class="app-file-content">
                                <h6 class="font-weight-700 mb-3">All Files</h6>

                                <!-- App File - Files Section Starts -->
                                <label class="app-file-label">Files</label>
                                <div class="row app-file-files">
                                    <div class="col xl3 l6 m3 s6">
                                        <div class="card box-shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo grey lighten-4">
                                                    <div class="fonticon">
                                                        <i class="material-icons">more_vert</i>
                                                    </div>
                                                    <img class="recent-file" src="images/icon/pdf.png" height="38"
                                                        width="30" alt="Card image cap">
                                                </div>
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-weight-700">Banner.jpg</div>
                                                    <div class="app-file-size">13kb</div>
                                                    <div class="app-file-type">Image File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col xl3 l6 m3 s6">
                                        <div class="card box-shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo grey lighten-4">
                                                    <div class="fonticon">
                                                        <i class="material-icons">more_vert</i>
                                                    </div>
                                                    <img class="recent-file" src="images/icon/psd.png" height="38"
                                                        width="30" alt="Card image cap">
                                                </div>
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-weight-700">Management.docx</div>
                                                    <div class="app-file-size">15.60mb</div>
                                                    <div class="app-file-type">Word Document</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col xl3 l6 m3 s6">
                                        <div class="card box-shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo grey lighten-4">
                                                    <div class="fonticon">
                                                        <i class="material-icons">more_vert</i>
                                                    </div>
                                                    <img class="recent-file" src="images/icon/doc.png" height="38"
                                                        width="30" alt="Card image cap">
                                                </div>
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-weight-700">Thunder.mp3</div>
                                                    <div class="app-file-size">3.4mb</div>
                                                    <div class="app-file-type">Mp3 File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col xl3 l6 m3 s6">
                                        <div class="card box-shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo grey lighten-4">
                                                    <div class="fonticon">
                                                        <i class="material-icons">more_vert</i>
                                                    </div>
                                                    <img class="recent-file" src="images/icon/sketch.png"
                                                        height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-weight-700">Dashboard.sketch</div>
                                                    <div class="app-file-size">108kb</div>
                                                    <div class="app-file-type">Sketch File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row app-file-files">
                                    <div class="col xl3 l6 m3 s6">
                                        <div class="card box-shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo grey lighten-4">
                                                    <div class="fonticon">
                                                        <i class="material-icons">more_vert</i>
                                                    </div>
                                                    <img class="recent-file" src="images/icon/psd.png" height="38"
                                                        width="30" alt="Card image cap">
                                                </div>
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-weight-700">Logo.psd</div>
                                                    <div class="app-file-size">10.6kb</div>
                                                    <div class="app-file-type">Photoshop File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col xl3 l6 m3 s6">
                                        <div class="card box-shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo grey lighten-4">
                                                    <div class="fonticon">
                                                        <i class="material-icons">more_vert</i>
                                                    </div>
                                                    <img class="recent-file" src="images/icon/sketch.png"
                                                        height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-weight-700">Logo_Design.sketch</div>
                                                    <div class="app-file-size">256.5kb</div>
                                                    <div class="app-file-type">Sketch File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col xl3 l6 m3 s6">
                                        <div class="card box-shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo grey lighten-4">
                                                    <div class="fonticon">
                                                        <i class="material-icons">more_vert</i>
                                                    </div>
                                                    <img class="recent-file" src="images/icon/doc.png" height="38"
                                                        width="30" alt="Card image cap">
                                                </div>
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-weight-700">Bootstrap.xyz</div>
                                                    <div class="app-file-size">0.0kb</div>
                                                    <div class="app-file-type">Unknown File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col xl3 l6 m3 s6">
                                        <div class="card box-shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo grey lighten-4">
                                                    <div class="fonticon">
                                                        <i class="material-icons">more_vert</i>
                                                    </div>
                                                    <img class="recent-file" src="images/icon/pdf.png" height="38"
                                                        width="30" alt="Card image cap">
                                                </div>
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-weight-700">Read_Me.pdf</div>
                                                    <div class="app-file-size">10.5kb</div>
                                                    <div class="app-file-type">PDF File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- App File - Files Section Ends -->
                            </div>
                        </div>

                        <!-- file manager main content end  -->
                    </div>
                    <!-- content-right end -->
                    <!-- App File sidebar - Right section Starts -->
                    <div class="app-file-sidebar-info">
                        <div class="card box-shadow-none m-0 pb-1">
                            <div class="card-header display-flex justify-content-between align-items-center">
                                <h6 class="m-0">Document.pdf</h6>
                                <div class="app-file-action-icons display-flex align-items-center">
                                    <i class="material-icons mr-10">delete</i>
                                    <i class="material-icons close-icon">close</i>
                                </div>
                            </div>
                            <div class="card-content">
                                <ul class="tabs tabs-fixed-width mb-1">
                                    <li class="tab mr-1 pr-1">
                                        <a class="active display-flex align-items-center" id="details-tab"
                                            href="#details">
                                            <i class="material-icons mr-1">content_paste</i>
                                            <span>Details</span>
                                        </a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="details-tab active" id="details">
                                        <div class="display-flex align-items-center flex-column pb-2 pt-4">
                                            <img src="images/icon/pdf.png" alt="PDF" height="42" width="35"
                                                class="mt-5 mb-5">
                                            <p class="mt-4">15.3mb</p>
                                        </div>
                                        <div class="divider mt-5 mb-5"></div>
                                        <div class="pt-6">
                                            <span class="app-file-label">File</span>
                                            <span class="app-file-label">Info</span>
                                            <div class="display-flex justify-content-between align-items-center mt-6">
                                                <p>Type</p>
                                                <p class="font-weight-700">PDF</p>
                                            </div>
                                            <div class="display-flex justify-content-between align-items-center mt-6">
                                                <p>Size</p>
                                                <p class="font-weight-700">15.6mb</p>
                                            </div>
                                            <div class="display-flex justify-content-between align-items-center mt-6">
                                                <p>Location</p>
                                                <p class="font-weight-700">Files > Documents</p>
                                            </div>
                                            <div class="display-flex justify-content-between align-items-center mt-6">
                                                <p>Owner</p>
                                                <p class="font-weight-700">Elnora Reese</p>
                                            </div>
                                            <div class="display-flex justify-content-between align-items-center mt-6">
                                                <p>Modified</p>
                                                <p class="font-weight-700">September 4 2019</p>
                                            </div>
                                            <div class="display-flex justify-content-between align-items-center mt-6">
                                                <p>Opened</p>
                                                <p class="font-weight-700">July 8, 2019</p>
                                            </div>
                                            <div class="display-flex justify-content-between align-items-center mt-6">
                                                <p>Created</p>
                                                <p class="font-weight-700">July 1, 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- App File sidebar - Right section Ends -->
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</x-admin-layout>
