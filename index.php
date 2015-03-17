<?php
	/* The ROOT should be specified on ALL pages. We don't seem to have
		access to know what the ROOT folder is by conventional PHP (due to server situation).
		
		For single-nested folders, ".." is the root. For double-nested, "../..", and so on. */
	$ROOT = '.';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);

	session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Miacro Power Clan - MPC Gaming.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
<?php
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>
<body>
	<div class="container-fluid">	
		<?php PrintNavbar("index", $ROOT); ?>		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<img src="pics/mpclogo.png" class="img-responsive" alt="mpclogo.png" />			
			</div>
			<div class="col-md-4">
				<div class="well well-sm">
					<div class="page-header text-center">
						<h1 style="color: #000000">
							Website Under Construction
						</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div id="spend_filter" class="btn-group">
					<a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-filter"></i>
							Filter By
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" data-country="US">
						<li value="AF" name="AF">Afghanistan</li>
						<li value="AL" name="AL">Albania</li>
						<li value="DZ" name="DZ">Algeria</li>
						<li value="AS" name="AS">American Samoa</li>
						<li value="AD" name="AD">Andorra</li>
						<li value="AO" name="AO">Angola</li>
						<li value="AI" name="AI">Anguilla</li>
						<li value="AQ" name="AQ">Antarctica</li>
						<li value="AG" name="AG">Antigua and Barbuda</li>
						<li value="AR" name="AR">Argentina</li>
						<li value="AM" name="AM">Armenia</li>
						<li value="AW" name="AW">Aruba</li>
						<li value="AU">Australia</li>
						<li value="AT">Austria</li>
						<li value="AZ">Azerbaijan</li>
						<li value="BH">Bahrain</li>
						<li value="BD">Bangladesh</li>
						<li value="BB">Barbados</li>
						<li value="BY">Belarus</li>
						<li value="BE">Belgium</li>
						<li value="BZ">Belize</li>
						<li value="BJ">Benin</li>
						<li value="BM">Bermuda</li>
						<li value="BT">Bhutan</li>
						<li value="BO">Bolivia</li>
						<li value="BA">Bosnia and Herzegovina</li>
						<li value="BW">Botswana</li>
						<li value="BV">Bouvet Island</li>
						<li value="BR">Brazil</li>
						<li value="IO">British Indian Ocean Territory</li>
						<li value="VG">British Virgin Islands</li>
						<li value="BN">Brunei</li>
						<li value="BG">Bulgaria</li>
						<li value="BF">Burkina Faso</li>
						<li value="BI">Burundi</li>
						<li value="CI">Côte d'Ivoire</li>
						<li value="KH">Cambodia</li>
						<li value="CM">Cameroon</li>
						<li value="CA">Canada</li>
						<li value="CV">Cape Verde</li>
						<li value="KY">Cayman Islands</li>
						<li value="CF">Central African Republic</li>
						<li value="TD">Chad</li>
						<li value="CL">Chile</li>
						<li value="CN">China</li>
						<li value="CX">Christmas Island</li>
						<li value="CC">Cocos (Keeling) Islands</li>
						<li value="CO">Colombia</li>
						<li value="KM">Comoros</li>
						<li value="CG">Congo</li>
						<li value="CK">Cook Islands</li>
						<li value="CR">Costa Rica</li>
						<li value="HR">Croatia</li>
						<li value="CU">Cuba</li>
						<li value="CY">Cyprus</li>
						<li value="CZ">Czech Republic</li>
						<li value="CD">Democratic Republic of the Congo</li>
						<li value="DK">Denmark</li>
						<li value="DJ">Djibouti</li>
						<li value="DM">Dominica</li>
						<li value="DO">Dominican Republic</li>
						<li value="TP">East Timor</li>
						<li value="EC">Ecuador</li>
						<li value="EG">Egypt</li>
						<li value="SV">El Salvador</li>
						<li value="GQ">Equatorial Guinea</li>
						<li value="ER">Eritrea</li>
						<li value="EE">Estonia</li>
						<li value="ET">Ethiopia</li>
						<li value="FO">Faeroe Islands</li>
						<li value="FK">Falkland Islands</li>
						<li value="FJ">Fiji</li>
						<li value="FI">Finland</li>
						<li value="MK">Former Yugoslav Republic of Macedonia</li>
						<li value="FR">France</li>
						<li value="FX">France, Metropolitan</li>
						<li value="GF">French Guiana</li>
						<li value="PF">French Polynesia</li>
						<li value="TF">French Southern Territories</li>
						<li value="GA">Gabon</li>
						<li value="GE">Georgia</li>
						<li value="DE">Germany</li>
						<li value="GH">Ghana</li>
						<li value="GI">Gibraltar</li>
						<li value="GR">Greece</li>
						<li value="GL">Greenland</li>
						<li value="GD">Grenada</li>
						<li value="GP">Guadeloupe</li>
						<li value="GU">Guam</li>
						<li value="GT">Guatemala</li>
						<li value="GN">Guinea</li>
						<li value="GW">Guinea-Bissau</li>
						<li value="GY">Guyana</li>
						<li value="HT">Haiti</li>
						<li value="HM">Heard and Mc Donald Islands</li>
						<li value="HN">Honduras</li>
						<li value="HK">Hong Kong</li>
						<li value="HU">Hungary</li>
						<li value="IS">Iceland</li>
						<li value="IN">India</li>
						<li value="ID">Indonesia</li>
						<li value="IR">Iran</li>
						<li value="IQ">Iraq</li>
						<li value="IE">Ireland</li>
						<li value="IL">Israel</li>
						<li value="IT">Italy</li>
						<li value="JM">Jamaica</li>
						<li value="JP">Japan</li>
						<li value="JO">Jordan</li>
						<li value="KZ">Kazakhstan</li>
						<li value="KE">Kenya</li>
						<li value="KI">Kiribati</li>
						<li value="KW">Kuwait</li>
						<li value="KG">Kyrgyzstan</li>
						<li value="LA">Laos</li>
						<li value="LV">Latvia</li>
						<li value="LB">Lebanon</li>
						<li value="LS">Lesotho</li>
						<li value="LR">Liberia</li>
						<li value="LY">Libya</li>
						<li value="LI">Liechtenstein</li>
						<li value="LT">Lithuania</li>
						<li value="LU">Luxembourg</li>
						<li value="MO">Macau</li>
						<li value="MG">Madagascar</li>
						<li value="MW">Malawi</li>
						<li value="MY">Malaysia</li>
						<li value="MV">Maldives</li>
						<li value="ML">Mali</li>
						<li value="MT">Malta</li>
						<li value="MH">Marshall Islands</li>
						<li value="MQ">Martinique</li>
						<li value="MR">Mauritania</li>
						<li value="MU">Mauritius</li>
						<li value="YT">Mayotte</li>
						<li value="MX">Mexico</li>
						<li value="FM">Micronesia</li>
						<li value="MD">Moldova</li>
						<li value="MC">Monaco</li>
						<li value="MN">Mongolia</li>
						<li value="ME">Montenegro</li>
						<li value="MS">Montserrat</li>
						<li value="MA">Morocco</li>
						<li value="MZ">Mozambique</li>
						<li value="MM">Myanmar</li>
						<li value="NA">Namibia</li>
						<li value="NR">Nauru</li>
						<li value="NP">Nepal</li>
						<li value="NL">Netherlands</li>
						<li value="AN">Netherlands Antilles</li>
						<li value="NC">New Caledonia</li>
						<li value="NZ">New Zealand</li>
						<li value="NI">Nicaragua</li>
						<li value="NE">Niger</li>
						<li value="NG">Nigeria</li>
						<li value="NU">Niue</li>
						<li value="NF">Norfolk Island</li>
						<li value="KP">North Korea</li>
						<li value="MP">Northern Marianas</li>
						<li value="NO">Norway</li>
						<li value="OM">Oman</li>
						<li value="PK">Pakistan</li>
						<li value="PW">Palau</li>
						<li value="PS">Palestine</li>
						<li value="PA">Panama</li>
						<li value="PG">Papua New Guinea</li>
						<li value="PY">Paraguay</li>
						<li value="PE">Peru</li>
						<li value="PH">Philippines</li>
						<li value="PN">Pitcairn Islands</li>
						<li value="PL">Poland</li>
						<li value="PT">Portugal</li>
						<li value="PR">Puerto Rico</li>
						<li value="QA">Qatar</li>
						<li value="RE">Reunion</li>
						<li value="RO">Romania</li>
						<li value="RU">Russia</li>
						<li value="RW">Rwanda</li>
						<li value="ST">São Tomé and Príncipe</li>
						<li value="SH">Saint Helena</li>
						<li value="PM">St. Pierre and Miquelon</li>
						<li value="KN">Saint Kitts and Nevis</li>
						<li value="LC">Saint Lucia</li>
						<li value="VC">Saint Vincent and the Grenadines</li>
						<li value="WS">Samoa</li>
						<li value="SM">San Marino</li>
						<li value="SA">Saudi Arabia</li>
						<li value="SN">Senegal</li>
						<li value="RS">Serbia</li>
						<li value="SC">Seychelles</li>
						<li value="SL">Sierra Leone</li>
						<li value="SG">Singapore</li>
						<li value="SK">Slovakia</li>
						<li value="SI">Slovenia</li>
						<li value="SB">Solomon Islands</li>
						<li value="SO">Somalia</li>
						<li value="ZA">South Africa</li>
						<li value="GS">South Georgia and the South Sandwich Islands</li>
						<li value="KR">South Korea</li>
						<li value="ES">Spain</li>
						<li value="LK">Sri Lanka</li>
						<li value="SD">Sudan</li>
						<li value="SR">Suriname</li>
						<li value="SJ">Svalbard and Jan Mayen Islands</li>
						<li value="SZ">Swaziland</li>
						<li value="SE">Sweden</li>
						<li value="CH">Switzerland</li>
						<li value="SY">Syria</li>
						<li value="TW">Taiwan</li>
						<li value="TJ">Tajikistan</li>
						<li value="TZ">Tanzania</li>
						<li value="TH">Thailand</li>
						<li value="BS">The Bahamas</li>
						<li value="GM">The Gambia</li>
						<li value="TG">Togo</li>
						<li value="TK">Tokelau</li>
						<li value="TO">Tonga</li>
						<li value="TT">Trinidad and Tobago</li>
						<li value="TN">Tunisia</li>
						<li value="TR">Turkey</li>
						<li value="TM">Turkmenistan</li>
						<li value="TC">Turks and Caicos Islands</li>
						<li value="TV">Tuvalu</li>
						<li value="VI">US Virgin Islands</li>
						<li value="UG">Uganda</li>
						<li value="UA">Ukraine</li>
						<li value="AE">United Arab Emirates</li>
						<li value="GB">United Kingdom</li>
						<li value="US">United States</li>
						<li value="UM">United States Minor Outlying Islands</li>
						<li value="UY">Uruguay</li>
						<li value="UZ">Uzbekistan</li>
						<li value="VU">Vanuatu</li>
						<li value="VA">Vatican City</li>
						<li value="VE">Venezuela</li>
						<li value="VN">Vietnam</li>
						<li value="WF">Wallis and Futuna Islands</li>
						<li value="EH">Western Sahara</li>
						<li value="YE">Yemen</li>
						<li value="ZM">Zambia</li>
						<li value="ZW">Zimbabwe</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>

</html>
