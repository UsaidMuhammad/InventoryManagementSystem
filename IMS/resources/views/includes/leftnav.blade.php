<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s12 m12 l12">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li>
                            <a href="#">
                                <i class="mdi-action-lock-outline"></i> Lock</a>
                        </li>
                        <li>
                            <a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </li>
                    </ul>
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ $name }}<i class="mdi-navigation-arrow-drop-down right"></i>
                    </a>
                </div>
            </div>
        </li>
        <li class="bold">
            <a href="index.html" class="waves-effect waves-cyan">
                <i class="mdi-action-dashboard"></i> Dashboard
            </a>
        </li>
        @if ($permission['customer'] == 1)
        <li class="bold">
            <a href="#" class="waves-effect waves-cyan">
                <i class="mdi-action-dashboard"></i> Customer
            </a>
        </li>
        @endif
        @if ($permission['supplier'] == 1)
        <li class="bold">
            <a href="#" class="waves-effect waves-cyan">
                <i class="mdi-action-dashboard"></i> Supplier
            </a>
        </li>
        @endif
        @if ($permission['product'] == 1)
        <li class="bold">
            <a href="#" class="waves-effect waves-cyan">
                <i class="mdi-action-dashboard"></i> Product
            </a>
        </li>
        @endif
        @if ($permission['stocks'] == 1)
        <li class="bold">
            <a href="#" class="waves-effect waves-cyan">
                <i class="mdi-action-dashboard"></i> Stocks
            </a>
        </li>
        @endif
        @if ($permission['sales'] == 1)
        <li class="bold">
            <a href="#" class="waves-effect waves-cyan">
                <i class="mdi-action-dashboard"></i> Sales
            </a>
        </li>
        @endif
        @if ($permission['payment'] == 1)
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header waves-effect waves-cyan">
                        <i class="mdi-action-view-carousel"></i> Payments</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="#">Pending</a>
                            </li>
                            <li>
                                <a href="#">OutStanding</a>
                            </li>
                            <li>
                                <a href="#">Paid</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        @endif
        @if ($permission['report'] == 1)
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header waves-effect waves-cyan">
                        <i class="mdi-action-view-carousel"></i> Reports</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="#">Profit &amp; Loss</a>
                            </li>
                            <li>
                                <a href="#">Sotck in-out</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        @endif
        @if ($permission['users'] == 1)
        <li class="bold">
            <a href="#" class="waves-effect waves-cyan">
                <i class="mdi-action-dashboard"></i> Users
            </a>
        </li>
        @endif
        <!--<li class="bold">
            <a href="app-email.html" class="waves-effect waves-cyan">
                <i class="mdi-communication-email"></i> Mailbox
                <span class="new badge">4</span>
            </a>
        </li>-->
        
        
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan">
        <i class="mdi-navigation-menu"></i>
    </a>
</aside>
<!-- END LEFT SIDEBAR NAV-->