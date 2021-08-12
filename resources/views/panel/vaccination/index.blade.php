@extends('panel.partials.theme')
@section('panel_default')
    <section class="row m-5 mb-5">
        <div class="container">
            <fieldset class="field-light">
                <div class="border-bottom-success shadow p-3 mb-5 bp-3 bg-white rounded">
                    <div class="jumbotron-fluid">
                        <h3 class="text-center m-1 pb-2 mb-2 h3 text-success">Ficha de Pessoa</h3>
                        <h5 class="text-center m-2 mb-4 h5 text-gray-600">Assembléia de Deus Barão de Petropólis</h5>
                    </div>
                </div>
            </fieldset>
            @include('components.vaccination.vaccination_view')
        </div>
    </section>
@endsection
