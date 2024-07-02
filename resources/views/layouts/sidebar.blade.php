<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">


     <!-- LOGO -->
     <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{URL::asset('assets/images/logo-pulse-favicon.jpg')}}" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="{{URL::asset('assets/images/logo-pulse-favicon.jpg')}}" alt="" height="50"> <span class="logo-txt"></span>
            </span>
        </a>

        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{URL::asset('assets/images/logo-pulse-favicon.jpg')}}" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="{{URL::asset('assets/images/logo-pulse-favicon.jpg')}}" alt="" height="50"> <span class="logo-txt"></span>
            </span>
        </a>
    </div>
    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>
    <div data-simplebar class="sidebar-menu-scroll">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">MENÚ</li>
                <li>
                    <a href="/">
                        <i class="bx bx-home-circle nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">RESUMEN</span>
                    </a>
                </li>
                <li class="menu-title" data-key="t-menu">MÓDULOS</li>
                <!--li class="menu-item">
                    <a href="https://wiki.eboraformacion.es" target="_blank">
                        <i class="bx bx-book nav-icon"></i> <span>LEADS</span>
                    </a>
                </li>-->
                <li>
                    <a href="/leads">
                        <i class="bx bx-user nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">LEADS</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-chat nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">TAREAS</span>
                    </a>
                </li>
                <li>
                    <a href="/oportunity">
                        <i class="bx bxl-trello nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">OPORTUNIDADES</span>
                    </a>
                </li>
                <li>
                    <a href="leads">
                        <i class="bx bx-mail-send nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">LEAD WEB</span>
                    </a>
                </li>
                <li class="menu-title" data-key="t-menu">CONFIGURACIÓN</li>
                <li>
                    <a href="#">
                        <i class="bx bx-user nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">USUARIOS</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-table nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">TIPOS DE LEADS</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>