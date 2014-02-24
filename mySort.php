<?php
        $A=array(1=>51,6,46,24,210,35,37);
        $str='a';
        //var_dump($A);
/*
        Insertion sort (сортировка вставками)
*/        
        // по возрастанию
        function incSort(array $arr) 
        {
              if(is_array($arr))
              {  
                $length=count($arr);
                for($j=2;$j<=$length;$j++){
                        $currentElement=$arr[$j];       //текущий элемент
                        $i=$j-1;                        //соседний слева
                        while($i>0 and $arr[$i]>$currentElement){
                                $arr[$i+1]=$arr[$i];
                                $i--;
                        }
                        $arr[$i+1]=$currentElement;
                }
                return $arr;
             } else {
                echo "<br>Not array";
             }   
        }
       
       //по убыванию 
        function descSort(array $arr)  
        {
              if(is_array($arr))
              {  
                $length=count($arr);
                for($j=2;$j<=$length;$j++){
                        $currentElement=$arr[$j];       //текущий элемент
                        $i=$j-1;                        //соседний справа
                        while($i>0 and $arr[$i]<$currentElement){
                                $arr[$i+1]=$arr[$i];
                                $i--;
                        }
                        $arr[$i+1]=$currentElement;
                }
                return $arr;
             } else {
                echo "<br>Not array";
             }   
        }
        
        var_dump(incSort($A));
        var_dump(descSort($A));
?>
