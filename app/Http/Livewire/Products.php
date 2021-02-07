<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class Products extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.products', compact('products'));
    }
    public function updated()
    {
        $this->validate();
    }

    public function save(){

        $this->validate();
        Product::create($this->product);
        $this->product = '';
    }

    public function showProduct($id){
        $product = Product::findOrFail($id);
        
    }

    public function editProduct($id){

    }

    public function deleteProduct($id){
        $product = Product::findOrFail($id);
        $product->delete();
        session()->flash('message', 'Producto borrado exitosamente!');
        
    }

    protected $rules = [
        'product.barcode'       =>  'required|numeric|min:2',
        'product.reference'     =>  'required|min:5|max:20',
        'product.cost'          =>  'required|numeric',
        'product.price'         =>  'required|numeric',
        'product.price_min'     =>  'required|numeric',
        'product.margin'        =>  'required|numeric',
        'product.margin_min'    =>  'required|numeric',
        'product.long_desc'     =>  'min:5|max:100',
        'product.short_desc'    =>  'min:5|max:50',
        'product.itbis'         =>  'required|numeric',
        'product.stock'         =>  'required|numeric',

    ];

    protected $messages = [
        'product.barcode.required'      =>  'El código de barras es necesario',
        'product.barcode.numeric'       =>  'El código de barras debe ser numeros',
        'product.barcode.min'           =>  'El código de barras debe tener al menos 2 digitos',
        'product.reference.required'    =>  'La referencia es necesaria', 
        'product.reference.min'         =>  'La referencia debe tener al menos 5 carácteres',
        'product.reference.max'         =>  'La referencia debe tener máximo 20 carácteres',
        'product.cost.required'         =>  'El costo es necesario',
        'product.cost.numeric'          =>  'El costo debe contener solo números',
        'product.price.required'        =>  'El precio es necesario',
        'product.price.numeric'         =>  'El precio debe contener solo números',
        'product.price_min.required'    =>  'El precio minimo es necesario',
        'product.price_min.numeric'     =>  'El precio minimo debe contener solo números',
        'product.margin.required'       =>  'El margen es necesario',
        'product.margin.numeric'        =>  'El margen debe contener solo números',
        'product.margin_min.required'   =>  'El margen minimo es necesario',
        'product.margin_min.numeric'    =>  'El margen minimo debe contener solo números',
        'product.long_desc.min'         =>  'La descripcion debe tener al menos 5 carácteres',
        'product.long_desc.max'         =>  'La descripcion debe tener máximo 100 carácteres',
        'product.short_desc.min'        =>  'La descripcion debe tener al menos 5 carácteres',
        'product.short_desc.max'        =>  'La descripcion debe tener máximo 50 carácteres',
        'product.itbis.required'        =>  'El itbis es necesario',
        'product.itbis.numeric'         =>  'El itbis debe contener solo números',
        'product.stock.required'        =>  'El stock es necesario',
        'product.stock.numeric'         =>  'El stock debe contener solo números',  
    ];
}
