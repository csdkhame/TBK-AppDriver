<?php
$contents = file_get_contents("https://www.google.co.th/search?ei=PQtCWqX2CIfh0gTo853oBQ&q=fd3007&oq=fd3007&gs_l=psy-ab.3..0i71k1l2.0.0.0.3824.0.0.0.0.0.0.0.0..0.0....0...1..64.psy-ab..0.0.0....0.Y5W9XnDS83s");

echo $contents;
?>
<?php
  /*
$url = 'https://www.flightradar24.com/data/flights/fd3006'; // กำหนด URl ของเว็บไวต์ B
$request = 'username=guest&password=guest'; // กำหนด HTTP Request โดยระบุ username=guest และ password=เguest (รูปแบบเหมือนการส่งค่า $_GET แต่ข้างหน้าข้อความไม่มีเครื่องหมาย ?)
  
$ch = curl_init(); // เริ่มต้นใช้งาน cURL
  
curl_setopt($ch, CURLOPT_URL, $url); // กำหนดค่า URL
curl_setopt($ch, CURLOPT_POST, 1); // กำหนดรูปแบบการส่งข้อมูลเป็นแบบ $_POST
curl_setopt($ch, CURLOPT_POSTFIELDS, $request); // กำหนดค่า HTTP Request
curl_setopt($ch, CURLOPT_HEADER, 0); // กำให้ cURL ไม่มีการตั้งค่า Header
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // กำหนดให้ cURL คืนค่าผลลัพท์
  
$response = curl_exec($ch); // ประมวลผล cURL
curl_close($ch); // ปิดการใช้งาน cURL
  
echo $response; // แสดงผลการทำงาน

*/
?>










 