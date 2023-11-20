<nav
    class="h-24 relative border-blue-950 bg-blue-800 dark:bg-blue-900 w-full"
>
    <div
        class="flex max-w-screen-xl flex-wrap items-center justify-between p-4"
    >
        <a
            href="/home"
            wire:navigate
            class="flex items-center space-x-3 rtl:space-x-reverse"
        >
            <img
                src="{{ asset('assets/imgs/logo.png') }}"
                class="h-16"
                alt="Dhvsu Logo"
            />
            <span
                class="self-center whitespace-nowrap text-2xl font-semibold text-gray-200 dark:text-white"
                >DHVSU CSS Help Desk</span
            >
        </a>
        <button
            data-collapse-toggle="navbar-hamburger"
            type="button"
            class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden"
            aria-controls="navbar-hamburger"
            aria-expanded="false"
        >
            <span class="sr-only">Open main menu</span>
            <svg
                class="h-5 w-5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 17 14"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15"
                />
            </svg>
        </button>
        <div class="hidden w-full" id="navbar-hamburger">
            @include('layouts.auth.components.buttons')
        </div>
    </div>
</nav>
