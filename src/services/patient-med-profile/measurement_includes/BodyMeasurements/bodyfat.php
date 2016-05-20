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
            <h1> Body Fat Percentage </h1>

            <div id="curve_chart" style="width: 100%; height: 500px"></div>

            <p>
                <strong>The body fat percentage (BFP) of a human or other living being is the total
                mass of fat divided by total body mass</strong>; body fat includes essential body fat
                and storage body fat. Essential body fat is necessary to maintain life and
                reproductive functions. The percentage of essential body fat for women is
                greater than that for men, due to the demands of childbearing and other
                hormonal functions. The percentage of essential fat is 3–5% in men, and 8–12%
                in women (referenced through NASM). Storage body fat consists of fat
                accumulation in adipose tissue, part of which protects internal organs in
                the chest and abdomen. The minimum recommended total body fat percentage
                exceeds the essential fat percentage value reported above. A number of
                methods are available for determining body fat percentage, such as
                measurement with calipers or through the use of bioelectrical impedance analysis.

                <br>
                <i><a href="https://en.wikipedia.org/wiki/Body_fat_percentage">Wikipedia</a></i>
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
