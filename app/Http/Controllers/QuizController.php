<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{

    public function quiz(){
        for($i = 1; $i <= 100; $i++){
            if($i % 3 == 0){
                $h_luasLingkaran = $this->luasLingkaran($i);
                echo $h_luasLingkaran  . '<br>';
            }else if($i % 5 == 0){
                $h_kelilingLingkaran = $this -> kelilingLingkaran($i);
                echo $h_kelilingLingkaran  . '<br>';
            }else if($i % 3 == 0 && $i %5 == 0){
                $h_luasPP = $this -> luasPersegiPanjang($i);
                echo $h_luasPP  . '<br>';
            }else{
                echo number_format((float)$i, 2, '.', '') . '<br>';
            }
        }
    }


    public function luasLingkaran(int $r){
        $r = $r/3;
        $hasil = 3.14 *$r * $r;
        return number_format((float)$hasil, 2, '.', '');
    }

    public function kelilingLingkaran(int $r){
        $r = $r/5;
        $hasil = 3.14 * 2 * $r;
        return number_format((float)$hasil, 2, '.','');
    }

    public function luasPersegiPanjang(int $sisi){
        $p = $sisi/3;
        $l = $sisi/5;
        $hasil = $p * $l;
        return number_format((float)$hasil, 2, '.','');
    }
}
