<div class="nav-header">
    <a href="dashboard" class="brand-logo">
        <img alt="image" width="25" src="{{ asset('griyakhitan/images/icon.png') }}">
        <div class="brand-title">
            <h2 class="">GKZ</h2>
        </div>
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header border-bottom">
    <div class="header-content">

        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item d-flex align-items-center">
                        @php
                            $date = date('l, d F Y ');
                            //$date = date('l, Y-m-d ');
                        @endphp
                        <strong>{{ $date }} &nbsp;
                            <span id="jamServer">
                                @php
                                    date_default_timezone_set('Asia/Jakarta');
                                    $datenow = date('H:i:s');
                                @endphp
                                <h6> <strong> {{ $datenow }}</strong></h6>
                            </span>
                        </strong>
                    </li>

                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">

                            <img class="avatar-lg rounded-circle img-thumbnail"
                                src="{{ asset('griyakhitan/images/ava.png') }}" alt="" width="50px" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="/logout" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                    width="18" height="18" viewbox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ms-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

@push('addon-script')
    <script>
        var serverClock = jQuery("#jamServer");
        if (serverClock.length > 0) {
            showServerTime(serverClock, serverClock.text());
        }

        function showServerTime(obj, time) {
            var parts = time.split(":"),
                newTime = new Date();

            newTime.setHours(parseInt(parts[0], 10));
            newTime.setMinutes(parseInt(parts[1], 10));
            newTime.setSeconds(parseInt(parts[2], 10));

            var timeDifference = new Date().getTime() - newTime.getTime();
            var methods = {
                displayTime: function() {
                    var now = new Date(new Date().getTime() - timeDifference);
                    obj.text([
                        methods.leadZeros(now.getHours(), 2),
                        methods.leadZeros(now.getMinutes(), 2),
                        methods.leadZeros(now.getSeconds(), 2)
                    ].join(":"));
                    setTimeout(methods.displayTime, 500);
                },

                leadZeros: function(time, width) {
                    while (String(time).length < width) {
                        time = "0" + time;
                    }
                    return time;
                }
            }
            methods.displayTime();
        }
    </script>
@endpush
<!--**********************************
    Header end ti-comment-alt
***********************************-->
