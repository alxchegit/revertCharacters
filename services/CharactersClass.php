<?php
namespace Services;

class CharactersClass 
{

    /**
     * 
     * 
     */
     public function revert(string $str): string 
     {
        // $re = '/(.*?)(\!|\.|\?)/u';
        // $str_chunks = explode('');
        $str_explode = explode(' ', $str);
        $result = '';
        foreach ($str_explode as $word) {
            $word = $this->my_strrev($word);
            $result .= "$word ";
        }
        return $this->my_mb_ucfirst(trim($result));
     }

     private function my_strrev(string $str): string
     {
        $r = '';
        if(mb_strtolower($str) !== $str){
            $firstUp = true;
        } else {
            $firstUp = false;
        }
        $str_arr = array_reverse($this->str_split_unicode2(mb_strtolower($str)));
        if(preg_match('/\W/u', $str_arr[0])){
            $end = array_shift($str_arr);
            array_push($str_arr, $end);
        }
        foreach ($str_arr as $value) {
        $r .= $value;
        }     

        if($firstUp){
            $r = $this->my_mb_ucfirst($r);
        }
        return $r;
    }

    
/**
 * 
 * https://www.php.net/manual/ru/function.str-split
 */
    private function str_split_unicode($str, $l = 0): array
    {
        if ($l > 0) {
            $ret = array();
            $len = mb_strlen($str, "UTF-8");
            for ($i = 0; $i < $len; $i += $l) {
                $ret[] = mb_substr($str, $i, $l, "UTF-8");
            }
        return $ret;
        }
        return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
    }
/**
 * 
 * https://www.php.net/manual/ru/function.str-split
 */
    private function str_split_unicode2($str, $length = 1): array 
    {
        $tmp = preg_split('~~u', $str, -1, PREG_SPLIT_NO_EMPTY);
        if ($length > 1) {
            $chunks = array_chunk($tmp, $length);
            foreach ($chunks as $i => $chunk) {
                $chunks[$i] = join('', (array) $chunk);
            }
            $tmp = $chunks;
        }
        return $tmp;
    }

    private function my_mb_ucfirst(string $str): string 
    {
        $fc = mb_strtoupper(mb_substr($str, 0, 1));
        return $fc.mb_substr($str, 1);
    }

 }
     
    
