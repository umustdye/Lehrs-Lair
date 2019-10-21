<?php
/*
 * Author:     Omar Alkendi
 * Date  :     October 21st, 2019
 * Purpose:    Controller class for Lehr's Lair
 * 
 */


class Controller {
    private $levelIndex;
    private $pageNum;
    private $itemStatus;
    private $lightStatus;
    const ITEM_NUM = 20;
    
    function __construct() {
        $this->levelIndex = 0;
        $this->pageNum = 0;
        $this->itemStatus = array(0, 0, 0, 0,
                                  0, 0, 0, 0,
                                  0, 0, 0, 0,
                                  0, 0, 0, 0,
                                  0, 0, 0, 0,);
        $this->lightStatus = 0;   
    }
    
    public function setLevel($level){
        $this->levelIndex = $level;
        //echo HTML
    }
    
    public function nextPage(){
        $this->pageNum++;
        //echo HTML
    }
    
    public function prevPage(){
        $this->pageNum--;
        //echo HTML
    }
    
    public function hideItem($itemIndex){
        //echo HTML
    }
    
    public function showItem($itemIndex){
        //echo HTML
    }
    
    public function setItemStatus($itemIndex, $status){
        $this->itemStatus[$itemIndex] = $status;
    }
    
    public function setItemStatusOn(){
        $this->lightStatus = 1;
    }
    
    public function setItemStatusOff(){
        $this->lightStatus = 0;
    }
}
?>