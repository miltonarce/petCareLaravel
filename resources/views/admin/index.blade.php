@extends('layouts.main')

@section('title', 'Panel Admin')

@section('main')
    <div class="ui two cards">
        <a class="orange card" href="{{ url('/admin/mascotas/listado') }}">
            <div class="image">
                <img src="{{(url('imagenes/admin_mascotas.png'))}}">
            </div>
        </a>

        <a class="teal card" >
            <div class="image">
                <img src="{{(url('imagenes/admin_users.png'))}}">
            </div>
        </a>
    </div>

    @endsection