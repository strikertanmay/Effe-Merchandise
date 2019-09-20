<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Effervescence 2018 Merchandise">
  <meta name="author" content="Aproksha 2018">
  <title>Effervescence 2019 Merchandise orders</title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://effe.org.in/merchandise/css/dosis-font.css' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" type="image/x-icon" href="../imgages/logo.png">
  <link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css" />

</head>

<body id="page-top" data-spy="scroll" data-target=".side-menu">
      <a href="https://effe.org.in" style="text-decoration: none;color: black;"><i class="fa fa-arrow-left" aria-hidden="true" style="color: black; font-size: 25px;padding-left: 1%;padding-top: 1%;padding-bottom: 1%;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size: 20px;font-weight: 400;">BACK</b></a>
      <div class="container-fluid">
        <div class="row hero-header" id="home">
          <div class="col-md-12">
          <a href="https://effe.org.in"><img src="../images/logo.png" id="effe-logo" class="logo img-circle img responsive"></a>
            <h1>Effervescence'19 | Merchandise Orders</h1>
            <h3> Cultural fest of IIITA</h3>
            <!-- <h4>16<sup>th</sup> to 18<sup>th</sup>  March, 2018</h4> -->
          </div>
          <!-- <div class="col-md-5">
            <img src="../../img/frag.png" class="rocket animated bounce">
          </div> -->
        </div>
      </div>

      <div class="row me-row">
          <div style="text-align:center">
          <h4> Samples and Size Chart (Click to zoom) </h4>
</div>
          <div class="col-md-12" style="margin-top:1em; text-align:center;">
            <img src="../images/3.jpg" class="img-responsive" style="height:30em;" id="myImg1">
            <br>
            <span>Type A (Red)</span>
          </div>
          <div class="col-md-12" style="margin-top:1em; text-align:center;">
            <img src="../images/5.jpg" class="img-responsive" style="height:30em;" id="myImg2">
            <br>
            <span>Type B (Grey)</span>
          </div>
        </div>
        <div class="row me-row">
          <div class="col-md-12" style="margin-top:1em; text-align:center;">
            <img src="../images/7.jpg" class="img-responsive" style="height:30em;" id="myImg">
            <br>
            <span>Type C (Black)</span>
          </div>
        </div>
        <div class="row me-row">
          <div class="col-md-6 col-md-offset-3" style="margin-top:1em;">
            <img src="../images/size-chart.jpeg" class="img-responsive" style="height:20em;" id="myImg4">
          </div>
        </div>
        <!-- The Modal -->
        <div id="myModal" class="modal">
          <img class="modal-content" id="img01">
        </div>

        <div class="row me-row content-ct">
          <div class="col-md-12" style="margin-top:1em;">
            <button class="btn btn-lg btn-success btn-disabled" onclick="return false;">Payment Options<i class="fa fa-angle-double-down" aria-hidden="true" style="padding-left:0.6em;"></i>
            </button>
          </div>
        </div>
<div class="container">
        <div class="row me-row content-ct">
          <div class="col-md-4" style="margin-top:1em;">
            <img src="../images/Lpaytm.png" class="img-responsive" style="height:400px;" id="">
            <h3> Paytm </h3>
          </div>
          <div class="col-md-4" style="margin-top:1em;">
            <img src="../images/Lgpay.png" class="img-responsive" style="height:400px;" id="">
            <h3> Gpay </h3>
          </div>
          <div class="col-md-4" style="margin-top:1em;">
            <img src="../images/cash-pay.jpg" class="img-responsive" style="height:400px;" id="">
            <h3> Pay in Cash</h3>
          </div>
        </div>

        <h3>Price Chart</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Quantity</th>
              <th>Price (in Rs.)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Type A (Red)</td>
              <td><i class="fa fa-rupee" aria-hidden="true" style="padding-right:0.6em;"></i>350/-</td>
            </tr>
            <tr>
              <td>Type B (Grey)</td>
              <td><i class="fa fa-rupee" aria-hidden="true" style="padding-right:0.6em;"></i>350/-</td>
            </tr>
            <tr>
              <td>Type C (Black)</td>
              <td><i class="fa fa-rupee" aria-hidden="true" style="padding-right:0.6em;"></i>350/-</td>
            </tr>
            <!-- <tr>
              <td>Combo (Color A + Color B) Same size</td>
              <td><i class="fa fa-rupee" aria-hidden="true" style="padding-right:0.6em;"></i>650/-</td>
            </tr> -->
          </tbody>
        </table>
</div>

        <hr style="border-width:4px;">

        <div class="row me-row content-ct">
          <div class="col-md-12" style="margin-top:1em;">
            <a href="check.php" class="btn btn-lg btn-yellow">Check your status<i class="fa fa-binoculars" aria-hidden="true" style="padding-left:0.6em;"></i></a>
          </div>
        </div>

        <div class="col-md-12 contact-form">
            <h2 class="content-ct" style="font-weight:bold; margin-bottom:1em;"><span class="ti-email"></span> Order Here</h2>
            <div class="text-center" style="margin-top=2em;">
              <h6>Fields marked with * are compulsory.</h6>
            </div> 
            <div class="alert alert-info col-sm-12" id="info" style="margin-bottom:1em; 
            <?php if(isset($_SESSION['confirm'])){echo("display:block;");} else {echo("display:none;");} ?> ">
              <?php if(isset($_SESSION['confirm'])){echo("{$_SESSION['confirm']}"); unset($_SESSION['confirm']);} ?>
            </div>

            <form class="form-horizontal" data-toggle="validator" action="submit.php" role="form" method="post" name="f">
              <div class="form-group">
                <label for="uname" class="col-sm-2 control-label">Name<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Your Name" value="" required>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <label for="uemail" class="col-sm-2 control-label">Email<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="uemail" name="uemail" placeholder="Your Email (We will send a email to this)" value="" required>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <label for="hostel" class="col-sm-2 control-label">Hostel Number<sup>*</sup></label>
                <div class="col-sm-9">
                  <select class="form-control" id="hostel" name="hostel" required>
                    <option value="BH1">BH1</option>
                    <option value="BH2">BH2</option>
                    <option value="BH3">BH3</option>
                    <option value="BH4">BH4</option>
                    <option value="BH5">BH5</option>
                    <option value="GH1">GH1</option>
                    <option value="GH2">GH2</option>
                    <option value="GH3">GH3</option>
                    <option value="Not Applicable">Not Applicable</option>
                    <option value="Research Scholar Apts">Research Scholar Apts</option>
                  </select>
                </div>
              </div>
              <div class="form-group" id="placediv">
                <label for="place" class="col-sm-2 control-label">Place<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="place" name="place" placeholder="Place" value="" required>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <label for="room" class="col-sm-2 control-label">Room No.<sup><span id="roomreq"></span></sup></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="room" name="room" placeholder="Room No." value="" required>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <label for="mobile" class="col-sm-2 control-label">Mobile<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="tel" pattern="[0-9]{10}" class="form-control" id="mobile" name="mobile" placeholder="xxxxxxxx" value="" data-error="Please enter a 10 digit mobile number" required>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <label for="ttype" class="col-sm-2 control-label">T-Shirt Type<sup>*</sup></label>
                <div class="col-sm-9">
                  <select class="form-control" id="ttype" name="ttype">
                    <option value="A">Type A (Red)</option>
                    <option value="B">Type B (Grey)</option>
                    <option value="C">Type C (Black)</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="quantity" class="col-sm-2 control-label">Quantity<sup>*</sup></label>
                <div class="col-sm-9">
                  <select class="form-control" id="quantity" name="quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="tsize" class="col-sm-2 control-label">T-Shirt Size<sup>*</sup></label>
                <div class="col-sm-9">
                  <select class="form-control" id="tsize" name="tsize">
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="amount" class="col-sm-2 control-label">Amount to pay<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount in Rs." value="" required readonly="readonly">
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <label for="tranvia" class="col-sm-2 control-label">Paying Via<sup>*</sup></label>
                <div class="col-sm-9">
                  <select class="form-control" id="tranvia" name="tranvia">
                    <option value="Paytm">Paytm</option>
                    <option value="Gpay">Gpay</option>
                    <option value="Cash">Cash</option>
                  </select>
                </div>
              </div>
              <div class="form-group" id="traniddiv">
                <label for="tranid" class="col-sm-2 control-label">Transaction ID<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="tranid" name="tranid" placeholder="Transaction ID here" value="" required>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <!-- <div class="form-group" id="datetime">
                  <label for="paidon" class="col-sm-2 control-label">Paid On<sup>*</sup></label>
                  <div class="col-sm-9">
                    <div class='input-group date' id='datetimepicker1'>
                      <input id="paidon" type='text' name="paidon" class="form-control"/>
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                    <div class="help-block with-errors pull-right"></div>
                    <span class="form-control-feedback" aria-hidden="true"></span>
                  </div>
              </div> -->
                
              <div class="text-center" style="margin-top=2em;">
                <h6> Make sure you have paid amount specified in amount field in case you opted for payments via Paytm or Gpay. </h6>
              </div>  
              <div class="form-group">
                <div class="col-sm-12" style="text-align:center; margin-top:1em;">
                  <button type="submit" id="submit" name="sub" class="btn btn-yellow">Submit<i class="fa fa-paper-plane" aria-hidden="true" style="padding-left:0.6em;"></i></button>
                </div>
              </div>
            </form>
          </div>
          <div class="container">
            <div class="row me-row">
              <div class="col-md-12 text-left" style="margin-top:1em;">
              <h2 class="text-center" class="margin-bottom:2em;"> Instructions: </h2>
              <ul>
                <li style="list-style-type: disc;"> In case you choose to pay via Gpay or PayTm. Make payment to QR code given via <b>Gpay</b> or <b>Paytm</b> UPI services only. </li>
                <li style="list-style-type: disc;"> For faster review of your payment do not forget to mention your <b>Email ID</b> and other poosible details with the transaction message </li>
                <li style="list-style-type: disc;"> Once your payment via Gpay or PayTm is confirmed note your transaction number and keep it with you. </li>
                <li style="list-style-type: disc;"> If you choose to pay via cash. A volunteer will come to you to collect the amount. </li>                
                <li style="list-style-type: disc;"> Fill merchandise form and mention your <b>transaction ID (For Gpay and Paytm only)</b> and and <b>Payment method</b>. </li>
                <li style="list-style-type: disc;"> Submit the form and you are done.</li>
                <li style="list-style-type: disc;"> Once your payment is confirmed you can view the same on check you status page. (For payments via Gpay and paytm only) </li>
                <li style="list-style-type: disc;"> If you face any problems feel free to ask any person mentioned below. </li>
              </ul>
          </div>
        </div>
        </div>


      </div>

      <!-- <div class="container-fluid tickets" id="tickets">
        <div class="row me-row content-ct">
          <h2 class="row-title">Buy Tickets</h2>
          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <h3>Early Bird Ticket</h3>
            <p class="price">$399</p>
            <p>All days entry pass for all the events.</p>
            <a href="#" class="btn btn-lg btn-red">Buy <small>(6 remaining)</small></a>
          </div>
          <div class="col-md-4 col-sm-6">
            <h3>Workshop Pass</h3>
            <p class="price">$199</p>
            <p>Entry pass for each workshop</p>
            <a href="#" class="btn btn-lg btn-red">Buy <small>(42 remaining)</small></a>
          </div>
        </div>
      </div> -->

      <div class="container-fluid footer">
        <div class="col-sm-12" style="text-align:center; margin-top:1em; margin-bottom:0.5em;">
          <h2>Contact info: </h2>
        </div>
        <div class="row contact">
          <div class="col-md-6 contact-form">
            <h4> For website issues:</h3>
              <hr>
              <p> Tanmay Mittal </p>
              <p> iec2017017@iiita.ac.in </p>
              <p><i class="fa fa-phone" aria-hidden="true" style="padding-right:5px;"></i>+91-8755853305</p>
          </div>
          <div class="col-md-6 contact-form" style="text-align:right;">
            <h4> For merchandise issues:</h3>
              <hr>
              <p>Lalit Sharma</p>
              <p> iec2017025@iiita.ac.in </p>
              <p><i class="fa fa-phone" aria-hidden="true" style="padding-right:5px;"></i>+91- 9079341534</p>
          </div>
        </div>
        <div class="row footer-credit">
          <div class="col-md-6 col-sm-6">
            <p>&copy; 2019, <a href="https://effe.org.in">Effervescence</a></p>
          </div>
          <div class="col-md-6 col-sm-6"> 
            <ul class="footer-menu">
            <li><a href="https://www.facebook.com/effervescence.iiita/" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/goeffervescence" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true" style="padding-left:0.4em;"></i></a></li>
            <li><a href="https://www.instagram.com/goeffervescence/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true" style="padding-left:0.4em;"></i></a></li>
            <li><a href="https://www.youtube.com/user/effervescenceMM13/" target="_blank"><i class="fa fa-youtube fa-2x" aria-hidden="true" style="padding-left:0.4em;"></i></a></li>
          </ul>
          </div>
        </div>
      </div>

      <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="script1.js"></script>
      <script src="../js/jquery.easing.min.js"></script>
      <script src="../js/scrolling-nav.js"></script>
      <script src="../js/validator.js"></script>
      <script type="text/javascript" src="../js/moment.min.js"></script>
      <script type="text/javascript" src="../js/bootstrap-datetimepicker.min.js"></script>
     
    </body>
    </html>