<!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->

<div class="sidebar sidebar-style-2" data-background-color="{{$bg}}">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            {{-- <span class="user-level">{{$settings->site_name }} User</span> --}}
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('profile') }}">
                                    <span class="link-collapse">Account Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ (request()->routeIs('dashboard')) ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li
                    class="nav-item d-md-none {{ (request()->routeIs('deposits')) ? 'active' : '' }} {{ (request()->routeIs('payment')) ? 'active' : '' }}">
                    <a href="{{ url('dashboard/deposits') }}">
                        <i class="fa fa-download " aria-hidden="true"></i>
                        <p>Fund your Account</p>
                    </a>
                </li>
                <li
                    class="nav-item d-md-none {{ (request()->routeIs('withdrawalsdeposits')) ? 'active' : '' }} {{ (request()->routeIs('withdrawfunds')) ? 'active' : '' }}">
                    <a href="{{ url('dashboard/withdrawals') }}">
                        <i class="fa fa-arrow-alt-circle-up " aria-hidden="true"></i>
                        <p>Withdraw Funds</p>
                    </a>
                </li>

                <li class="nav-item {{ (request()->routeIs('tradinghistory')) ? 'active' : '' }}">
                    <a href="{{ url('dashboard/tradinghistory') }}">
                        <i class="fa fa-signal " aria-hidden="true"></i>
                        <p>Profit Record</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->routeIs('accounthistory')) ? 'active' : '' }}">
                    <a href="{{ url('dashboard/accounthistory') }}">
                        <i class="fa fa-briefcase " aria-hidden="true"></i>
                        <p>Transactions history</p>
                    </a>
                </li>
                {{-- @if ($moresettings->use_crypto_feature == 'true')
                <li class="nav-item {{ (request()->routeIs('assetbalance')) ? 'active' : '' }}">
                    <a href="{{ route('assetbalance') }}">
                        <i class="fa fa-coins" aria-hidden="true"></i>
                        <p>Crypto Exchange</p>
                    </a>
                </li>
                @endif --}}
                @if ($settings->subscription_service == 'on')
                <li class="nav-item {{ (request()->routeIs('subtrade')) ? 'active' : '' }}">
                    <a href="{{ url('dashboard/subtrade') }}">
                        <i class="fa fa-th" aria-hidden="true"></i>
                        <p>Subscription Trade</p>
                    </a>
                </li>
                @endif

                <li
                    class="nav-item {{ (request()->routeIs('mplans')) ? 'active' : '' }} {{ (request()->routeIs('myplans')) ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#mpack">
                        <i class="fas fa-cubes"></i>
                        <p>Invest</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="mpack">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('dashboard/buy-plan') }}">
                                    <span class="sub-item">Subscribe to a Plan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/myplans') }}">
                                    <span class="sub-item">My Investment</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ (request()->routeIs('referuser')) ? 'active' : '' }}">
                    <a href="{{ url('dashboard/referuser') }}">
                        <i class="fa fa-recycle " aria-hidden="true"></i>
                        <p>Refer Users</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->routeIs('support')) ? 'active' : '' }}">
                    <a href="{{ url('dashboard/support') }}">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <p>Help/Support</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
