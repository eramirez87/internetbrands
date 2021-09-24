@extends('layouts.master')
@section('content')

<div class='row'>
    <form class='col s12' action='{{ route("Item.store") }}' method='post'>
        <h3>Crear / </h3>
        @csrf
        <p>&nbsp;</p>
        <div class="input-field col s12">
          <input id="name" name='name' type="text" class="validate">
          <label for="name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="price" name='price' type="text" class="validate">
          <label for="price">Precio</label>
        </div>
        <div class="input-field col s6">
          <input id="amount" name='amount' type="text" class="validate">
          <label for="amount">Existencia</label>
        </div>
        <div class='col s12'>
            <button class='btn' type='submit'>
                <i class='material-icons'>save</i>
            </button>
            <a href='{{ route("Item.index") }}'>Regresar</a>
        </div>
    </form>
</div>

@endsection