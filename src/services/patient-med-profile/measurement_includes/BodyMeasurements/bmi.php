<?php
require_once '../../../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Patient Health</title>
	<?php
		include '../../../../includes/html/head.html';
	?>
	<link rel="stylesheet" type="text/css" href="css/blue-buttons-list.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' },
          backgroundColor: '#ebebeb'
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

      $(window).resize(function(){
        drawChart();
      });
    </script>
</head>
<body>
	<div id="container">
		<?php
			include '../../../../includes/php/header.php';
		?>


		<?php
        if(Session::exists('home')) {
            echo '<p>' . Session::flash('home'). '</p>';
        }
        $user = new User(); //Current
        if($user->isLoggedIn()) {
        ?>

        <div class="row">
            <h1> Body Mass Index </h1>

            <div id="curve_chart" style="width: 100%; height: 500px"></div>

            <p>
              The body mass index (BMI) or Quetelet index is a value derived from the mass (weight)
              and height of an individual. The BMI is defined as the body mass divided by the square
              of the body height, and is universally expressed in units of kg/m2, resulting from
              mass in kilograms and height in metres.
              <br>
              The BMI may also be determined using a table or chart which displays BMI as a
              function of mass and height using contour lines or colors for different BMI categories,
              and may use two different units of measurement.
              <br>
              The BMI is an attempt to quantify the amount of tissue mass (muscle, fat, and bone) in
              an individual, and then categorize that person as underweight, normal weight, overweight,
              or obese based on that value. However, there is some debate about where on the BMI scale the
              dividing lines between categories should be placed. Commonly accepted BMI ranges are
              underweight: under 18.5, normal weight: 18.5 to 25, overweight: 25 to 30, obese: over 30.

                <br>
                <i><a href="https://en.wikipedia.org/wiki/Body_mass_index">Wikipedia</a></i>
            </p>
        </div>


      	<?php
        } else {
        ?>
        <div class="row">
        	<h1>
	        	Error
	        </h1>
        	<p>
        		You are currently not Signed In!<br>
        		Please <a href='sign.php'>Sign In</a> or <a href='register.php'>Register</a>
        	</p>
        </div>
        <?php
        }
        ?>

	</div>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
