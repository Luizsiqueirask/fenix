<!-- Page Wrapper -->
<nav id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('panel')}}">
            <div class="sidebar-brand-icon">
                <i class="fas fa-clinic-medical"></i>
            </div>
            <div class="sidebar-brand-text mx-3 "> Laboratório FCV  <sup>Fênix</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('panel')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Laboratorio
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMember" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-stethoscope "></i>
                <span>Exames</span>
            </a>
            <div id="collapseMember" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Gerencia de Exame</h6>
                    <!--a class="collapse-item" href="{route('exam.create')}}">{ __('Cadastrar') }}</a-->
                    <a class="collapse-item" href="{{route('exam.index')}}">{{ __('Visualizar') }}</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseChurch" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-ambulance"></i>
                <span>Coletagem</span>
            </a>
            <div id="collapseChurch" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Coletagem</h6>
                    <!--a class="collapse-item" href="{route("collection.create")}}">{ __('Cadastrar') }}</a-->
                    <a class="collapse-item" href="{{route('collection.index')}}">{{ __('Visualizar') }}</a>
                </div>
            </div>
        </li>

         <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCDM" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-syringe"></i>
                <span>Vacinação</span>
            </a>
            <div id="collapseCDM" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Vacinação</h6>
                    <!--a class="collapse-item" href="{route("vaccination.create")}}">{ __('Cadastrar') }}</a-->
                    <a class="collapse-item" href="{{route('vaccination.index')}}">{{ __('Visualizar') }}</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Atendimento
        </div>

         <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMessenger" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-map-marker-alt"></i>
                <span>Localização</span>
            </a>
            <div id="collapseMessenger" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Localização</h6>
                    <a class="collapse-item" href="{{route('localization.index')}}">{{ __('Visualizar') }}</a>
                </div>
            </div>
        </li>

         <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGallery" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-address-card"></i>
                <span>Cartão Eletrônica</span>
            </a>
            <div id="collapseGallery" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Cartão Eletrônica</h6>
                    <!--a class="collapse-item" href="#{route('card.create')}}">{{ __('Cadastrar') }}</a-->
                    <a class="collapse-item" href="{{route('card.index')}}">{{ __('Visualizar') }}</a>
                </div>
            </div>
        </li>

         <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePrayer" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-qrcode"></i>
                <span>Leitor QR</span>
            </a>
            <div id="collapsePrayer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Leitor QR</h6>
                    <!--a class="collapse-item" href="{route("reader.create")}}">{ __('Cadastrar') }}</a-->
                    <a class="collapse-item" href="{{route('reader.index')}}">{{ __('Visualizar') }}</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow border-bottom-primary">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <figure class="row"><img src="/img/logo.png" alt="" class="img-fluid col-2"></figure>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><!--{Auth::User()->first_name}} { Auth::user()->last_name}}--></span>
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Perfil
                            </a>
                            <!--a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                            </a>
                            <a-- class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                            </a-->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
