<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    public function addClients(Request $request){
        Clients::create($request);
        return true;
    }

    public function listClients(){
        $clients = Clients::all()->json;
        return response()->json($clients);
    }
    public function show(string $id): View
    {
        $clients = Clients::findOrFail($id);
        return $clients;
    }
}
