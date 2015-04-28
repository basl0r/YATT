<?php

/**
 * /employee
  =Angestellter
  - logout
  - start
  - stop

  /employee/create_correction_application/
  - korrekturantrag stellen

  /employee/show_correction_application/
  - Übersicht über gestellte Korrekturanträge
  - link zu Korrekturanträgen

  /employee/show_overview/month
  - zeigt die Übersicht des Monats eines Mitarbeiters

  /employee/show_overview/year
  - zeigt die Übersicht des Jahres eines Mitarbeiters
 */
class EmployeeController extends AppController {

    /**
     * =Angestellter
     * - logout
     * - start
     * - stop
     */
    public function index() {
        $this->layout = 'employee';
    }

    /**
     * - korrekturantrag stellen
     */
    public function create_correction_application() {
        $this->layout = 'employee';
        $this->set('title', 'Mitarbeiter - Korrekturantrag Übersicht');
    }

    /**
     * - Übersicht über gestellte Korrekturanträge
     * - link zu Korrekturanträgen
     */
    public function show_correction_application() {
        $this->layout = 'employee';
        $this->set('title', 'Mitarbeiter Übersicht - Korrekturanträge');
    }

    /**
     * 
     */
    public function show_overview($requested_time_period = NULL) {
        $this->layout = 'employee';

        //- zeigt die Übersicht des Jahres eines Mitarbeiters
        if ($requested_time_period = 'year') {
            $this->set('title', 'Mitarbeiter Übersicht - Jahr');


        //- zeigt die Übersicht des Monats eines Mitarbeiters
        } elseif ($requested_time_period = 'month') {
            $this->set('title', 'Mitarbeiter Übersicht - Monat');
        }
    }

    /**
     * 
     */
    public function logout() {
        $this->redirect(array('controller' => 'employee', 'action' => 'index'));
    }

}
