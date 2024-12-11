<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <!-- <li class="menu-title" key="t-menu">Menu</li> -->

        <li>
            <a href="{{ URL('dashboard') }}" class=" waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Dashboards</span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <!-- <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span> -->
                <i class="bx bx-layout"></i>
                <span key="t-layouts">Pre-Costing</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li>
                    <a href="{{ URL('style-details') }}" key="t-vertical">Style Details</a>
                </li>
                <li>
                    <a href="{{ URL('shell-fabric') }}" key="t-vertical">Shell Fabric</a>
                </li>
                <li>
                    <a href="{{ URL('other-fabric') }}" key="t-vertical">Other Fabric</a>
                </li>
                <li>
                    <a href="{{ URL('functional-trim-cost') }}" key="t-vertical">Functional Trim Cost</a>
                </li>
                <li>
                    <a href="{{ URL('pkg-trim-cost') }}" key="t-vertical">Pkg Trim Cost</a>
                </li>
                <li>
                    <a href="{{ URL('decorative-trim-cost') }}" key="t-vertical">Decorative Trim Cost</a>
                </li>
                <li>
                    <a href="{{ URL('hanger') }}" key="t-vertical">Hanger</a>
                </li>
                <li>
                    <a href="{{ URL('value-addition') }}" key="t-vertical">Value Addition</a>
                </li>
                <li>
                    <a href="{{ URL('washing') }}" key="t-vertical">Washing</a>
                </li>
                <li>
                    <a href="{{ URL('style-summary') }}" key="t-vertical">Style Summary</a>
                </li>
            </ul>
        </li>

{{--        kamrul--}}
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-circle"></i>
                <span key="t-layouts">Settings</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li>
                    <a href="{{ route('bins.index') }}" key="t-vertical">Manage Bins</a>
                </li>
                <li>
                    <a href="{{ route('colors.index') }}" key="t-vertical">Manage Colors</a>
                </li>
                <li>
                    <a href="{{ route('racks.index') }}" key="t-vertical">Manage Racks</a>
                </li>
                <li>
                    <a href="{{ route('rows.index') }}" key="t-vertical">Manage Rows</a>
                </li>
                <li>
                    <a href="{{ route('sizes.index') }}" key="t-vertical">Manage Sizes</a>
                </li>
                <li>
                    <a href="{{ route('locations.index') }}" key="t-vertical">Manage Locations</a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}" key="t-vertical">Manage Products</a>
                </li>

            </ul>
        </li>
 {{--        kamrul--}}

        <li>
            <a href="{{ URL('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class=" waves-effect">
                <i class="bx bx-power-off"></i>
                <span key="t-logout">Logout</span>
            </a>
            <form id="logout-form" action="{{ URL('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</div>
<!-- Sidebar -->
