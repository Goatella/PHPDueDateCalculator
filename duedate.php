 <?php 
 
$month = $_GET['month'];
$day = $_GET['day'];
$year = $_GET['year'];
$go = $_GET['go'];


if ($go =="1")
 {
 $last = mktime (0,0,0,$month, $day, $year) ;
 $gest = 24192000;
 $due = $last + $gest; 
 echo "Your last cyle started on "; 
 echo date("M-d-Y", $last) ; 
 echo "<br>Your baby is due approximately "; 
 echo date("M-d-Y", $due) ; 
 echo "<p>"; 
 } 
 ?> 

 <i>Please enter the first day of your last menstral cycle</i><br>
 <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET"> 
 <select name="month"> 
 <option value="1">January</option> 
 <option value="2">February</option> 
 <option value="3">March</option> 
 <option value="4">April</option> 
 <option value="5">May</option> 
 <option value="6">June</option> 
 <option value="7">July</option> 
 <option value="8">August</option> 
 <option value="9">September</option> 
 <option value="10">October</option> 
 <option value="11">November</option> 
 <option value="12">December</option> 
 </select>

 <select name="day"> 
 <option value="1">1</option> 
 <option value="2">2</option> 
 <option value="3">3</option> 
 <option value="4">4</option> 
 <option value="5">5</option> 
 <option value="6">6</option> 
 <option value="7">7</option> 
 <option value="8">8</option> 
 <option value="9">9</option> 
 <option value="10">10</option> 
 <option value="11">11</option> 
 <option value="12">12</option> 
 <option value="13">13</option> 
 <option value="14">14</option> 
 <option value="15">15</option> 
 <option value="16">16</option> 
 <option value="17">17</option> 
 <option value="18">18</option> 
 <option value="19">19</option> 
 <option value="20">20</option> 
 <option value="21">21</option> 
 <option value="22">22</option> 
 <option value="23">23</option> 
 <option value="24">24</option> 
 <option value="25">25</option> 
 <option value="26">26</option> 
 <option value="27">27</option> 
 <option value="28">28</option> 
 <option value="29">29</option> 
 <option value="30">30</option> 
 <option value="31">31</option> 
 </select>

 <select name="year"> 

 <option value="13">2013</option> 
 <option value="14">2014</option> 
 <option value="15">2015</option> 
 <option value="16">2016</option> 
 </select>
 <br/> 
 <input type = "hidden" name = "go" value="1" /> 
 <input type = "submit" name = "Calculate"/> 
 </form> 



<p>

<a href="http://www.goatella.com">Goatella's Home Page</a><p>

<a href="https://github.com/Goatella/PHPDueDateCalculator">This code on GitHub</a>
