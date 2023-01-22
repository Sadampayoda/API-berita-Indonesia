<?php

namespace Logic;

class Search{

    protected static $result = [];

    public static function beritaIndo($cari,$data)
    {
        error_reporting(0);
        if(empty($cari)){
            return $data;
        }
        $newDataCari = explode(" ",$cari['content']);
        $configData = [];
        foreach ($data as $value) {
            $getData = $value;
            $newData=explode(" ", $value['title']);
            $configData[] = $newData;
        }

        // return count($configData[0]);
        $hasil = [];
        $hitunganSama = 0;
        for ($i=0; $i < count($newDataCari)  ; $i++) { 
            for ($j=0; $j < count($configData) ; $j++) {
                for ($k=0; $k < count($configData[0]) ; $k++) { 
                    if($newDataCari[$i] == $configData[$j][$k])
                    {
                        $hitunganSama++;
                    }
                } 
                $hasil[] = $hitunganSama;
                $hitunganSama = 0;
            }
        }
        // return $hasil;

        for ($m=0; $m < count($data) ; $m++) { 
            if($hasil[$m] > 0){
                self::$result[] = $data[$m];
            }
        }

        return self::$result;

        
        
    }

}