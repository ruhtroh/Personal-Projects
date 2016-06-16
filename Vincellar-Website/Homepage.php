<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Images/vincellar-logo.jpg">

    <title>Vincellar: Your wine, your way</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/Homepage.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/90a6cb053e.js"></script>
  </head>
  <!-- NAVBAR
================================================== -->

  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img class="Logo" src="Images/vincellar-logo.jpg">
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class="navbar navbar-left">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="file:///Users/jhitchcock/Desktop/Personal-Projects/Vincellar-Website/Overview.html">Overview</a></li>
              <li><a href="https://www.vinfolio.com/">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Helpful Links <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Tutorials</a></li>
                  <li><a href="http://vinfolio.com/">Vinfolio.com</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <ul class="nav navbar-nav">
            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
            </form>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin Home Feature Page -->

    <div class="container fill">
      <div class="row row-centered">
        <div class="col-md-8 col-centered">
          <div class="centerblock">
            <h1 class="VinCellar-heading"> VinCellar: The ultimate wine cellar management tool.</h1>
            <ul class="fa-ul bullits">
              <li class="VinCellar-coreValue-1"><i class="fa-li fa fa-line-chart"></i> Comprehensive cellar management tools & analysis
              </li>
              <li class="VinCellar-coreValue-2"><i class="fa-li fa fa-bar-chart"></i> Cellar Management, Professional Content, Dedicated Marketplace
              </li>
              <li class="VinCellar-coreValue-3"><i class="fa-li fa fa-dollar"></i> Completely free
              </li>
            </ul>
          </div>
          <img class="VinCellarLogo" src="Images/Wine-Cellar-2.jpg" width="100%">
        </div>
        <div class="col-md-4">
          <h1 class="Signup-section"> Sign Up</h1>
          <p class="Sub-Signup-section">Join the fun!</p>
          <div class="panel-body">
            <form class="form-horizontal" action="" method="post">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-4">
                  <input name="username" class="form-control" placeholder="How others see you">
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-4">
                  <input name="firstName" class="form-control" placeholder="First Name">
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-4">
                  <input name="lastName" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <label for="gmail" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon">example@mail.com</span>
                    <input name="email" class="form-control" placeholder="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-4">
                  <input name="password" class="form-control" placeholder="**********">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Confirm password
                </label>
                <div class="col-sm-4">
                  <input name="passwordConfirm" class="form-control" placeholder="**********">
                </div>
              </div>
              <div class="form-group">
                <label for="Country" class="col-sm-2 control-label">Country</label>
                <div class="col-sm-4">
                  <select class="form-control" name="country">
                    <option value="None"></option>
                    <option value="US">United States</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo (Brazzaville)</option>
                    <option value="CD">Congo (Kinshasa)</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Cote d&#39;Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Lands</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard and McDonald Islands</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, North</option>
                    <option value="KR">Korea, South</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau</option>
                    <option value="MK">Macedonia</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestine</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="CS">Serbia and Montenegro</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and South Sandwich Islands</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen Islands</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syria</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VA">Vatican City</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.S.</option>
                    <option value="WF">Wallis and Futuna Islands</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                  <div class="checkbox">
                    <label>
                      <input name="accept" type="checkbox" value="on">I accept the <a href="http://www.vinfolio.com/about/terms">terms</a> and confirm I am at least 21 years of age
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                  <input name="submit" type="submit" class="btn btn-success btn-sm">
                </div>
              </div>
            </form>
          </div>
          <!-- End Panel Body -->
        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- end container fill -->



    <!-- End Home Feautre Page -->

    <!-- START THE FEATURETTES -->

    <div class="row featurette top">
      <div class="col-md-7">
        <h2 class="featurette-heading"><i class="fa fa-group fa-1x"></i> Who are we </h2>
        <p class="lead">Vinfolio is your trusted partner in fine wine. Created by passionate collectors with decades of experience, Vinfolio fully understands and embraces the needs of the wine aficionado.</p>
        <p><a class="btn btn-lg btn-primary" href="https://www.vinfolio.com/about/company" role="button">Learn More</a></p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" src="Images/WineCellars.jpg" alt="Generic placeholder image">
      </div>
    </div>


    <section class="Overview">
      <h2 class="section-header transparent">Have A Wine Expert Organize Your Home Collection</h2>
    </section>


    <div class="row featurette middle">
      <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading"> <i class="fa fa-glass fa-1x"></i> VinCellar gives you <span class="text-muted">options</span></h2>
        <p class="lead">Now you can make more informed buying, selling and "when-to-drink" decisions because you'll know exactly what you have and where you have it. You can trust that your inventory will be fast and accurate.</p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" src="Images/WineCellars.jpg" alt="Generic placeholder image">
      </div>
    </div>

    <div class="row featurette bottom">
      <div class="col-md-7">
        <h2 class="featurette-heading"><i class="fa fa-smile-o fa-1x"></i> We care about our <span class="text-muted">clients</span></h2>
        <p class="lead">We understand that fine wine needs to be treated seriously and we handle your collection with great care from purchase through storage and delivery. Additionally, Vinfolio's Marketplace is the first and only platform available for collector-to-collector
          wine sales.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" src="Images/WineCellars.jpg" alt="Generic placeholder image">
      </div>
    </div>

    <section class="Overview">
      <h2 class="section-header transparent"> Hear what the pros say about us</h2>
    </section>

    <div class="row featurette middle">
      <div class="col-md-7 col-md-push-5">
        <p class="lead"><i class="fa fa-quote-left fa-2x"></i> I use VinCellar to manage my collection across two locations. Vinfolio adds my new purchases, which greatly simplifies my life. And I love the easy access to valuation data. I highly recommend VinCellar to
          any collector." - Allen Meadows, <a href="http://www.burghound.com/">Burghound.com</a></p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" src="Images/Burghound.gif" alt="Generic placeholder image">
      </div>
    </div>

    <div class="row featurette bottom">
      <div class="col-md-7">
        <p class="lead">"…the most sophisticated and complete wine cellar management tool in the world…<i class="fa fa-quote-right fa-1x"></i> Tom Wark, <a href="http://fermentationwineblog.com/">Fermentation</a></p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" src="http://fermentation-com.wpengine.netdna-cdn.com/wp-content/themes/Fermentation/images/warks-fermentation.jpeg" alt="Generic placeholder image">
      </div>
    </div>

    <section class="Overview">
      <h2 class="section-header transparent">Our cellars services team can help manage your home wine storage solution, whether it be 500 or 5,000 bottles.</h2>
    </section>

    <div class="row featurette bottom">
      <div class="col-md-7 Register">
        <h2 class="featurette-heading Register">Join Today!</span></h2>
        <p><a class="btn btn-lg btn-primary" href="Register.html" role="button">Register</a></p>
      </div>
    </div>

    <!-- /END THE FEATURETTES -->

    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class=navbar-header>
            <ul class="nav navbar-nav">
              <li><a href="https://www.vinfolio.com/about/company"><small>ABOUT US</small></a></li>
              <li><a href="https://www.vinfolio.com/about/privateClient"><small>PRIVATE CLIENT</small></a></li>
              <li><a href="https://www.vinfolio.com/about/inspectionGuidelines"><small>INSPECTION GUIDELINES</small></a></li>
              <li><a href="https://www.vinfolio.com/about/purchaseGuarantees"><small>PURCHASE GUARANTEES</small></a></li>
              <li><a href="https://www.vinfolio.com/about/privacy"><small>PRIVACY POLICY</small></a></li>
              <li><a href="https://www.vinfolio.com/about/terms"><small>TERMS</small></a></li>
              <li><a href="https://www.vinfolio.com/about/shippingAndDelivery"><small>SHIPPING</small></a></li>
            </ul>
          </div>

          <div class="navbar-header" style="width:50%">
            <div class="navbar-text">
              <h5>PAYMENT TYPES</h5>
              <p>
                <img alt="" src="Images/cc-visa.gif" />&nbsp;&nbsp;<img alt="" src="Images/cc-mastercard.gif" />&nbsp;&nbsp;<img alt="" src="Images/cc-amex.gif" />
              </p>
              <div class="AuthorizeNetSeal">
                <script type="text/javascript">
                  // <![CDATA[
                  var ANS_customer_id = "1bbc5685-894c-4903-8c31-2362914ace6d";
                  // ]]>

                </script>
              </div>
            </div>
          </div>
          <div class="navbar-header">
            <div class="navbar-text navbar-right">
              <h5>CONTACT</h5>
              <small>
                Corporate Office: 1890 Bryant St, Ste 208, San Francisco, CA 94110 800.969.1961<br/>
                Office Hours: Monday to Friday 9 a.m - 5 p.m. Pacific Time<br/><br/>
                Napa Warehouse: 644 Hanna Dr, Ste E American Canyon, CA 94503<br/>
                Warehouse Hours: Monday to Friday 8:30 a.m - 4:30 p.m. Pacific Time<br/>

                Email: service@vinfolio.com<br/>
              </small>
              <h5>Other Vinfolio Sites</h5>
              <a href="http://www.wineprices.com"><small>WINEPRICES</small></a> &nbsp;&nbsp;|&nbsp;&nbsp;

              <a href="https://www.vinfolio.com/do/winestore/home?b=hk"><small>HONG KONG</small></a>
            </div>
          </div>
          <!-- END navbar-header -->
        </div>
        <!-- END col-xs-12 -->
      </div>
      <!-- END row -->
    </div>
    <!-- END container -->

    <!-- FOOTER -->
    <footer>
      <p>&copy; 2004-2016 Vinfolio &middot; <a href="https://www.vinfolio.com/about/privacy">Privacy</a> &middot; <a href="https://www.vinfolio.com/about/terms">Terms</a></p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="js/jquery-1.12.4.min.js"><\/script>')

    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>