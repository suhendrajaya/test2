<?php

namespace App\Http\Controllers;

use App\Imports\TemplateImport;
use App\Libraries\Validation;
//
use Maatwebsite\Excel\Facades\Excel;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        
        echo "<b>Result Output when validating Type_A.xls</b>";
        $pathTypeA = storage_path('app/files/Type_A.xls');
        $arrayA = Excel::toArray(new TemplateImport, $pathTypeA);
        $validA = new Validation($arrayA[0]);
        $rsA = $validA->validate();
        echo '<pre>'; print_r($rsA);

        echo "<b>Result Output when validating Type_A.xlsx</b>";
        $pathTypeAx = storage_path('app/files/Type_A.xlsx');
        $arrayAx = Excel::toArray(new TemplateImport, $pathTypeAx);
        $validAx = new Validation($arrayA[0]);
        $rsAx = $validAx->validate();
        echo '<pre>'; print_r($rsA);
        
        echo "<b>Result Output when validating Type_B.xls</b>";
        $pathTypeB = storage_path('app/files/Type_B.xls');
        $arrayB = Excel::toArray(new TemplateImport, $pathTypeB);
        $validB = new Validation($arrayB[0]);
        $rsB = $validB->validate();
        echo '<pre>';print_r($rsB);

        echo "<b>Result Output when validating Type_B.xlsx</b>";
        $pathTypeBx = storage_path('app/files/Type_B.xlsx');
        $arrayBx = Excel::toArray(new TemplateImport, $pathTypeBx);
        $validBx = new Validation($arrayB[0]);
        $rsBx = $validBx->validate();
        echo '<pre>';print_r($rsBx);
    }
}
