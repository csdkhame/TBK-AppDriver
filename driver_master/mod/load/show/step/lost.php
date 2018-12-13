
   
   
   
   
 
 

    
    
    
    
  <style>
   .div-all-lost{
	 padding:5px;   border-radius: 15px; border: 2px solid #ddd;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 0px #DADADA  ; margin-top:10px;
	 
 }
 
 
 </style>
 
 
  <input type="hidden"   value="0" id="data_lost_check" name="data_lost_check">
    
    <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-all-lost" style="display: none;">
  <tbody>
    <tr>
      <td colspan="2"><h4> <center><b> แขกลืมสิ่งของภายในรถหรือไม่</b></center></h4></td>
      </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
        <tbody>
          <tr>
            <td width="30"><input name="check_lost"  type="radio" id="check_lost_1"  value="0" checked="checked"   data-off-text="ชำรุด" data-on-text="สมบูรณ์"></td>
            <td class="font_18">ไม่ลืม</td>
          </tr>
        </tbody>
      </table></td>
      <td width="50%"><table width="100%" border="0" cellspacing="2" cellpadding="2">
        <tbody>
          <tr>
            <td width="30"><input name="check_lost"  type="radio" id="check_lost_2"  value="1"   data-off-text="ชำรุด" data-on-text="สมบูรณ์"></td>
            <td  class="font_18">ลืมสิ่งของ</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    
    
    <tr id="tr_detail" style="display:none">
      <td colspan="2">
      
   <h4> <center><b>กรอกข้อมูลสิ่งของที่ลืม</b></center></h4>   
      
      <textarea name="data_checklost_detail" rows="3" class="form-control" id="data_checklost_detail" onKeyPress="PasswordEnter(this,event)" required></textarea></td>
      </tr>
      
      
      
  </tbody>
</table>

    
    
    