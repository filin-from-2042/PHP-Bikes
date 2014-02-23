<?php
/*
        Данный велоспед складывает двоичные числа,
        разряды которых записаны в виде эл-тов массива
*/        
        
        $A=array(1,1,0,0,1);  
        $B=array(0,1,0,1,1,0,0,1); 
        
        function binarySumm($fNumb, $sNumb)
        {
                $count='';
       /*
        Определения кол-ва итераций и массива с наибольшим кол-вом эл-тов как fArr
        c наименьшим как sArr
       */        
                if(count($fNumb)<count($sNumb)){  
                        $count=count($sNumb);
                        $fArr=$sNumb;
                        $sArr=$fNumb;
                } else {
                        $count=count($fNumb);
                        $fArr=$fNumb;
                        $sArr=$sNumb;
                }
                
       /*
        Т.к сумма 1 и 1 = 2 все разруливается свитчом с этим условием
        При возрастании значчения эл-та массива до 2ух он обнуляется,
        после чего наращивается инкрементом следущий эл-т массива(двоичный разряд)
       */
                for($j=0;$j<$count;$j++){
                        $i=$j+1;
                        switch($fArr[$j]+$sArr[$j]){
                                case 0: break;
                                case 1: $fArr[$j]=1;break;
                                case 2: $fArr[$j]=0;
                                        $fArr[$i]++;
                                        while($fArr[$i]>1){
                                                $fArr[$i]=0;
                                                $fArr[$i+1]++;
                                                $i++;
                                        };break;
                                default: echo 'Проблема в switch';
                        }
                }
                
                return $fArr;
        }
        
        print_r(binarySumm($B,$A));
?>
