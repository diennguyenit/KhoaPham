<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\DoiTuong;

class ClassController extends Controller
{
    public function getStudentsByClassID(Request $request)
    {
        return Classes::find($request->class_id)->students()->get();
    }

    public function getDoiTuong()
    {
        $doiTuong = new DoiTuong('A', 8.1, 'us');

        return $doiTuong;
    }

    public function getJson()
    {
        $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        $jsonString = json_encode($array);
        return $jsonString;
    }
}
