<?php

class ManagerController extends AppController {
    /*
     * /manager/
     * Zeigt alle User
     */

    public function index() {

        $this->set('title', 'Manager - Übersicht');
        $this->layout = 'manager';
        $this->Manager->useTable = 'users';

        // Alle User-Daten an View übergeben
        $this->set('data', $this->Manager->find('all'));
    }

    /**
     * /manager/correction_application
     * zeigt alle Anträge, offen und erledigt
     * link zu /manager/edit/correction_application
     * @param int $id; id = NULL Alle Anträge anzeigen; id >=1 Antrag anzeigen
     */
    public function show_correction_application($id = NULL) {
        $this->layout = 'manager';
        $this->set('title', 'Manager - Übersicht Korrekturanträge');
        $this->Manager->useTable = 'application_forms';
        $application_form_conditions = array('conditions' => array('is_closed' => 0));
        
        //noch ohne Namen
        $this->Manager->useTable = 'users';
        $open_applications_forms = $this->Manager->find('all', $application_form_conditions);
        
        
        foreach($open_applications_forms as &$open_applications_form){
            $infos_condition = array('conditions' => array('manager_id' => 0));
            $open_applications_form['manager_infos'] = $this->Manager->find('all', $conditions);
        }
        
        
        Debugger::dump($open_applications_forms);
        
        $this->set('open_applications_forms',$open_applications_forms);
        
    }

    /** /manager/create_user/
     * legt neue benutzer an
     */
    public function create_user() {
        $this->layout = 'manager';
        $this->set('title', 'Manager - Bearbeiten');
    }

    /**
     * editiert den User anhand der mitgebeben ID
     * @param int $id
     */
    public function edit_user($id = NULL) {
        $this->Manager->useTable = 'users';
        $this->set('title', 'Manager - Übersicht');
        $this->layout = 'manager';

        $this->set('user_details', $this->Manager->findById((int) 'id'));
    }

}
