<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = User::all();
            return view('welcome')->with('users', $users);

        } catch (\Exceprion $e) {
            return response()->json($e, ["message" => "Usuarios Listados"], 404);
        }
    }

    public function pdf($id) {

        $user = User::find($id);

        $pdf = Pdf::loadView('/pdf', compact('user'));


        return $pdf->download();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'nombre' => 'required',
                'cedula' => 'required',
                'numero' => 'required',
                'direccion' => 'required'
            ]);

            $user = User::create([
                'nombre' => $request->nombre,
                'cedula' => $request->cedula,
                'numero' => $request->numero,
                'direccion' => $request->direccion
            ]);

            // return response()->json($user, ["message" => "usuario creado correctamente"], 201);
            
            return redirect('/')->with('success', 'Usuario Creado');

        } catch (\Exceprion $e) {
            return response()->json($e, ["message" => "Usuario no Creado"], 404);
        }
    }


    public function registerVista() {
        return view('register');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = User::find($id);
            return response()->json($user, ["message"=> "usuarios encontrado"], 200);
        } catch (\Exceprion $e) {
            return response()->json($e, ["message" => "Usuario no encontrado"], 404);
        }
    }

    
    public function updateVista($id) {
        $user = User::findOrFail($id);
        return view('/update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            User::findOrFail($id)->update($request->all());
            
            return Redirect('/');
        } catch (\Exceprion $e) {
            return response()->json($e, ["message" => "Usuario no actualizado"], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            User::find($id)->delete();

            return redirect('/')->with('success', 'Usuario eliminado correctamente');

        } catch (\Exceprion $e) {
            return response()->json($e, ["message" => "Usuario no actualizado"], 404);
        }
    }

    

}
