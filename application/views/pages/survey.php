<div class="container">
	<div class="row font-1" id="consent">
		<h3>Consent</h3>
		<br>
		<p>You have been asked to participate in this preliminary survey as a healthy control with no known neurological symptoms. The present survey will ask you to estimate the prices of different items.</p>
		<p>Your participation is voluntary. You may refuse to participate in the survey at any point in time. Each individual’s results are confidential. No identifying information will be collected from you in this survey. We would be happy to provide you with the final results of the study when they appear in press, if you are interested please contact Elena Bertossi at ebertossi@research.baycrest.org. If you wish to contact 	someone not connected with the project about your rights as a research participant, feel free to call Dr. Ron Heslegrave, Chair of the Research Ethics Board at (416) 785-2500 ext. 2440.</p>
		<p>By clicking the "Next" button, you are providing consent that you understand that your participating is voluntary and that you may refuse to participate at any point in time during the survey. You also understand that no identifying information will be collected from you in this survey.</p>
		<br>
		
		<button class="btn btn-primary" id="endconsent">Next</button>
	</div>
<!-- =================================================== Survey instructions and personal information ============================================ -->
	<div class="row" id="intro">
			<form class="form-horizontal" id="formIntro">
				<fieldset id="subjectInfo">
				
				<!-- Form Name -->
				<legend>Welcome to the Item Pricing Questionnaire (IPQ) web page!</legend>
				<div class="font-1">
				<p>Please note: In order to participate in this study it is necessary to be fluent in English, to have been living in Canada for at least 5 years, and to be at least 40 years of age. </p>
				<p>Please answer the next few questions with a number in the text box.</p>
				</div>
				<div class="alert alert-danger" role="alert" id="alertmsg">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  PLEASE FILL OUT ALL THE FIELDS
				</div>
				<br>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="age">How old are you?</label>  
				  <div class="col-md-4">
				  <input id="age" name="age" placeholder="type a number" class="form-control input-md" type="text" required>
				    
				  </div>
				</div>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="schoolInfo">How many years of formal schooling have you completed?</label>
				  <div class="col-md-4">
				  <input id="schoolInfo" name="schoolInfo" placeholder="type a number" class="form-control input-md" required="" type="text">
				  <span>(Including elementary and secondary schools, universities, colleges or other formal post-secondary institutions) </span>    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="age">How many years have you lived in Canada?</label>  
				  <div class="col-md-4">
				  <input id="livinginfo" name="livingInfo" placeholder="type a number" class="form-control input-md" type="text" required>
				    
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="col-md-4 control-label comeLeft" for="gender">Gender</label>
				  <div> 
				    <label class="radio-inline" for="gender-M">
				      <input name="gender" id="gender-M" value="M" required type="radio">
				      Male
				    </label> 
				    <label class="radio-inline" for="gender-F">
				      <input name="gender" id="gender-F" value="F" type="radio">
				      Female
				    </label>
				  </div>
				 </div>
				 
				 <div class="form-group">
				  <label class="col-md-4 control-label comeLeft" for="groceryfreq">How often do you shop at a grocery store?</label>
				  <div> 
				    <label class="radio-inline" for="radios_grocery-0">
				      <input name="groceryfreq" id="radios_grocery-0" value="never" required type="radio">
				      Never
				    </label> 
				    <label class="radio-inline" for="radios_grocery-1">
				      <input name="groceryfreq" id="radios_grocery-1" value="a few times a year" type="radio">
				      A few times per year
				    </label> 
				    <label class="radio-inline" for="radios_grocery-2">
				      <input name="groceryfreq" id="radios_grocery-2" value="a few times per month" type="radio">
				      A few times per month
				    </label> 
				    <label class="radio-inline" for="radios_grocery-3">
				      <input name="groceryfreq" id="radios_grocery-3" value="a few times per week" type="radio">
				      A few times per week
				    </label>
				    <label class="radio-inline" for="radios_grocery-4">
				      <input name="groceryfreq" id="radios_grocery-4" value="every day" type="radio">
				      Every day
				    </label>
				   
				  </div>			  
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="lastshop">How many days ago did you shop at a grocery store last time?</label>
				  <div class="col-md-4">
				  <input id="lastshop" name="lastShop" placeholder="type a number" class="form-control input-md" required="" type="text">
				  <span>(A response of 0 means you shopped at a grocery store today) </span>    
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="proceed"></label>
				  <div class="col-md-4">
				    <button id="proceed" type="button" name="proceed" class="btn btn-primary">Proceed</button>
				  </div>
				</div>
				
				</fieldset>
				</form>
			
		</div>	
<!-- ======================================================== pre survey ======================================================================= -->		
	<div class="row font-1" id="survey_info">
		<p>We are interested in collecting information about how people associate items to a particular topic or situation (in this study we are using "shopping at a grocery store") and how they estimate the prices of items.</p>
		<p>You will be presented with one item at a time. For each item, the first question is about how typical the item is to shopping at a grocery store and you will be required to provide an answer using a scale from 1 = not at all typical (the item is not associated at all with shopping at a grocery store) to 5 = highly typical (the item is highly associated with shopping at a grocery store).</p>
		<p>The second question involves estimating the price (in Canadian dollars) of the item and typing your estimated price in a text box.</p>0
		<p>After answering these two questions, please click the "NEXT" button to move on to the next item. At the end of the questionnaire a message will appear on the screen to let you know that you have completed the task successfully.</p>
		<p>The questionnaire will take approximately 45 minutes.</p>
		<p>Before starting the Item Pricing Questionnaire, try to imagine vividly in your mind, for a few seconds, what it is like to shop at a grocery store. Try to imagine in as much detail as possible both the items and actions involved in grocery shopping (e.g. going through the store, selecting items, getting to the cashiers etc.). After imagining that situation, you can begin to fill out the questionnaire. The names of items and their pictures will appear on the screen one by one along with two questions for each item. These questions are described below.</p>
		<p>
			<img alt="" src="<?php base_url()?>images/questions.png">
		</p>
		<br>
		
		<button class="btn btn-primary" id="start_survey">Start the Questionnaire</button>
	</div>
<!-- ======================================================== Survey questions =================================================================== -->
	<div class="row" id="survey">	
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			
			<form class="form-horizontal" id="answers" role="form"  action="<?= base_url() ?>index.php/home/createRecord">
				<h2> Items and Prices Questionnaire </h2>
				<hr class="colorgraph">
				<div class="row">
				<h2 id="item1"></h2>
				<div id="currentitem"><span id="current"></span>/260</div>
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
				<span class="graySmall">(Please use a period to separate dollars from cents, e.g., 2.50 for two dollars and fifty cents)</span>
				  <br>
				  <div class="col-md-5">
				  <input id="textinput" name="q1_2" required placeholder="0.00" class="form-control input-md comeDown" type="text">
				  </div>
				<br><br>
				</fieldset>
				
				<br>		
				
					<div class="col-xs-12 col-md-6"><input id="btnsend" value="Next" type="submit" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
					
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
								
	
			</form>
		</div>
	</div>
	
		<div class="row font-1" id="survey_end">
		<p>
			<h2>The questionnaire is ended. Thanks for your collaboration!</h2>
		</p>
	</div>
</div>