<?php
    // class olla{
    //     public $lugares;
    //     private $merca;
    //     public function __construct(){

    //     }
    //     public function set_lugar():void {
    //         $arg = (object) func_get_arg();
    //         $this->lugares = $p1;
    //     }
    //     public function get_lugar():string {
            
    //         return $this->lugares;
    //     }
    //     // public function __destruct(){
    //     //     echo "Se allanado la ".__CLASS__;
    //     // }
    // }
  
    /* function data(){
        var_dump(func_get_arg(3));
    }

    data("miguel",23,true,["A","B"]);*/


    /* function cursos(){
        var_dump (func_get_arg(3));
    }
    cursos("josue",23,"tasa",["B","C"]); */


     /* $week = array('juan','33','julia','76');
     $position = count($week) -1;
     echo $week[$position];  */



    class person{
        public $name;
        public $last_name;
        public $age;

        function __construct($name, $last_name, $age){
            $this -> name = $name;
            $this -> last_name = $last_name;
            $this -> age = $age;
        }

    }
    /* https://www.discoduroderoer.es/ejercicios-propuestos-y-resueltos-poo-php/ */
?>