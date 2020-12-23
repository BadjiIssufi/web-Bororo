<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artigo;

class ArtigoControllerApi extends Controller
{

    
    public function __construct()
    {
        
    }  

    public function findArtigoById(Request $request){ 
        $id = $request->get('id');
        $artigo = Artigo::find($id);

        return response()->json([
            'data' => $artigo,
        ], 200);
    }
    
}
