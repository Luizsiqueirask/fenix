<!doctype html>
<html lang="en">
<head>
     <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet">
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('public/assets/img/wizard.jpg')">
    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="orange" id="wizardProfile">
                        <form action="post" method="{{route('collection.store')}}" enctype="multipart/form-data">
                        @csrf
                        {{ csrf_field() }}

                        <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                            <div class="wizard-header">
                                <h3>
                                    <b>Agendamento</b> Coletagem <br>
                                    <small>Essa informação nos facilitará saber o tipo de coletagem a realizada</small>
                                </h3>
                            </div>

                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#about" data-toggle="tab">Pessoa</a></li>
                                    <li><a href="#account" data-toggle="tab">Coletagem</a></li>
                                    <li><a href="#address" data-toggle="tab">Endereço</a></li>
                                </ul>

                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h4 class="info-text"> Informações básica para a coletagem</h4>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                    <input type="file" id="wizard-picture">
                                                </div>
                                                <h6>Choose Picture</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nome <small>(required)</small></label>
                                                <input name="firstname" type="text" class="form-control" placeholder="Nome">
                                            </div>
                                            <div class="form-group">
                                                <label>Sobrenome <small>(required)</small></label>
                                                <input name="lastname" type="text" class="form-control" placeholder="Sobrenome">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>E-mail <small>(required)</small></label>
                                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="account">
                                    <h4 class="info-text"> Qual procedimento gostaria de realizar? </h4>
                                    <div class="row">

                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="coletagem" value="Urina">
                                                    <div class="icon">
                                                        <i class="fas fa-toilet"></i>
                                                    </div>
                                                    <h6>Urina</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="coletagem" value="Fezes">
                                                    <div class="icon">
                                                        <i class="fas fa-poo"></i>
                                                    </div>
                                                    <h6>Fezes</h6>
                                                </div>

                                            </div>
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="coletagem" value="Sangue">
                                                    <div class="icon">
                                                        <i class="fas fa-tint"></i>
                                                    </div>
                                                    <h6>Sangue</h6>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="address">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Onde resides atualmente? </h4>
                                        </div>
                                        <div class="col-sm-7 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" class="form-control" placeholder="5h Avenue" name="addresss">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Número</label>
                                                <input type="text" class="form-control" placeholder="242" name="number">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <input type="text" class="form-control" placeholder="New York..." name="country">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>Estado</label><br>
                                                <select name="estado" class="form-control">
                                                    <option value=""> </option>
                                                    <option value="Rio de Janeiro"> Rio de Janeiro </option>
                                                    <option value="Minas Gerais "> Minas Gerais </option>
                                                    <option value="São Paulo"> São Paulo </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer height-wizard">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Avançar' />
                                    <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='save' value='Salvar' />

                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='preview' value='Voltar' />
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div><!-- end row -->
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
