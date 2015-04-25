<?php

class EmployeeController extends AppController {

    public function index() {
        $this->layout = 'employee';
        
    }
    
    public function correction_application(){
        $this->layout = 'employee';
        $this->set('title', 'Mitarbeiter - Korrekturantrag Übersicht');
    }
    
    public function show($requested_time_period = NULL){
        $this->layout = 'employee';
        
        if($requested_time_period = 'year'){
            $this->set('title', 'Mitarbeiter Übersicht - Jahr');
            
            
        } elseif($requested_time_period = 'month'){
            $this->set('title', 'Mitarbeiter Übersicht - Monat');
            
        }
    }
    public function logout(){
        $this->redirect(array('controller' => 'employee', 'action' => 'index'));
    }

}
