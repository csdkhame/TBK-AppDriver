 <script>
 var load_main_mod='<div class="outer-loading-mod"   id="main_index_load_page_mod"><div class="inner-loading"><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div></div></div>';

 var load_main_mod_table='<br><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div';
</script>

<style>
.font-btn{
	font-size: 16px !important;
	font-family: 'Arial', sans-serif;
}
@media screen and (max-width: 320px) {
	   .font-btn{
	   		font-size : 14px !important;
	   		font-family: 'Arial', sans-serif;
	   }	   
}
.btn-repair{
	padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    margin: .375rem;
    border: 0;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: #fff!important;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
}
.waves-effect {
    position: relative;
    cursor: pointer;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    z-index: 1;
}
.btn-default {
    background-color: #2bbbad!important;
    color: #fff!important;
}
</style>
<style>

@media screen and (max-width: 320px) {
	   .td-text{
			FONT-SIZE: 16px !important;
		    MARGIN: 0px;
		    COLOR: #303030;
		    font-family: Arial;
		}
}
.ui-datepicker {
    width: 90%; max-width:400px;
    padding: 0; left:0px; z-index:999;
  }
  .ui-widget {
    font-size: 16px;  
  }
  .ui-datepicker table {
    font-size:18px; 
  }
    .btn_filter_active{
	padding: 10px; 
	border: 1px solid #3c8dbc;
	border-radius: 25px;
/*	width: 100px;*/
	background-color: #3c8dbc;
	color: #fff;
/*	box-shadow: 1px 1px 1px #333;*/
	cursor: pointer;
}
.btn_filter{
	padding: 10px; 
	border: 1px solid #3c8dbc; 
	border-radius: 25px;
/*	width: 100px;*/
	cursor: pointer;
}
</style>


<link rel="stylesheet" type="text/css" href="js/pickerdate/classic.css?v=<?=time();?>" /> 
<link rel="stylesheet" type="text/css" href="js/pickerdate/classic.date.css?v=<?=time();?>" /> 
<script src="js/pickerdate/picker.js?v=<?=time();?>" type="text/javascript"></script>
<script src="js/pickerdate/picker.date.js?v=<?=time();?>" type="text/javascript"></script>


			<div class="form-group" style="margin-bottom: 0px;">
                <label class="font_22">เลือกดูประวัติจากวันที่</label>
                <div class="input-group date">
                  <input type="text" class="form-control pull-right" value="<?=date('Y-m-d');?>"  name="date_report" id="date_report"  readonly="true" style="background-color:#FFFFFF; height:40px; font-size:24px ">               <div class="input-group-addon"  id="btn_calendar" style="cursor:pointer ">
                     <i class="fa fa-calendar" style="font-size:24px; "></i> 
                  </div>
                </div>
               
            </div>
<script>
setTimeout(function(){ 
var date=$('#date_report').val();

    $('#date_report').pickadate({
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy/mm/dd',
        closeOnSelect: true,
        closeOnClear: false,
        "showButtonPanel": false,
        onStart: function() {
            this.set('select', date); // Set to current date on load
   
        },
		  onSet: function(context) {
		  	    var date = $('#date_report').val();
		    	console.log(date);
//		    	QueryData();
 				loadDataList();
		  }
        });
}, 500);
</script>

<script>
 	$('#btn_calendar').click(function(){
 		
		var input1 = $('#date_report').pickadate(); 
	    var picker = input1.pickadate('picker');
	    setTimeout(function(){ picker.open(true); }, 500);
		
 	});
</script>

<div style="padding:0px 0px; margin: auto;margin-top: 5px"  >            
 <div class="box-header with-border" style="background: #ffffff;border-radius:  25px;border: 1px solid #ddd;">
          
	<div style="padding:0px 0px; margin: auto;margin-top: 5px">
		<table width="100%">
			<tbody><tr>
				<td width="33%"><div id="btn_new" class="btn_filter_active tocheck" align="center" onclick="FilterTypeRepair('new');"><span class=class="font_14">รอยืนยัน</span>
				<span class="badge bg-red" style="position: absolute;margin-left: -5px;display: nones;margin-top: -15px;"><font class="font_14" id="NEW">0</font></span>
			  </div></td>
				<td width="33%"><div id="btn_progress" class="btn_filter tocheck" align="center" onclick="FilterTypeRepair('progress');"><span class="font_14">กำลังซ่อม</span>
				<span class="badge bg-red" style="position: absolute;margin-left: 0px;display: nones;margin-top: -15px;"><font class="font_14" id="PROGRESS">0</font></span>
				</div></td>
				<td width="33%"><div id="btn_complete" class="btn_filter tocheck" align="center" onclick="FilterTypeRepair('complete');"><span class="font_14">รับรถ</span>
				<span class="badge bg-red" style="position: absolute;margin-left: 15px;display: nones;margin-top: -15px;"><font class="font_14" id="COMPLETE">0</font></span>
				</div></td>
			</tr>
		</tbody></table>
	</div>		
 </div>
 <input type="hidden" id="type_filter" value="new"/>
</div>
<script type="text/javascript">

$( document ).ready(function() {
   	loadDataList();
});

function FilterTypeRepair(type){
	console.log(type);
	$('.tocheck').removeClass('btn_filter_active');
	$('.tocheck').addClass('btn_filter');
	$('#btn_'+type).removeClass('btn_filter');
	$('#btn_'+type).addClass('btn_filter_active');
	
	$('#type_filter').val(type);
	loadDataList();
} 

function viewHistoryRepair(id){
	$( "#load_data_main_popup" ).toggle();
 
 	var url = "load_data_mod.php?name=checkcar/load&file=detail_his_repair&id="+id;

 	$('#load_data_main_popup').html('<div align="center" style="padding:100px;">'+load_main_mod+'</div>'); 
	$.post(url,$('#form_popup_send_data').serialize(),function(response){ 

	$('#load_data_main_popup').html(response); 

	});
}

function cancelRepair(id,driver_id){
		console.log(id);
		
	swal({
	  title: "ยกเลิกการแจ้งซ่อม",
	  text: "คุณแน่ใจหรือไม่ว่าต้องการยกเลิก",
	  type: "input",
	  showCancelButton: true,
	  confirmButtonClass: "btn-danger",
	  confirmButtonColor: '#FF0000',
	  confirmButtonText: "ใช่",
	  cancelButtonText: "ไม่",
	  closeOnConfirm: false,
	  inputPlaceholder: "สาเหตุที่ต้องการยกเลิก"
	},
	function(inputValue){
		if (inputValue === false) return false;
		if (inputValue === "") {
		    swal.showInputError("กรุณากรอฏสาเหตุที่ต้องการยกเลิก");
		    return false
		  }
		
		var url = "load_data_mod.php?name=checkcar&file=savedata&type=cancel_repair&id="+id+"&detail_cancel="+inputValue+'&driver_id='+driver_id;
			$.post(url,function(response){ 
				console.log(response);
				swal({
						  position: 'top-right',
						  type: 'success',
						  title: '',
						  text: "ยกเลิกการแจ้งซ่อมแล้ว",
						  showConfirmButton: true
						});
						loadDataList();
			});
	 
	});
}

function spareChange(id,num){
	
		if(num<=0){
			swal({
						  position: 'top-right',
						  type: 'error',
						  title: '',
						  text: "ไม่มีรายการอะไหล่",
						  showConfirmButton: true
						});
			return;
		}
		$('#popup_confirm_repair').show();
	
	var url = "go.php?name=checkcar/load&file=component_popup&action=list_spare_order&id="+id;
		$('#body_popup_confirm').html(load_main_icon_big);
		$('#body_popup_confirm').load(url);
}

function viewImg(id){
				var num_img = $('#count_img').val();
				var url = 'https://goldenbeachgroup.com/app/driver_master/go.php?name=checkcar/load&file=photo&num=3&id='+id+'&num='+num_img;
				console.log(url);
				$('#popup_work_preview_photo').toggle();
				$('#load_work_preview_photo').html('<iframe width="100%" height="100%" frameborder="0" style="border:0" src="'+url+'"></iframe>');
				$('#head_full_popup_photo').hide();
}

function loadDataList(){
	var url_place_th = "go.php?name=checkcar/load&file=component_his_repair&type_filter="+$("#type_filter").val()+"&day="+$("#date_report").val();
	$('#load_his_repair').html(load_main_mod_table);
	$('#load_his_repair').load(url_place_th);
}

</script> 

<div id="load_his_repair"></div>

<div id="popup_confirm_repair" style="position : fixed; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.80);display: none;top: 0px;z-index: 1000000000;left: 0px;
  padding:15px;">
  		
  		<div style="margin-top: 0px;padding: 15px;background-color: #fff;border-radius:15px;animation: showSweetAlert 0.3s;" id="body_popup_confirm">
  		
  		
         
         </div> 
          
  </div> 