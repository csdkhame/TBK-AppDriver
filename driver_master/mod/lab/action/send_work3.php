 
<script>
 $("#head_full_popup" ).html("ส่งงานให้คนอื่น  <?=$_GET[vc]?>");
</script> 

 <?
 

 
 
  $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 	$res[project] = $db->select_query("SELECT  id,drivername,cartype,admin_company  FROM   transfer_report_all  WHERE id='".$_GET[id]."' ");
	$arr[project] = $db->fetch($res[project]);
 
 ?>
 
 <style>
 		.btn-select{
		width: 100%; border: 1px solid #ddd; padding: 7px; margin-top: 0px; border-radius: 25px;
		box-shadow: 1px 1px 2px #ddd;
	}
	.select-action{
		color: #ffffff; font-size: 16px;
	}
	.td-color{
		color: #3C8DBC; font-size: 16px;
	}
 </style>
 
<input name="old_drivername" type="hidden" id="old_drivername<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][drivername];?>" />

<input name="work_type" type="hidden" id="work_type<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="0" />
<input name="old_carno" type="hidden" id="old_carno<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][carno];?>" />

<input name="change_carno" type="hidden" id="change_carno<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][carno];?>" />

<input name="change_drivername" type="hidden" id="change_drivername<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][drivername];?>" />

 
<div  style="margin-top: 10px; font-size:22px; font-weight:bold;   padding:10px; margin-right:18px;  width:100%; <? if($arr[project][cartype] == 2){  ?>display:nones<? } ?>">
<? if($arr[project][cartype] == 2){  ?>
<script>
$('#drivername<?=$arr[project][id];?>').attr('disabled', true);
 $('#drivername<?=$arr[project][id];?>').addClass("no-select");
</script>
<? } ?>


สลับงานไปยังคนขับรถ

<input type="hidden" id="val_select_com" value="0"/>
<input type="hidden" id="val_select_dv" value="0"/>
<input type="hidden" id="project_id" value="<?=$arr[project][id];?>"/>
<input type="hidden" id="admin_com" value="<?=$_GET[admin_company];?>"/>
				<div  style="margin-top: 15px;">
						  <div class="btn-select"  align="center" id="btn_com">
								<table width="100%">
									<tr>
										<td align="center"><span  id="txt_show_com" style="font-size: 18px; width:100% ">- เลือกบริษัท -</span></td>
										<td width="20"><i class="fa fa-caret-down" aria-hidden="true"></i></td>
									</tr>
								</table>
							</div>

<script>
	$('#btn_com').click(function(){
		$('#popup_craftpip_1').show();
		
		 var id = $('#project_id').val();
		 var admin_com = $('#admin_com').val();
		 var drivername = '<?=$arr[project][drivername];?>';
		 if($('#val_select_com').val()==0){
		 	var url = "empty_style.php?name=lab/action&file=select_driver&id="+id+"&drivername="+drivername+"&query=company&admin_com="+admin_com;
		 	console.log(url);
			$.post( url, function( data ) {
				
//				console.log(data);
			  $( "#list_popup_switch_1" ).html( data );
			});
		 }
		 
	});
</script>
</div>

<div style="margin-top: 15px;">
<div class="btn-select"  align="center" id="btn_dv">
								<table width="100%">
									<tr>
										<td align="center"><span  id="txt_show_dv" style="font-size: 18px; width:100% ">- เลือกคนขับ -</span></td>
										<td width="20"><i class="fa fa-caret-down" aria-hidden="true"></i></td>
									</tr>
								</table>
							</div>
<script>
	$('#btn_dv').click(function(){
		$('#popup_craftpip_2').show();
		
		 var id = $('#project_id').val();
		 var drivername = '<?=$arr[project][drivername];?>';
		 var com = $('#val_select_com').val();
		 if($('#val_select_dv').val()==0){
		 	var url = "empty_style.php?name=lab/action&file=select_driver&id="+id+"&drivername="+drivername+"&query=driver_select&com="+com;
		 	console.log(url);
			$.post( url, function( data ) {
//				console.log(data);
			  $( "#list_popup_switch_2" ).html( data );
			});
		 }
		 
	});
</script>
</div>



  <div id="load_driver<?=$arr[project][id];?>" style=" padding-top:5px; display:nones "></div>
</div>
 


<div  style="margin-top: -5px; font-size:22px; font-weight:bold;   padding:10px; margin-right:18px; padding-bottom:1px;  width:100%;<? if($arr[project][cartype] <> 2){  ?>display:none<? } ?>s  ">

<? if($arr[project][cartype] <> 2){  ?>
<script>
$('#carno<?=$arr[project][id];?>').attr('disabled', true);
 $('#carno<?=$arr[project][id];?>').addClass("no-select");
</script>
<? } ?>


 
	
 
 
  <div id="load_carno<?=$arr[project][id];?>" style=" padding-top:5px; display:none "></div>
 
    </div> 
   

	
	
	<script>
	function SelectCompany(id){
		$('#list_popup_switch_1 .mobileSelect-control').removeClass('selected');
		$('#com_a_'+id).addClass('selected');
		var text = $('#com_a_'+id).text();
		$('#val_select_com').val(id);
		$('#txt_show_com').text(text);
		
		$('#load_driver<?=$arr[project][id];?>').hide();
		$('#txt_show_dv').text('- เลือกคนขับ -');
		$('#val_select_dv').val(0);
		$('.close-craftpip-popup').click();
	}
	
	function SelectDriver(id){
		$('#list_popup_switch_2 .mobileSelect-control').removeClass('selected');
		
		$('.other').removeClass('select-action');
		$('.other').addClass('td-color');
		
		$('#dv_a_'+id).addClass('selected');
		
		$('#td_'+id).addClass('select-action');
		
		$('#td_'+id).removeClass('td-color');
	

		var text = $('#dv_a_'+id).text();
		$('#val_select_dv').val(id);
		var res = text.split("โทร");
		$('#txt_show_dv').text(res[0]);
		ShowDriver();
		$('.close-craftpip-popup').click();
	}
	
    function filterIdDriver(){
									var input = $('.search_dv_box').last().val();
 								    var filter = input.toUpperCase();
									$('.mobileSelect-container:visible').find('.mobileSelect-control .user').each (function() {
											var res = this.id.split("_");
											var id = res[1];
											
											var text_a = $(this).val().toUpperCase();
									 		
									 		 if (text_a.indexOf(filter) > -1) {
										        	$('#dv_a_'+id).show();
										        	console.log(text_a+" "+filter+" "+id);
										      } 
											 else {
										       		$('#dv_a_'+id).hide();
										       		
										     	 }
										
									});  
						}

    function filterNameCom(){
									var input = $('.search_com_box').last().val();
 								    var filter = input.toUpperCase();
									$('.mobileSelect-container:visible').find('.mobileSelect-control').each (function() {
										 	var id = $(this).attr('role');
											var text_a = $(this).text().toUpperCase();
									 		console.log(text_a+" "+filter);
									 		 if (text_a.indexOf(filter) > -1) {
//										        	$(this).show();
													$('#tb_list_com_'+id).show();
										      } 
											 else {
//										       		$(this).hide();
													$('#tb_list_com_'+id).hide();
										     	 }
									});  
								}
     
    function filterNameDriver (){
		var input = $('.search_dv_box_name').last().val();
 								    var filter = input.toUpperCase();
									$('.mobileSelect-container:visible').find('.mobileSelect-control .name').each (function() {
											var res = this.id.split("_");
											var id = res[1];
											
											var text_a = $(this).val().toUpperCase();
									 		
									 		 if (text_a.indexOf(filter) > -1) {
										        	$('#dv_a_'+id).show();
										        	console.log(text_a+" "+filter+" "+id);
										      } 
											 else {
										       		$('#dv_a_'+id).hide();
										       		
										     	 }
										
									});  
	}
     
	function ShowDriver(){
		var id = $('#project_id').val();
		document.getElementById('work_type'+id).value = 'driver' ;
	
	
 $('#carno'+id).attr('disabled', true);
 $('#carno'+id).addClass("no-select");
	
	var id = $('#project_id').val();
 var drivernew = $('#val_select_dv').val();
 var driverold = $('#old_drivername'+id).val();
	
 		   var url_driver = "load_in.php?name=lab/action&file=driver_data&day=<?=$_GET[day]?>&part=<?=$carpart?>&type=driver&id=<? echo $arr[project][id];?>&dvold="+driverold+"&dvnew="+drivernew;
		   console.log(url_driver);
 $('#load_driver'+id).show();
		///   alert(name);
 $('#load_driver'+id).load(url_driver);
	}
	
	function TelDriver(number){
		
 
	
//		window.open('tel:'+number);
		window.location.href = 'tel:'+number; 
	}
	
 
	/*$('#drivername<?=$arr[project][id];?>').change(function(){
		
	 
	document.getElementById('work_type<?=$arr[project][id];?>').value = 'driver' ;
	
	
 $('#carno<?=$arr[project][id];?>').attr('disabled', true);
 $('#carno<?=$arr[project][id];?>').addClass("no-select");
	
	
 var drivernew = $(drivername<?=$arr[project][id];?>).val();
 var driverold = $(old_drivername<? echo $arr[project][id];?>).val();
	
 		   var url_driver = "load_in.php?name=lab/check&file=work&part=<?=$carpart?>&type=driver&id=<? echo $arr[project][id];?>&dvold="+driverold+"&dvnew="+drivernew;
		   
 $('#load_driver<?=$arr[project][id];?>').show();
		///   alert(name);
 $('#load_driver<?=$arr[project][id];?>').load(url_driver);
 
    });*/
					
					</script>
					
					
				 
					
 
					 <style>
					 .no-select {
     font-family:Arial, Helvetica, sans-serif;background-color: #666666;   color: #999999;  
 }
					 
					 
					 </style>
					 <div id="send_data_work<?=$arr[project][id];?>" style="display:none "></div>
 