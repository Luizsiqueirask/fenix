<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Get Shit Done Bootstrap Wizard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet">

</head>

<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-city.jpg')">

    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="green" id="wizard">
                        <form action="" method="">
                            <!--        You can switch ' data-color="green" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                            <div class="wizard-header">
                                <h3>
                                    <b>Agendamento</b> Exame <br>
                                    <small> Informações que ajudará para agilidade do atendimento </small>
                                </h3>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#location" data-toggle="tab">Convênio</a></li>
                                    <li><a href="#type" data-toggle="tab">Tipo</a></li>
                                    <li><a href="#facilities" data-toggle="tab">Facilities</a></li>
                                    <li><a href="#description" data-toggle="tab">Description</a></li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="location">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Descrição basica para o exames </h4>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Estado</label><br>
                                                <select name="country" class="form-control">
                                                    <option disabled="" selected="">- Estado -</option>
                                                    <option value="Rio de Janeiro"> Rio de Janeiro </option>
                                                    <option value="Minas Gerais "> Minas Gerais </option>
                                                    <option value="São Paulo"> São Paulo </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>Convênio</label><br>
                                                <select name="country" class="form-control">
                                                    <option disabled="" selected="">- Planos de Saúde -</option>
                                                    <option value="Unimed"> Unimed </option>
                                                    <option value="Amil"> Amil </option>
                                                    <option value="SulAmerica"> SulAmérica </option>
                                                    <option value="AssimSaude"> Assim Saúde </option>
                                                    <option value="...">...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Familiares</label>
                                                <select class="form-control">
                                                    <option disabled="" selected="">- Pessoa -</option>
                                                    <option>1 Pessoa</option>
                                                    <option>2 Pessoas </option>
                                                    <option>3 Pessoas</option>
                                                    <option>4 Pessoas</option>
                                                    <option>5 Pessoas</option>
                                                    <option>6+ Pessoas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>Número da Matricula</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">C- </span>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="type">
                                    <h4 class="info-text">What type of location do you have? </h4>
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                    <input type="radio" name="type" value="House">
                                                    <div class="icon">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <h6>Resisdência</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                    <input type="radio" name="type" value="Appartment">
                                                    <div class="icon">
                                                        <i class="fa fa-hospital-alt"></i>
                                                    </div>
                                                    <h6>Hospital</h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="facilities">
                                    <h4 class="info-text">Tell us more about facilities. </h4>
                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Your place is good for</label>
                                                <select class="form-control">
                                                    <option disabled="" selected="">- type -</option>
                                                    <option>Business</option>
                                                    <option>Vacation </option>
                                                    <option>Work</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>Is air conditioning included ?</label>
                                                <select class="form-control">
                                                    <option disabled="" selected="">- response -</option>
                                                    <option>Yes</option>
                                                    <option>No </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Does your place have wi-fi?</label>
                                                <select class="form-control">
                                                    <option disabled="" selected="">- response -</option>
                                                    <option>Yes</option>
                                                    <option>No </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>Is breakfast included?</label>
                                                <select class="form-control">
                                                    <option disabled="" selected="">- response -</option>
                                                    <option>Yes</option>
                                                    <option>No </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="description">
                                    <div class="row">
                                        <h4 class="info-text"> Drop us a small description. </h4>
                                        <div class="col-sm-6 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Place description</label>
                                                <textarea class="form-control" placeholder="" rows="9">

                                            </textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Example</label>
                                                <p class="description">"The place is really nice. We use it every sunday when we go fishing. It is so awesome."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' name='next' value='Avançar' />
                                    <input type='button' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Salvar' />

                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Voltar' />
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div> <!-- row -->
    </div> <!--  big container -->
</div>

</body>

<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.bootstrap.wizard.js')}}"></script>

<!--  Plugin for the Wizard -->
<script src="{{asset('assets/js/gsdk-bootstrap-wizard.js')}}"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>

</html>
