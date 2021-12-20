<x-admin-layout>
    <div class="row">

        <div class="content-wrapper-before blue-grey lighten-5">
        </div>

        <div class="pt-3 pb-1" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>User Profile Page</span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item ">
                                <a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                User Profile Page </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12">
            <div class="container">

                <div class="section">
                    <div class="row user-profile mt-1 ml-0 mr-0">
                        <img class="responsive-img" alt="" src="images/gallery/profile-bg.png">
                    </div>
                    <div class="section" id="user-profile">
                        <div class="row">
                            <!-- User Profile Feed -->
                            <div class="col s12 m4 l3 user-section-negative-margin">
                                <div class="row">
                                    <div class="col s12 center-align">
                                        <img class="responsive-img circle z-depth-5" width="120"
                                            src="images/user/12.jpg" alt="">
                                        <br>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col s12">
                                        <h6>Boosts</h6>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle">
                                        <a href="#"><img class="responsive-img circle" src="images/user/1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Micheal S. Castilleja</p>
                                        </a>
                                        <p class="m-0 amber-text"><span
                                                class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span> <span
                                                class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle">
                                        <a href="#"><img class="responsive-img circle" src="images/user/11.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Thomas A. Carranza</p>
                                        </a>
                                        <p class="m-0 amber-text"><span
                                                class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span> <span
                                                class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle">
                                        <a href="#"><img class="responsive-img circle" src="images/user/5.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Micheal Bryant</p>
                                        </a>
                                        <p class="m-0 amber-text"><span
                                                class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span> <span
                                                class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle pb-2">
                                        <a href="#"><img class="responsive-img circle" src="images/user/8.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Wiley J. Bryant</p>
                                        </a>
                                        <p class="m-0 amber-text"><span
                                                class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span> <span
                                                class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- User Post Feed -->
                            <div class="col s12 m8 l6">
                                <div class="row">
                                    <div class="card user-card-negative-margin z-depth-0" id="feed">
                                        <div class="card-content card-border-gray">
                                            <div class="row">
                                                <div class="col s12">
                                                    <h5>Suzanne Martin</h5>
                                                    <p>Senior Designer <span class="amber-text"><span
                                                                class="material-icons star-width vertical-align-middle">star_rate</span>
                                                            <span
                                                                class="material-icons star-width vertical-align-middle">star_rate</span>
                                                            <span
                                                                class="material-icons star-width vertical-align-middle">star_rate</span>
                                                            <span
                                                                class="material-icons star-width vertical-align-middle">star_rate</span>
                                                            <span
                                                                class="material-icons star-width vertical-align-middle">star_rate</span></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <ul class="tabs card-border-gray mt-4 vertical-align-middle">
                                                        <li class="tab col m0 s12 p-0">
                                                            <a href="#test4">
                                                                <i class="material-icons">attach_file</i>
                                                                Resume
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a
                        class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i
                            class="material-icons">add</i></a>
                    <ul>
                        <li><a href="css-helpers.html" class="btn-floating blue"><i
                                    class="material-icons">help_outline</i></a>
                        </li>
                        <li><a href="cards-extended.html" class="btn-floating green"><i
                                    class="material-icons">widgets</i></a>
                        </li>
                        <li><a href="app-calendar.html" class="btn-floating amber"><i
                                    class="material-icons">today</i></a>
                        </li>
                        <li><a href="{{ route('mail') }}" class="btn-floating red"><i
                                    class="material-icons">mail_outline</i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-overlay"></div>
        </div>
    </div>
</x-admin-layout>
