<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function index() {
        return view('furniture.index', 
            [
            'lifurniture' => 'active',
            'furnitures' =>  Furniture::orderBy('model')->get(),
            ]);
    }

    public function create(Request $request) {
        //
        return view('furniture.create', ['lifurniture' => 'active']);
    }

    public function store(Request $request) {
        //
        $validated = $request->validate([
            'model'  => 'required|unique:furniture|max:50|min:4',
            'price' => 'required|numeric|gte:0|lte:99999.99',
        ]);
        $object = new furniture($request->all());
        try {
            $result = $object->save();
            //$object = Furniture::create($request->all());
            return redirect('furniture')->with(['message' => 'The furniture has been created.']);
        } catch(\Exception $e) {
            //si no lo he guardado volver a la página anterior con sus datos para volver a rellenar el formulario y mensaje
            return back()->withInput()->withErrors(['message' => 'The furniture has not been created.']);
        }
    }

    // public function show(Furniture $furniture) {
    //     return view('furniture.show', 
    //         [
    //         'lifurniture' => 'active',
    //         'furniture' => $furniture,
    //         ]);
    // }

    public function show($id) {
        $furniture = Furniture::find($id);
        if ($furniture == null) {
            abort(404);
        }
        return view('furniture.show', 
            [
            'lifurniture' => 'active',
            'furniture' => $furniture,
            ]);
    }

    public function edit(Furniture $furniture) {
        return view('furniture.edit', 
            [
            'lifurniture' => 'active',
            'furniture' => $furniture,
            ]);
    }

    public function update(Request $request, Furniture $furniture) {
        $validated = $request->validate([
            'model'  => 'required|max:50|min:4|unique:furniture,model,' . $furniture->id,
            'price' => 'required|numeric|gte:0|lte:100000',
        ]);
        try {
            $result = $furniture->update($request->all());
            //$furniture->fill($request->all());
            //$result = $furniture->save();
            return redirect('furniture')->with(['message' => 'The model has been updated.']);
        } catch(\Exception $e) {
            return back()->withInput()->withErrors(['message' => 'The model has not been updated.']);
        }
    }

    public function destroy(Furniture $furniture) {
        //
        try {
            $furniture->delete();
            return redirect('furniture')->with(['message' => 'The furniture has been deleted.']);
        } catch(\Exception $e) {
             return back()->withErrors(['message' => 'The furniture has not been deleted.']);
        }
    }
}
