<?php
    include 'Account/header.php';
    
    ?>

      
     
      <h1 id="About" class="display-4 text-xs-center m-y-3  text-muted">Logs</h1>
        <div class="row m-x-1">
          
          
          <!-- Nutrition-->
          
              <div class="col-md-6 card-outline-info">
              <div class="card">
              
              <div class="card-block calorieC">
                
                <h4 class="card-title display-4 text-xs-center m-y-3">Nutrition</h4>
                <p class="card-text text-xs-center">General Calorie Count !</p>
                
                <div class="formspacing">
                <form class="text-xs-center" method="post" action="db.php">
                <div id="accordion" role="tablist" aria-multiselectable="true">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Meal 1
          
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse in text-xs-center" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-block">
        Pick your stated foods and enter the amount of grams</div>
        
 
 <form class="text-xs-center" name="meat2" method="post">
<div class = "form-group text-xs-center col-xs-4" name="meat2">
 <select id="drop" name="meat">
    <option value="2" >Beef</option>
    <option value="0.207" >Chicken</option>
    <option value="3">Pork</option>
    <option value="0.96">Turkey</option>
  </select><br/>
  
   <input class="form-control" id="cal1a" name="test" rows="1"></input>
   
  
   <input type="button" onClick="display_alert()" id="Dalert" value="This meals Kcals">
   </div>
   </form>

 <form name="assasasasasa" method="post">

<div class = "form-group text-xs-center col-xs-4">
 <select id="drop2" name="carbs">
    <option value="0.27" >Pasta</option>
    <option value="1.13">Potato</option>
    <option value="0.769">Rice</option>
    <option value="3">Turkey</option>
  </select><br/>
   <input  class="form-control" id="cal2a" name="carbys" rows="1">
   </div>
   </form>
  
  <form name ="gnthnthnnt" method="post">
<div class = "form-group text-xs-center col-xs-4">
 <select id="drop3" name="vegtables">
    <option value="0.34">Broccoli</option>
    <option value="0.41">Carrots</option>
    <option value="0.81">Peas</option>
    <option value="0.25">Cauliflower</option>
    <option value="0.75">Parsnips</option>
    <option value="0.23">Spinach</option>
    <option value="0.23">Sprouts</option>
    <option value="0.25">Cabbage</option>
    <option value="0.22">Mushrooms</option>
    <option value="0.20">Asparagus</option>
  </select><br/>
   <input  class="form-control" id="cal3a" name="carbys1" rows="1">
   </div>
   <input type="text" class="form-control" id="totalmeal1" placeholder="Total Kcals for meal">
<br/>

</form>



    </div>
  </div>
  
  <div class="card text-xs-center">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Meal 2
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="card-block">
             Pick your stated foods and enter the amount of grams</div>
        

 <form  name="meat2" method="post" action="db20.php">
<div class = "form-group text-xs-center col-xs-4" name="meat2">
 <select id="drop20" name="meat20">
    <option value="2" >Beef</option>
    <option value="0.207" >Chicken</option>
    <option value="3">Pork</option>
    <option value="0.96">Turkey</option>
  </select><br/>
  
   <input class="form-control" id="cal1a20" name="test" rows="1"></input>
   
  
   <input type="button" onClick="display_alert20()" id="Dalert20" value="This meals Kcals">
   </div>
   </form>

 <form name="assasasasasa" method="post">

<div class = "form-group text-xs-center col-xs-4">
 <select id="drop220" name="carbs">
    <option value="0.27" >Pasta</option>
    <option value="1.13">Potato</option>
    <option value="0.769">Rice</option>
    <option value="3">Turkey</option>
  </select><br/>
   <input  class="form-control" id="cal2a20" name="carbys" rows="1">
   </div>
   </form>
  
  <form name ="gnthnthnnt" method="post">
<div class = "form-group text-xs-center col-xs-4">
 <select id="drop320" name="vegtables">
    <option value="0.34">Broccoli</option>
    <option value="0.41">Carrots</option>
    <option value="0.81">Peas</option>
    <option value="0.25">Cauliflower</option>
    <option value="0.75">Parsnips</option>
    <option value="0.23">Spinach</option>
    <option value="0.23">Sprouts</option>
    <option value="0.25">Cabbage</option>
    <option value="0.22">Mushrooms</option>
    <option value="0.20">Asparagus</option>
  </select><br/>
   <input  class="form-control" id="cal3a20" name="carbys1" rows="1">
   </div>
   <input type="text" class="form-control" id="totalmeal120" placeholder="Total Kcals for meal">
<br/>

</form>



    </div>
  </div>
  
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Meal 3
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="card-block">
             Pick your stated foods and enter the amount of grams</div>
        

 <form name="meat2" method="post">
<div class = "form-group text-xs-center col-xs-4" name="meat2">
 <select id="drop30" name="meat30">
    <option value="2" >Beef</option>
    <option value="0.207" >Chicken</option>
    <option value="3">Pork</option>
    <option value="0.96">Turkey</option>
  </select><br/>
  
   <input class="form-control" id="cal1a30" name="test" rows="1"></input>
   
  
   <input type="button" onClick="display_alert30()" id="Dalert30" value="This meals Kcals">
   </div>
   </form>

 <form name="assasasasasa" method="post">

<div class = "form-group  text-xs-center col-xs-4">
 <select id="drop230" name="carbs">
    <option value="0.27" >Pasta</option>
    <option value="1.13">Potato</option>
    <option value="0.769">Rice</option>
    <option value="3">Turkey</option>
  </select><br/>
   <input  class="form-control" id="cal2a30" name="carbys" rows="1">
   </div>
   </form>
  
  <form name ="gnthnthnnt" method="post">
<div class = "form-group text-xs-center col-xs-4">
 <select id="drop330" name="vegtables">
    <option value="0.34">Broccoli</option>
    <option value="0.41">Carrots</option>
    <option value="0.81">Peas</option>
    <option value="0.25">Cauliflower</option>
    <option value="0.75">Parsnips</option>
    <option value="0.23">Spinach</option>
    <option value="0.23">Sprouts</option>
    <option value="0.25">Cabbage</option>
    <option value="0.22">Mushrooms</option>
    <option value="0.20">Asparagus</option>
  </select><br/>
   <input  class="form-control" id="cal3a30" name="carbys1" rows="1">
   </div>
   <textarea type="text" class="form-control" id="totalmeal130" placeholder="Total Kcals for meal"></textarea>
   
<br/>

</form>



    </div>
  </div>
  
  <textarea type ="text" class="form-control" id="allMeals" name="allMeals20" rows="1" placeholder="Total meal calories"></textarea>
  
 <button type="button" class="btn btn-primary CalCount"  onClick="display_alert50()" >Todays Calories</button>
  <button type="submit" class="btn btn-primary CalCount"  >Save Todays Calories</button>
  
</div>
</form>
              </div>  
              </div> <!--/.card-block-->
            </div> <!--/. card -->
          </div><!--/.column -->
          
          
          
          
          <!--Nutrition 2-->
          
          

         <div class="col-md-6 card-outline-info">
            <div class="card">
              
            <div class="card-block calorieC">
               
               
            <h4 class="card-title display-4 text-xs-center m-y-3">Nutrition</h4>
                <p class="card-text text-xs-center">Exact Calorie Intake !</p>
                  <div class="formspacing">
                     <form name="calCount1" action="db.php" method="post">
                          <div class="calcount">
                    
                            <label for="exampleInputEmail1 placeholder=".col-xs-2"">Enter calories of meal 1:</label>
                            <textarea class="form-control" id="Textarea1" name="calorie1" rows="1"></textarea>
                    
                            <label for="exampleInputEmail1">Enter calories of meal 2:</label>
                            <textarea class="form-control" id="Textarea2" name="calorie2" rows="1"></textarea>
                    
                            <label for="exampleInputEmail1">Enter calories of meal 3:</label>
                            <textarea class="form-control" id="Textarea3" name="calorie3" rows="1"></textarea>
                    
                            <label for="exampleInputEmail1">Total calorie count today:</label>
                            <textarea type ="text" class="form-control" id="exampleTextarea" name="finalcal" rows="1"></textarea>
                    
                             <button type="button" id="hide" class="btn btn-primary CalCount"  onClick="calculateBmi()" style="float:left; margin-top:2%">Calculate!</button>
                             <button type="submit" id="hide1" class="btn btn-primary CalCount"  style="float:right; margin-top:2%">Save calories!</button>
                          </div>
                      </form>
                  </div>
                  
                  
       
                
                  </div> <!--/.card-block-->
            </div> <!--/.car-block-->
          </div><!--/.column -->
          
          
           <div class="col-md-12 card-outline-info">
            <div class="card">
              
            <div class="card-block calorieC">
               
               
            <h4 class="card-title display-4 text-xs-center m-y-3">Todays Diary</h4>
                <p class="card-text text-xs-center">What did you work on? Any notes to add?</p>
                  <div class="diaryspacing">
                      
                     <form name="diary1" action="diary.php" method="post">
                          <div class="diary11">
                                <div class="weekdrop20">
                      <label for="weekdrop120"> See a days diary entry:</label>
                          <select id="weekly20" name="weekly20">
                            <option value="monday1">Monday</option>
                            <option value="tuesday1">Tuesday</option>
                            <option value="wednesday1">Wednesday</option>
                            <option value="thursday1">Thursday</option>
                            <option value="friday1">Friday</option>
                            <option value="saturday1">Saturday</option>
                            <option value="sunday1">Sunday</option>
                            </select>
                            </div>
                 
                            <label for="exampleInputEmail1">Todays thoughts:</label>
                                <textarea type ="text" class="form-control" id="exampleTextarea" name="diaryentry" rows="5"></textarea>
                             <button type="submit" id="hide1" class="btn btn-primary CalCount"  style="float:left; margin-top:2%">Save Diary Entry!</button>
                          </div>
                      </form>

                  </div>
                  
            
                  </div> <!--/.card-block-->
            </div> <!--/.car-block-->
          </div><!--/.column -->
          
       

          
          
          <!--Calendar-->
          
          
<div class="col-md-12 card-outline-info">
    <div class="card">
             
        <div class="card-block">
            <h4 class="card-title display-4 text-xs-center m-y-3">Workout</h4>
                <p class="card-text text-xs-center">Whats today's workout?</p>
                
                <?php
                
                
/* Make calendar */
function draw_calendar($month,$year,$events = array()){

	/* table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/*  headings */
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars  */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np">&nbsp;</td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day"><div style="position:relative;height:100px;">';
			
			/* add in the day number */
			$calendar.= '<div class="day-number">'.$list_day.'</div>';
			
			$event_day = $year.'-'.$month.'-'.$list_day;    /*event_day*/
			if(isset($events[$event_day])) {
				foreach($events[$event_day] as $event) {
					$calendar.= '<div class="event">'.$event['title'].'</div>';
				}
			}
			else {
				$calendar.= str_repeat('<p>&nbsp;</p>',2);
			}
		$calendar.= '</div></td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np">&nbsp;</td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';
	

	/* end the table */
	$calendar.= '</table>';

	/** DEBUG **/
	$calendar = str_replace('</td>','</td>'."\n",$calendar);
	$calendar = str_replace('</tr>','</tr>'."\n",$calendar);
	
	/*  return result */
	return $calendar;
}

function random_number() {
	srand(time());
	return (rand() % 7);
}

/* date settings */
$month = (int) ($_GET['month'] ? $_GET['month'] : date('m'));
$year = (int)  ($_GET['year'] ? $_GET['year'] : date('Y'));

/* select month control */
$select_month_control = '<select name="month" id="month">';
for($x = 1; $x <= 12; $x++) {
	$select_month_control.= '<option value="'.$x.'"'.($x != $month ? '' : ' selected="selected"').'>'.date('F',mktime(0,0,0,$x,1,$year)).'</option>';
}
$select_month_control.= '</select>';

/* select year control */
$year_range = 7;
$select_year_control = '<select name="year" id="year">';
for($x = ($year-floor($year_range/2)); $x <= ($year+floor($year_range/2)); $x++) {
	$select_year_control.= '<option value="'.$x.'"'.($x != $year ? '' : ' selected="selected"').'>'.$x.'</option>';
}
$select_year_control.= '</select>';

/* "next month" control */
$next_month_link = '<a href="?month='.($month != 12 ? $month + 1 : 1).'&year='.($month != 12 ? $year : $year + 1).'" class="control">Next Month &gt;&gt;</a>';

/* "previous month" control */
$previous_month_link = '<a href="?month='.($month != 1 ? $month - 1 : 12).'&year='.($month != 1 ? $year : $year - 1).'" class="control">&lt;&lt; 	Previous Month</a>';


/* bringing the controls together */
$controls = '<form method="get">'.$select_month_control.$select_year_control.'&nbsp;<input type="submit" name="submit" value="Go" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$previous_month_link.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$next_month_link.' </form>';

/* get all events for the given month */
$events = array(); 

$username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT title, DATE_FORMAT(event_date,'%Y-%m-%D') AS event_date FROM events WHERE event_date LIKE '$year-$month%'";
$result = $conn->query($sql);


    				
echo '<h2 class="test-xs-center";  padding-right:30px;">'.date('F',mktime(0,0,0,$month,1,$year)).' '.$year.'</h2>';
echo '<div class="test-xs-center concenter"; ">'.$controls.'</div>';
echo '<div class="test-xs-center concenter"; "></div>';
echo '<div class="calcenter ">';
echo draw_calendar($month,$year,$events);
echo '<br /><br />';
echo'</div>';

$sql = "SELECT title, DATE_FORMAT(event_date,'%Y-%m-%D') AS event_date FROM events WHERE event_date LIKE '$year-$month%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br><div class='concenter'> ". $row["title"]."<br>". $row["event_date"].  "<br></div>";
     }
     
} 
    				
    				else
    				{
    				
    				}

/*
$username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);


$query = "SELECT title, DATE_FORMAT(event_date,'%Y-%m-%D') AS event_date FROM events WHERE event_date LIKE '$year-$month%'";
$result = $conn->query($sql); or die('cannot get results!');
while($row = mysql_fetch_assoc($result)) {
	$events[$row['event_date']][] = $row;
}

echo '<h2 style="float:left; padding-right:30px;">'.date('F',mktime(0,0,0,$month,1,$year)).' '.$year.'</h2>';
echo '<div style="float:left;">'.$controls.'</div>';
echo '<div style="clear:both;"></div>';
echo draw_calendar($month,$year,$events);
echo '<br /><br />';*/

?>
<br/>
<br/>
<br/>
<br/>

                
                
              </div> <!--/.card-block-->
            </div> <!--/. card -->
          </div><!--/.column -->
          
          
          
          
          </div>
                
                
          
            <div id="footer">
        <span class="copyright">&copy; 2016 Gymaholic</span>
        <ul class="social">
          <li><a href="#">About</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
            <div style="clear: both"></div>
        </div>



  <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
</body>
</html>