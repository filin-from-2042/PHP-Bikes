<?php
/*
        1.1-3 linear search (линейный поиск)
*/        
        
        $A = array(1,6,8,4,3,8);
        $value=4;						//искомое значение
        
        function findIndex($A,$value)
        {
                
                $finded=array();                                //массив будет содержать найденные индексы
                foreach($A as $key=>$element){
                        if($element==$value){
                                $finded[]=$key;
                        }
                }
                
                return $finded;
        }
        
        foreach(findIndex($A,$value) as $index){
                echo $index.'<br>';                             
        };
?>

