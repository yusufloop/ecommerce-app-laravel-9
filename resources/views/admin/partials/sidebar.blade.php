<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">

    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">Joe Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a href="{{ route('admin.dashboard') }}" class="app-menu__item active {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#" class="app-menu__item" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i>
                <span class="app-menu__label">Users</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="#" class="treeview-item"><i class="icon fa fa-circle-o"></i> Admin</a>
                </li>
                <li>
                    <a href="#" class="treeview-item" target="_blank" rel="noopener noreferrer"><i class="icon fa fa-circle-o"></i> Roles</a>
                </li>
                <li>
                    <a href="#" class="treeview-item"><i class="icon fa fa-circle-o"></i> Permissions</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route ('admin.settings') }}" class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'activate' : '' }}">
                <i class="app-menu__icon fa fa-cogs">
                <span class="app-menu__label">Settings</span>
            </i>
            </a>
        </li>
    </ul>

</aside>