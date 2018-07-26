

  <style>
   .div-all-check-airport{
	 padding:3px;   border-radius:  0px; border: 8px solid #FFFFFF;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 5px #DADADA  ; 
	 
 }
 
 
 </style>


 

<? if($arr[project][product_area] == 'Out' and $arr[project][to_place]==193){  ?>
		
 
        
        <br>
        <div style="padding:2px; font-size:20px; margin-top:10px; margin-bottom:10px; color:#000000 ">
เลือกจุดส่งแขกที่สนามบิน</div>
        
        
        
        
        
		
<div style="padding:2px; font-size:22px; margin-top:10px; margin-bottom:10px; color:#000000 ">
<table width="100%"  border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td>
<div id="terminal_map_new<?=$arr[project][id];?>"  class="div-all-check-airport">
    
    
    <img src="images/airport/phuket_new.jpg"   align="bottom"  width="100%"    style="cursor:pointer " />
    

    </div>
    
    
    </td>
  </tr>
  <tr>
    <td>
    <div      id="terminal_map_old<?=$arr[project][id];?>"   class="div-all-check-airport">
    
    
    <img src="images/airport/phuket_old.jpg"   align="bottom"  width="100%"     style="cursor:pointer " />   </div></td>
  </tr>
</table>


<select name="terminal"   id="terminal"    style="font-size:26px; padding-bottom: 1px; background-color:#FFFDE9; height:50px; width:100%; padding: 5px; color:#333333;border-radius: 25px; text-align:center" chosen width="'100%'">
  <option value=""  selected>--กรุณาเลือก--</option>
  <option value="new"  >อาคารใหม่</option>
  <option value="old" >อาคารเก่า</option>
 
  </select>
 
  
  
  <? }  else {?>
  
    <input  name="terminal"  type="hidden"   id="terminal" value="0">
  <? } ?>
		</div>
        
        
        
        
        
        
        
<script>
 $('#terminal_map_new<?=$arr[project][id];?>').click(function(){  
  $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
 $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
$('#terminal_map_new<?=$arr[project][id];?>').addClass("tab_alert");
 document.getElementById('terminal').value = 'new' ;
 //  $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
 
     	});
		
 $('#terminal_map_old<?=$arr[project][id];?>').click(function(){  
  $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
  $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
$('#terminal_map_old<?=$arr[project][id];?>').addClass("tab_alert");
document.getElementById('terminal').value = 'old' ;
// $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
 
     	});
 
 $('#terminal').change(function(){
 if( document.getElementById('terminal').value == 'new' ){

 $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
 $('#terminal_map_new<?=$arr[project][id];?>').addClass("tab_alert");
  $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
  }
   if( document.getElementById('terminal').value == 'old' ){
    $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
 
  $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
$('#terminal_map_old<?=$arr[project][id];?>').addClass("tab_alert");
  }
  
     if( document.getElementById('terminal').value == '' ){
  $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
  $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
  
   $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').hide();

  }
 
 
 
    	});
 
$('#btn_cancel_confirm_guest_<? echo $arr[project][id];?>').click(function(){  
 
$('.modal').modal('hide');
     	});
					
			
			
			
			

					</script> 

        
        
        
        