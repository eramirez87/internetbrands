@extends('layouts.master')
@section('content')

<div class='row'>
    <form class='col s12' action='{{ route("Item.update",$item->id) }}' method='post'>
        <h3>Editar / {{ $item->name }}</h3>
        {{ method_field('PUT') }}
        @csrf
        <p>&nbsp;</p>
        <div class="input-field col s12">
          <input id="name" name='name' type="text" class="validate" value='{{ $item->name }}'>
          <label for="name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="price" name='price' type="text" class="validate" value='{{ $item->price }}'>
          <label for="price">Precio</label>
        </div>
        <div class="input-field col s6">
          <input id="amount" name='amount' type="text" class="validate" value='{{ $item->amount }}'>
          <label for="amount">Existencia</label>
        </div>
        <div class='col s12'>
            <button class='btn' type='submit'>
                <i class='material-icons'>update</i>
            </button>
            <a href='{{ route("Item.index") }}'>Cancelar</a>
        </div>
    </form>
</div>

@endsection