<?

$folder_xml="../data/xml";

if($_GET[action]=='cancel'){	

@unlink("$folder_xml/driver/work_change/".$_GET[type]."/".$_GET[driver].".xml");

}

?>