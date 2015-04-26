<?php

class ManagerController extends AppController {
    /*
     * /manager/
     * Zeigt alle User
     */

    public function index() {
        $this->set('title', 'Manager - Übersicht');
        $this->layout = 'manager';

        $data = array(
            'farbe' => 'rosa',
            'typ' => 'zucker',
            'preis_brutto' => 23.95
        );

//stellt dem View$farbe, $typ
//und $preisBrutto zur
        $this->set($data);
    }

    /**
     * /manager/correction_application
     * zeigt alle Anträge, offen und erledigt
     * link zu /manager/edit/correction_application
     * @param int $id; id = NULL Alle Anträge anzeigen; id >=1 Antrag anzeigen
     */
    public function correction_application($id = NULL) {
        $this->layout = 'manager';
        $this->set('title', 'Manager - Übersicht Korrekturanträge');
    }

    /** /manager/create_user/
     * legt neue benutzer an
     */
    public function create_user() {
        $this->layout = 'manager';
        $this->set('title', 'Manager - Bearbeiten');
    }

}
