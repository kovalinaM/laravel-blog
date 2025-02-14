
    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <!--begin::Sidebar Menu-->
                <ul
                    class="nav sidebar-menu flex-column"
                    data-lte-toggle="treeview"
                    role="menu"
                    data-accordion="false"
                >
                    <li class="nav-item">
                        <a href="{{route('admin.index')}}" class="nav-link">
                            <i class="bi bi-house-door-fill"></i>
                            <p>Главная</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-people-fill"></i>
                            <p>Пользователи</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.post.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-file-earmark-post"></i>
                            <p>Посты</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('categories.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-list-ul"></i>
                            <p>Категории</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('tag.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-tags"></i>
                            <p>Теги</p>
                        </a>
                    </li>
                </ul>
                <!--end::Sidebar Menu-->
            </nav>
        </div>
        <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->

