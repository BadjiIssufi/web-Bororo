<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artigo;

class ArtigoController extends Controller
{
    public function index($id)
    { 
        $artigo = $this->findArtigoById($id);
        dd($artigo);
        if($artigo){
          return view('artigo',compact('artigo'));
        }
    
        return redirect()->route('site'); 
    }

    public function findArtigoById($id){
        $response = $this->requestGET("/api/artigos", ['id'=>$id]);
        $content = json_decode($response->getBody()->getContents());
        return $content;
    }
}
