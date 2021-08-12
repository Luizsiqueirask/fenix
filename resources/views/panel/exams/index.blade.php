@extends('panel.partials.theme')
@section('panel_default')
    <section class="container ">
        <div class="border-bottom-info shadow p-3 mb-5 bp-3 bg-white rounded">
            <div class="jumbotron-fluid">
                <h3 class="text-center m-1 pb-2 mb-2 h3 text-info">Blog</h3>
                <h5 class="text-center m-2 mb-4 h5 text-gray-600">Assembléia de Deus Barão de Petropólis</h5>
            </div>
        </div>
        @include('components.exams.exams_view')
    </section>
@endsection
