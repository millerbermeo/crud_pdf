@extends('layouts.app')

<div class="max-w-md mx-auto bg-white rounded-md p-8 shadow-md mt-24">
    <h1 class="text-2xl font-bold mb-4">Formulario Profesional</h1>

    <form action="" method="post" class="space-y-4">
    @csrf
    @method('PUT')

        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="mt-1 p-2 w-full border rounded-md" value="{{$user->nombre}}" required>
        </div>

        <div>
            <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula:</label>
            <input type="text" name="cedula" id="cedula" class="mt-1 p-2 w-full border rounded-md" value="{{$user->cedula}}" required>
        </div>

        <div>
            <label for="numero" class="block text-sm font-medium text-gray-700">Número:</label>
            <input type="text" name="numero" id="numero" class="mt-1 p-2 w-full border rounded-md" value="{{$user->numero}}" required>
        </div>

        <div>
            <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="mt-1 p-2 w-full border rounded-md" rows="3" value="{{$user->direccion}}" required></textarea>
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">ACTUALIZAR</button>
        </div>
    </form>
  </div>