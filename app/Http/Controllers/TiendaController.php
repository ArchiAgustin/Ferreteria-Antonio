<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\CategoProduct;

class TiendaController extends Controller
{
    public function index()
    {
        
        $productos = Producto::all(); 
        return view('tienda.home')
        ->with(compact('productos'));
    }

    public function listar()
    {
        $productos = Producto::all(); 
        return view('tienda.listar')
        ->with(compact('productos'));
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return view('tienda.show')->with(compact('producto'));
    }

    public function add()
    {
        $categorias = CategoProduct::pluck('nom_cat', 'id');; 
        return view('tienda.add')->with(compact('categorias'));
    }

    public function addproducto(Request $request){
		    
    		$product = new Producto;
    		$product->nom_pro = $request->input('nombre');
    		$product->unidad = $request->input('unidad');
    		$product->precio = $request->input('precio');
    		$product->category_id = $request->input('categoria');
    		$product->description = $request->input('description');

    		if($product->save()):
				return redirect('/')->with('message', 'Guardado con éxito.')->with('typealert', 'success'); 
			endif;
    	
	}
    public function editar($id)
    {
        $p = Producto::findOrFail($id);
		$categorias = CategoProduct::pluck('nom_cat', 'id');
		return view('tienda.editar', compact('categorias', 'p'));
    }
    public function actualizar($id, Request $request){
            $product = Producto::findOrFail($id);

    		$product->nom_pro = $request->input('nombre');
    		$product->unidad = $request->input('unidad');
    		$product->precio = $request->input('precio');
    		$product->category_id = $request->input('categoria');
    		$product->description = $request->input('description');

    		if($product->save()):
				return redirect('/');
			endif;
    }

    public function eliminar($id){
		$p = Producto::findOrFail($id);
		if($p->delete()):
			return back();
		endif;
	}
}
