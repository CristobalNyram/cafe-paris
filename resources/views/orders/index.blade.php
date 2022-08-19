@extends('layouts.admin')
@section('title',"Exportar Excel - UTTECAM")

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
        <div class="main-header">
            <h4><i class="ti-shopping-cart"></i> Hacer un pedido  </h4>
        </div>
        </div>
    </div>

 </div>

 <div class="content-wrapper"  id="tablaDatos">
    <div class="row" >
        <div class="col-lg-12">
             <div class="card">

                <div class="card-block">
                    <form action="{{ route('products_store')}}" method="POST">
                        @csrf
                            <div class="form-group col-lg-3">
                                <label for="product_id"  class="form-control-label" >Producto</label>
                                <select class="form-control" name="product_id" id="product_id" >
                                    @foreach ($products as $product )
                                    <option  value="{{ $product->id }}">{{ $product->name }} (${{ $product->price }})</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-2">
                                <label for="amount_product" class="form-control-label">Cantidad de producto</label>
                                <input type="number" class="form-control" name="amount_product" id="amount_product" placeholder="Cantidad de producto" required>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="address" class="form-control-label">Dirección</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Dirección" required>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="amount_payment" class="form-control-label">Monto</label>
                                <input type="text" class="form-control" name="amount_payment" id="amount_payment" readonly placeholder="Monto" required>

                            </div>




                            <div class="form-group col-lg-8">

                            </div>
                            <div class="form-group col-lg-12 d-flex " style="display: flex;  justify-content: space-around;" >

                                     <button  type="submit" class="btn btn-info">Hacer un pedido</button>


                            </div


                    </form>


                </div>
             </div>
          </div>
    </div>
 </div>

@endsection
