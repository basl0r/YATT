<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppModel', 'Model');

class Manager extends AppModel {

    public $useTable = 'User';

    public function index() {
        $lala = $this->Manager->find('all');
    }

}
