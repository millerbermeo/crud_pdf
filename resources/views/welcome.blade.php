@extends('layouts.app')

 <div class="pl-[300px] pt-[100px]">
  

    <div class="container mx-auto p-10">
    <h1 class="text-2xl font-bold mb-4">Tabla Usuarios</h1>
    <a href="{{route('register')}}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded my-2">
  Register
</a>

    <div class="overflow-x-auto pt-10">
      <table class="min-w-full bg-white border border-gray-300">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b">ID</th>
            <th class="py-2 px-4 border-b">Nombre</th>
            <th class="py-2 px-4 border-b">Cédula</th>
            <th class="py-2 px-4 border-b">Número</th>
            <th class="py-2 px-4 border-b">Dirección</th>
            <th class="py-2 px-4 border-b">Acciones</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($users as $user)
          <tr>
 
            <td class="py-2 px-4 border-b text-center">{{ $user->id }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $user->nombre }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $user->cedula }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $user->numero }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $user->direccion }}</td>
            <td class="py-2 flex px-4 border-b text-center">
            <a href="{{route('update', $user->id)}}" class="w-20 text-white h-10 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</a>

            <form action="{{ route('delete', ['id' => $user->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="w-20 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm  py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>

    </form>

    <a href="{{ route('pdf', ['id' => $user->id]) }}" class="w-20 h-10 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 justify-center rounded inline-flex items-center">
    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/>
    </svg>
mm
</a>


            </td>
           

           
          </tr>
          @endforeach
          <!-- Puedes agregar más filas según sea necesario -->
        </tbody>
      </table>
    </div>
  </div>
    
 </div>