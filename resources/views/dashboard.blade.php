@extends('layouts.app')

@section('titulo')
    Hola desde el dashboard
@endsection

@section('contenido')
    <div class="flex justify-center">

        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">

            <div class="md:w-1/2 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="imagen de usuario">
            </div >

            <div class="md:w-1/12 lg:w-6/12 px-5 ">
                <p class="font-bold uppercase">{{ auth()->user()->username }}</p>
            </div>

        </div>

    </div>
@endsection
