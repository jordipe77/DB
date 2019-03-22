@extends('templates.plantilla')

@section('titulo','LOGIN')

@section('principal')


    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Iniciar sesion</h3>
                     </div>
                      <div class="panel-body">
                        <form accept-charset="UTF-8" role="form">
                        <fieldset>
                              <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/DatumBase/public/js/login.js') }}"></script>
@endsection
