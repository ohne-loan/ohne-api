<ul class="menu father">
    <li class="{{ Request::is('admin/dashboard') ? 'sidebar-active' : '' }}">
        <a href="{{ route('dashboard') }}"><i class="icon right fa fa-dashboard"></i>Dashboard</a>
    </li>
    @can('view_users')
        <li class="{{ Request::is('admin/users') || Request::is('admin/users/*')  ? 'sidebar-active' : '' }} has-submenu">
            <a><i class="icon right fa fa-user"></i>Users<i class="icon left fa fa-arrow-down"></i></a>
            <ul class="submenu">
                <li><a class="submenu-link" href="{{ route('users.index') }}"><i class="icon right fa fa-user"></i>  Users</a></li>
                @can('create_user')
                    <li><a class="submenu-link" href="{{ route('users.create') }}"><i class="icon right fa fa-plus"></i>  New user</a></li>
                @endcan
            </ul>
        </li>
    @endcan
    @can('view_roles')
        <li class="{{ Request::is('admin/roles') || Request::is('admin/roles/*')  ? 'sidebar-active' : '' }} has-submenu">
            <a><i class="icon right fa fa-tag"></i>Roles<i class="icon left fa fa-arrow-down"></i></a>
            <ul class="submenu">
                <li><a class="submenu-link" href="{{ route('roles.index') }}"><i class="icon right fa fa-tag"></i>  Roles</a></li>
                @can('create_role')
                    <li><a class="submenu-link" href="{{ route('roles.create') }}"><i class="icon right fa fa-plus"></i>  New role</a></li>
                @endcan
            </ul>
        </li>
    @endcan
    @can('view_permissions')
        <li class="{{ Request::is('admin/permissions') || Request::is('admin/permissions/*')  ? 'sidebar-active' : '' }} has-submenu">
            <a><i class="icon right fa fa-key"></i>Permissions<i class="icon left fa fa-arrow-down"></i></a>
            <ul class="submenu">
                <li><a class="submenu-link" href="{{ route('permissions.index') }}"><i class="icon right fa fa-key"></i>  Permissions</a></li>
                @can('create_permission')
                    <li><a class="submenu-link" href="{{ route('permissions.create') }}"><i class="icon right fa fa-plus"></i>  New Permission</a></li>
                @endcan
            </ul>
        </li>
    @endcan
</ul>