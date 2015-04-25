<?php $this->assign('title', 'Mitarbeiter - Übersicht'); ?>

<div class="jumbotron">
    <h2>Willkommen Mitarbeitername</h2>   
    <br>
    <!-- Statusanzeige Restarbeitszeit -->
    <h3 class="text-center">Ihre aktuelle Monatsleiste</h3>
    <div class="progress">   
        <div class="progress-bar progress-bar-striped active" role="progressbar"
             aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
            10%
        </div>
    </div>  
    <!-- Statusanzeige Ende -->
</div>
<!-- Mitarbeitername und ID Ende --> 

<!--Buttonbox--> 
<div class="container">
    <table class="table table-striped"
           <tr>
            <th><p>Klicken sie auf Start, um mit ihrer Arbeit anzufangen. </p>
        <th><p>Klicken sie auf Pause, um eine Pause zu machen. </p>
        <th><p>Klicken sie auf Beenden, wenn sie ihre Arbeit beenden wollen. </p>
        </tr>
        <tr>
            <th><button type="button" class="btn btn-success" style="width:180px">Start</button></th>
            <th><button type="button" class="btn btn-warning" style="width:180px">Pause</button></th>
            <th><button type="button" class="btn btn-danger"  style="width:180px">Beenden</button></th>
        </tr>
    </table>
</div>

<!-- Buttonbox Ende -->  

