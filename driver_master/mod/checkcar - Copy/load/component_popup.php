<? if($_GET[action]=='list_spare_order'){ 
	 $db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
   	 $res[item] = $db->select_query("SELECT * FROM  car_repair_item_list  where id>0 and status = 1 and order_id = '".$_GET[id]."' order by id asc");
   	 $num = 1;
   	$total_price = 0;
?>
	<table width="100%" class="table" style="margin-top: 10px;">
   		<tr>
   			<th width="50"></th>
   			<th width="150">รายการ</th>
   			<th width="150">ราคา</th>
   			
   		</tr>
   		<?php 
   			while ($arr[item] = $db->fetch($res[item])) { 
   			 $total_price += intval($arr[item][price]);
   		?>
   		<tr>
   			<td align="center"><?=$num++;?></td>
   			<td><?=$arr[item][topic_th];?></td>
   			<td><?=$arr[item][price];?></td>
   			
   		</tr>
   		<? } ?>
   		<tr>
   			<td></td>
   			<td align="right"><strong>รวม</strong></td>
   			<td><strong><?=$total_price;?></strong></td>
   			
   		</tr>
   	</table>
		<table width="100%" style="margin-top: 20px;">
                	<tr>
                		<td width="100%" align="center"> 
                		<button type="button" class="btn btn-danger" style="width: 100%; font-size: 16px;border-radius: 25px;" id="close_confirm">ปิด</button> </td>
                		
                	</tr>
        </table>
<? } ?>

<? if($_GET[action]=='select_broken_car_old'){ 
	 $db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
   	 $res[type_broken] = $db->select_query("SELECT * FROM  car_repair_type  where id>0 and status = 1");
?>
	<style>
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
   /* margin-bottom: 12px;*/
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius : 5px;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
/*    background-color: #2196F3;*/
    background-color: #3c8dbc;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 8px;
    top: 3px;
    width: 10px;
    height: 16px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
	<div style="margin-top: 0px;margin-bottom: 5px;">
		<div style="margin-top:5px;margin-bottom: 10px;">&nbsp;<strong>อาการเสีย</strong></div>
		<div style="padding-top: 5px;padding-bottom: 5px;padding-left: 3px;padding-right: 3px;">
		<div class="db">
		<?php 
			while ($arr[type_broken] = $db->fetch($res[type_broken])) { ?>
				<div style="padding: 5px; margin-bottom: 12px;border:1px solid #ddd;/*box-shadow: 1px 1px 3px #999999;*/">
				<label class="container"><span class="font-btn-18" id="txt_bk_<?=$arr[type_broken][id];?>" ><?=$arr[type_broken][topic_th];?></span>
				  <input type="checkbox" value="<?=$arr[type_broken][id];?>" class="checkbox_broken"  >
				  <span class="checkmark"></span>
				  <div id="detail_bk_<?=$arr[type_broken][id];?>" style="display: none;"><?=$arr[type_broken][detail];?></div>
				</label>
				</div>
		<?	}
		?>
		</div>
		<div style="padding: 5px; margin-bottom: 12px;border:1px solid #ddd;/*box-shadow: 1px 1px 3px #999999;*/">
				<label class="container"><span class="font-btn-18" >อื่นๆ</span>
				  <input type="checkbox" id="other_broken"  value="0" class="checkbox_broken" >
				  <span class="checkmark"></span>
				</label>
			<input type="text" value="" class="form-control" style="display: none;margin-top: 15px;" id="other_txt" placeholder="กรอกอาการเสีย" onkeyup="writeOtherTxt();" />
		</div>
	<span id="deposit_detail" style="display: none;"></span>
	<div style="margin-top:5px;margin-bottom: 10px;">&nbsp;<strong>รายละเอียด</strong></div>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 0px;">
      <tbody><tr>
         <td style="padding-right:0px; "><textarea name="detail" rows="5" class="form-control" id="detail" required="true"></textarea></td>
      </tr>
   </tbody>
   </table>	
		<table width="100%" style="margin-top: 10px;">
                	<tr>
                		<td width="50%" align="center"> 
                		<button type="button" class="btn btn-danger" style="width: 100%; font-size: 16px;border-radius: 25px;" id="close_confirm">ปิด</button> 
                		</td>
                		<td width="50%" align="center"> 
                		<button type="button" class="btn btn-success" style="width: 100%; font-size: 16px;border-radius: 25px;" id="submit_confirm">ยืนยัน</button> 
                		</td>
                	</tr>
        </table>
    </div>    
	</div>
	
	<script>
		$('input[type="checkbox"]').click(function(){

			var resutl_txt = "";
			var detail = "";
			$('.db .checkbox_broken').each(function() {
				
			  	if($(this).is(':checked')){
			  		var id = $(this).val();
			  		var n = '';
			  		if(detail!=""){
						n = '\n';
					}
					
					if($('#detail_bk_'+id).text() == ""){
						
						detail = detail + n + "- " + $('#txt_bk_'+id).text();		
					}else{
						detail = detail + n + "- " + $('#detail_bk_'+id).text();		
					}	
				}
				
			});
//			console.log(detail);
			resutl_txt = detail ;
			$('#detail').val(resutl_txt);
			
			
		});
	
		$('#other_broken').click(function(){
			if(document.getElementById('other_broken').checked){
				$('#other_txt').show();
				var old_detail = $('#detail').val();
				console.log(old_detail);
				$('#deposit_detail').text(old_detail);
			}else{
				$('#other_txt').hide();
			}
		});
		
		$('#submit_confirm').click(function(){
			
			if(document.getElementById('other_broken').checked){
				if($('#other_txt').val()==""){
					swal("ผิดพลาด!", "กรอกอาการเสียที่ต้องการ", "error");
					$('#other_txt').css('border-color','rgb(221, 75, 57)');
					return;
				}
			}
			$('#box_value_select').html('');
			$('.checkbox_broken').each(function() {
			  	if(this.checked){
			  		var id = $(this).val();
//					console.log($('#txt_bk_'+id).text());
					console.log(id);
					$('#box_value_select').append('<input type="hidden" value="'+id+'" name="brokencar_type[]" id="brokencar_type_'+id+'"/>');
				}
			});
			$('#box_text_broken').show();
			
			$('#box_text_broken textarea').val($('#detail').val());
			
			
			
			$('#close_confirm').click();
			
		});
		
		$( "#other_txt" ).focus(function() {
		  $(this).css('border-color','#ddd');
		});
		
		function writeOtherTxt(){
			
			var txt = $('#other_txt').val();

			var old_detail = $('#deposit_detail').text();

//			if(txt.length>=1){
				txt =  "\n- " + txt;
//			}
			console.log(old_detail);
			$('#detail').val($('#deposit_detail').text()+txt);
		}

	</script>
<? } ?>

<? if($_GET[action]=='select_broken_car'){ 
	 $db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
   	 $res[type_broken] = $db->select_query("SELECT * FROM  car_repair_type  where id>0 and status = 1");
?>
	<style>
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
   /* margin-bottom: 12px;*/
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}
/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius : 5px;
}
/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}
/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
/*    background-color: #2196F3;*/
    background-color: #3c8dbc;
}
/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}
/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}
/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 8px;
    top: 3px;
    width: 10px;
    height: 16px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
	<div style="margin-top: 0px;margin-bottom: 5px;">
		<div style="margin-top:5px;margin-bottom: 10px;">&nbsp;<strong>อาการเสีย</strong></div>
		<div style="padding-top: 5px;padding-bottom: 5px;padding-left: 3px;padding-right: 3px;">
		<div class="db">
		<?php 
			while ($arr[type_broken] = $db->fetch($res[type_broken])) { ?>
				<div style="padding: 5px; margin-bottom: 12px;border:1px solid #ddd;/*box-shadow: 1px 1px 3px #999999;*/">
				<label class="container"><span class="font-btn-18" id="txt_bk_<?=$arr[type_broken][id];?>" ><?=$arr[type_broken][topic_th];?></span>
				  <input type="checkbox" value="<?=$arr[type_broken][id];?>" class="checkbox_broken"  >
				  <span class="checkmark"></span>
				  <div id="detail_bk_<?=$arr[type_broken][id];?>" style="display: none;"><?=$arr[type_broken][detail];?></div>
				</label>
<input type="text" value="" class="form-control " style="display: none;margin-top: 15px;" id="broken_txt_<?=$arr[type_broken][id];?>" placeholder="..."  />
				</div>
		<?	}
		?>
		</div>
		<div style="padding: 5px; margin-bottom: 12px;border:1px solid #ddd;/*box-shadow: 1px 1px 3px #999999;*/">
				<label class="container"><span class="font-btn-18" id="txt_bk_0" >อื่นๆ</span>
				  <input type="checkbox" id="other_broken"  value="0" class="checkbox_broken" >
				  <span class="checkmark"></span>
				</label>
			<input type="text" value="" class="form-control" style="display: none;margin-top: 15px;" id="broken_txt_0" placeholder="กรอกอาการเสีย" />
		</div>
		<table width="100%" style="margin-top: 10px;">
                	<tr>
                		<td width="50%" align="center"> 
                		<button type="button" class="btn btn-danger" style="width: 100%; font-size: 16px;border-radius: 25px;" id="close_confirm">ปิด</button> 
                		</td>
                		<td width="50%" align="center"> 
                		<button type="button" class="btn btn-success" style="width: 100%; font-size: 16px;border-radius: 25px;" id="submit_confirm">ยืนยัน</button> 
                		</td>
                	</tr>
        </table>
    </div>    
	</div>
	<script>
		$('#other_broken').click(function(){
			var resutl_txt = "";
			var detail = $('#detail').val();
			
			  	if($(this).is(':checked')){
			  		$('#broken_txt_0').show();
				}else{
					$('#broken_txt_0').hide();
				}
		
		});
		$('input[type="checkbox"]').click(function(){
			var resutl_txt = "";
			var detail = $('#detail').val();
			$('.db .checkbox_broken').each(function() {
			  	if($(this).is(':checked')){
			  		$('#broken_txt_'+$(this).val()).show();
				}else{
					$('#broken_txt_'+$(this).val()).hide();
				}
			});
		});
		$('#submit_confirm').click(function(){
			var detail = "";
			if(document.getElementById('other_broken').checked){
				if($('#other_txt').val()==""){
					swal("ผิดพลาด!", "กรอกอาการเสียที่ต้องการ", "error");
					$('#other_txt').css('border-color','rgb(221, 75, 57)');
					return;
				}
			}
			$('#box_value_select').html('');
			$('.checkbox_broken').each(function() {
			  	if(this.checked){
			  		var each_detail = "";
			  		var id = $(this).val();
//					console.log(id);
					$('#box_value_select').append('<input type="hidden" value="'+id+'" name="brokencar_type[]" id="brokencar_type_'+id+'"/>');
					if($('#broken_txt_'+id).val()!=""){
						var each_detail = '\n'+$('#broken_txt_'+id).val();
					}
					if(detail==""){
						var each_txt = '- '+$('#txt_bk_'+id).text()+each_detail;
					}else{
						var each_txt = '\n'+'- '+$('#txt_bk_'+id).text()+each_detail;
					}
					detail += each_txt;
				}
			});
			$('#box_text_broken').show();	
			console.log(detail);
			$('#box_text_broken textarea').val(detail);
			$('#close_confirm').click();
		});
		$( "#broken_txt_0" ).focus(function() {
		  $(this).css('border-color','#ddd');
		});
	</script>
<? } ?>

<? if($_GET[action]=='manage_service_order'){ ?>
<table width="100%" class="table" style="margin-top: 10px;">
   		<tr>
   			<th width="50"></th>
   			<th width="150">รายการ</th>
   			<th width="150">ราคา</th>
   			<th width="50"></th>
   		</tr>	
   		<tbody id="tbody_to_append">
   			<?php 
   				 $db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
   				 $res[item] = $db->select_query("SELECT * FROM  car_repair_service_list  where id>0 and status = 1 and order_id = '".$_GET[id]."' order by id asc");
   				 $num = 0;
   				 $total_price = 0 ;
   				while ($arr[item] = $db->fetch($res[item])) { 
   				$total_price += intval($arr[item][price]);
   				?>
   				<tr id="tr_<?=$arr[item][id];?>">
   					<td><?=$num+=1;?></td>
   					<td><?=$arr[item][topic_th];?></td>
   					<td><span id="price_<?=$arr[item][id];?>_txt"><?=$arr[item][price];?></span></td>
   					<td>
   					<button type="button" class="btn-repair btn-danger waves-effect waves-light" style="padding: 3px 10px;font-size: 16px;width: 100%;border-radius:25px;" onclick="delServiceListDb('<?=$arr[item][id];?>');" id="btn_del_<?=$arr[item][id];?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
   					<button type="button" class="btn-repair btn-danger waves-effect waves-light" style="padding: 3px 10px;font-size: 16px;width: 100%;border-radius:25px;display: none;background-color: #f39c12;" id="btn_restore_<?=$arr[item][id];?>"
   					onclick="restoreServiceListDb('<?=$arr[item][id];?>');"><i class="fa fa-reply-all" aria-hidden="true"></i></button>
   					</td>
   				</tr>
   			<?	}
   			?>
   		</tbody>
   		<tbody id="tbody_to_append_del">
   			
   		</tbody>
   		<tr>
   			<td></td>
   			<td align="right"><strong>รวม</strong></td>
   			<td><strong id="total_price_txt"><?=$total_price;?></strong></td>
   			<td></td>
   		</tr>
   	</table>	
   	<table width="100%" style="margin-top: 20px;">
                	<tr>
                		<td width="100%" align="center" > <button type="button" class="btn btn-danger" style="width: 100%; font-size: 16px;border-radius: 25px;" id="close_confirm">ยกเลิก</button> </td>
                	
                	</tr>
        </table>
<? } ?>
<script>
  $('body').css('overflow','hidden');
  $('#close_confirm').click(function(){
 	console.log('close');
 	$('#popup_confirm_repair').hide();
 	$('#body_popup_confirm').html('');
 	$('body').css('overflow','auto');
 });
</script>
