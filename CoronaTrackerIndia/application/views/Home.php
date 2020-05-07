<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<meta charset="utf-8">
	<title>Corona Tracker India </title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		width: 100%;
		font-weight: normal;
		font-family: monospace;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	strong{
		color: red;
	}
	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	table{
		font-weight: bolder;
	}
	th{
				background-color: #dbdbdb;		
	}
	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<?php
$dates=count($corona['cases_time_series']);
		// echo "$countTotalState";
$this->load->helper('date');
$format = "%d %M";
// echo mdate($format);
$datec=mdate($format);


		$i=1;
		while($i<$dates)
		{
			?>
					<?php
					 $corona['cases_time_series'][$i]['date'];	
					 $current = $corona['cases_time_series'][$i]['totalconfirmed'];
					?>
			<?php
			$i++;
		}
?>

	<h1>Corona Tracker India </h1>

<div id="container">
	<h2>Still: <strong><?=$current?></strong> Cases</h2>
</div>
<hr>
<span>State Wise Information</span>
<hr>
<table class="table table-hover" >
  <thead>
    <tr>
      <th scope="col">State</th>
      <th scope="col">Updated Time</th>
      <th scope="col" style="color: blue;">Confirmed</th>
      <th scope="col" style="color: green;">Active</th>
      <th scope="col" style="color: orange;">Recovered</th>
      <th scope="col" style="color: red;">Death</th> 
    </tr>
  </thead>
		<?php 
		$countTotalState=count($corona['statewise']);
		// echo "$countTotalState";

		$i=1;
		while($i<$countTotalState)
		{
		?>
  <tbody>
    <tr>
      <td><?= $corona['statewise'][$i]['state'];?></td>
      <td><?= $corona['statewise'][$i]['lastupdatedtime'];?></td>
      <td><?= $corona['statewise'][$i]['confirmed'];?></td>
      <td><?= $corona['statewise'][$i]['active'];?></td>
      <td><?= $corona['statewise'][$i]['recovered'];?></td>
      <td><?= $corona['statewise'][$i]['deaths'];?></td>
    </tr>

<?php
	$i++;
		}
		 ?>
 </tbody>
</table>
<footer>Developed by Jahid Momin &copy 2020</footer>
</body>
</html>