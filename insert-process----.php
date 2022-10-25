<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>

<HEAD>
	<!-- <meta charset="TIS-620"> -->
	<!-- <meta charset="UTF-8"> -->
	<TITLE> Insert-Process </TITLE>
</HEAD>

<BODY>

	<?php
	header("content-type:text/html; charset=UTF-8");
	// print_r($_REQUEST);
	insert_data();


	function insert_data()
	{
		include("DB_Connect.php");
		$id = GenID();
		// $Tname 		= iconv( 'UTF-8', 'TIS-620', $_REQUEST["Tname"]);
		$Tname 		= $_REQUEST["Tname"];
		$Fname 		= $_REQUEST["Fname"];
		$Lname 		= $_REQUEST["Lname"];
		$workplace 	= $_REQUEST["workplace"];
		$Position 	= $_REQUEST["Position"];
		$Salary 	= $_REQUEST["Salary"];
		$StartDate 	= $_REQUEST["StartDate"];
		$Address 	= $_REQUEST["Address"];
		$phone 		= $_REQUEST["phone"];
		$Email 		= $_REQUEST["Email"];
		$flexRadioDefault = $_REQUEST["flexRadioDefault"];
		$DriveCar 	= $_REQUEST["DriveCar"];
		$computer 	= $_REQUEST["Computer"];
		$W_depart 	= $_REQUEST["W_depart"];
		$W_company 	= $_REQUEST["W_company"];
		$W_location 	= $_REQUEST["W_location"];
		$W_nature 	= $_REQUEST["W_nature"];
		$W_startDate 	= $_REQUEST["W_startDate"];
		$W_endDate 	= $_REQUEST["W_endDate"];
		// $qty =$_REQUEST["qty"];
		// $date =datetostr($_REQUEST["date"]);
		// $location =$_REQUEST["DB-location"];
		// $locations =$_REQUEST["local"];
		// echo $Tname ."<br>";
		// echo $Fname ."<br>";
		// echo $Lname ."<br>";
		// echo $workplace ."<br>";
		// echo $Position ."<br>";
		// echo $Salary ."<br>";
		// echo $StartDate ."<br>";
		// echo $Address ."<br>";
		// echo $phone ."<br>";
		// echo $Email ."<br>";
		// echo $flexRadioDefault ."<br>";
		// echo $DriveCar ."<br>";
		// echo $computer ."<br>";
		
		



		$sql = "
					insert into ERecruit_User(empolyee_id,title_name,empolyee_name,empolyee_lastname,
					workplace,position,salary,starDate,address,phone,email,
					residence,driveCar,computer,Record_id)
					values('$id','$Tname','$Fname','$Lname','$workplace','$Position','$Salary','$StartDate','$Address',
					'$phone','$Email','$flexRadioDefault','$DriveCar','$computer','$id')
	    	";
		echo $sql;
		$data = oci_parse($Web_Conn, $sql);
		// oci_execute($data);
	}
	function datetostr($text)
	{
		// input dd/mm/yyyy output yyyymmdd
		$date = explode("/", $text); //$date[0] = dd ,$date[1] = mm,$date[2] = yyyy
		//$ret = $date[2].$date[1].$date[0];
		$dd = str_pad($date[0], 2, "0", STR_PAD_LEFT);
		$mm = str_pad($date[1], 2, "0", STR_PAD_LEFT);
		$yyyy = $date[2];
		$ret = $yyyy . $mm . $dd;
		//echo $yyyy.$mm.$dd."<br>";
		// list($day,$month,$year) = $date;
		// $ret2 = $year.$month.$day;
		// echo $ret2;
		return $ret;
	}
	function GenID()
	{
		include("DB_Connect.php");
		$sql = '
				select max(to_number(record_id)) maxid from ERecruit_User
			';
		$data = oci_parse($Web_Conn, $sql);
		oci_execute($data);
		$ret = 0;
		if (($row = oci_fetch_array($data)) != false) {
			$ret = $row["MAXID"];
		}

		return $ret + 1;
	}


	?>

	<td><button class="btn btn-secondary" type="button" onclick="location.href='login1.php'">back</button></td>
	<body onloads="frm1.submit();">
		<form name="frm1" method="post" action="../UI/form-2.html">

		</form>

	</body>

</html>