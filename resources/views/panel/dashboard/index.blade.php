@extends('panel.partials.theme')
@section('panel_default')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 col-12"><img src="/img/logo.png" alt="" class="img-fluid col-1"></h1>
    </div-->
    <div class="border-bottom-primary shadow p-5 mb-5 bp-5 bg-white rounded">
        <p class="text-center col-12"><img src="/img/logo.png" alt="" class="img-fluid col-1"></p>
        <div class="jumbotron-fluid">
            <h1 class="text-center text-primary"><b>Laboratório FCV</b></h1>
            <h3 class="text-center text-gray-10"><strong>Grupo 7 - Fênix</strong></h3>
        </div>
    </div>
    <!-- Content Row -->
    <div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @include('components.home.panel_dashboard')
    </div>
</div>

</div>
@endsection
