<!-- BEGIN - Portal Sidebar/Nav -->

<nav class="sidebar transition duration-300" id="sidebar">
    <ul class="nav">
        <button id="toggleNavBtn" type="button">
            <div style="background-color: #393948; z-index: 99999;"
                class="absolute right-[-46px] border-3 border-accent rounded-r-md rounded-b-mdtext-ui-dark top-[10px]">
                <x-lucide-menu class="h-10 w-10" />
            </div>
        </button>

        <li class="nav-item nav-category border-t-2 border-b-2 bg-ui-dark mb-2">
            <a href="/portal/dashboard">
                <span class="flex gap-2 text-xxl align-items-center text-white">
                    <x-lucide-shield-alert class="w-8 h-8" />Portal Home
                </span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link active:bg-accent" class="btn" href="{{ url('/portal/users') }}">
                <span class="menu-icon p-2 border-1 active:bg-accent border-accent">
                    <x-lucide-users class="h-6 w-6" />
                </span>
                <span class="menu-title">Users</span>
            </a>
        </li>
        @if (auth()->user()->usertype == 1)
            <li class="nav-item menu-items">
                <button class="nav-link" href="{{ url('/portal/employees') }}">
                    <span class="menu-icon p-2 border-1 active:bg-accent border-accent">
                        <x-lucide-heart-pulse class="h-6 w-6" />
                    </span>
                    <span class="menu-title">Employees</span>
                </button>
            </li>
        @else
        @endif
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/portal/foodmenu') }}">
                <span class="menu-icon p-2 border-1 active:bg-accent border-accent">
                    <x-lucide-utensils class="h-6 w-6" />
                </span>
                <span class="menu-title">Food Menu</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-icon p-2 border-1 active:bg-accent border-accent">
                    <x-lucide-chef-hat class="h-6 w-6" />
                </span>
                <span class="menu-title">Chefs</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/portal/reservations') }}">
                <span class="menu-icon p-2 border-1 active:bg-accent border-accent">
                    <x-lucide-book-open class="h-6 w-6" />
                </span>
                <span class="menu-title">Reservations</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/portal/settings') }}">
                <span class="menu-icon p-2 border-1 active:bg-accent border-accent">
                    <x-lucide-settings class="h-6 w-6" />
                </span>
                <span class="menu-title">Settings</span>
            </a>
        </li>

    </ul>
</nav>
