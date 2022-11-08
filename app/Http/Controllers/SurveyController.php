<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //
    public function storeSurvey(Request $request){
        Survey::create([
            'kepuasan' => $request->kepuasan,
            'kritik' => $request->kritik,
        ]);

        return back()->with('success', 'Terimakasih telah melakukan survey untuk website simatalia');
    }
}
