<?php
$connect = mysqli_connect("localhost", "root", "", "catering");
$status2 = "APPROVED";
$query2 = "SELECT * FROM clientsorder WHERE status ='$status2'";
$output = '';

if(isset($_POST["query2"]))
{
  $search = $_POST["query2"];
  $query2 = "SELECT * FROM clientsorder WHERE status='$status2' AND name LIKE '%$search%'";
}
else
{
  
  $query2 = "SELECT * FROM clientsorder WHERE status ='$status2' ORDER BY name";
}



$result2 = mysqli_query($connect, $query2);
if(mysqli_num_rows($result2) > 0)
{
  $output .= '<div class="table-responsive">
          <table class="table table-bordered table-hover">
            <tr align="center">
              <th class="bg-primary">Name</th>
              <th class="bg-primary">Date</th>
              <th class="bg-primary">Event</th>
              <th class="bg-primary">Title</th>
              <th class="bg-primary">Time</th>
              <th class="bg-primary">Package</th>
              <th class="bg-primary">Theme</th>
              <th class="bg-primary">Venue</th>
              <th class="bg-primary">Guest No.</th>
              <th class="bg-primary">Add ons</th>
              <th class="bg-primary">Total</th>
              <th class="bg-primary">Status</th>
              <th class="bg-primary"> Details </th>
              <th class="bg-primary"> Details </th>
            </tr>';
          
  while($row = mysqli_fetch_assoc($result2))
  {
    $output .= '
      <tr id='.$row["id"].'>

        <td data-target="name">'.$row["name"].'</td>
        <td data-target="pref_date">'.$row["pref_date"].'</td>
        <td data-target="pref_event">'.$row["pref_event"].'</td>
        <td data-target="title">'.$row["title"].'</td>
        <td data-target="pref_time">'.$row["pref_time"].'</td>
        <td data-target="packagetype">'.$row["packagetype"].'</td>
        <td data-target="theme">'.$row["theme"].'</td>
        <td data-target="pref_venue">'.$row["pref_venue"].'</td>
        <td data-target="guests_no">'.$row["guests_no"].'</td>
        <td data-target="addons">'.$row["addons"].'</td>
        <td data-target="payment_total">'.$row["payment_total"].'</td>
        <td>'.$row["status"].'</td>
<td><input type="button" name="view" value="view" id='.$row["pref_date"].' class="btn btn-info viewdata" /></td>
<td><a href="#" data-role="update" data-id='.$row["id"].'>Update</a></td></td>

      </tr>
    ';
  }
  echo $output;
}
else
{
  echo 'Data Not Found';
} 
?>  

<!DOCTYPE html>
<html>
<head>
    <title>Whiteplates Catering Services</title>
  <!-- addons -->
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <!-- addons -->
   <!--//sweetalert-->   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="http://code.jquery.com/jquery-latest.js">
  // ------------FOR EVENTS-------------------- //
</script>
  <!-- time -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

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
                       document.getElementById('pref_event').value = "REGULAR EVENTS";
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
                       document.getElementById('pref_event').value = "WEDDING EVENTS";
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
                       document.getElementById('pref_event').value = "DEBUT EVENTS";
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
                       document.getElementById('pref_event').value = "KIDDIE EVENTS";
                 });
               });
// ------------FOR EVENTS-------------------- //
</script>

<script type="text/javascript">
  // ------------FOR TOTAL-------------------- //

function totalupdate(){

  var packageprice = 0;
  var addonprice = 0;
  

  if (document.getElementById('regularpackage1').checked){
    packageprice += 220;
    document.getElementById('packagetype').value = "REGULAR PACKAGE 1";
  }
  if (document.getElementById('regularpackage2').checked){
    packageprice += 250;
    document.getElementById('packagetype').value = "REGULAR PACKAGE 2";
  }
  if (document.getElementById('regularpackage3').checked){
    packageprice += 300;
    document.getElementById('packagetype').value = "REGULAR PACKAGE 3";
  }
  if (document.getElementById('regularpackage4').checked){
    packageprice += 350;
    document.getElementById('packagetype').value = "REGULAR PACKAGE 4";
  }
  if (document.getElementById('weddingsilver').checked){
    packageprice += 280;
    document.getElementById('packagetype').value = "SILVER WEDDING";
  }
  if (document.getElementById('weddinggold').checked){
    packageprice += 320;
    document.getElementById('packagetype').value = "GOLD WEDDING";
  }
  if (document.getElementById('weddingdiamond').checked){
    packageprice += 380;
    document.getElementById('packagetype').value = "DIAMOND WEDDING";
  }
  if (document.getElementById('weddingplatinum').checked){
    packageprice += 420;
    document.getElementById('packagetype').value = "PLATINUM WEDDING";
  }
  if (document.getElementById('debutpackage1').checked){
    packageprice += 230;
    document.getElementById('packagetype').value = "DEBUT PACKAGE 1";
  }
  if (document.getElementById('debutpackage2').checked){
    packageprice += 270;
    document.getElementById('packagetype').value = "DEBUT PACKAGE 2";
  }
  if (document.getElementById('debutpackage3').checked){
    packageprice += 330;
    document.getElementById('packagetype').value = "DEBUT PACKAGE 3";
  }
  if (document.getElementById('debutpackage4').checked){
    packageprice += 360;
    document.getElementById('packagetype').value = "DEBUT PACKAGE 4";
  }
  if (document.getElementById('kiddiepackage1').checked){
    packageprice += 420;
    document.getElementById('packagetype').value = "KIDDIE PACKAGE 1";
  }
  if (document.getElementById('kiddiepackage2').checked){
    packageprice += 420;
    document.getElementById('packagetype').value = "KIDDIE PACKAGE 2";
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

var totalpackageprice = (packageprice * document.getElementById('guests_no').value) + addonprice; 
document.getElementById('payment_total').innerHTML =  totalpackageprice;
} //end of function for totalupdate

</script>


  <!-- datepicker -->
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script type="text/javascript">


$(function() {
  $("#pref_date").datepicker(
      {
minDate: +15,
changeMonth: true,
changeYear: true,
dateFormat: 'M-dd-yy'

  });
});
</script>-->
</head>


<body>

<div id="receiptmodal" class="modal fade">
 <div class="modal-dialog modal-lg" >
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">RECEIPT</h4>
   </div><div style="overflow:auto; height: 500px; width: 100%">
   <div class="modal-body" id="receipt">
   <form method='post' enctype="multipart/form-data">
    
    </form>
   </div></div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>





 
</div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>Client's Name</label>
                <input type="text" id="name" class="form-control" readonly>
              </div>
              <div class="form-group">
                <label>Preferred Date</label>
                
                <input id="pref_date" class="form-control " type="text" name="pref_date"  autocomplete="off" required>

              </div>

              <div class="form-group">
                <label>No. of Guest</label>

                      <input type="text" name="guests_no" id="guests_no" class="form-control" onkeypress="return isNumberKey(event)" maxlength="3" autocomplete="off" required> 

              </div>

               <div class="form-group">
                <label>Event Type</label>
                <input type="text" id="pref_event" class="form-control">
                <label>Type of Event :</label>
            <br>      <input id="id_regularevents" type="radio" name="event_radio" value="REGULAR EVENT" autocomplete="off" required/>REGULAR EVENT
            <br>      <input id="id_weddingevents" type="radio" name="event_radio" value="WEDDING EVENT"  />WEDDING EVENT
            <br>      <input id="id_debutevents" type="radio" name="event_radio" value="DEBUT EVENT" />DEBUT EVENT
            <br>      <input id="id_kiddieevents" type="radio" name="event_radio" value="KIDDIE EVENT" />KIDDIE EVENT         
              </div>

               <div class="form-group">
                <label>Title</label>
                <input type="text" id="title" class="form-control">
              </div>
              <div class="form-group">
                <label>Preferred Time</label>
                <input type="text" id="pref_time" class="form-control">
              </div>

               <div class="form-group">
                <label>Package Type</label>
                <input type="text" id="packagetype" class="form-control">
                 <div id="divregular" value="divregular" >
                   <div class="col-md-12">
                   <input  type="radio" name="package_radio" id="regularpackage1" value="REGULAR PACKAGE 1" onchange="totalupdate()"  autocomplete="off" required/>PACKAGE 1 (220/GUEST)
                   </div>
                   <div class="col-md-12">
                   <br><input  type="radio" name="package_radio" id="regularpackage2" value="REGULAR PACKAGE 2" onchange="totalupdate()" />PACKAGE 2 (250/GUEST)
      
                   </div>
                   <div class="col-md-12">
                   <br><input  type="radio" name="package_radio" id="regularpackage3" value="REGULAR PACKAGE 3" onchange="totalupdate()" />PACKAGE 3 (300/GUEST)

                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="regularpackage4" value="REGULAR PACKAGE 4" onchange="totalupdate()" />PACKAGE 4 (350/GUEST)
     
                   </div>
                   </div>
                   <div id="divwedding"  value="divwedding" style="display: none;" >
                   <div class="col-md-12">
                   <input  type="radio" name="package_radio" id="weddingsilver" value="SILVER WEDDING" onchange="totalupdate()" />SILVER (280/GUEST)

                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="weddinggold" value="GOLD WEDDING" onchange="totalupdate()" />GOLD (320/GUEST)

                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="weddingdiamond" value="DIAMOND WEDDING" onchange="totalupdate()" />DIAMOND (380/GUEST)

                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="weddingplatinum" value="PLATINUM WEDDING" onchange="totalupdate()" />PLATINUM (420/GUEST)

                   </div>
                   </div>
                   <div id="divdebut" value="divdebut" style="display: none;">
                   <div class="col-md-12">
                   <input type="radio" name="package_radio" id="debutpackage1" value="DEBUT PACKAGE 1" onchange="totalupdate()" />PACKAGE 1 (230/GUEST)
  
                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="debutpackage2" value="DEBUT PACKAGE 2" onchange="totalupdate()"  />PACKAGE 2 (270/GUEST)
  
                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="debutpackage3" value="DEBUT PACKAGE 3" onchange="totalupdate()" />PACKAGE 3 (330/GUEST)
     
                   </div>
                   <div class="col-md-12">
                   <br><input type="radio" name="package_radio" id="debutpackage4" value="DEBUT PACKAGE 4" onchange="totalupdate()" />PACKAGE 4 (360/GUEST)

                   </div>
                   </div>
                   <div id="divkiddie" value="divkiddie" style="display: none;">
                                       <div class="col-md-12">
                   <input type="radio" name="package_radio" id="kiddiepackage1" value="KIDDIE PACKAGE 1" onchange="totalupdate()" />PACKAGE 1 (120/GUEST)
    
                   </div>
                   <div class="col-md-12">
                   <input type="radio" name="package_radio" id="kiddiepackage2" value="KIDDIE PACKAGE 2" onchange="totalupdate()"  />PACKAGE 2 (170/GUEST)

                   </div>
                   </div>
              </div>

               <div class="form-group">
                <label>Theme</label>
                
                <select name="theme" id="theme" input class="form-control" >
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
              </div>
              <div class="form-group">
                <label>Venue</label>
                
                <select name="pref_venue" id="pref_venue" input class="form-control">
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
              </div>

               <div class="form-group">
                <label>Add ons</label>
               
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

<input type="text" name="alladdons" id="addons">
              </div>
              <div class="form-group">

                <label>Total Value:</label>
 ‎₱ <textarea id="payment_total" name="payment_total"  class="form-control" readonly></textarea>.00<br>
              </div>

              
                <input type="hidden" id="userId" class="form-control">


          </div>
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

</body>

<script>
$(document).ready(function(){
 $(document).on('click', '.viewdata', function(){
  //$('#receiptmodal').modal();
  var clientsreceipt = $(this).attr("id");
  $.ajax({
   url:"receipt.php",
   method:"POST",
   data:{clientsreceipt:clientsreceipt},
   success:function(data){
    $('#receiptmodal').modal('show');
     $('#receipt').html(data);
   }
  });
 });
});  
 </script>

<script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var name  = $('#'+id).children('td[data-target=name]').text();
            var pref_date  = $('#'+id).children('td[data-target=pref_date]').text();
            var pref_event  = $('#'+id).children('td[data-target=pref_event]').text();
             var title  = $('#'+id).children('td[data-target=title]').text();
            var pref_time  = $('#'+id).children('td[data-target=pref_time]').text();
            var packagetype  = $('#'+id).children('td[data-target=packagetype]').text();
             var theme  = $('#'+id).children('td[data-target=theme]').text();
            var pref_venue  = $('#'+id).children('td[data-target=pref_venue]').text();
            var guests_no  = $('#'+id).children('td[data-target=guests_no]').text();


            $('#name').val(name);
            $('#pref_date').val(pref_date);
            $('#pref_event').val(pref_event);
            $('#title').val(title);
            $('#pref_time').val(pref_time);
            $('#packagetype').val(packagetype);
            $('#theme').val(theme);
            $('#pref_venue').val(pref_venue);
            $('#guests_no').val(guests_no);
            $('#userId').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
          var id  = $('#userId').val(); 
        
            var name  = $('#name').val();
            var pref_date  = $('#pref_date').val();
            var pref_event  = $('#pref_event').val();
            var title  = $('#title').val();
            var pref_time  = $('#pref_time').val();
            var packagetype  = $('#packagetype').val();
            var theme  = $('#theme').val();
            var pref_venue  = $('#pref_venue').val();
            var guests_no  = $('#guests_no').val();
            var addons  = $('#addons').val();
            var payment_total  = $('#payment_total').val();


          $.ajax({
              url      : 'updatebook.php',
              method   : 'post', 
              data     : {name : name , pref_date: pref_date , pref_event : pref_event , title : title , pref_time: pref_time , packagetype : packagetype , theme : theme , pref_venue: pref_venue , guests_no : guests_no , addons : addons , payment_total: payment_total , id: id},
              success  : function(response){
                            // now update user record in table 
                      $('#'+id).children('td[data-target=name]').text(name);
                      $('#'+id).children('td[data-target=pref_date]').text(pref_date);
                      $('#'+id).children('td[data-target=pref_event]').text(pref_event);
                      $('#'+id).children('td[data-target=title]').text(title);
                      $('#'+id).children('td[data-target=pref_time]').text(pref_time);
                      $('#'+id).children('td[data-target=packagetype]').text(packagetype);
                      $('#'+id).children('td[data-target=theme]').text(theme);
                      $('#'+id).children('td[data-target=pref_venue]').text(pref_venue);
                      $('#'+id).children('td[data-target=guests_no]').text(guests_no);
                      $('#'+id).children('td[data-target=addons]').text(addons);
                      $('#'+id).children('td[data-target=payment_total]').text(payment_total);
                      $('#myModal').modal('toggle'); 

                         }
          });
       });
  });
</script>

</html>

