
<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);
//$type = $_SESSION['type'];
//$member = "member";
if (isset($_SESSION['type']))
{
  if ($_SESSION['type']== owner){
      $email = $_SESSION['email'];
      $id = $_SESSION['id'];
  }else
   header("location: login.php");
}
 else 
 header("location: login.php");

include 'dbcon.php';
$sql = "SELECT * FROM clientsrecord WHERE email='$email' "; 
   $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
       while($row = $result->fetch_assoc()) 
      {
    
$id = $row['id'];
$name = $row['name'];
$address = $row['address'];
$bday = $row['bday'];
$gender = $row['gender'];
$contact = $row['contact'];
$email = $row['email'];
$activated = $row['activated'];
$IDclient = $row['IDclient'];

}
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Whiteplates Catering Services</title>
   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<!-- addons -->
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <!-- addons -->
  <!--//fonts-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/view.css" rel="stylesheet" type="text/css" media="all" />
  <!--//sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Favorites Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- //for-mobile-apps -->  

<!-- validations -->
     <script language="Javascript" type="text/javascript">
        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 32)
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }    
          function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
    </script>
  <!-- VAlidations -->
<script src="http://code.jquery.com/jquery-latest.js">
  // ------------FOR EVENTS-------------------- //
</script>
<script type="text/javascript">


                 $(document).ready(function () {
                    $('#id_regularevents').click(function () {
                       $('#divwedding').hide('fast');
                       $('#divdebut').hide('fast');
                       $('#divkiddie').hide('fast');
                       $('#divregular').show('fast');                      
                        $('#regularaddon').show('fast');
                       $('#weddingaddon').hide('fast');
                       $('#debutaddon').hide('fast');
                       $('#kiddieaddon').hide('fast');
                });
                $('#id_weddingevents').click(function () {
                       $('#divwedding').show('fast');
                       $('#divdebut').hide('fast');
                       $('#divkiddie').hide('fast');
                       $('#divregular').hide('fast');                    
                       $('#regularaddon').hide('fast');
                       $('#weddingaddon').show('fast');
                       $('#debutaddon').hide('fast');
                       $('#kiddieaddon').hide('fast');
                 });
                $('#id_debutevents').click(function () {
                       $('#divwedding').hide('fast');
                       $('#divdebut').show('fast');
                       $('#divkiddie').hide('fast');
                       $('#divregular').hide('fast');
                        $('#regularaddon').hide('fast');
                       $('#weddingaddon').hide('fast');
                       $('#debutaddon').show('fast');
                       $('#kiddieaddon').hide('fast');
                 });
                $('#id_kiddieevents').click(function () {
                       $('#divwedding').hide('fast');
                       $('#divdebut').hide('fast');
                       $('#divkiddie').show('fast');
                       $('#divregular').hide('fast');
                        $('#regularaddon').hide('fast');
                       $('#weddingaddon').hide('fast');
                       $('#debutaddon').hide('fast');
                       $('#kiddieaddon').show('fast');
                 });
               });
// ------------FOR EVENTS-------------------- //
</script>

<script type="text/javascript">
  // ------------FOR guestnumber message-------------------- //

function message(){

  var less = 50;
  var more = 300;
  //var lessmessage = Less than 50 is not allowed;
  //var moremessage = 500;

  if (document.getElementById('guest').value < less)
  {
    
    document.getElementById('guest').value = "";
    document.getElementById('message').innerHTML = "Less than 50 is not allowed";
  }
  else if (document.getElementById('guest').value > more)
  {
    document.getElementById('guest').value = "";
    document.getElementById('message').innerHTML = "More than 300 is not allowed";
    
  }
  else
  {
    document.getElementById('message').innerHTML = "";
  }

} //end of function for guestnumber message

</script>

<script type="text/javascript">
  // ------------FOR TOTAL-------------------- //
function totalupdate(){

  var packageprice = 0;
  var addonprice = 0;
  if (document.getElementById('regularpackage1').checked){
    packageprice += 220;
  }
  if (document.getElementById('regularpackage2').checked){
    packageprice += 250;
  }
  if (document.getElementById('regularpackage3').checked){
    packageprice += 300;
  }
  if (document.getElementById('regularpackage4').checked){
    packageprice += 350;
  }
  if (document.getElementById('weddingsilver').checked){
    packageprice += 280;
  }
  if (document.getElementById('weddinggold').checked){
    packageprice += 320;
  }
  if (document.getElementById('weddingdiamond').checked){
    packageprice += 380;
  }
  if (document.getElementById('weddingplatinum').checked){
    packageprice += 420;
  }
  if (document.getElementById('debutpackage1').checked){
    packageprice += 230;
  }
  if (document.getElementById('debutpackage2').checked){
    packageprice += 270;
  }
  if (document.getElementById('debutpackage3').checked){
    packageprice += 330;
  }
  if (document.getElementById('debutpackage4').checked){
    packageprice += 360;
  }
  if (document.getElementById('kiddiepackage1').checked){
    packageprice += 420;
  }
  if (document.getElementById('kiddiepackage2').checked){
    packageprice += 420;
  }
  if (document.getElementById('addon1').checked){
    addonprice += 1000;
  }
  if (document.getElementById('addon2').checked){
    addonprice += 1500;
  }
  if (document.getElementById('addon3').checked){
    addonprice += 1000;
  }
  if (document.getElementById('addon4').checked){
    addonprice += 1500;
  }
  if (document.getElementById('addon5').checked){
    addonprice += 1000;
  }
  if (document.getElementById('addon6').checked){
    addonprice += 1500;
  }
  if (document.getElementById('addon7').checked){
    addonprice += 1000;
  }
  if (document.getElementById('addon8').checked){
    addonprice += 1500;
  }
  if (document.getElementById('addon9').checked){
    addonprice += 1000;
  }
  if (document.getElementById('addon10').checked){
    addonprice += 1500;
  }
  if (document.getElementById('addon11').checked){
    addonprice += 1000;
  }
  if (document.getElementById('addon12').checked){
    addonprice += 1500;
  }
  if (document.getElementById('addon13').checked){
    addonprice += 1000;
  }
  if (document.getElementById('addon14').checked){
    addonprice += 1500;
  }
  if (document.getElementById('addon15').checked){
    addonprice += 1000;
  }
  if (document.getElementById('addon16').checked){
    addonprice += 1500;
  }
  if (document.getElementById('addon17').checked){
    addonprice += 1000;
  }
  if (document.getElementById('addon18').checked){
    addonprice += 1500;
  }
  if (document.getElementById('addon19').checked){
    addonprice += 1000;
  }
  if (document.getElementById('addon20').checked){
    addonprice += 1500;
  }

var totalpackageprice = (packageprice * document.getElementById('guest').value) + addonprice; 
document.getElementById('total').innerHTML =  totalpackageprice;
} //end of function for totalupdate

</script>


<script type="text/javascript">

  // ------------FOR addons-------------------- //
  $(document).ready(function(){
    $('.addons').click(function(){
      var text="";
      $('.addons:checked').each(function(){
        text+=$(this).val()+ ',';
      });
      text=text.substring(0,text.length-1);
      $('#selectedtext').val(text);
      var count=$("[type='checkbox']:checked").length;
    });
  });
 //end of function for addons

</script>

  <!-- datepicker -->
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {
var date = new Date();
var currentMonth = date.getMonth();
var currentDate = date.getDate();
var currentYear = date.getFullYear();
$('#date').datepicker({
dateFormat: "dd/MM/yy",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0", // this is the option you're looking for
numberOfMonths: 1,
maxDate: new Date(currentYear, currentMonth, currentDate)

});
});

$(function() {
  $("#datepicker").datepicker(
      {
minDate: +15,
changeMonth: true,
changeYear: true,
dateFormat: 'yy-mm-dd'

  });
});
</script>-->

</head>

<body>
<!-- header -->
<div class="header">
  <div class="container">
    <div class="top-header">  
        <ul class="pull-right">
          <a href="logout.php" style="color:white;">LOGOUT</a> 
        </ul>
    </div>        
        <div class="clearfix"></div>
    </div>
</div>
<div class="banner two">
<!-- //header --> 
<div class="banner-slider">
  <div class="banner-pos">  
<div class="container" style="width: 100%; height: 100%; ">
  <div class="navigation text-center">
    <span class="menu"><img src="images/menu.png" alt=""/></span>
      <ul class="nav1">
        <li><a class="active" href="viewrecords.php">CLIENTS RECORD</a></li>
        <li><a href="paymentrecord.php">PAYMENTS</a></li>
        <li><a href="salesmonitoring.php">SALES MONITORING</a></li>
        <li><a href="ownersetting.php">SETTINGS</a></li>
        <div class="clearfix"></div>
      </ul>
        <!-- script for menu -->
        <script> 
          $( "span.menu" ).click(function() {
          $( "ul.nav1" ).slideToggle( 300, function() {
          // Animation complete.
          });
          });
        </script>
        <!-- //script for menu -->
  </div>
</div>
<!-- banner -->
<!-- //banner -->
<div style="margin: 50px auto; 
    padding: 10px; 
    width: 90%;
    height: 100%;
   box-shadow:1px 1px 25px rgba(0,0,0,0.35);
   border-radius:10px;
border: 6px solid #305a72;
    background-color: white;

    filter: alpha(opacity=90); ">
</br>
<center>

<form method="post" action="viewrecords.php">
<!-- search bar -->
<div class="container">
<div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">Search</span>
          <input type="text" name="search_text" id="search_text" placeholder="Search by Client Name" class="form-control" />
        </div>
      </div>
</br></br>
        <ul class="nav nav-pills">
          <li class="active"><a data-toggle="pill" href="#home">CLIENTS RECORDS</a></li>
          <li><a data-toggle="pill" href="#pending">PENDING</a></li>
          <li><a data-toggle="pill" href="#approved">APPROVED</a></li>
          <li><a data-toggle="pill" href="#cancelled">CANCELLED</a></li>
        </ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active" ><br />                       
    <div align="right">
 <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>  
        <button type="button" name="bookmodal" id="bookmodal" data-toggle="modal" data-target="#book_Modal" class="btn btn-warning">Book</button>
    </div>

                            <div id="result"></div>                         
                        </div>                       
                        <div id="pending" class="tab-pane fade"><br />                                    
                            <div id="result1"></div>
                        </div>              
                        <div id="approved" class="tab-pane fade "><br />                        
                            <div id="result2"></div>                       
                        </div>                 
                        <div id="cancelled" class="tab-pane fade"><br />                        
                          <div id="result3"></div>            
                          </div>    
                      </div>
                  
<!-- search bar -->
</center>
</form>

<br><br>  <br><br>  <br><br>  <br><br>  <br><br>  <br><br>  
</div>
<!-- footer -->
<div class="footer">
  <div class="container">  
    <div class="footer-right">  
<br><br>        
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!-- //footer -->





<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</body>


</html>



<script>
$('#start1').timepicker({
  timeFormat: 'hh:mm a',
  interval: 30,
  minTime: '8',
  maxTime: '09:00 PM',
  startTime: '08:00 AM',
  dynamic: false,
  dropdown: true,
  scrollbar: true
});


$('#start1')
  .timepicker('option', 'change', function(time) {
    var later = new Date(time.getTime() + (2 * 60 * 60 * 1000));
    $('#end2').timepicker('option', 'minTime', time);
    $('#end2').timepicker('setTime', later);
    $('#end1').timepicker('option', 'minTime', time);
    $('#end1').timepicker('setTime', later);
  });

$('#end2').timepicker({
  timeFormat: 'hh:mm a',
  interval: 30,
  maxTime: '11:00 PM',
  startTime: '08:00 AM',
  dynamic: false,
  dropdown: true,
  scrollbar: true
});         

$('#end1').timepicker({
  timeFormat: 'hh:mm a',
  interval: 30,
  maxTime: '11:00 PM',
  startTime: '08:00 AM',
  dynamic: false,
  dropdown: true,
  scrollbar: true
});    

</script>
 <script>  
 $(document).ready(function(){  
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();    
   $.ajax({  
    async: true,
    url:"insert.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data)
    {  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');    
     $('#result').html(data);   
    }  
   });  
    
 });
}); 
 </script>



            <?php
include 'dbcon.php';

$date21 = $_GET['view'];

$sql21 = "SELECT * FROM clientsorder WHERE pref_date='$date21'";
          $query21 = mysqli_query($conn, $sql21);
          $result21 = $conn->query($sql21);

if ($row = $result21->fetch_assoc()) 
          {
            $row21 = mysqli_fetch_assoc($query21);
            $dbname = $row21['name'];
            $dbdate = $row21['pref_date'];
            $dbevent = $row21['pref_event'];        
            $dbtitle = $row21['title'];       
            $dbtime = $row21['pref_time'];
            $dbstatus = $row21['status'];
            $dbimage = $row21['image'];

          $sql121 = "SELECT image FROM clientsorder WHERE pref_date='$date21'";
          $query121 = mysqli_query($conn, $sql121);
          $result121 = $conn->query($sql121);

          if(empty($row21['image']))
          {
            echo "No receipt uploaded";
          }
          else
          {
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row21['image'] ).'" height="200" width="200"/>';
          }

          }
?>

<script>  
$(document).ready(function(){
 $('#book_form').on("submit", function(event){  
  event.preventDefault();  
   if($('#name').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#address').val() == '')  
           {  
                alert("Address is required");  
           }  

           else  
           {  
                $.ajax({  
                     url:"bookwalkin.php",  
                     method:"POST",  
                     data:$('#book_form').serialize(),  
                     beforeSend:function(){  
                          $('#book').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#book')[0].reset();  
                          $('#book_Modal').modal('hide');  
                     }  
                });  
           }  
 });
});  
 </script>


<!-- search bar -->
<script>
$(document).ready(function(){
  fetch();
  function fetch(query)
  {
    $.ajax({
      async: true,
      url:"fetch.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#result').html(data);
      }
    });
  }
  
  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      fetch(search);
    }
    else
    {
      fetch();      
    }
  });
});
</script>

<script>
$(document).ready(function(){
  pending();
  function pending(query1)
  {
    $.ajax({
      async: true,
      url:"fetchpending.php",
      method:"post",
      data:{query1:query1},
      success:function(data)
      {
        $('#result1').html(data);
      }
    });
  }
  

  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      pending(search);
    }
    else
    {
      pending();      
    }
  });


});
</script>


<script>
$(document).ready(function(){
  approved();
  function approved(query2)
  {
    $.ajax({
      async: true,
      url:"fetchapproved.php",
      method:"post",
      data:{query2:query2},
      success:function(data)
      {
        $('#result2').html(data);
      }
    });
  }
  

  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      approved(search);
    }
    else
    {
      approved();      
    }
  });


});
</script>

<script>
$(document).ready(function(){
  cancelled();
  function cancelled(query3)
  {
    $.ajax({
      async: true,
      url:"fetchcancelled.php",
      method:"post",
      data:{query3:query3},
      success:function(data)
      {
        $('#result3').html(data);
      }
    });
  }
  

  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      cancelled(search);
    }
    else
    {
      cancelled();      
    }
  });


});
</script>



<!-- MODAL FOR BOOK -->
<div id="book_Modal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">BOOK WALK-IN CLIENT</h4>
   </div>
      <div class="modal-body">
            <form method="post" id="book_form">
<div class="row">
        <div class="col-sm-6 col-sm-offset-3 text-center">
    <b><h2><font color="#f65a5b""> <?php echo "Welcome ".$_SESSION['name']."!!"; ?></b></h2></font>
      <form id="form1" name="form1" method="post" action="clientbookprocess.php">        
      <br>   
        </div>  
     </div> 

<div class="row">
    <div class="col-sm-6 col-sm-offset-3 text-center">
    <label>Preferred Event Date:</label>
    <input id="datepicker" class="form-control " type="text" name="datepicker"  autocomplete="off" required><div id="status"></div> 
    <br>
  </div>
</div>
    
    
<div class="row">
    <div class="col-sm-6 col-sm-offset-3 text-center">
      <label>Preferred Time:</label>  
      <br>
    <div class="col-md-11">FROM:
      <input class="form-control " type="text" id="t1" name="starttime" autocomplete="off" required><br>
    </div>


    <div class="col-md-11">TO:
      
      <input class="form-control " type="text" id="t3" name="endtime"  readonly disabled>   
      <input class="form-control " type="hidden" id="t2" name="endtime"  >  


    </div>
  </div>
</div>
    
    </br>
    
    
    
<div class="row">
    <div class="col-sm-6 col-sm-offset-3 text-center">
    <label>Title:</label>
    <input type="text" class="form-control" placeholder="Title" name="title" width="50px" autocomplete="off" required>
    <br>
  </div>
</div>




<div class="row">
    <div class="col-sm-6 col-sm-offset-3 text-center">
    <label>Venue:</label>
    <select name="Venue" input class="form-control">
        <option value="">(Optional)</option>
        <option value="Blue Leaf Filipinas">Blue Leaf Filipinas</option>
        <option value="Casa Feliza">Casa Feliza</option>
        <option value="Villar Sipag">Villar Sipag</option>
        <option value="Chateau Elysee">Chateau Elysee</option>
        <option value="El Paseo De Fortunata">El Paseo De Fortunata</option>
        <option value="Citadella Clubhouse">Citadella Clubhouse</option>
        <option value="Sienna Park Residences">Sienna Park Residences</option>
        <option value="The Village Sports Club">The Village Sports Club</option>
        <option value="The Pergola">The Pergola</option>
    </select> 
    <br>
  </div>
</div>

    
    
    
<div class="row">
    <div class="col-sm-6 col-sm-offset-3 text-center">
    <label>Number of Guests:</label>
      <input type="text" name="guest" id="guest" class="form-control" onkeypress="return isNumberKey(event)" maxlength="3" onchange="message()" autocomplete="off" required> 
      <font color="red"><span id="message"></span><br></font>
  </div>
</div>

</br>

<div class="row">
        <div class="col-sm-6 col-sm-offset-3 text-center">
      <label>Type of Event :</label>
            <br>      <input id="id_regularevents" type="radio" name="event_radio" value="REGULAR EVENT" checked autocomplete="off" required/>REGULAR EVENT
            <br>      <input id="id_weddingevents" type="radio" name="event_radio" value="WEDDING EVENT"  />WEDDING EVENT
            <br>      <input id="id_debutevents" type="radio" name="event_radio" value="DEBUT EVENT" />DEBUT EVENT
            <br>      <input id="id_kiddieevents" type="radio" name="event_radio" value="KIDDIE EVENT" />KIDDIE EVENT       
    </div>
</div>
<br> 


<div class="row">
    <div class="col-sm-6 col-sm-offset-3 text-center">
    <label>Theme:</label>
    <select name="theme" input class="form-control" >
      <option>(Optional)</option>
      <option value="Beyond Rustic">Beyond Rustic</option>
      <option value="Alice">Alice</option>
      <option value="Whimcsical">Whimcsical</option>
      <option value="Safari">Safari</option>
      <option value="Midnight Blue">Midnight Blue</option>
      <option value="Summer Lovin'">Summer Lovin'</option>
      <option value="Jewel of the Nile">Jewel of the Nile</option>
      <option value="Green Elegance">Green Elegance</option>
      <option value="Vougish Mint">Vougish Mint</option>
    </select> 
    <br>
  </div>
</div>


<div class="row">
        <div class="col-sm-6 col-sm-offset-3 text-center">
<label>Package:</label>



                   <div id="divregular" value="divregular" >
                   <div class="col-md-12">
                   <input  type="radio" name="package_radio" id="regularpackage1" value="REGULAR PACKAGE 1" onchange="totalupdate()" checked autocomplete="off" required/>PACKAGE 1 (220/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   <div class="col-md-12">
                   <br><input  type="radio" name="package_radio" id="regularpackage2" value="REGULAR PACKAGE 2" onchange="totalupdate()" />PACKAGE 2 (250/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   <div class="col-md-12">
                   <br><input  type="radio" name="package_radio" id="regularpackage3" value="REGULAR PACKAGE 3" onchange="totalupdate()" />PACKAGE 3 (300/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="regularpackage4" value="REGULAR PACKAGE 4" onchange="totalupdate()" />PACKAGE 4 (350/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   </div>
                   <div id="divwedding"  value="divwedding" style="display: none;" >
                   <div class="col-md-12">
                   <input  type="radio" name="package_radio" id="weddingsilver" value="SILVER WEDDING" onchange="totalupdate()" checked/>SILVER (280/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="weddinggold" value="GOLD WEDDING" onchange="totalupdate()" />GOLD (320/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="weddingdiamond" value="DIAMOND WEDDING" onchange="totalupdate()" />DIAMOND (380/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="weddingplatinum" value="PLATINUM WEDDING" onchange="totalupdate()" />PLATINUM (420/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   </div>
                   <div id="divdebut" value="divdebut" style="display: none;">
                   <div class="col-md-12">
                   <input type="radio" name="package_radio" id="debutpackage1" value="DEBUT PACKAGE 1" onchange="totalupdate()" checked/>PACKAGE 1 (230/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="debutpackage2" value="DEBUT PACKAGE 2" onchange="totalupdate()"  />PACKAGE 2 (270/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="debutpackage3" value="DEBUT PACKAGE 3" onchange="totalupdate()" />PACKAGE 3 (330/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="debutpackage4" value="DEBUT PACKAGE 4" onchange="totalupdate()" />PACKAGE 4 (360/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   </div>
                   <div id="divkiddie" value="divkiddie" style="display: none;">
                                       <div class="col-md-12">
                   <input type="radio" name="package_radio" id="kiddiepackage1" value="KIDDIE PACKAGE 1" onchange="totalupdate()" checked/>PACKAGE 1 (120/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   <div class="col-md-12">
                   <input type="radio" name="package_radio" id="kiddiepackage2" value="KIDDIE PACKAGE 2" onchange="totalupdate()"  />PACKAGE 2 (170/GUEST)
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br>  ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   <br> ASDFGHJKLASDFGHJKLASDFGHJKLASDFGHJKL
                   </div>
                   </div>
<br> 

</div></div>


<!--    
 ‎₱ <span id="totalresult">0.00</span><br>
 // <input type="text" name="total" id="total" onchange="totalupdate()">
 -->

       

  </br>
  <div class="row">
        <div class="col-sm-6 col-sm-offset-3 text-center"> 
<h4><b>ADD ONS:</b></h4>
<div id="regularaddon" value="regularaddon" >
<input type="checkbox" name="addons" class="addons" id="addon1" onchange="totalupdate()" value="Addon 1" /> Addon 1 <br>
<input type="checkbox" name="addons" class="addons" id="addon2" onchange="totalupdate()" value="Addon 2" /> Addon 2 <br>
<input type="checkbox" name="addons" class="addons" id="addon3" onchange="totalupdate()" value="Addon 3" /> Addon 3 <br>
<input type="checkbox" name="addons" class="addons" id="addon4" onchange="totalupdate()" value="Addon 4" /> Addon 4 <br>
<input type="checkbox" name="addons" class="addons" id="addon5" onchange="totalupdate()" value="Addon 5" /> Addon 5 <br>
</div>

<div id="weddingaddon" value="weddingaddon" style="display: none;" disabled>
<input type="checkbox" name="addons" class="addons" id="addon6" onchange="totalupdate()" value="Addon 6" /> Addon 6 <br>
<input type="checkbox" name="addons" class="addons" id="addon7" onchange="totalupdate()" value="Addon 7" /> Addon 7 <br>
<input type="checkbox" name="addons" class="addons" id="addon8" onchange="totalupdate()" value="Addon 8" /> Addon 8 <br>
<input type="checkbox" name="addons" class="addons" id="addon9" onchange="totalupdate()" value="Addon 9" /> Addon 9 <br>
<input type="checkbox" name="addons" class="addons" id="addon10" onchange="totalupdate()" value="Addon 10" /> Addon 10  <br>
</div>

<div id="debutaddon" value="debutaddon" style="display: none;" disabled>
<input type="checkbox" name="addons" class="addons" id="addon11" onchange="totalupdate()" value="Addon 11" /> Addon 11  <br>
<input type="checkbox" name="addons" class="addons" id="addon12" onchange="totalupdate()" value="Addon 12" /> Addon 12  <br>
<input type="checkbox" name="addons" class="addons" id="addon13" onchange="totalupdate()" value="Addon 13" /> Addon 13  <br>
<input type="checkbox" name="addons" class="addons" id="addon14" onchange="totalupdate()" value="Addon 14" /> Addon 14  <br>
<input type="checkbox" name="addons" class="addons" id="addon15" onchange="totalupdate()" value="Addon 15" /> Addon 15  <br>
</div>

<div id="kiddieaddon" value="kiddieaddon" style="display: none;" disabled>
<input type="checkbox" name="addons" class="addons" id="addon16" onchange="totalupdate()" value="Addon 16" /> Addon 16  <br>
<input type="checkbox" name="addons" class="addons" id="addon17" onchange="totalupdate()" value="Addon 17" /> Addon 17  <br>
<input type="checkbox" name="addons" class="addons" id="addon18" onchange="totalupdate()" value="Addon 18" /> Addon 18  <br>
<input type="checkbox" name="addons" class="addons" id="addon19" onchange="totalupdate()" value="Addon 19" /> Addon 19  <br>
<input type="checkbox" name="addons" class="addons" id="addon20" onchange="totalupdate()" value="Addon 20" /> Addon 20  <br>
</div>

<input type="hidden" name="alladdons" id="selectedtext">

<br> 
<br>
<br> 
<label>Total Value:</label>
 ‎₱ <textarea id="total" name="total" style="resize: none; width: 50%; height: 30px;" readonly></textarea>.00<br>
          <center>

    <!--  <b><input type="submit" class="btn btn-primary"  name="bookbtn" id="submit" value="RESERVE" onclick="showPopup()"/>  -->                 


              <br />  
              <input type="hidden" name="client_id" id="client_id" />  
              <input type="submit" name="book" id="book" value="Book" class="btn btn-success"8 />

            </form>
      </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
<!-- MODAL FOR BOOK -->

<!-- MODAL FOR ADD -->
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">ADD WALK-IN CLIENT</h4>  
                </div>  
<div class="modal-body">  
    <form method="post" id="insert_form">  
        <label for="firstname">First Name:</label>
        <input type="firstname" class="form-control" placeholder="First Name" name="firstname" id="firstname" onkeypress="return onlyAlphabets(event,this);" maxlength="25" autocomplete="off" required>
        <label>Last Name:</label>
        <input class="form-control" type="lname" placeholder="Last Name" name="lastname" id="lastname" onkeypress="return onlyAlphabets(event,this);" maxlength="25" autocomplete="off" required>
        <label>Gender:</label><br>
        <input type="radio" name="Gender2" id="Gender3" value="Female" required />Female 
        <input type="radio" name="Gender2" id="Gender4" value="Male" />Male 
<br>
        <label for="date">Date of Birth</label>
        <input type="text" class="form-control" id="date" name="bday" autocomplete="off" required>
        <label>Email address:</label>
        <input class="form-control" type="email" placeholder="Email" maxlength="50" name="email" id="email" autocomplete="off" required>
        <label>Phone/Mobile Number:</label>
        <input class="form-control" type="text" placeholder="Phone/Mobile Number" name="contact" id="contact" onkeypress="return isNumberKey(event)" maxlength="11" autocomplete="off" required>
        <label>Home Address:</label>
        <input class="form-control" type="text" placeholder="Address"  maxlength="100" name="address" id="Address" autocomplete="off" required>
        <label>Password:</label>
        <input class="form-control" type="password" placeholder="Password"  maxlength="30" name="password" id="password" autocomplete="new-password" required>
        <label>Confirm Password:</label>
        <input class="form-control" type="password" placeholder="Confirm Password"  maxlength="30" name="confirmpassword" id="confirmpassword" autocomplete="new-password" required>
        <label>Secret Question 1:</label>
        <p><i> This will be asked when you forget you password </i></p>
        <select type="question" class="form-control" name="question" id="question" required>
          <option value=></option>
          <option value="Favorite food">What is your favorite food?</option>
          <option value="Favorite color">What is your favorite color?</option>
          <option value="Favorite pet">What is the name  of your favorite pet?</option>
          <option value="Favorite actor">Who is your favorite actor, musician, or artist?</option>
          <option value="First School">What is the name of your first school?</option>
        </select>
        <label>Secret Answer 1:</label>
        <p><i> This should be the answer to your secret question</i></p>
        <input type="answer" class="form-control" name="answer" id="answer" autocomplete="off" required>
<br>
        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />    
    </form>  
</div>  
<div class="modal-footer">  
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
</div>  
          </div>  
      </div>  
</div>  
<!-- MODAL FOR ADD -->