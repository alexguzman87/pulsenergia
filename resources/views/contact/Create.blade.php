@extends('layouts.vertical-master-layout')
@section('title')  AGREGAR LEAD | @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Lead @endslot
            @slot('title') Agregar Lead @endslot
        @endcomponent
    @endsection

<div class="row">
    <div class="col-xl-9">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Agregar Lead</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div>
                    <form action="/lead_create" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="modal-body p-4">
                                <div class="mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre Completo" value="{{ old('name') }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="email" name="second_email" class="form-control" placeholder="Correo Electrónico Secundario" value="{{ old('second_email') }}">                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="number" name="phone" class="form-control" placeholder="Teléfono" value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="number" name="second_phone" class="form-control" placeholder="Teléfono Secundario" value="{{ old('second_phone') }}">                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="text" name="country" name="email" class="form-control" placeholder="País" value="{{ old('country') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="text" name="state" class="form-control" placeholder="Provincia" value="{{ old('state') }}">                                    
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="address" class="form-control" placeholder="Dirección" value="{{ old('address') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="text" name="city" class="form-control" placeholder="Ciudad" value="{{ old('city') }}">                                    
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="number" name="postal_code" class="form-control" placeholder="Código Postal" value="{{ old('postal_code') }}">                                    
                                        </div>
                                    </div>
                                    <div class="col">
                                        <select name="id_origins" class="form-select">
                                            <option value="" selected disabled hidden>Origen del Lead</option>
                                            @foreach ($origin as $o)
                                                <option value="{{$o->id}}">{{$o->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="id_level" class="form-select">
                                            <option value="" selected disabled hidden>Nivel del Lead</option>
                                            @foreach ($level as $l)
                                                <option value="{{$l->id}}">{{$l->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="id_type" class="form-select">
                                            <option value="" selected disabled hidden>Tipo del Lead</option>
                                            @foreach ($type as $t)
                                                <option value="{{$t->id}}">{{$t->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Subir imagen de perfil (Opcional)</label>
                                    <input class="form-control" name="image" type="file" id="formFile">
                                </div>
                            </div>
                            <!-- end modalbody -->
                            <div class="modal-footer">
                                <a href="/lead"><button type="button" class="btn btn-light w-sm" data-bs-dismiss="modal">Cancelar</button></a>
                                <button type="submit" class="btn btn-primary w-sm">Agregar Lead</button>
                            </div>
                        @include('layouts.message')
                        </form><!-- end form -->
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->
<!-- End Form Layout -->

@endsection

