<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConectionFactory
 *
 * @author root
 */

class ConectionFactory extends Conection{
    private $con;
    public function __construct() {
                $this->con = new Conection();
                return $this->con;
    }

}
