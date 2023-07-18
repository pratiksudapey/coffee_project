<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coffee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
       $this->middleware('auth');
     }

    public function index()
    {
        if(Auth::user()->is_admin=='1'){
            $coffees = Coffee::all();
            return view("coffee.index", compact('coffees'));
        }else{
            $coffees = Coffee::where('user_id', Auth::user()->id)->get();
            return view("coffee.index", compact('coffees'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coffee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validated = $request->validate([
            'name' => 'required|max:255',
            'quantity' => 'required|numeric',
        ]);

          $coffee = new Coffee();
          $coffee->name = $request->name;
          $coffee->quantity = $request->quantity;
          $coffee->description = $request->description;
          $coffee->user_id   = Auth::user()->id;
          $coffee->save();
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coffee = Coffee::find($id);
        return view('coffee.edit', compact("coffee"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'quantity' => 'required|numeric|min:1',
        ]);

        $coffee = Coffee::find($id);
        $coffee->name = $request->name;
        $coffee->quantity = $request->quantity;
        $coffee->description = $request->description;
        $coffee->save();
        return redirect()->route('coffee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete_order');
        $coffee = Coffee::find($id);
        $coffee->delete();
        return redirect()->route("coffee.index");
    }
}
