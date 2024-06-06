<section class="sidebar">
    <nav class="flex w-full flex-col gap-1">
        <a href="/dashboard" class="mb-12 flex cursor-pointer items-center gap-2">
            <img src="{{ asset('./logo.svg') }}" alt="">
            <h1 class="sidebar-logo">Travel App</h1>
        </a>

        <a href="{{ route('admin.index') }}" class="{{ request()->routeIs('admin.index') ? 'bg-gradient-to-r from-sky-500 to-sky-300' : '' }} sidebar-link">
            <p class="sidebar-label uppercase {{ request()->routeIs('admin.index') ? 'text-white' : '' }}">home</p>
        </a>

        <a href="{{ route('admin.index') }}" class="{{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-sky-500 to-sky-300' : '' }} sidebar-link">
            <p class="sidebar-label uppercase {{ request()->routeIs('dashboard') ? 'text-white' : '' }}">users</p>
        </a>

        <a href="{{ route('admin.index') }}" class="{{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-sky-500 to-sky-300' : '' }} sidebar-link">
            <p class="sidebar-label uppercase {{ request()->routeIs('dashboard') ? 'text-white' : '' }}">role</p>
        </a>
    </nav>
</section>