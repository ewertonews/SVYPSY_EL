<div class="container">
<!-- ============================== Survey instructions and initial for=========================== -->
	<div class="row" id="intro">
			<form class="form-horizontal" id="formIntro">
				<fieldset>
				
				<!-- Form Name -->
				<legend>Survey Instructions</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="schoolInfo">How many years have you studied?</label>  
				  <div class="col-md-4">
				  <input id="schoolInfo" name="schoolInfo" placeholder="type a number" class="form-control input-md" required="" type="text">
				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="age">What is your age?</label>  
				  <div class="col-md-4">
				  <input id="age" name="age" placeholder="type a number" class="form-control input-md" type="text" required>
				    
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="proceed"></label>
				  <div class="col-md-4">
				    <button id="proceed" name="proceed" class="btn btn-primary">Proceed</button>
				  </div>
				</div>
				
				</fieldset>
				</form>
			
		</div>	
	<div class="row" id="survey">	
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			
			<form class="form-horizontal" id="answers" role="form"  action="<?= base_url() ?>index.php/home/createRecord">
				<h2> Items and Prices Questionnaire </h2>
				<hr class="colorgraph">
				<div class="row">
				<h2 id="item1"></h2>
				<br>
				<img alt="image1" src="" id="img1" width="380px">
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
				    <br><br>
				  </div>			  
				</div>
				 <h4>How much does it cost?<h4> 
				<!-- Text input-->
				<span class="graySmall">Please enter the full stop for separating dollars from cents (e.g. 2.50 for answering 2 dollars and 50 cents)	</span>
				  <br>
				  <div class="col-md-5">
				  <input id="textinput" name="q1_2" required placeholder="0.00" class="form-control input-md comeDown" type="text">
				  </div>
				<br><br>
				</fieldset>
				
				<br>		
				
					<div class="col-xs-12 col-md-6"><input id="btnsend" type="submit"  value="Next" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
					
				</div>
				<input type="hidden" id="blNum1" name="blNum1" value="">				
				<input type="hidden" id="it1" name="itemTitle1" value="">
				<input type="hidden" id="schoolinfo" name="schoolinfo" value=""> 
				<input type="hidden" id="ageInfo" name="ageInfo" value="">
				<input type="hidden" id="sid" name="sid" value="">   
				
	
			</form>
		</div>
	</div>
</div>