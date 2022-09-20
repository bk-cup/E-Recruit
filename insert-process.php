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
	

	function insert_data(){
	    include("DB_Connect.php");
	    $id = GenID();
	    $Fname =$_REQUEST["Fname"];
	    $Lname =$_REQUEST["Lname"];
	    $Position =$_REQUEST["Position"];
	    $Salary =$_REQUEST["Salary"];
	    $StartDate =$_REQUEST["StartDate"];
	    $Address =$_REQUEST["Address"];
	    $phone =$_REQUEST["phone"];
	    $Email =$_REQUEST["Email"];
	    $flexRadioDefault =$_REQUEST["flexRadioDefault"];
	    $DriveCar =$_REQUEST["DriveCar"];
	    $computer =$_REQUEST["Computer"];
	    // $qty =$_REQUEST["qty"];
	    // $date =datetostr($_REQUEST["date"]);
	    // $location =$_REQUEST["DB-location"];
	    // $locations =$_REQUEST["local"];
		
	    $sql="
					insert into ERecruit_User(empolyee_name,empolyee_lastname,
					position,salary,starDate,address,phone,email,
					residence,driveCar,computer,Record_id)
					values('$Fname','$Lname','$Position','$Salary','$StartDate','$Address',
					'$phone','$Email','$flexRadioDefault','$DriveCar','$computer','$id')
	    	";
	    echo $sql;
	    $data = oci_parse($Web_Conn,$sql);
	    oci_execute($data);

	}
	function datetostr($text){
        // input dd/mm/yyyy output yyyymmdd
        $date = explode("/",$text);//$date[0] = dd ,$date[1] = mm,$date[2] = yyyy
        //$ret = $date[2].$date[1].$date[0];
		$dd = str_pad($date[0],2,"0",STR_PAD_LEFT);
        $mm = str_pad($date[1],2,"0",STR_PAD_LEFT);
		$yyyy = $date[2];
		$ret = $yyyy.$mm.$dd;
        //echo $yyyy.$mm.$dd."<br>";
        // list($day,$month,$year) = $date;
        // $ret2 = $year.$month.$day;
        // echo $ret2;
        return $ret;
    }
	function GenID(){
		include("DB_Connect.php");
		$sql='
				select max(to_number(record_id)) maxid from ERecruit_User
			';
		$data = oci_parse($Web_Conn,$sql);
	    oci_execute($data);
		$ret =0;
		if(($row=oci_fetch_array($data))!=false){
			$ret =$row["MAXID"];
		 }
		
		return $ret+1;
	}
	

	?>
	<td><button class="btn btn-secondary" type="button" onclick="location.href='form-2.html'">back</button></td>
	<body onlqoad="frm1.submit();">
<form name="frm1" method="post" action="form-2.html">
	<input type="hidden" name ="dept" value="Back">
</form>
    </body>
    </html>