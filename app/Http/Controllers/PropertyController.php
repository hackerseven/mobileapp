<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function __construct(Property $property)
    {
        $this->property = $property;
    }

    public function showProperties(Request $request){
        $filterBy = !empty($request->city) ? 'city' : NULL;
        $filter = trim($request->city) ?? NULL;
        $sortBy = $direction = NULL;
        if(!empty($request->sort_by)){
            $temp = explode('_', $request->sort_by);
            $sortBy = $temp[0];
            $direction = $temp[1];
        }
        $properties = $this->property->getProperties($filterBy, $filter, $sortBy, $direction);
        //dd($properties);
        return view('gallery', ['properties' => $properties, 'city' => $request->city, 'sort' => $request->sort_by]);

    }
}
