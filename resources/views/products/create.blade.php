@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">

        <div class="main-header">
            <h4><i class="ti-gift"></i> Producto : agregar  </h4>
        </div>
        </div>



    </div>
    <div class="row card"  >
        <div class="col-lg-12">
             <div class="">
                <div class="card-block">
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('ERROR'))
                        <div class="alert alert-danger">{{ session('ERROR') }}</div>
                        @endif

                    <form action="{{ route('products_store')}}" method="POST">
                        @csrf
                            <div class="form-group col-lg-3">
                                <label for="dia" class="form-control-label">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>


                            <div class="form-group col-lg-8">
                                <label for="dia" class="form-control-label">Descripción</label>
                                <input type="text" class="form-control" name="description" id="description" required>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="dia" class="form-control-label">Imagen</label>
                                <input type="file" class="form-control" name="image_url" id="image_url" required>
                            </div>
                            <div class="form-group col-lg-8">

                            </div>
                            <div class="form-group col-lg-12 d-flex " style="display: flex;  justify-content: space-around;" >

                                     <button  type="submit" class="btn btn-success">Agregar</button>


                            </div


                    </form>


                </div>
             </div>
          </div>
    </div>
 </div>



@endsection
