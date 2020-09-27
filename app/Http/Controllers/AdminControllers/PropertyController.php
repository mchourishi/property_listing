<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PropertyController extends Controller
{
    private $validationRules;

    /**
     * PropertyController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->validationRules = [
          config('constants.PROPERTIES.FIELDS.NAME') => parent::VAL_REQ,
          config('constants.PROPERTIES.FIELDS.PRICE') => parent::VAL_REQ_NUMERIC,
          config('constants.PROPERTIES.FIELDS.NUM_BATHROOM') => parent::VAL_REQ_INTEGER,
          config('constants.PROPERTIES.FIELDS.NUM_BEDROOM') => parent::VAL_REQ_INTEGER,
          config('constants.PROPERTIES.FIELDS.IMAGE') => parent::VAL_IMG
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::latest()->get();
        return view('admin.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $this->getRequestData($request);

        try {
            Property::create($requestData);
            $message = "Successfully created Property.";
            return redirect()->route(config('constants.PROPERTIES.ROUTE.INDEX'))->with(parent::SESSION_MESSAGE, $message);
        } catch (\Exception $e) {
            $message = "Failed creating Property";
            return redirect()->route(config('constants.PROPERTIES.ROUTE.INDEX'))->with(parent::SESSION_ERROR, "{$message}, please try again.");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('admin.properties.edit', compact('property', $property));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $requestData = $this->getRequestData($request);
        try {
            $property->update($requestData);
            $message = "Successfully updated Property.";
            return redirect()->route(config('constants.PROPERTIES.ROUTE.INDEX'))->with(parent::SESSION_MESSAGE, $message);

        } catch (\Exception $e) {
            $message = "Failed updating Property";
            return redirect()->route(config('constants.PROPERTIES.ROUTE.INDEX'))->with(parent::SESSION_ERROR, "{$message}, please try again.");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        try {
            $image_path = public_path() . '/images/' . $property->image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $property->delete();
            $message = "Successfully deleted Property.";
            return redirect()->route(config('constants.PROPERTIES.ROUTE.INDEX'))->with(parent::SESSION_MESSAGE, $message);

        } catch (\Exception $e) {
            $message = "Failed deleting Property";
            return redirect()->route(config('constants.PROPERTIES.ROUTE.INDEX'))->with(parent::SESSION_ERROR, "{$message}, please try again.");
        }
    }

    /**
     * Validate and Return Request Data
     *
     * @param  Request $request
     * @return array $requestData
     */
    private function getRequestData($request){
        $request->validate($this->validationRules);
        $requestData = $request->all();
        $requestData['status'] = isset($request->status) ? 1 : 0;
        if($request->image) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $imageName);
            $requestData['image'] = $imageName;
        }
        return $requestData;
    }
}
