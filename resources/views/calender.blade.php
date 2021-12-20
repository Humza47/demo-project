<x-admin-layout>
    <div class="row">

        <div class="content-wrapper-before blue-grey lighten-5">
        </div>
        <div class="pt-3 pb-1" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>Calendar</span></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <!-- Full Calendar -->
                <div id="app-calendar">
                    <div class="row">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">
                                        Basic Calendar
                                    </h4>
                                    <div id="basic-calendar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">
                                        External Dragging
                                    </h4>
                                    <div class="row">
                                        <div class="col m3 s12">
                                            <div id='external-events'>
                                                <h5>Draggable Events</h5>
                                                <div class="fc-events-container mb-5">
                                                    <div class='fc-event' data-color='#009688'>All Day Event</div>
                                                    <div class='fc-event' data-color='#4CAF50'>Long Event</div>
                                                    <div class='fc-event' data-color='#00bcd4'>Meeting</div>
                                                    <div class='fc-event' data-color='#ff5722'>Birthday party</div>
                                                    <div class='fc-event' data-color='#9c27b0'>Lunch</div>
                                                    <div class='fc-event' data-color='#e51c23'>Conference Meeting</div>
                                                    <div class='fc-event' data-color='#e91e63'>Party</div>
                                                    <div class='fc-event' data-color='#3f51b5'>Happy Hour</div>
                                                    <div class='fc-event' data-color='#ffc107'>Dance party</div>
                                                    <div class='fc-event' data-color='#4a148c'>Dinner</div>
                                                    <p>
                                                        <label>
                                                            <input type="checkbox" id="drop-remove" />
                                                            <span>Remove After Drop</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col m9 s12">
                                            <div id='fc-external-drag'></div>
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
                        {{-- <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a>
      </li> --}}
                        <li><a href="{{ route('kanban') }}" class="btn-floating green"><i
                                    class="material-icons">widgets</i></a>
                        </li>
                        <li><a href="{{ route('calender') }}" class="btn-floating amber"><i
                                    class="material-icons">today</i></a></li>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-overlay"></div>
        </div>
    </div>
</x-admin-layout>
