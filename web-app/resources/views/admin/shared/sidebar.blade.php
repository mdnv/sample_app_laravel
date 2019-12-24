<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Bootstrap Sidebar</h3>
    </div>

    <ul class="list-unstyled components">
        <p>Dummy Heading</p>
        <li class="{{ is_active_controllers("StaticPagesController") }}">
            <a class="nav-link" href="{{ route('admin_root_path') }}">{{ __('Admin') }}</a>
        </li>
        <li class="{{ is_active_controllers("UsersController") }}">
            <a class="nav-link" href="{{ route('admin_root_path') }}">{{ __('User') }}</a>
        </li>
        <li class="{{ is_active_controllers("ProductsController") }}">
            <a class="nav-link" href="{{ route('admin_root_path') }}">{{ __('Product') }}</a>
        </li>
        <li class="{{ is_active_controllers("OrdersController") }}">
            <a class="nav-link" href="{{ route('admin_root_path') }}">{{ __('Order') }}</a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
        </li>
        <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
        </li>
        <li>
            <a class="article" href="{{ url('/') }}">Back to home</a>
        </li>
    </ul>
</nav>