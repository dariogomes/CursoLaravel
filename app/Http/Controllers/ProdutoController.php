<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {
    
    Public function lista(){
        
        $html = '<h1>Listagem de produtos com Laravel</h1>';
        
        $html .= '<ul>';
        
        $produtos = DB::select('select * from produtos');
        
        foreach ($produtos as $p){
            $html .= '<li>Nome: '.$p->nome.', Descrição: '.$p->descricao.', Valor R$: '.$p->valor.'</li>';
        }
        
        $html .= '</ul>';
        
        return $html;
        
    }
    
}