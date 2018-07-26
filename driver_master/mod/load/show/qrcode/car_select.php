 
  <script>
    	
  $('#btn_show_car_select_all').click(function(){   
 
   $( ".show_car" ).show();
    $( ".show_van" ).show();
	
	$("#head_full_popup_main_control_select" ).html('รถทั้งหมด');			 
 
     	});
		
  $('#btn_show_car_select_car').click(function(){   
 
   $(".show_car" ).show();
    $(".show_van" ).hide();
	$("#head_full_popup_main_control_select" ).html('รถเก๋ง');			 
 
 	});
		
		
   $('#btn_show_car_select_van').click(function(){   
 
   $(".show_car" ).hide();
    $(".show_van" ).show();
	$("#head_full_popup_main_control_select" ).html('รถตู้');		
 
     	});
  </script>
   
 
 
 
 

<div id="main_select_car">

<style>


  .cirnumbershow-car {
    border-radius: 50%; background-color: #FF0000;
 
    padding: 0px; padding-top: 0px; 
    width: 60px;
    height: 60px; 
	text-align: justify; color:#FFFFFF; margin-left: 0px;   font-size:30px; font-weight:bold;  
	border: solid 3px #FFFFFF;
	 box-shadow: 0 0 0px 0px #DADADA; 
    border-radius: 50%; background-color: #DD4B39; 
  color: #fff;
}
 
 
 
.select-car {
 
	  border: 3px solid #dadada; width:100%; border-radius: 40px; margin-bottom:10px;
	  
}
 
 
 
  @-webkit-keyframes DIV-CAR {
    0%   { border-color: #FF0000 }
    50%  { border-color:  #3C8DBC }
 100% { border-color: #FF0000 }
 
}

 @-moz-keyframes DIV-CAR {
 
    0%   { border-color: #FF0000 }
    50%  { border-color: #3C8DBC }
 100% { border-color: #FF0000 }
	
 
	
}

 
 
.select-car-active {
 
	  border: 3px solid #3C8DBC; width:100%; border-radius: 40px; margin-bottom:10px;
	  
	   box-shadow: 0 0 10  #DADADA; background-color:#FFFDE9; 
	   
	   	 	  -webkit-transition: all 1s;
	   -moz-animation: DIV-CAR 1s infinite;
	  
      -webkit-transition: all 1s;
    -webkit-animation: DIV-CAR 1s infinite;
	  
}
 
 
 
 
 
</style>


 <?
 
 
   $string_to_replace     = array ("COROLLA" );
$string_after_replace  = array ("" );

 
 
 
 
 $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
  $res[car] = $db->select_query("SELECT id,car_type,plate_color,car_sub_brand,car_brand,plate_num,province,car_num,company FROM " . TB_carall . "  where company=276 or company=283 or company=284 or company=3992 or company=3993  or company=3994 or company=3996  order by car_num asc");
 
 while ($arr[car] = $db->fetch($res[car])) { 
 
                             $res[type]   = $db->select_query("SELECT * FROM " . TB_carall_type . " WHERE id='" . $arr[car][car_type] . "' ");
                            $arr[type]   = $db->fetch($res[type]);
                        if($arr[type][topic_en]=='Car'){
                        $type='รถเก๋ง';
					$color='#009999';
					$text='#FFFFFF';
					$show='show_car';
					
						
                        }
                        if($arr[type][topic_en]=='Van'){
                        $type='รถตู้';
						$color='#FFCC00';
						$text='#000000';
						$show='show_van';
                        }
 
                            $res[admin] = $db->select_query("SELECT * FROM " . TB_admin . " WHERE id='" . $arr[car][company] . "' ");
                            $arr[admin] = $db->fetch($res[admin]);
 
 
$arr[car][car_sub_brand]      = str_replace($string_to_replace , $string_after_replace ,$arr[car][car_sub_brand], $count);   
 
 
 ?>
						
                        
 
    
    
    
    
    <a id="car_<?=$arr[car][id]?>" class="<?=$show?>">
    
      <script>
    	
  $('#car_<?=$arr[car][id]?>').click(function(){   
  
 // alert(0);
 
  $(".select-car-active" ).addClass('select-car');
 $(".select-car-active" ).removeClass('select-car-active');
 
  
 /// $("#div_car_<?=$arr[car][id]?>" ).addClass('select-car-active');
 
  
  ///  $("#div_car_<?=$arr[car][id]?>" ).removeClass('select-car');
  
  $("#div_car_<?=$arr[car][id]?>" ).addClass('select-car-active');
 
   //$( "#popup_work_main_control_work" ).removeClass('cirnumbershow-car-active');
 
  //  $( "#popup_work_main_control_work" ).html('');
  
  
 
  
 $("#check_data_car_work" ).val(<?=$arr[car][id]?>);
    $("#load_select_car").load('go.php?name=load/show/qrcode&file=car_now&car=<?=$arr[car][id]?>');

  
 $( "#popup_main_control_select" ).toggle();
  
  $("#confirm_select_car" ).show();
  
 

     	});
  </script>
  
    
 
<?  if($arr[car][id]==$_GET[car]){  ?>
    
   <script>
 document.getElementById('div_car_<?=$arr[car][id]?>').scrollIntoView({block: 'start', behavior: 'smooth'});
 document.getElementById('main_select_car').style.marginTop ="55px";
   
   </script>
   
   <? } ?>
    
    
    
 
    
<div class="select-car<? if($arr[car][id]==$_GET[car]){ echo '-active'; }?>" id="div_car_<?=$arr[car][id]?>">


    
    <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td width="50" rowspan="2"><table width="100%" border="0" cellspacing="2" cellpadding="2" class="cirnumbershow-car" style="background-color:<?=$color?>">
        <tbody>
          <tr>
            <td align="center" valign="middle" style="color:<?=$text?>; font-size:26px"><?=$arr[car][car_num]?></td>
          </tr>
        </tbody>
      </table></td>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="70"  style=" font-size:22px"><b><?=$type?></td>
      <td valign="middle"><? echo $arr[car][car_brand];?>-<? echo $arr[car][car_sub_brand];?></td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td class="font_16"><b><?= $arr[admin][company]?></b></td>
    </tr>
  </tbody>
</table>

    </div>
    
    
    </a>
    
                        
                        <? } ?> 
                        
                        
                        
                        
           </div>             
                        
                        
                        
                        
                        
                        
                        
                        <br>
<br>
<br>
<br>
<br>
<br>
