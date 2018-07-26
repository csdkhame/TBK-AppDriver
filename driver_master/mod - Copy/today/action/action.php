
<?
$folder_xml="../data/xml"; 
 
/// ส่งงานใหม่
 
if($_GET[action]=='cancel'){
 
 @unlink("$folder_xml/driver/work_to/old/".$_GET[driver].".xml");
 
 }
 
 if($_GET[action]=='confirm'){
 
 @unlink("$folder_xml/driver/work_to/new/".$_GET[driver].".xml");
 
 }
 
?>



<script>

  window.location.href = "index.php?name=today";
 
</script>
 