<div class="container">
	<div class="row font-1" id="consent">
		<h3>Consenso</h3>
		<br>
		<p>Ti viene chiesto di partecipare a questo sondaggio preliminare in qualità di persona in salute e senza sintomi neurologici conosciuti. Durante il sondaggio ti verrà chiesto di stimare i prezzi di diversi prodotti.</p>
		<p>La tua partecipazione è volontaria e puoi rifiutarti di svolgere il sondaggio in qualsiasi momento. I risultati di ogni partecipante sono considerati informazioni confidenziali e non verrà richiesta nessuna informazione identificativa. Saremo lieti di fornirti i risultati finali quando verranno elaborati e pubblicati. Se interessato/a puoi contattare Elena Bertossi a ebertossi@research.baycrest.org, che sarà disponibile anche a rispondere ad eventuali domande e chiarimenti.</p>
		<p>Cliccando il pulsante "AVANTI", acconsenti al fatto di aver compreso che la tua partecipazione è volontaria, che puoi rifiutarti di partecipare in qualsiasi momento durante il sondaggio e che nessuna informazione identificativa verrà raccolta. </p>
		<br>
		
		<button class="btn btn-primary" id="endconsent">Avanti</button>
	</div>
<!-- =================================================== Survey instructions and personal information ============================================ -->
	<div class="row" id="intro">
			<form class="form-horizontal" id="formIntro">
				<fieldset id="subjectInfo">
				
				<!-- Form Name -->
				<legend>Benvenuto/a nella pagina del questionario della valutazione di prezzi dei prodotti!</legend>
				<div class="font-1">
				<p>Per favore nota che: per partecipare a questo studio è necessario conoscere bene la lingua italiana, aver vissuto in Italia per almeno 5 anni ed avere almeno 40 anni di età.</p>
				<p>Per favore, nelle prossime domande in cui viene richiesta una risposta da inserire nella casella di testo usa le cifre numeriche. </p>
				</div>
				<div class="alert alert-danger" role="alert" id="alertmsg">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				 COMPILARE TUTTI I CAMPI
				</div>
				<br>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="age">Quanti anni hai?</label>  
				  <div class="col-md-4">
				  <input id="age" name="age" placeholder="digita un numero" class="form-control input-md" type="text" required>
				    
				  </div>
				</div>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="schoolInfo">Quanti anni di scuola hai completato?</label>
				  <div class="col-md-4">
				  <input id="schoolInfo" name="schoolInfo" placeholder="digita un numero" class="form-control input-md" required="" type="text">
				  <span>(Includendo le scuole elementari, medie e superiori, università, o altri tipi di istituti scolastici riconosciuti) </span>    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="age">Da quanti anni vivi in Italia?</label>  
				  <div class="col-md-4">
				  <input id="livinginfo" name="livingInfo" placeholder="digita un numero" class="form-control input-md" type="text" required>
				    
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="col-md-4 control-label comeLeft" for="gender">Sesso</label>
				  <div> 
				    <label class="radio-inline" for="gender-M">
				      <input name="gender" id="gender-M" value="M" required type="radio">
				      Maschio
				    </label> 
				    <label class="radio-inline" for="gender-F">
				      <input name="gender" id="gender-F" value="F" type="radio">
				      Femmina
				    </label>
				  </div>
				 </div>
				 
				 <div class="form-group">
				  <label class="col-md-4 control-label comeLeft" for="groceryfreq">Quanto spesso fai la spesa al supermercato?</label>
				  <div> 
				    <label class="radio-inline" for="radios_grocery-0">
				      <input name="groceryfreq" id="radios_grocery-0" value="never" required type="radio">
				      Mai
				    </label> 
				    <label class="radio-inline" for="radios_grocery-1">
				      <input name="groceryfreq" id="radios_grocery-1" value="a few times a year" type="radio">
				      Qualche volta all'anno
				    </label> 
				    <label class="radio-inline" for="radios_grocery-2">
				      <input name="groceryfreq" id="radios_grocery-2" value="a few times per month" type="radio">
				      Qualche volta al mese
				    </label> 
				    <label class="radio-inline" for="radios_grocery-3">
				      <input name="groceryfreq" id="radios_grocery-3" value="a few times per week" type="radio">
				      Qualche volta a settimana
				    </label>
				    <label class="radio-inline" for="radios_grocery-4">
				      <input name="groceryfreq" id="radios_grocery-4" value="every day" type="radio">
				      Ogni giorno
				    </label>
				   
				  </div>			  
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="lastshop">Quanti giorni fa hai fatto la spesa al supermercato per l'ultima volta?</label>
				  <div class="col-md-4">
				  <input id="lastshop" name="lastShop" placeholder="digita un numero" class="form-control input-md" required="" type="text">
				  <span>(Se inserisci 0 significa che hai fatto la spesa per l'ultima volta oggi stesso) </span>    
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="proceed"></label>
				  <div class="col-md-4">
				    <button id="proceed" type="button" name="proceed" class="btn btn-primary">Avanti</button>
				  </div>
				</div>
				
				</fieldset>
				</form>
			
		</div>	
<!-- ======================================================== pre survey ======================================================================= -->		
	<div class="row font-1" id="survey_info">
		<p>Siamo interessati a raccogliere informazioni su come le persone associano gli oggetti ad un particolare tema o ad una particolare situazione (in questo studio useremo la situazione di "fare la spesa al supermercato") ed a come stimano i prezzi degli oggetti stessi.</p>
		<p>Ti verrà presentato un prodotto alla volta. Per ciascun prodotto, la prima domanda sarà su quanto tipico è il prodotto quando si fa la spesa al supermercato e ti verrà richiesto di fornire una risposta usando una scala da 1 = per niente tipico (il prodotto non è associato per niente con il fare la spesa al supermercato) a 5 = molto tipico (il prodotto è fortemente associato con il fare la spesa al supermercato).</p>
		<p>La seconda domanda riguarda lo stimare il prezzo (in euro) del prodotto e scrivere il prezzo nella casella di testo.</p>
		<p>Dopo aver risposto a queste due domande, per favore clicca il pulsante "AVANTI" per far apparire il prossimo prodotto. Alla fine del questionario un messaggio apparirà sullo schermo per farti sapere che hai completato con successo il questionario.</p>
		<p>Il questionario durerà circa 45 minuti.</p>
		<p>Prima di cominciare il questionario della valutazione di prezzi dei prodotti, cerca di immaginare in maniera vivida nella tua mente, per alcuni secondi, com'è fare la spesa al supermercato. Cerca di immaginare con più dettagli possibili i prodotti e le azioni che riguardano fare la spesa al supermercato (ad es. andare al supermercato, scegliere i prodotti, andare alla cassa etc.). Dopo aver immaginato la situazione, puoi cominciare a compilare il questionario. I nomi dei prodotti e le loro immagini appariranno sullo schermo uno ad uno con due domande per ciascun prodotto. Queste domande sono descritte di seguito.</p>
		<p>
			<img alt="" src="<?php echo substr((string)base_url(), 0, -1);?>/images/questions_it.png">
			
		</p>
		<br>
		
		<button class="btn btn-primary" id="start_survey">Inizia il Questionario</button>
	</div>
<!-- ======================================================== Survey questions =================================================================== -->
	<div class="row" id="survey">	
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			
			<form class="form-horizontal" id="answers" role="form"  action="<?= base_url() ?>index.php/home/createRecord">
				<h2>Questionario della valutazione di prezzi dei prodotti</h2>
				<hr class="colorgraph">
				<div class="row">
				<h2 id="item1"></h2>
				<div id="currentitem"><span id="current"></span>/260</div>
				<br>
				<img alt="image1" src="" id="img1" width="380px">
				<br><br>
				
				<fieldset>
				<h4>Quanto è tipico questo prodotto quando si fa la spesa al supermercato?</h4>
				
				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-3 control-label comeLeft" for="q1_1">Per niente tipico</label>
				  <div class="mgRight0"> 
				    <label class="radio-inline" for="radios-0">
				      <input name="q1_1" id="radios-0" value="1" required type="radio">
				      1
				    </label> 
				    <label class="radio-inline" for="radios-1">
				      <input name="q1_1" id="radios-1" value="2" type="radio">
				      2
				    </label> 
				    <label class="radio-inline" for="radios-2">
				      <input name="q1_1" id="radios-2" value="3" type="radio">
				      3
				    </label> 
				    <label class="radio-inline" for="radios-3">
				      <input name="q1_1" id="radios-3" value="4" type="radio">
				      4
				    </label>
				    <label class="radio-inline" for="radios-4">
				      <input name="q1_1" id="radios-4" value="5" type="radio">
				      5
				    </label>
				    <div id="comeDown">
				    	<strong>Molto tipico</strong>
				    </div>
				    <br><br>
				  </div>			  
				</div>
				 <h4>Quanto pensi possa costare questo prodotto?<h4> 
				<!-- Text input-->
				<span class="graySmall">(Per favore, usa il punto per separare gli euro dai centesimi, per esempio scrivi 2.50 se intendi valutare il prodotto due euro e cinquanta centesimi)</span>
				  <br>
				  <div class="col-md-5">
				  <input id="textinput" name="q1_2" required placeholder="0.00" class="form-control input-md comeDown" type="text">
				  </div>
				<br><br>
				</fieldset>
				
				<br>		
				
					<div class="col-xs-12 col-md-6"><input id="btnsend" value="Avanti" type="submit" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
					
				</div>
				<input type="hidden" id="blNum1" name="blNum1" value="">				
				<input type="hidden" id="it1" name="itemTitle1" value="">
				<input type="hidden" id="schoolinfo" name="schoolinfo" value=""> 
				<input type="hidden" id="ageInfo" name="ageInfo" value="">
				<input type="hidden" id="livingInfo" name="livinginfo" value="">
				<input type="hidden" id="genderInfo" name="genderinfo" value="">
				<input type="hidden" id="freqGroceryShopping" name="freqgroceryshopping" value="">
				<input type="hidden" id="lastShop" name="lastshop" value="">
				
				<input type="hidden" id="sid" name="sid" value="">
				<input type="hidden" id="lang" name="lang" value="italian">
								
	
			</form>
		</div>
	</div>
	
		<div class="row font-1" id="survey_end">
		<p>
			<h2>Il questionario è terminato. Grazie per la collaborazione.</h2>
		</p>
		</div>
		
			<!-- Modal -->
			<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
							<h4 class="modal-title" id="myModalLabel">Informazioni</h4>
						</div>
						<div class="modal-body">
							<h4>
								Una soluzione semplice realizzata per un obiettivo specifico, in questo caso un questionario con delle funzionalità che Google forms, per esempio, non può fornire. Contattami all'indirizzo ewertonews@hotmail.com (risponderò in inglese o in portoghese) se hai bisogno di una soluzione simile per creare il tuo questionario o per qualsiasi altra richiesta.  
							</h4>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Ritorno</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		
</div>