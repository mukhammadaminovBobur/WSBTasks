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
        elseif ($key == "ex1-15"){
            $large = 0;
            $small = $this->arr[0];
            for ($j = 0; $j < count($this->arr); $j++) {
                if ($this->arr[$j] > $large) {
                    $large = $this->arr[$j];
                }
                if ($this->arr[$j] < $small) {
                    $small = $this->arr[$j];
                }
            }
            return "Largest is {$large}, smallest is {$small}";
        }
        elseif ($key == "ex1-16"){
            $id = 0;
            $large = $this->arr[0];
            for ($j = 0; $j < count($this->arr); $j++) {
                if ($this->arr[$j] > $large) {
                    $large = $this->arr[$j];
                    $id = $j;
                }
            }
            return "Smallest number is {$large}(For)";
        }


        elseif ($key == "ex1-18a"){
            $arr = $this->arr;
            $sum = 0;
            array_shift($arr);
            for ($j = 1; $j < count($arr); $j++) {
                $sum += $arr[$j];
            }
            return "The answer is: {$sum}";
        }
        elseif ($key == "ex1-18b"){
            $arr = $this->arr;
            $sum = 1;
            array_shift($arr);
            for ($j = 0; $j < count($arr); $j++) {
                $sum *= $arr[$j];
            }
            return "The answer is: {$sum}";
        }
        elseif ($key == "ex1-18c"){
            $arr = $this->arr;
            $sum = 1;
            $count_of_array = count($arr);
            for ($j = 0; $j < $count_of_array; $j++) {
                if ($arr[$j] > 0){
                    $sum += $arr[$j];
                }
            }
            $sum /= $count_of_array;
            return "The answer is: {$sum}";
        }
        elseif ($key == "ex1-18d"){
            $arr = $this->arr;
            $sum = 1;
            $count_of_array = count($arr);
            $d = 0;
            for ($j = 0; $j < $count_of_array; $j++) {
                if ($arr[$j] > 0){
                    $sum += $arr[$j];
                    $d++;
                }
            }
            $sum /= $d;
            return "The answer is: {$sum}";
        }

        else{
            return "Not found";
        }
    }
}
