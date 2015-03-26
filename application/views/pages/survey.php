 <div id="lang">
 <a href="javascript:changeLang()" id="langText" class="">Questa pagina è in inglese. Clicca qui per cambiare per italiano</a>
 <br>
 </div>
<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		
		<form class="form-horizontal" id="answers" role="form"  action="<?= base_url() ?>index.php/home/createRecord">
			<h2> Items and Prices Questionnaire </h2>
			<hr class="colorgraph">
			<div class="row">
			<h2 id="item1"></h2>
			<br>
			<img alt="image1" src="" id="img1" width="550px">
			<br><br>
			
			<fieldset>
			<h4>How this item is related to "shopping at a grocery store"? *</h4>
			
			<!-- Multiple Radios (inline) -->
			<div class="form-group">
			  <label class="col-md-3 control-label comeLeft" for="q1_1">Not at all related</label>
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
			    	<strong>Hightly related</strong>
			    </div>
			    <br><br><br>
			  </div>			  
			</div>
			 <h4>How much does it cost?<h4> 
			<!-- Text input-->
			<span class="graySmall">Please enter the full stop for separating dollars from cents (e.g. 2.50 for answering 2 dollars and 50 cents)	</span>
			  <br>
			  <div class="col-md-5">
			  <input id="textinput" name="q1_2" required placeholder="2.50" class="form-control input-md comeDown" type="text">
			  </div>
			<br><br><br><br>
			</fieldset>
			<h2 id="item2"></h2>
			<br>
			
			<!-- --------------------------------------SECOND ITEM------------------------------------------ -->
			<img alt="image2" src="" id="img2" width="550px">
			</div>
			<fieldset>
			<br><br>
			<h4>How this item is related to "shopping at a grocery store"? *</h4>
			
			<!-- Multiple Radios (inline) -->
			<div class="form-group">
			  <label class="col-md-3 control-label comeLeft" for="radios_1">Not at all related</label>
			  <div class="mgRight0"> 
			    <label class="radio-inline" for="q2_1">
			      <input name="q2_1" id="radios-0_1" value="1" required type="radio">
			      1
			    </label> 
			    <label class="radio-inline" for="radios-1_1">
			      <input name="q2_1" id="radios-1_1" value="2" type="radio">
			      2
			    </label> 
			    <label class="radio-inline" for="radios-2_1">
			      <input name="q2_1" id="radios-2_1" value="3" type="radio">
			      3
			    </label> 
			    <label class="radio-inline" for="radios-3_1">
			      <input name="q2_1" id="radios-3_1" value="4" type="radio">
			      4
			    </label>
			    <label class="radio-inline" for="radios-4_1">
			      <input name="q2_1" id="radios-4_1" value="5" type="radio">
			      5
			    </label>
			    <div id="comeDown">
			    	<strong>Hightly related</strong>
			    </div>
			    <br><br><br>
			  </div>			  
			</div>
			 <h4>How much does it cost?<h4> 
			<!-- Text input-->
			<span class="graySmall">Please enter the full stop for separating dollars from cents (e.g. 2.50 for answering 2 dollars and 50 cents)	</span>
			  <br>
			  <div class="col-md-5">
			  <input id="textinput" name="q2_2" required placeholder="2.50" class="form-control input-md comeDown" type="text">
			  </div>
			<br><br><br><br>
			</fieldset>
			<br><br><br>
			<div class="row">
				<div class="col-xs-12 col-md-6"><input id="btnregister" type="submit"  value="Submit" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				
			</div>
			<input type="hidden" id="blNum1" name="blNum1" value=""> 
			<input type="hidden" id="blNum2" name="blNum2" value=""> 
			<input type="hidden" id="it1" name="itemTitle1" value=""> 
			<input type="hidden" id="it2" name="itemTitle2" value=""> 
		</form>
	</div>
</div>
</div>