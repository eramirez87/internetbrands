@extends('layouts.master')

@section('content')
<div class='row'>
    <div class='col s12'>
        <table>
            <thead>
                <tr>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th colspan='2'>Acciones</th>
                    </tr>
                </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>${{ number_format($item->price,2) }}</td>
                <td>{{ $item->amount }}</td>
                <td><a class='blue-text btn-flat' href='{{ route("Item.edit",$item->id) }}'><i class='material-icons'>edit</i></a></td>
                <td>
                    <form action='{{ route("Item.destroy",$item->id) }}' method='post' >
                        {{ method_field('DELETE') }}
                        @csrf
                        <input type='hidden' name='id' value='{{ $item->id }}'/>
                        <button class='btn-flat red-text' type='submit'><i class='material-icons'>delete</i></button></td>
                    </form>    
            </tr>    
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="fixed-action-btn">
  <a href='{{ route("Item.create") }}' class="btn-floating btn-large red">
    <i class="large material-icons">add</i>
  </a>
</div>
@endsection