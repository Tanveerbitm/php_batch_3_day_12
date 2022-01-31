<?php


namespace App\classes;


class Example
{
    public $students = [];

    public function index()
    {
//        $this->students = [10,20,30,'BITM',10.20,true,false];
//        foreach ($this->students as $key=>$student){
//            echo $key."=> ";
//            if($student === false){echo 'false'."<br>";}
//            elseif($student === true){echo 'true'."<br>";}
//            else{echo $student."<br>";}
//
//        }
//        echo json_encode($this->students);
//        echo 20 + var_dump("20");
        $this->students = [
            0 => [
                'name' => 'tanveer',
                'email' => 'tanveer@gmail.com',
                'phone' => [
                    'phone1' => '01235',
                    'phone2' => '05489'
                ]],
            1 => [
                'name' => 'tanveer',
                'email' => 'tanveer@gmail.com',
                'phone' => [
                    'phone1' => '01235',
                    'phone2' => '05489'
                ]],
            3 => 'BITM',
            2 => [
                'name' => 'tanveer',
                'email' => 'tanveer@gmail.com',
                'phone' => [
                    'phone1' => '01235',
                    'phone2' => '05489'
                ]],
            3 => 'BITM',

        ];

        foreach ($this->students as $value) {



//            echo '<pre>';
//            var_dump($value);

//            echo json_encode($value);
//            if (is_array($value)) {
//                foreach ($value as $innerValue) {
//                    if (is_array($innerValue)) {
//                        foreach ($innerValue as $innermobile) {
//                            echo $innermobile . '<br>';
//                        }
//                    } else {
//                        echo $innerValue . '<br>';
//                    }
//
//                }
//            } else {
//                echo $value . '<br>';
//            }
//            foreach ($value as $innerKey => $innerValue){
//                echo $innerKey.' => '.$innerValue.'<br>';
//            }

        }


    }
}