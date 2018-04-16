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
            <a href="/" class="waves-effect waves-cyan">
                <i class="mdi-action-dashboard"></i> Dashboard
            </a>
        </li>
        @if ($permission['customer'] == 1)
        <li class="bold">
            <a href="{{url('/customers')}}" class="waves-effect waves-cyan">
                <i class="mdi-social-people"></i> Customers
            </a>
        </li>
        @endif
        @if ($permission['supplier'] == 1)
        <li class="bold">
            <a href="{{url('/supplier')}}" class="waves-effect waves-cyan">
                <i class="mdi-action-shopping-cart"></i> Supplier
            </a>
        </li>
        @endif
        @if ($permission['product'] == 1)
        <li class="bold">
            <a href="{{url('/product')}}" class="waves-effect waves-cyan">
                <i class="mdi-action-wallet-giftcard"></i> Product
            </a>
        </li>
        @endif
        @if ($permission['stocks'] == 1)
        <li class="bold">
            <a href="{{url('/stocks')}}" class="waves-effect waves-cyan">
                <i class="mdi-action-trending-up"></i> Stocks
            </a>
        </li>
        @endif
        @if ($permission['sales'] == 1)
        <li class="bold">
            <a href="{{url('/sales')}}" class="waves-effect waves-cyan">
                <i class="mdi-editor-attach-money"></i> Sales
            </a>
        </li>
        @endif
        @if ($permission['payment'] == 1)
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header waves-effect waves-cyan">
                        <i class="mdi-action-account-balance"></i> Payments</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="{{url('/pending')}}">Pending</a>
                            </li>
                            <li>
                                <a href="{{url('/outstanding')}}">OutStanding</a>
                            </li>
                            <li>
                                <a href="{{url('/paid')}}">Paid</a>
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
                        <i class="mdi-action-assignment-turned-in"></i> Reports</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="{{url('/profitloss')}}">Profit &amp; Loss</a>
                            </li>
                            <li>
                                <a href="{{url('/stockinout')}}">Sotck in-out</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        @endif
        @if ($permission['users'] == 1)
        <li class="bold">
            <a href="{{url('/users')}}" class="waves-effect waves-cyan">
                <i class="mdi-social-person-add"></i> Users
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