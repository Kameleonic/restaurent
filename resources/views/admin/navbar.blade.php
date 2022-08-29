<!-- // SIDEBAR -->
<nav class="sidebar sidebar-offcanvas border-r-4 bg-gray-300 w-[200px] border-user accent" id="sidebar">

    <ul class="nav">

        <li class="mb-4 nav-item nav-category">
            <span class=" text-2xl">Navigation</span>
        </li>
        <li class="my-2 nav-item menu-items">
            <a class="align-center bg-gray-200 border-info border border-2 border-start-0 duration-150 flex h-46 hover:bg-indigo-200/60 items-center px-3 py-1 rounded-r-lg transition"
                href="{{ url('/users') }}">
                <span class="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="var(--user-accent-color)" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="9"></rect>
                        <rect x="14" y="3" width="7" height="5"></rect>
                        <rect x="14" y="12" width="7" height="9"></rect>
                        <rect x="3" y="16" width="7" height="5"></rect>
                    </svg>
                </span>
                <span class="text-gray-800 hover:bg-indigo-200/60 text-lg">Overview</span>
            </a>
        </li>

        <li class="my-2 nav-item menu-items">
            <a class="align-center bg-gray-200 border-info border border-2 border-start-0 duration-150 flex h-46 hover:bg-indigo-200/60 hover:border-indigo-800 items-center px-3 py-1 rounded-r-lg transition"
                href="{{ url('/users') }}">
                <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="var(--user-accent-color)" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2a10 10 0 1 0 10 10 4 4 0 0 1-5-5 4 4 0 0 1-5-5"></path>
                        <path d="M8.5 8.5v.01"></path>
                        <path d="M16 15.5v.01"></path>
                        <path d="M12 12v.01"></path>
                        <path d="M11 17v.01"></path>
                        <path d="M7 14v.01"></path>
                    </svg>
                </span>
                <span class="text-gray-800 hover:bg-indigo-200/60 text-lg">Products</span>
            </a>
        </li>

        <li class="my-2 nav-item menu-items">
            <a class="align-center bg-gray-200 border-info border border-2 border-start-0 duration-150 flex h-46 hover:bg-indigo-200/60 hover:border-indigo-800 items-center px-3 py-1 rounded-r-lg transition"
                href="pages/forms/basic_elements.html">
                <span class="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="var(--user-accent-color)" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14">
                        </path>
                        <path d="M16.5 9.4 7.55 4.24"></path>
                        <polyline points="3.29 7 12 12 20.71 7"></polyline>
                        <line x1="12" y1="22" x2="12" y2="12"></line>
                        <circle cx="18.5" cy="15.5" r="2.5"></circle>
                        <path d="M20.27 17.27 22 19"></path>
                    </svg>
                </span>
                <span class="text-gray-800 hover:bg-indigo-200/60 text-lg">Orders</span>
            </a>
        </li>
        <li class="my-2 nav-item menu-items">
            <a class="align-center bg-gray-200 border-info border border-2 border-start-0 duration-150 flex h-46 hover:bg-indigo-200/60 hover:border-indigo-800 items-center px-3 py-1 rounded-r-lg transition"
                href="pages/tables/basic-table.html">
                <span class="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="var(--user-accent-color)" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </span>
                <span class="text-gray-800 hover:bg-indigo-200/60 text-lg">Users</span>
            </a>
        </li>
        <li class="my-2 nav-item menu-items">
            <a class="align-center bg-gray-200 border-info border border-2 border-start-0 duration-150 flex h-46 hover:bg-indigo-200/60 hover:border-indigo-800 items-center px-3 py-1 rounded-r-lg transition"
                href="pages/charts/chartjs.html">
                <span class="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="var(--user-accent-color)" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                        </path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </span>
                <span class="text-gray-800 hover:bg-indigo-200/60 text-lg">Settings</span>
            </a>
        </li>

    </ul>
</nav>
