<?php

namespace App\Http\Controllers;

use App\Models\Meals;
use Illuminate\Http\Request;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "here";
        $meals = Meals::all();
        // dd($meals);
        return view('dashboard')->with('meals', $meals);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexx()
    {
       // echo "here";
       $meals = Meals::paginate(4);
       // dd($meals);
       return view('landing')->with('meals', $meals);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = [
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
        ];
        Meals::create($data);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meals = Meals::find($id);
        return view('/edit')->with('meals', $meals);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function edit(Meals $meals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
        ];
        Meals::where('id', $id)->update($data);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meals = Meals::find($id);
        $meals->delete();
        return redirect('/dashboard');
    }
}
