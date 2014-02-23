<?php
    class MyException extends Exception
    {
        public $backtrace;
        public function __construct($message=false,$code=false)
        {
            if (!$this->message)
                $this->message=mysql_error();
            if (!$this->code)
                $this->code=mysql_errno();
            $this->backtrace=debug_backtrace();
        }
        
    }
?>