<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/profile/includes/sidebar.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	
	session_start();
	if (!isset($_SESSION["USER"])) {
		header("Location: {$ROOT}/login/index.php");
	} else {
		$db = DB_CreateDefault();
		$db->connect();
		$email = $_SESSION["USER"];
		$alias = DB_GetUserAliasByEmail($db, $email);
		$db->disconnect();
	} 
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
	PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'profile.css') );
 ?>
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>
<body>
	<div class="container-fluid">
		<?php PrintNavbar("profile", $ROOT); ?>
	</div>
	<div id="wrapper" class="container">
		<?php PrintSidebar("update", $ROOT); ?>
		<div id="page-content-wrapper">
			<div class="well">
				<form role="form">
					<div class="row">
						<div class="page-header">
							<?php echo "<h3>Update {$alias}'s Account:</h3></br>"; ?>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label for="alias-profile"><p>Profile Name:</p></label>
								<input type="text" class="form-control" id="alias-profile" title="Change Profile Name" placeholder="Change Name">
							</div>
							<br />
							<div class="form-group">
								<label for="password-profile"><p>New Password:</p></label>
								<input type="text" class="form-control" id="password-profile" title="Change Profile Password" placeholder="Change Password">
								<br />
								<label for="password-profile"><p>Re-Enter Password:</p></label>
								<input type="text" class="form-control" id="password-profile" title="Re-Enter Password" placeholder="Re-Enter Password">
							</div>
							<br />
							<div class="form-group">
								<label for="email-profile"><p>Change Email:</p></label>
								<input type="email" class="form-control" id="email-profile" title="Change Profile Email" placeholder="Change Email">
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label for="fname-profile"><p>First Name:</p></label>
								<input type="text" class="form-control" id="fname-profile" title="Enter First Name" placeholder="First Name">
							</div>
							<br />
							<div class="form-group">
								<label for="lname-profile"><p>Last Name:</p></label>
								<input type="text" class="form-control" id="lname-profile" title="Enter Last Name" placeholder="Last Name">
							</div>
							<div class="form-group">
								<label for="location-profile"><p>Location:</p></label>
								<input type="text" class="form-control" id="location-profile" title="Enter Location" placeholder="City, State, Province, Country">
							</div>
							<div class="form-group">
								<label for="comment-profile">Comment:</label>
								<textarea class="form-control" rows="1" id="comment-profile"></textarea>
							</div>
						</div>
					</div>
					</br>
					<div class="well">
						<div class="page-header">
							<h3>Games Played with MPC:</h3>
						</div>
						<small>Use Checkboxes to Share Alias</small>
						</br>
						<small>X = Enable Setting</small>
						<div class="row">
							<div class="col-xs-6">
								<div class="checkbox-inline">
									<label><input type="checkbox" name="sc2hot-profile"><p>Starcraft 2 Heart of the Swarm</p></label>
								</div>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Character Code">
								</div>
								<div class="checkbox-inline">
									<label><input type="checkbox" name="wow-profile"><p>World of WarCraft</p></label>
								</div>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Character Code">
								</div>
								<div class="checkbox-inline">
									<label><input type="checkbox" name="hearthstone-profile"><p>Hearth Stone</p></label>
								</div>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Character Code">
								</div>
								</br>
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Steam</span>
									<input type="text" class="form-control" placeholder="Steam Name" aria-describedby="sizing-addon2">
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Battle.net</span>
									<input type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2">
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Origin</span>
									<input type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="checkbox-inline">
									<label><input type="checkbox" name="csgo-profile"><p>Counter Strike Global Offensive</p></label>
								</div>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Character Code">
								</div>
								<div class="checkbox-inline">
									<label><input type="checkbox" name="herosofthestorm-profile"><p>Heroes of the Storm</p></label>
								</div>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Character Code">
								</div>
								<div class="checkbox-inline">
									<label><input type="checkbox" name="leagueoflegends-profile"><p>League of Legends</p></label>
								</div>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Character Code">
								</div>
								<div class="checkbox-inline">
									<label><input type="checkbox" name="mgsvonline-profile" disabled><p>Metal Gear Solid V: Multiplayer</p></label>
								</div>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Character Code">
								</div>
							</div>
						</div>
					</div>
					</br>
					<div class="well">
						<div class="page-header">
							<h3>Preference Settings</h3>
						</div>
						<small>X = enable Setting</small>
						<div class="row">
							<div class="col-xs-6">
								<div class="checkbox">
									<label><input type="checkbox" name="display-email-profile"><p>Share Email</p></label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" name="display-games-profile"><p>Share Games</p></label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" name="display-location-profile"><p>Share Location</p></label>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="checkbox">
									<label><input type="checkbox" name="display-gametag-profile"><p>Share In-Game Character Codes/Alias</p></label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" name="display-gametag-profile"><p>Share Steam/Battle.net/Origin Accounts</p></label>
								</div>
							</div>
						</div>
					</div>
				</form>
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