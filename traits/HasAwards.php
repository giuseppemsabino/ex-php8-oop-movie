<?php
trait HasAwards{
    protected $awards;

    public function setAwards($awards){
        $this->awards
 = $awards
;
    }
    public function getAwards(){
        return $this->awards
;
    }
}