<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\listeningtest */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'My Yii Application';
?>
<div class="questionTable">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="questionNumber">
                    Question 1 – 10
                </h2>
                <p>Play ► and Listen the audio, complete the notes below by filling the gaps.
                    <br>  Write no more than two words for each answer.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <input class="question" type="text" name="question" value="Name" disabled>
            </div>
            <div class="col-md-6">
                <input style="text-decoration: underline;" type="text" name="text" value="Robert Goddard" class="question" disabled>
            </div>
            <div class="col-md-6">
                <input class="question" type="text" name="text" value="Destination" disabled>
            </div>
            <div class="col-md-6">
                <input type="text" name="text" value="Melbourne" class="question" disabled>
            </div>
            <div class="col-md-6">
                <input class="question" type="text" name="text" value="Total number of visits" disabled>
            </div>
            <div class="col-md-6">
                <input type="text" id="visitNumber" class="answer" required>
            </div>
                <div class="col-md-6">
                <input class="question" type="text" name="text" value="Best thing about the city" disabled>
                </div>
            <div class="col-md-6">
                    <input type="text" id="aboutCity" class="answer" required>
</div>
            <div class="col-md-6">
                <input class="question" type="text" name="text" value="Favourite attraction" disabled>
            </div>
                <div class="col-md-6">
                <input type="text" id="favAttraction" class="answer" required>
            </div>
            <div class="col-md-6">
                <input class="question" type="text" name="text" value="Best thing about the destination's dining options" disabled>
            </div>
                <div class="col-md-6">
                <input type="text" id="destinationDining" class="answer" required>
            </div>
            <div class="col-md-6">
                <input class="question" type="text" name="text" value="Method of transport to destination" disabled>
            </div>
                <div class="col-md-6">
                <label for="transportMethod">By</label>
                <input type="text" id="transportMethod" class="answer1" required>
                </div>
                <div class="col-md-6">
                <input class="question" type="text" name="text" value="Age group" disabled>
                </div>
                <div class="col-md-6">
                    <input type="text" required id="ageGroup" class="answer" >
                </div>
                <div class="col-md-6">
                <input class="question" type="text" name="text" value="Income level" disabled>
                </div>
                <div class="col-md-6">
                    <input type="text" id="incomeLevel" class="answer" required>
                </div>
                <div class="col-md-6">
                <input class="question" type="text" name="text" value="Purpose of visit" disabled>
                </div>
                <div class="col-md-6">
                    <label for="onBusiness">on business and</label>
                <input type="text" id="onBusiness" class="answer2" required>
                </div>
                <div class="col-md-6">
                <input class="question" type="text" name="text" value="Occupation" disabled>
                </div>
                <div class="col-md-6">
                    <input style="width: 60%" type="text" id="occupation" class="answer" required>
                    <label for="occupation">+ writer for a travel magazine</label>
                </div>
                <div class="col-md-6">
                <input class="question" type="text" name="text" value="Opinion of cost of accommodation" disabled>
                </div>
                <div class="col-md-6">
                    <input type="text" id="accomadationCost" class="answer" required>
                </div>
            </div>
  <!--  <button class="submit" id="submit">Submit</button>
    <input style="color:white" type="submit" id="check" class="submit">-->
    <a class="link" id="check">check</a>
    <a class="link" id="show">show</a>
        <a class="link"  id="clear">clear</a>

        </div>
      </div>


<?php
$csrf = Yii::$app->request->getCsrfToken();
$script = <<< JS
    var visitNumber = $('#visitNumber');
    var aboutCity = $('#aboutCity');
    var favAttraction = $('#favAttraction');
    var destinationDining = $('#destinationDining');
    var transportMethod = $('#transportMethod');
    var ageGroup = $('#ageGroup');
    var onBusiness = $('#onBusiness');
    var incomeLevel = $('#incomeLevel');
    var occupation = $('#occupation');
     
    $('#check').click(function (){
        
        $.ajax({
           type: "POST",
           url: "site/tesst",
           data: { 
                _csrf : '$csrf'
         	},
         	success:function(response) {
               
               if(response['total_visits'] ==visitNumber.val())   {
                   visitNumber.css('color','green');
               }  else {
                    visitNumber.css('color','red');
               }
               if(response['best_thing'] ==aboutCity.val()){
                   aboutCity.css('color','green');
               } else {
                      aboutCity.css('color','red');
               } if(response['fav_attraction'] ==favAttraction.val()){
                   favAttraction.css('color','green');
               } else {
                     favAttraction.css('color','red');
               } if(response['destination_dining'] ==destinationDining.val()) {
                   destinationDining.css('color','green');
               } else {
                     destinationDining.css('color','red');
               } if(response['method_transport'] ==transportMethod.val()){
                   transportMethod.css('color','green');
               } else {
                    transportMethod.css('color','red');
               } if(response['age_group'] ==ageGroup.val()){
                   ageGroup.css('color','green');
               } else {
                    ageGroup.css('color','red');
               }
                if(response['income_level'] ==incomeLevel.val()){
                   incomeLevel.css('color','green');
               } else {
                      incomeLevel.css('color','red');
               }
                if(response['visit_purpose'] ==onBusiness.val()){
                    
                   onBusiness.css('color','green');
               } else {
                     onBusiness.css('color','red');
               }
                  if(response['accomodation_cost'] ==accomadationCost.val()){
             
                   accomadationCost.css('color','green');
               } else {
                      accomadationCost.css('color','red'); 
               }
                  if (response['occupation'] == occupation.val()){
                   occupation.css('color','green');
               }     else {
                    occupation.css('color','red');   
               }        
			}
        });
});
   
$('#show').click(function(){
        $.ajax({
        url: 'site/get-values',
        type: 'POST',
        data: {
            _csrf : '$csrf'
        },
        success: function (data) {
            visitNumber.val(data['total_visits'])
            aboutCity.val(data['best_thing'])
            favAttraction.val(data['fav_attraction'])
            destinationDining.val(data['destination_dining'])
            transportMethod.val(data['method_transport'])
            ageGroup.val(data['age_group'])
            incomeLevel.val(data['income_level'])
            occupation.val(data['occupation'])
             onBusiness.val(data['visit_purpose'])
            accomadationCost.val(data['accomodation_cost'])
            console.log(data);
        }
    });
 });

$('#clear').click(function(){
             visitNumber.val('');
            aboutCity.val('');
            favAttraction.val('')
            destinationDining.val('')
            transportMethod.val('')
            ageGroup.val('')
            incomeLevel.val('')
            occupation.val('')
             onBusiness.val('')
            accomadationCost.val('')
 }) ;
JS;
$this->registerJs($script);
?>
<style>
    #show,#clear,#check {
        cursor: pointer;
        color: blue;
    }
</style>

