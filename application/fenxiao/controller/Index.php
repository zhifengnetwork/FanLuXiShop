<?php

namespace app\fenxiao\controller;

use Think\Db;


class Index extends MobileBase {

    public function index(){
       
       
        return $this->fetch();
    }

    
}