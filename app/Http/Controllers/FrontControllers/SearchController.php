<?php

namespace App\Http\Controllers\FrontControllers;
use App\Property;
use Illuminate\Http\Request;


class SearchController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::latest()->enabled()->get();
        return view('frontend.index', compact('properties'));
    }

    public function search(Request $request)
    {
        $num_bedroom = $request->bedroom;
        $num_bathroom = $request->bathroom;
        $price = $request->maxprice;

        $properties = Property::latest()
                        ->enabled()
                        ->when($num_bedroom, function ($query, $num_bedroom) {
                            return $query->where('num_bedroom', '>=', $num_bedroom);
                        })
                        ->when($num_bathroom, function ($query, $num_bathroom) {
                            return $query->where('num_bathroom', '>=', $num_bathroom);
                        })
                        ->when($price, function ($query, $price) {
                            return $query->where('price', '<=', $price);
                        })
                        ->paginate(10)
                        ;
        return view('frontend.index', compact('properties'));
    }

    public function show(Request $request){
        $property = Property::findOrFail($request->id);
        return view('frontend.show', compact('property'));
    }
}
