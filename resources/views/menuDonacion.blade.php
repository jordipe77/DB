@extends('templates.plantilla')

@section('titulo')

@endsection

@section('principal')

<div class="container">
    <p class="text-center">INTRODUCIR NUEVA DONACIÓN</p>
    <hr>

    <div class="row">
        <aside class="col-sm-4">

    <div class="card">
        <article class="card-group-item">
            <header class="card-header">
                <h3 class="title">MENÚ DE INTRODUCCIÓN </h3>
            </header>
            <div class="filter-content">
                <div class="card-body">
                <form>
                    <label for="tipo">TIPO</label>
                    <select class="form-control" name="tipo" id="tipo">
                      <option>COMIDA</option>
                      <option>VETERINARIA</option>
                      <option>COMPLEMENTOS</option>
                      <option>MATERIAL</option>
                      <option>ECONÓMICO</option>
                      <option>OTROS</option>
                    </select>
                </form>

                </div>
            </div>
        </article>

        <article class="card-group-item">
            <header class="card-header">
                <h6 class="title">Choose type </h6>
            </header>
            <div class="filter-content">
                <div class="card-body">
                <label class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadio" value="">
                  <span class="form-check-label">
                    First hand items
                  </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadio" value="">
                  <span class="form-check-label">
                    Brand new items
                  </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadio" value="">
                  <span class="form-check-label">
                    Some other option
                  </span>
                </label>
                </div>
            </div>
        </article>
    </div>




        </aside>
        <aside class="col-sm-4">
    <p>Filter 2</p>


    <div class="card">
        <article class="card-group-item">
            <header class="card-header"><h6 class="title">Similar category </h6></header>
            <div class="filter-content">
                <div class="list-group list-group-flush">
                  <a href="#" class="list-group-item">Cras justo odio <span class="float-right badge badge-light round">142</span> </a>
                  <a href="#" class="list-group-item">Dapibus ac facilisis  <span class="float-right badge badge-light round">3</span>  </a>
                  <a href="#" class="list-group-item">Morbi leo risus <span class="float-right badge badge-light round">32</span>  </a>
                  <a href="#" class="list-group-item">Another item <span class="float-right badge badge-light round">12</span>  </a>
                </div>
            </div>
        </article>
        <article class="card-group-item">
            <header class="card-header"><h6 class="title">Color check</h6></header>
            <div class="filter-content">
                <div class="card-body">
                    <label class="btn btn-danger">
                      <input class="" type="checkbox" name="myradio" value="">
                      <span class="form-check-label">Red</span>
                    </label>
                    <label class="btn btn-success">
                      <input class="" type="checkbox" name="myradio" value="">
                      <span class="form-check-label">Green</span>
                    </label>
                    <label class="btn btn-primary">
                      <input class="" type="checkbox" name="myradio" value="">
                      <span class="form-check-label">Blue</span>
                    </label>
                </div>
            </div>
        </article>
    </div>



        </aside>

@endsection
