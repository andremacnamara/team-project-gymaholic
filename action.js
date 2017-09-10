// JavaScript File
/* global $*/
/*
$(document).ready(function(){
    
    $("#hide").click(function(){
        $(".card").hide();
    });
    
});*/
 function calculateBmi() {
var calorie1 = Number (document.calCount1.calorie1.value);
var calorie2 = Number(document.calCount1.calorie2.value);
var calorie3 = Number(document.calCount1.calorie3.value);
if(calorie1 > 0 && calorie2 > 0){	
var totalCal = (calorie1 + calorie2 + calorie3)
document.calCount1.finalcal.value = calorie1 + (calorie2 + calorie3)

}
else{
alert("Please Fill in everything correctly")
}
}
  
//alert(a.options[a.selectedIndex].value);
//alert($('#Textareameat').val());

 //var textdrop = document.getElementById("dropInput1");
 //var textdrop = Number (document.meat2.dropInput1.value);
 //var answer = a + test;
 
 
 var gt,gq,g,f,carba, carba1, drop2,drop2a,drop3, carba2,drop3a,meal1, meal1b;
 var meal1b = parseFloat(meal1).toFixed(3);
  
function display_alert()
 {
 g = ($('#cal1a').val());
  f = ($('#drop').val());
  gq = parseFloat(g).toFixed(3);
  gt = parseFloat(f).toFixed(2);
 
  carba = ($('#cal2a').val());
 drop2 = ($('#drop2').val());
  carba1 = parseFloat(carba).toFixed(3);
  drop2a = parseFloat(drop2).toFixed(2);
 

carbb = ($('#cal3a').val());
  drop3 = ($('#drop3').val());
  carba2 = parseFloat(carbb).toFixed(3);
 drop3a = parseFloat(drop3).toFixed(2);
 meal1 = ((gq * gt) + (carba1 * drop2a) + (carba2 * drop3a));
 meal1b = parseFloat(meal1).toFixed(3);
/*global meal1b*/
document.getElementById('totalmeal1').value = meal1b;
 }
 
 
 var drop3a20, meal120, meal120b ,g20, f20 ,gq20 ,gt20 ,carba20 ,drop220, carba120, drop2a20, carbb20, drop320 ,carba220 ;


 var meal120b = parseFloat(meal120).toFixed(3);
function display_alert20()
 {
 g20 = ($('#cal1a20').val());
 f20 = ($('#drop20').val());
 gq20 = parseFloat(g20).toFixed(3);
  gt20 = parseFloat(f20).toFixed(2);
 
   carba20 = ($('#cal2a20').val());
 drop220 = ($('#drop220').val());
  carba120 = parseFloat(carba20).toFixed(3);
  drop2a20 = parseFloat(drop220).toFixed(2);
 

carbb20 = ($('#cal3a20').val());
  drop320 = ($('#drop320').val());
 carba220 = parseFloat(carbb20).toFixed(3);
  drop3a20 = parseFloat(drop320).toFixed(2);
 meal120 = ((gq20 * gt20) + (carba120 * drop2a20) + (carba220 * drop3a20));

 meal120b = parseFloat(meal120).toFixed(3);
 /*global meal120b*/
document.getElementById('totalmeal120').value = meal120b;
 }
 
 
  var drop3a30, meal130, meal130b ,g30, f30 ,gq30 ,gt30 ,carba30 ,drop230, carba130, drop2a30, carbb30, drop330 ,carba230 ;
 
var meal130b = parseFloat(meal130).toFixed(3);

 function display_alert30()
 {
g30 = ($('#cal1a30').val());
 f30 = ($('#drop30').val());
  gq30 = parseFloat(g30).toFixed(3);
  gt30 = parseFloat(f30).toFixed(2);
 
   carba30 = ($('#cal2a30').val());
  drop230 = ($('#drop230').val());
  carba130 = parseFloat(carba30).toFixed(3);
  drop2a30 = parseFloat(drop230).toFixed(2);
 

 carbb30 = ($('#cal3a30').val());
  drop330 = ($('#drop330').val());
  carba230 = parseFloat(carbb30).toFixed(3);
  drop3a30 = parseFloat(drop330).toFixed(2);
meal130 = ((gq30 * gt30) + (carba130 * drop2a30) + (carba230 * drop3a30));
meal130b = parseFloat(meal130).toFixed(3);

/*global meal130b*/


document.getElementById('totalmeal130').value = meal130b;


 }

  var meal1b700, meal120b700a,meal1b700a,meal130b700a  ;
  var meal120b700 ;
  var meal130b700 ;
  var allmeal;
  
 function display_alert50(){
 meal120b700 = ($('#totalmeal1').val());
 meal1b700 = ($('#totalmeal120').val());
  meal130b700 = ($('#totalmeal130').val());
   meal120b700a = parseInt(meal120b700);
  meal1b700a= parseInt(meal1b700);
  meal130b700a= parseInt(meal1b700);
  allmeal =  meal1b700a +  meal120b700a +  meal130b700a;

  document.getElementById('allMeals').value = allmeal;
  
 }
