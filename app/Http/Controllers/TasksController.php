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
            return "Smallest number is {$small}(While)";
        }
        elseif ($key == "ex1-13"){
            $small = $this->arr[0];
            for ($j = 0; $j < count($this->arr); $j++) {
                if ($this->arr[$j] < $small) {
                    $small = $this->arr[$j];
                }
            }
            return "Smallest number is {$small}(For)";
        }
        elseif ($key == "ex1-14"){
            $large1 = 0;
            $large2 = 0;
            for ($j = 0; $j < count($this->arr); $j++) {
                if ($this->arr[$j] > $large2) {
                    if ($this->arr[$j] > $large1){
                        $large2 = $large1;
                        $large1 = $this->arr[$j];
                    }else{
                        $large2 = $this->arr[$j];
                    }
                }
            }
            return "First largest is {$large1}, second largest is {$large2}";
        }

        else{
            return "Not found";
        }
    }
}
