<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas lg:w-[200px]" id="sidebar">

    <ul class="nav">
        <button id="toggleNavBtn" type="button">
            <div style="background-color: #393948; z-index: 99999;"
                class="absolute right-[-46px] border-3 border-accent rounded-r-md rounded-b-mdtext-ui-dark top-[10px]">
                <x-lucide-menu class="h-10 w-10" />
            </div>
        </button>

        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/users') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Users</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/foodmenu') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Food Menu</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Chefs</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/reservations') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Reservations</span>
            </a>
        </li>

    </ul>
</nav>
{{-- <script>
    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("sidebar").style.width = "244px";
        document.getElementById("main").style.marginLeft = "244px";
    }
</script>
<script>
    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function(e) {
        document.getElementById("sidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script> --}}
