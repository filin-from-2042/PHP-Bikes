<?php
/*
*   Класс, описывающий галлерею
*   @package Gallery
*   @author Konov A. V.
*/
    class Gallery
    {
        public $colums;          // кол-во выводимых изображений
        public $conf_file;       //имя файла конфигурации с именами и описанием изображений
        public $names;           //массив с именами и описанием изображений
        
        public function __construct($conf_file, $colums=4)
        {
            $this->colums=$colums;
            $this->conf_file=$conf_file;
        }
        
        public function explodeNames()
        {          
            if(!$stringconf_file=file_get_contents($this->conf_file))
                throw new Exception;
            $stringsArr=explode("\n",$stringconf_file);
            foreach($stringsArr as $value){
                if(!empty($value)){
                        $this->names[]=explode(' ',$value,2);
                }
            }
        }
        
        public function renderGallery()
        {
                echo '<tr>';
                $count_colums=1;                    //счетчик отрисованных колонок с изображениями
                foreach($this->names as $value){
                         if($count_colums >  0 and 
                            $count_colums <= $this->colums){
                           echo '<td>';
                           echo "<img src=".$value[0]." height=300 width=500><br>
                                 <h1 align='center'>".$value[1]."</h1>";
                           echo '</td>'; 
                           $count_colums++;
                            }
                }  
                echo '</tr>';  
        }
        
    }
    
    /*$g= new gallery('./descript.ion');
    $g->explodeNames();
    print_r($g->names);
*/
?>
