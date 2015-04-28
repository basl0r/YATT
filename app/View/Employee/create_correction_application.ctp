<?php $this->assign('title', $title);?>
 
 <div class="container">
 <form class="form-horizontal" role="form">
	  	 <div class="container">	
		<div class="form-group">
			<label for="Mitarbeiter-ID">Mitarbeiter-ID:</label>
			<input type="text" class="form-control" id="Mitarbeiter-ID" placeholder="Bitte ID-Nummer eingeben">
        </div> 
		
		<div class="form-group">
			<label for="Vorname">Vorname:</label>
			<input type="text" class="form-control" id="Vorname" placeholder="Bitte Vornamen eingeben">
        </div>
        <div class="form-group">
			<label for="Nachname">Nachname:</label>
			<input type="text" class="form-control" id="Nachname" placeholder="Bitte Nachnamen eingeben">
        </div> 
		
		<div class="form-group">
		<label for="Nachname">Korrektur:</label>
		</div> 
		<!-- Textarea-Feld evtl.überarbeiten -->
		<div class="form-group">
		<textarea style="width:300px" placeholder="Bitte tragen sie hier ihre/n Tag/e und die jeweilige richtige Stundenanzahl ein, welche korrigiert werden müssen.">
		</textarea>				
		 </div>
		 </div> 
		<button type="submit" class="btn btn-default">Korrektur bestätigen</button>	
		<!-- Textarea-Feld Ende-->
 </form>
</div>