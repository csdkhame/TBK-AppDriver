 
<script>
 $("#head_full_popup" ).html("ส่งงานให้คนอื่น  <?=$_GET[vc]?>");
</script> 

 <?
 
  $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 	$res[project] = $db->select_query("SELECT  id,drivername,cartype,admin_company  FROM   transfer_report_all  WHERE id='".$_GET[id]."' ");
	$arr[project] = $db->fetch($res[project]);
 
 ?>
 <input name="old_drivername" type="hidden" id="old_drivername<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][drivername];?>" />

<input name="work_type" type="hidden" id="work_type<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="0" />
<input name="old_carno" type="hidden" id="old_carno<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][carno];?>" />

<input name="change_carno" type="hidden" id="change_carno<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][carno];?>" />

<input name="change_drivername" type="hidden" id="change_drivername<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][drivername];?>" />
 
<input type="hidden" id="val_select_com" value="0"/>
<input type="hidden" id="val_select_dv" value="0"/>
<input type="hidden" id="project_id" value="<?=$arr[project][id];?>"/>
<input type="hidden" id="admin_com" value="<?=$_GET[admin_company];?>"/> 
<div style="margin-top: 10px; font-size:22px; font-weight:bold;   padding:10px; margin-right:18px;  width:100%;">
	
	<div id="box_search_dv">
	<div style="font-size: 16px;">ค้นหาตามไอดีหรือชื่อ</div>
	<div style="margin-top: 5px;padding: 10px;">
<input   value="" id="search_id_dv" onkeyup="searchId();" style="width: 100%;box-shadow: 1px 1px 2px #ddd; border-radius: 15px; font-size: 14px; font-weight: 500;
    padding: 15px;" placeholder="กรอกไอดีคนขับ" type="number" min="0" inputmode="numeric" pattern="[0-9]*" title="Non-negative integral number"/>
    <input type="text" value="" id="search_name_dv" onkeyup="searchName();" style="width: 100%;box-shadow: 1px 1px 2px #ddd; border-radius: 15px; font-size: 14px; font-weight: 500;
    padding: 15px;margin-top: 10px;" placeholder="กรอกชื่อคนขับ"/>
    </div>
    </div>
   
    <button id="changeDv" class="btn btn-info" style="margin-top: 5px;width:100%; background-color: #3c8dbc;  border-color: #3c8dbc;font-size: 16px;display: none;padding: 5px;border-radius:25px;margin-top: 10px;" ><strong>เปลี่ยนคนขับ</strong></button>

	  <div class="list-container" id="list_popup_switch_work" style="margin-bottom:60px !important;margin-top:0px;-webkit-overflow-scrolling: touch;height: 370px; overflow: scroll;/*border: 1px solid #ddd;box-shadow: 1px 1px 5px #ddd;*/">
	  	
	  </div>
	  
	  <div id="load_driver<?=$arr[project][id];?>" style=" padding-top:5px; display:nones "></div>
</div>

<script>
  var id = $('#project_id').val();
		 var drivername = '<?=$arr[project][drivername];?>';
		 var com = $('#val_select_com').val();
		 if($('#val_select_dv').val()==0){
		 	var url = "empty_style.php?name=lab/action&file=select_driver&id="+id+"&drivername="+drivername+"&query=driver_select&com="+com;
		 	console.log(url);
			$.post( url, function( data ) {
//				console.log(data);
			  $( "#list_popup_switch_work" ).html( data );
//			  $(".mobileSelect-control").hide();
			});
		 }
	
	$('#changeDv').click(function(){
		var id = $('#project_id').val();
		$('#load_driver'+id).hide();
		$(this).hide();
		$('#box_search_dv').show();
		$('#list_popup_switch_work').show();
	});
		 
	function searchId(){
		var input = $('#search_id_dv').val();
//		var input = $('.search_dv_box').last().val();
 								    var filter = input.toUpperCase();
									$('#list_popup_switch_work').find('.mobileSelect-control .user').each (function() {
											var res = this.id.split("_");
											var id = res[1];
											console.log(id);
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
		 $('#load_driver'+id).html(load_main_mod);
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
 $('#changeDv').show();
 $('#list_popup_switch_work').hide();
 $('#box_search_dv').hide();
		///   alert(name);
 $('#load_driver'+id).load(url_driver);
	}
	
	function TelDriver(number){
		
 
	
//		window.open('tel:'+number);
		window.location.href = 'tel:'+number; 
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
	
</script>