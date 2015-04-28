<?php $this->fetch('navbar'); ?>
<?php $this->assign('title', $title); ?>
<div class="container">
    <h2>Mitarbeiter editieren</h2>
    <form role="form">
        <div class="form-group">
            <label for="Vorname">Vorname:</label>
            <input type="text" class="form-control" id="Vorname" placeholder="Bitte Vornamen eingeben" >
        </div>
        <div class="form-group">
            <label for="Nachname">Nachname:</label>
            <input type="text" class="form-control" id="Nachname" placeholder="Bitte Nachnamen eingeben">
        </div>
        <div class="form-group">
            <label for="Mitarbeiter-Soll-Stunden">Soll-Stunden:</label>
            <input type="text" class="form-control" id="Mitarbeiter-Soll-Stunden" placeholder="Bitte Soll-Stunden eingeben">
        </div>
        <button type="submit" class="btn btn-default">Übernehmen</button>
    </form>
</div>