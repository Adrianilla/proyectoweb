<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Employee Create</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

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
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
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

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Create Student</h1>

	<div id="body">
	<form action="<?php echo base_url() ?>students/insert" method="post">
		<div>
			<label for="first_name">Name:</label>
			<input type="text" name="first_name"></input>
		</div>
		<div>
			<label for="last_name">Last Name:</label>
			<input type="text" name="last_name"></input>
		</div>
		<div>
			<label for="username">User name:</label>
			<input type="text" name="username"></input>
		</div>
		<div>
			<label for="document_number">Document number:</label>
			<input type="text" name="document_number"></input>
		</div>
		<div>
			<label for="email">Email:</label>
			<input type="text" name="email"></input>
		</div>

		<input type="reset" value="Clear"></input>
		<input type="submit" value="Save"></input>
	</form>
	</div>
</div>

</body>
</html>