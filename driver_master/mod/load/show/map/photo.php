<!doctype html>
<html>
<head>
  <meta charset="utf-8">
 
  <meta name="description" content="SlidesJS is a simple slideshow plugin for jQuery. Packed with a useful set of features to help novice and advanced developers alike create elegant and user-friendly slideshows.">
  <meta name="author" content="Nathan Searles">

  <!-- SlidesJS Required (if responsive): Sets the page width to the device width. -->
  <meta name="viewport" content="width=device-width">
  <!-- End SlidesJS Required -->

  <!-- CSS for slidesjs.com example -->
  <link rel="stylesheet" href="css/example.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- End CSS for slidesjs.com example -->

  <!-- SlidesJS Optional: If you'd like to use this design -->
  <style>
    body {
      -webkit-font-smoothing: antialiased;
      font: normal 15px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
      color: #232525;
      padding-top: 50px;
    }

    #slides,
    #slides2,
    #slides3 {
      display: nones;
      margin-bottom:50px;
    }

    .slidesjs-navigation {
      margin-top:3px;
    }

 
    .slidesjs-pagination {
      margin: 6px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a { margin-top:10px;
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(images/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden; display:nones;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    a:link,
    a:visited {
      color: #FFF
    }

    a:hover,
    a:active {
      color: #F7941D
    }

    .navbar {
      overflow: hidden
    }
  </style>
  <!-- End SlidesJS Optional-->

  <!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
  <style>
    #slides {
      display: none
    }

    .container {
      margin: 0 auto
    }

    /* For tablets & smart phones */
    @media (max-width: 767px) {
      body {
	padding-left: 0px;
	padding-right: 0px;
	background-color: #000000;
      }
      .container {
        width: auto
      }
    }

    /* For smartphones */
    @media (max-width: 480px) {
      .container {
        width: auto
      }
    }

    /* For smaller displays like laptops */
    @media (min-width: 768px) and (max-width: 979px) {
      .container {
        width: 724px
      }
    }

    /* For larger displays */
    @media (min-width: 1200px) {
      .container {
        width: 1170px
      }
    }
  </style>
  <!-- SlidesJS Required: -->
</head>
<body>



<!-- SlidesJS Required: Start Slides -->
  <!-- The container is used to define the width of the slideshow -->
  
     <? if($_GET[num] > 1){ ?>
  <div style="padding:5px; font-size:18px; color:#F7941D"> <center>
     เลื่อนเพื่อดูภาพถ่าย</div>   
     
     <? } ?>
  
  
  
  
  <div class="container">
    <div id="slides<? if($_GET[num]<2){ echo 1;}?>">
    
 
 <?
 
  
$dir =  "../car/pic/guest/".$_GET[type]."/".$_GET[vc]."/*";
$extension = '.png';

 
 // Open a known directory, and proceed to read its contents
foreach(glob($dir) as $file)
{
	
	//     echo '<img src='.$file.' height=50 width=50 />';
	 
	 ?>

 
 
 
 
 
    
    
      <img src="<?=$file?>" style="width:100%"  >
 
 <? } ?>
      
   <? if($_GET[num] > 1){ ?>
   
 
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left" style="font-size:20px; padding-right:20px; margin-top:10px;" ></i></a>&nbsp;&nbsp;&nbsp;
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right"  style="font-size:20px; margin-right:0px;"></i></a>
 
      
      
  <? } ?>
      
    </div>


  </div>      
<!-- End SlidesJS Required: Start Slides -->

  <!-- SlidesJS Required: Link to jQuery -->
  <script src="js/jquery-main.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 1200,
        navigation: false
      });

      /*
        To have multiple slideshows on the same page
        they just need to have separate IDs
      */
      $('#slides2').slidesjs({
        width: 940,
        height: 1000,
        navigation: false,
        start: 3,
        play: {
          auto: true
        }
      });

      $('#slides3').slidesjs({
        width: 940,
        height: 1000,
        navigation: false
      });
    });
  </script>
  <!-- End SlidesJS Required -->
</body>
</html>
