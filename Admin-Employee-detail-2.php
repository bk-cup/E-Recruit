<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>

<HEAD>
<meta charset="TIS-620">
	<TITLE> Ex10-T-activity-edit-form</TITLE>
</HEAD>

<BODY>
	<link href="table.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<br>
	<?
$employee_id =$_REQUEST["EMPOLYEE_ID"];
$workplace =$_REQUEST["WORKPLACE"];
$position =$_REQUEST["POSITION"];


 include("DB_Connect.php");
$sql = "select * from ERecruit_User where EMPOLYEE_ID ='$employee_id' and WORKPLACE ='$workplace' and POSITION ='$position'";
echo $sql;
 $data = oci_parse($Web_Conn, $sql);
 oci_execute($data);

  
 if(($row=oci_fetch_array($data))!=false){
	$ret =$row;
 }

?>
	<form name="frm1" method="post" action= "ex10-T-activity-edit-process.php">
		<table>
        <tr>
				<td><label>Empolyee ID:</label></td>
				<td>
					<select name="Emp_id">
					<?
						$sql="select emp_id,emp_name from T_emp";
						$data = oci_parse($Web_Conn,$sql);
						oci_execute($data);
						while($row = oci_fetch_array($data)){
							$id=$row["EMP_ID"];
							$Dname=$row["EMP_NAME"];
							if($ret["EMP_ID"]==$id){
								$chk = "selected";
							}else{
								$chk="";
							}
							echo" <option value='$id' $chk>$Dname</option>";
							
						}
						?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td><label>Tree code:</label></td>				
				<td><input type="text" name="Tree_code" value="<?=$ret["TREE_CODE"]?>" readonly></td>
				
			</tr>
			<tr>
				<td><label>Quantity:</label></td>
				<td><input type="text" name="qty" value="<?=$ret["EMPOLYEE_NAME"]?>"></td>
			</tr>		
			<tr>
				<td><label>date:</label></td>
				<td><input type="text" name="tdate" value="<?=$ret["EMPOLYEE_LASTNAME"]?>"></td>
			</tr>		
			<tr>
				<td><label>location:</label></td>
				<td><input type="text" name="locations" value="<?=$ret["WORKPLACE"]?>"></td>
			</tr>
			<tr>
				<td><button class="btn btn-secondary" type="button" onclick="location.href='ex10-T-activity.php'">back</button></td>
				<td><button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btnOK">Save</button></td>
			</tr>
			<input type="hidden" name="rID" value="<?=$ret["RECORD_ID"]?>">				
							

		</table>
	</form>
    <?
	
	function getIDtoName($Tcode){
		include("DB_Connect.php");
		$sql="select tree_code,tree_name from T_tree where TREE_CODE='$Tcode'";
		$data = oci_parse($Web_Conn,$sql);
		oci_execute($data);
		if(($row=oci_fetch_array($data))!=false){
			$ret = $row["TREE_NAME"];
		}
		return $ret;
	}
       
    function strtodate($TDATE){
        $yyyy = substr($TDATE,0,4);
        $mm = substr($TDATE,4,2);
        $dd = substr($TDATE,6,2);
        $ret = $dd.'/'.$mm.'/'.$yyyy;
        return $ret;
        //output = dd/mm/yyyy    
        //$rest = substr("abcdef", 1, 3)
    }
        
    ?>

</BODY>

</HTML>