<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversionController extends Controller
{
    public function length()
    {
        return view('conversion.length');
    }

    public function convertLength(Request $request)
    {
        $value = $request->input('value');
        $fromUnit = $request->input('from_unit');
        $toUnit = $request->input('to_unit');

        $conversions = [
            'meter' => 1,
            'kilometer' => 1000,
            'centimeter' => 0.01,
            'millimeter' => 0.001,
            'inch' => 0.0254,
            'foot' => 0.3048,
            'yard' => 0.9144,
            'mile' => 1609.34,
        ];

        $result = ($value * $conversions[$fromUnit]) / $conversions[$toUnit];

        return view('conversion.length', compact('result', 'value', 'fromUnit', 'toUnit'));
    }

public function weight() 
{
    return view('conversion.weight');
}

public function convertWeight()
{
    $value = $request->input('value');
    $fromUnit = $request->input('from_unit');
    $toUnit = $request->input('to_unit');

    $conversions = [
        'gram' => 1,
        'kilogram' => 1000,
        'milligram' => 0.001,
        'ounce' => 28.3495,
        'pound' => 453.592,
    ];

    $result = ($value * $conversions[$fromUnit]) / $conversions[$toUnit];

    return view('conversion.weight', compact('result', 'value', 'fromUnit', 'toUnit'));

}

public function temperature()
{
    return view('conversion.temperature');
}

public function convertTemperature(Request $request)
    {
        $value = $request->input('value');
        $fromUnit = $request->input('from_unit');
        $toUnit = $request->input('to_unit');

        if ($fromUnit == 'celsius' && $toUnit == 'fahrenheit') {
            $result = ($value * 9/5) + 32;
        } elseif ($fromUnit == 'fahrenheit' && $toUnit == 'celsius') {
            $result = ($value - 32) * 5/9;
        } elseif ($fromUnit == 'celsius' && $toUnit == 'kelvin') {
            $result = $value + 273.15;
        } elseif ($fromUnit == 'kelvin' && $toUnit == 'celsius') {
            $result = $value - 273.15;
        } elseif ($fromUnit == 'fahrenheit' && $toUnit == 'kelvin') {
            $result = ($value - 32) * 5/9 + 273.15;
        } elseif ($fromUnit == 'kelvin' && $toUnit == 'fahrenheit') {
            $result = ($value - 273.15) * 9/5 + 32;
        } else {
            $result = $value;
        }

        return view('conversion.temperature', compact('result', 'value', 'fromUnit', 'toUnit'));
    }




    
}
