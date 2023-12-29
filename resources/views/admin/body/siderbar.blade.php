<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Real<span>Estate</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>

            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item nav-category">Real Estate</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#properties" role="button" aria-expanded="false"
                    aria-controls="properties">
                    <i class="link-icon" data-feather="home"></i>
                    <span class="link-title">Property Type</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="properties">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{route('all.type')}}" class="nav-link">All Type</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('add.type')}}" class="nav-link">Add Type</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item nav-category">Amenities</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#amenities" role="button" aria-expanded="false"
                    aria-controls="amenities">
                    <i class="link-icon" data-feather="codepen"></i>
                    <span class="link-title">Amenities Type</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="amenities">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{route('all.amenities')}}" class="nav-link">All Amenities</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('add.amenities')}}" class="nav-link">Add Amenities</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="pages/apps/chat.html" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Chat</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="pages/apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>

                    </ul>
    </div>
</nav>
