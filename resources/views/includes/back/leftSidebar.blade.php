@php
    $currentUri = Route::current()->uri;
@endphp

<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="admin-image "> <img src="{{ asset('assets/front/images/avatars/niro.png') }}" alt=""> </div>
        <div class="admin-action-info"> <span>@lang('welcome')</span>
            <h3>{{ auth()->user()->name }}</h3>
            <ul>
                <li><a href="{{ route('home') }}" class="text-success" title="Go to WelcomePage"><i
                            class="fas fa-home"></i> @lang('WelcomePage')</a></li> <br>

                {{-- <li><a href="profile.html" title="Go to Profile"><i class="zmdi zmdi-account"></i></a></li>
                <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
                            class="zmdi zmdi-settings"></i></a></li>  --}}
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <a class="text-danger" title="sign out" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        this.closest('form').submit();">
                            <i class="btn-sm fas fa-sign-out-alt"></i> @lang('Log Out')
                        </a>

                        {{-- <button type="submit" title="sign out"><i class="zmdi zmdi-sign-in"></i></button> --}}
                    </form>
                </li>
            </ul>
        </div>
        <div class="quick-stats mt--6">
            <h5>Today Report</h5>
            <ul>
                <li><span>16<i>Patient</i></span></li>
                <li><span>20<i>Panding</i></span></li>
                <li><span>04<i>Visit</i></span></li>
            </ul>

        </div>
        <div class="row"></div>

    </div>
    <br>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="@if (Str::contains($currentUri, 'dashboard')) active open @endif"><a href="{{ route('admin.dashboard') }}"><i
                        class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            {{-- <li><a href="javascript:void(0);" class="menu-toggle"><i
                        class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                <ul class="ml-menu">
                    <li><a href="doctor-schedule.html">Doctor Schedule</a></li>
                    <li><a href="book-appointment.html">Book Appointment</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i
                        class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                <ul class="ml-menu">
                    <li><a href="doctors.html">All Doctors</a></li>
                    <li><a href="add-doctor.html">Add Doctor</a></li>
                    <li><a href="profile.html">Doctor Profile</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i
                        class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                <ul class="ml-menu">
                    <li><a href="patients.html">All Patients</a></li>
                    <li><a href="add-patient.html">Add Patient</a></li>
                    <li><a href="patient-profile.html">Patient Profile</a></li>
                    <li><a href="patient-invoice.html">Patient Invoice</a></li>
                </ul>
            </li>

              <li class="header">LABELS</li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a>
            </li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a>
            </li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span>
                </a> </li>   --}}
            <li class="@if (Str::contains($currentUri, 'hospitals')) active open @endif">
                <a class="nav-link" href="{{ route('admin.hospitals') }}"><i class="fas fa-hospital-symbol"></i>
                    <span>@lang('Hospitals')</span></a>
            </li>
            <li class="@if (Str::contains($currentUri, 'users')) active open @endif">
                <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="zmdi zmdi-account-o"></i>
                    <span>@lang('Users')</span></a>
            </li>
            <li class="@if (Str::contains($currentUri, 'post')) active open @endif">
                <a class="nav-link" href="{{ route('admin.posts.index') }}"><i class="fa fa-newspaper"></i>
                    <span>@lang('Posts')</span></a>
            </li>
            <li class="@if (Str::contains($currentUri, 'contacts')) active open @endif">
                <a class="nav-link" href="{{ route('admin.contacts') }}"><i class="fa fa-comment"></i>
                    <span>@lang('Messages')</span></a>
            </li>

            <li>
                <a class="nav-link"
                    href="https://documenter.getpostman.com/view/23861571/2s93XsYSBu#0ff25755-500a-494c-ae27-136d2c5947bc"
                    {{-- href="{{ route('l5-swagger.default.api') }}" --}}><i class="fas fa-book-reader"></i>
                    <span>@lang('Api Docs')</span></a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>
