<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Robotic Arm Tests</title>
    <link rel="stylesheet" href="../../../../css/simple_page.css" />
    <?php $config = include('../../../../config.php'); ?>
</head>
<body>
	<div id="container">
		<div class="row">
	        <h1>Robotic Arm Tests</h1>
	        <div id="text">
                <p>
					
                </p>
            </div>
			<div id="task">
                <?php $rasp_path = $config["RASPBERRYPI_HOSTNAME"].":".$config["RASPBERRYPI_PORT"]."/"; ?>
                <a href="<?php echo "http://".$rasp_path."services/sample_tasks/robotic_arm_test"; ?>">
					Execute Task
				</a>
			</div>
      	</div>
	</div>
</body>
</html>
