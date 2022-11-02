<?
include("DB_Connect.php");
$sql = "
    insert into images(id, file_name)
    values('$id','$fileName')
    ";
echo $sql;
$data = oci_parse($Web_Conn, $sql);
oci_execute($data);

?>
<script>
    console.log('hiii')
</script>