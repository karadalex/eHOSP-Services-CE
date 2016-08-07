<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Emergency</title>
	<?php
		include '../../includes/php/head.php';
	?>
    <link rel="stylesheet" href="css/tables.css">
</head>
<body>
	<div id="container">
		<?php
			include '../../includes/php/header.php';
		?>

		<?php
        if(Session::exists('home')) {
            echo '<p>' . Session::flash('home'). '</p>';
        }
        $user = new User(); //Current
        if($user->isLoggedIn()) {
        ?>


		<div class="row">
	        <h1 style="color: #ec5840">Emergency</h1>
	        <br>


			<?php
			$db = DB::getInstance();
			$country = $user->data()->birth_country;
			$results = $db->get('emergency_contacts', array('country', '=', $country))->results();
			$tbody = "";
			for ($i=0; $i < count($results); $i++) {
				$td1 = $results[$i]->contact_name;
				$td2 = $results[$i]->phone_numbers;
				$tr = "
				<tr>
					<td>$td1</td>
					<td><a href=\"tel:$td2\">$td2</a></td>
				</tr>
				";
				$tbody .= $tr;
			}
			?>
			<div class="table">
				<table>
					<thead>
	                    <tr>
	                        <th>Services</th>
	                        <th>Phone Numbers</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <?php echo $tbody; ?>
	                </tbody>
	            </table>
			</div>

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

	<?php include '../../includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
