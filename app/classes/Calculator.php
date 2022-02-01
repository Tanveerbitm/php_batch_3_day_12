<?php


namespace App\classes;
use App\classes\User;


class Calculator extends User
{

    public $firstNumber;
    public $secondNumber;
    public $operator;
    public $result;

    public function __construct($data){

        if($data['first_number']!='' && $data['second_number']!='' && $data['operator']!='') {
            $this->firstNumber = $data['first_number'];
            $this->secondNumber = $data['second_number'];
            $this->operator = $data['operator'];

                switch ($this->operator) {
                    case '+':
                         $this->add();
                        break;
                    case '-':
                         $this->sub();
                        break;
                    case '/':
                         $this->div();
                        break;
                    case '*':
                         $this->mul();
                        break;
                    case '%':
                        $this->mod();
                        break;
                    default:
                        $this->result = '';
                }
            }else{
            $this->result='fill all field';
        }

    }

    protected  function add(){
        $this->result = $this->firstNumber + $this->secondNumber;
    }
    protected  function sub(){
        $this->result = $this->firstNumber - $this->secondNumber;
    }
    protected  function mul(){
        $this->result = $this->firstNumber * $this->secondNumber;
    }
    protected  function div(){
        $this->result = $this->firstNumber / $this->secondNumber;
    }
    protected  function mod(){
        $this->result = $this->firstNumber % $this->secondNumber;
    }



}