<div>
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                <div class="content">
                    <div class="text">@lang('user')</div>
                    <div class="number">{{ $user }}</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                <div class="content">
                    <div class="text">@lang('Donors')</div>
                    <div class="number">{{ $donor }}</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                <div class="content">
                    <div class="text">@lang('StaffHospitals')</div>
                    <div class="number">{{ $staffHospitals }}</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                <div class="content">
                    <div class="text">Online</div>
                    <div class="number">{{ $online }}</div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                <div class="content">
                    <div class="text">Today's Operations</div>
                    <div class="number">05</div>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-balance col-cyan"></i> </div>
                <div class="content">
                    <div class="text">@lang('Total Hospitals')</div>
                    <div class="number">{{ $hospitals }}</div>


                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                <div class="content">
                    <div class="text">@lang('Active Hospitals')</div>
                    <div class="number"><i class="fa fa-check"></i> {{ $hospitalsActive }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
