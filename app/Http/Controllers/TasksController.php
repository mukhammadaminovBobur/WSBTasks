<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public $arr = [31, 2, 44, 38, 15, 36, 9, 28, 43, 26, 24, 23, 10, 22, 39];
    //Algorithm and Data Structure
    public function ADS($key)
    {
        if ($key == "ex1-12"){
            $small = $this->arr[0];
            $j = 0;
            while ($j < count($this->arr)){
                if ($this->arr[$j] < $small){
                    $small = $this->arr[$j];
                }
                $j++;
            }
            return "Smallest number is {$small}";
        }

        else{
            return "Not found";
        }
    }
}
