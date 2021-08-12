
<!-- Content Row -->
<div class="row mb-3 pb-3">

    <!-- Pending Requests Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2" data-toggle="modal" data-target="#church">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Lista de exames</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Exames</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-stethoscope fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="church" tabindex="-1" role="dialog" aria-labelledby="church" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="church">Exames</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Escolha a opção a qual deseja ter acesso, esses links abaixo esta relacionado a Congregação.
                </div>
                <div class="modal-footer">
                    <a class="collapse-item btn btn-primary" href="{{route('exam.create')}}">{{ __('Cadastrar') }}</a>
                    <a class="collapse-item btn btn-success" href="{{route('exam.index')}}">{{ __('Visualizar') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2" data-toggle="modal" data-target="#event">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Agendamento de Coletagem</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Coletagem</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-ambulance fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="event" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="event">Coletagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Escolha a opção a qual deseja ter acesso, esses links abaixo esta relacionado a eventos.
                </div>
                <div class="modal-footer">
                    <a class="collapse-item btn btn-primary" href="{{route('collection.create')}}">{{ __('Cadastrar') }}</a>
                    <a class="collapse-item btn btn-success" href="{{route('collection.index')}}">{{ __('Visualizar') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2" data-toggle="modal" data-target="#blog">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Agendar Vacina</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Vacinação</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-syringe fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="blog" tabindex="-1" role="dialog" aria-labelledby="blog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="blog">Vacinação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Escolha a opção a qual deseja ter acesso, esses links abaixo esta relacionado a blog.
            </div>
            <div class="modal-footer">
                <a class="collapse-item btn btn-primary" href="{{route('vaccination.create')}}">{{ __('Cadastrar') }}</a>
                <a class="collapse-item btn btn-success" href="{{route('vaccination.index')}}">{{ __('Visualizar') }}</a>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3 pb-5">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-3">
        <div class="card border-left-danger shadow h-100 py-2" data-toggle="modal" data-target="#prayer">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Localização Coletor</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Localização</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-map-marker-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="prayer" tabindex="-1" role="dialog" aria-labelledby="prayer" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="prayer">Localização</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Escolha a opção a qual deseja ter acesso, esses links abaixo esta relacionado a culto online.
                </div>
                <div class="modal-footer">
                    <a class="collapse-item btn btn-primary" href="{{route('localization.create')}}">{{ __('Cadastrar') }}</a>
                    <a class="collapse-item btn btn-success" href="{{route('localization.index')}}">{{ __('Visualizar') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2" data-toggle="modal" data-target="#perfil">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Gerenciar Cartão Eletrônica</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Cartão Eletrônica</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-address-card fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="perfil" tabindex="-1" role="dialog" aria-labelledby="perfil" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="perfil">Cartão Eletrônica</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Escolha a opção a qual deseja ter acesso, esses links abaixo esta relacionado a culto online.
                </div>
                <div class="modal-footer">
                    <a class="collapse-item btn btn-primary" href="{{route('card.create')}}">{{ __('Cadastrar') }}</a>
                    <a class="collapse-item btn btn-success" href="{{route('card.index')}}">{{ __('Visualizar') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2" data-toggle="modal" data-target="#calendar">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> Leitor QR </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Leitor QR</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-qrcode fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="calendar" tabindex="-1" role="dialog" aria-labelledby="calendar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calendar">Leitor QR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Escolha a opção a qual deseja ter acesso, esses links abaixo esta relacionado a Calendario.
            </div>
            <div class="modal-footer">
                <a class="collapse-item btn btn-primary" href="{{route('reader.create')}}">{{ __('Cadastrar') }}</a>
                <a class="collapse-item btn btn-success" href="{{route('reader.index')}}">{{ __('Visualizar') }}</a>
            </div>
        </div>
    </div>
</div>
