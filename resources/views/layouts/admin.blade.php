<div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="/admin/dashboard" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                </div>
            </a>
            <a href="/admin/accounts" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-user mr-3"></span>
                    <span class="menu-collapsed">Accounts</span>
                </div>
            </a>
            <a href="/admin/school_year" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="fas fa-calendar-week mr-3"></i>
                    <span class="menu-collapsed">School Year</span>
                </div>
            </a>
            <a href="/admin/class" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="fab fa-odnoklassniki mr-3"></i>
                    <span class="menu-collapsed">Class</span>
                </div>
            </a>
            {{-- <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-user mr-3"></span>
                    <span class="menu-collapsed">Accounts</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Teacher</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Adviser</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Teacher/Adviser</span>
                </a>
            </div> --}}
            <!-- Separator with title -->
            <!-- <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
            </li> -->
            <!-- /END Separator -->
            <a href="/admin/students" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-users mr-3"></span>
                    <span class="menu-collapsed">Students</span>
                </div>
            </a>
            <a href="/admin/subjects" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fab fa-hackerrank mr-3"></span>
                    <span class="menu-collapsed">Subjects</span>
                    <!-- <span class="badge badge-pill badge-primary ml-2">5</span> -->
                </div>
            </a>
            <!-- Separator without title -->
            <!-- <li class="list-group-item sidebar-separator menu-collapsed"></li> -->
            <!-- /END Separator -->
            {{-- <a href="/admin/grades" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-star mr-3"></span>
                    <span class="menu-collapsed">Grades</span>
                </div>
            </a> --}}
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-star mr-3"></span>
                    <span class="menu-collapsed">Grades</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="/admin/first_grading" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">First Grading</span>
                </a>
                <a href="/admin/second_grading" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Second Grading</span>
                </a>
                <a href="/admin/third_grading" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Third Grading</span>
                </a>
                <a href="/admin/fourth_grading" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Fourth Grading</span>
                </a>
            </div>
            {{-- <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-medal mr-3"></span>
                    <span class="menu-collapsed">Rankings</span>
                </div>
            </a> --}}
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-medal mr-3"></span>
                    <span class="menu-collapsed">Rankings</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="/admin/ranking_first_grading" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">First Grading</span>
                </a>
                <a href="/admin/ranking_second_grading" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Second Grading</span>
                </a>
                <a href="/admin/ranking_third_grading" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Third Grading</span>
                </a>
                <a href="/admin/ranking_fourth_grading" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Fourth Grading</span>
                </a>
                <a href="/admin/ranking_end" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">End of School Year</span>
                </a>
            </div>
            <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Collapse</span>
                </div>
            </a>
            <!-- Logo -->
            <!-- <li class="list-group-item logo-separator d-flex justify-content-center">
                <img src='https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg' width="30" height="30" />
            </li> -->
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->