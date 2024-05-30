<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticoliCon extends Controller
{
    //
    public $articles=[
        1=>['id'=>1,'title'=>'La montagna incantata, T. Mann','body'=>'Letteratura tedesca'],
        2=>['id'=>2,'title'=>'Il conte di Montecristo, A. Dumas','body'=>'Letteratura francese'],
        3=>['id'=>3,'title'=>'Tutte le poesie, F. Fortini','body'=>'Poesia italiana '],
        4=>['id'=>4,'title'=>'Al culmine della disperazione, E. Cioran','body'=>'Filosofia romena'],

    ];
    public function articoli(){
        $articles=$this->articles;
        return view('articoli', compact('articles'));
    }
    public function articoloShow($id){
        if(array_key_exists($id,$this->articles)){
            $article=$this->articles[$id];
            return view('articolo', compact('article'));
        }else{
            abort(404);
        }
    }
}