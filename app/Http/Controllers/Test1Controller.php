<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test1Controller extends Controller
{
    public $a = 3;
    public $b = 5;
    public $mod_a_text = 'Marlin';
    public $mod_b_text = 'Booking';
    public $mod_a_b_text = 'Marlin Booking';
    public $mod_a_b_counter = 0;
    public $mod_a_b_switch = 2;

    public function index()
    {
        return view('test-1.index',[
            'menu'=>'test_1'
        ]);
    }
    
    public function process(Request $request)
    {
        $jumlah = $request->jumlah;
        for($i=1;$i<=$jumlah;$i++){
            if($i%$this->a==0){
                if($i%$this->b==0){
                    $this->print_text($i,$this->mod_a_b_text);
                    $this->mod_a_b_counter();
                }else{
                    $this->print_text($i,$this->mod_a_text);                
                }
            }else{
                if($i%$this->b==0)
                    $this->print_text($i,$this->mod_b_text);                
            }
            if($this->mod_a_b_counter==5)
                break;
        }
    }

    private function mod_a_b_counter()
    {
        $this->mod_a_b_counter++;
        if($this->mod_a_b_counter==$this->mod_a_b_switch)
            $this->swithch_mod_a_b_text();
    }

    private function swithch_mod_a_b_text()
    {
        $text_helper = $this->mod_a_text;
        $this->mod_a_text = $this->mod_b_text;
        $this->mod_b_text = $text_helper;
    }

    private function print_text($i, $text, $enter = true){
        echo $i.' '.$text.'</br>';
    }

}
