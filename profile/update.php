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
 ?>
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>
<body>
	<div class="container-fluid">
		<?php PrintNavbar("profile", $ROOT); ?>
	</div>
	<div class="container">
		<div id="wrapper">
			<?php PrintSidebar("update", $ROOT); ?>
			<div id="page-content-wrapper">
				<div class="well">
					<ul class="nav nav-tabs" data-tabs="tabs">
						<li class="active"><a href="#profile-account" data-toggle="tab">Account</a></li>
						<li><a href="#profile-public" data-toggle="tab">Public Information</a></li>
						<li><a href="#profile-prefs" data-toggle="tab">Preferences</a></li>
					</ul>
						
					<div class="tab-content">
						<div id="profile-account" class="tab-pane active">
							<div class="page-header">
								<h1>Account Information</h1>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label for="alias-profile"><p>Profile Name (Alias):</p></label>
										<input type="text" class="form-control" id="alias-profile" title="Change Profile Name" placeholder="Change Name">
									</div>
									<div class="form-group">
										<label for="password-profile"><p>New Password:</p></label>
										<input type="text" class="form-control" id="password-profile" title="Change Profile Password" placeholder="Change Password">
										<label for="password-profile"><p>Re-Enter Password:</p></label>
										<input type="text" class="form-control" id="password-profile" title="Re-Enter Password" placeholder="Re-Enter Password">
									</div>
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
									<div class="form-group">
										<label for="lname-profile"><p>Last Name:</p></label>
										<input type="text" class="form-control" id="lname-profile" title="Enter Last Name" placeholder="Last Name">
									</div>
									<div class="form-group">
										<label for="location-profile"><p>Location:</p></label>
										<input type="text" class="form-control" id="location-profile" title="Enter Location" placeholder="City, State, Province, Country">
				
										<div class="btn-group">
											<a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
												<i class="icon-filter"></i>
													Filter By
												<span class="caret"></span>
											</a>
											<select class="dropdown-menu" role="menu" data-country="US">
												<option value="AF" name="AF">Afghanistan</option>
												<option value="AL" name="AL">Albania</option>
												<option value="DZ" name="DZ">Algeria</option>
												<option value="AS" name="AS">American Samoa</option>
												<option value="AD" name="AD">Andorra</option>
												<option value="AO" name="AO">Angola</option>
												<option value="AI" name="AI">Anguilla</option>
												<option value="AQ" name="AQ">Antarctica</option>
												<option value="AG" name="AG">Antigua and Barbuda</option>
												<option value="AR" name="AR">Argentina</option>
												<option value="AM" name="AM">Armenia</option>
												<option value="AW" name="AW">Aruba</option>
												<option value="AU">Australia</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
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
												<option value="VG">British Virgin Islands</option>
												<option value="BN">Brunei</option>
												<option value="BG">Bulgaria</option>
												<option value="BF">Burkina Faso</option>
												<option value="BI">Burundi</option>
												<option value="CI">Côte d'Ivoire</option>
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
												<option value="CG">Congo</option>
												<option value="CK">Cook Islands</option>
												<option value="CR">Costa Rica</option>
												<option value="HR">Croatia</option>
												<option value="CU">Cuba</option>
												<option value="CY">Cyprus</option>
												<option value="CZ">Czech Republic</option>
												<option value="CD">Democratic Republic of the Congo</option>
												<option value="DK">Denmark</option>
												<option value="DJ">Djibouti</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="TP">East Timor</option>
												<option value="EC">Ecuador</option>
												<option value="EG">Egypt</option>
												<option value="SV">El Salvador</option>
												<option value="GQ">Equatorial Guinea</option>
												<option value="ER">Eritrea</option>
												<option value="EE">Estonia</option>
												<option value="ET">Ethiopia</option>
												<option value="FO">Faeroe Islands</option>
												<option value="FK">Falkland Islands</option>
												<option value="FJ">Fiji</option>
												<option value="FI">Finland</option>
												<option value="MK">Former Yugoslav Republic of Macedonia</option>
												<option value="FR">France</option>
												<option value="FX">France, Metropolitan</option>
												<option value="GF">French Guiana</option>
												<option value="PF">French Polynesia</option>
												<option value="TF">French Southern Territories</option>
												<option value="GA">Gabon</option>
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
												<option value="HM">Heard and Mc Donald Islands</option>
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
												<option value="ME">Montenegro</option>
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
												<option value="KP">North Korea</option>
												<option value="MP">Northern Marianas</option>
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
												<option value="PN">Pitcairn Islands</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="PR">Puerto Rico</option>
												<option value="QA">Qatar</option>
												<option value="RE">Reunion</option>
												<option value="RO">Romania</option>
												<option value="RU">Russia</option>
												<option value="RW">Rwanda</option>
												<option value="ST">São Tomé and Príncipe</option>
												<option value="SH">Saint Helena</option>
												<option value="PM">St. Pierre and Miquelon</option>
												<option value="KN">Saint Kitts and Nevis</option>
												<option value="LC">Saint Lucia</option>
												<option value="VC">Saint Vincent and the Grenadines</option>
												<option value="WS">Samoa</option>
												<option value="SM">San Marino</option>
												<option value="SA">Saudi Arabia</option>
												<option value="SN">Senegal</option>
												<option value="RS">Serbia</option>
												<option value="SC">Seychelles</option>
												<option value="SL">Sierra Leone</option>
												<option value="SG">Singapore</option>
												<option value="SK">Slovakia</option>
												<option value="SI">Slovenia</option>
												<option value="SB">Solomon Islands</option>
												<option value="SO">Somalia</option>
												<option value="ZA">South Africa</option>
												<option value="GS">South Georgia and the South Sandwich Islands</option>
												<option value="KR">South Korea</option>
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
												<option value="BS">The Bahamas</option>
												<option value="GM">The Gambia</option>
												<option value="TG">Togo</option>
												<option value="TK">Tokelau</option>
												<option value="TO">Tonga</option>
												<option value="TT">Trinidad and Tobago</option>
												<option value="TN">Tunisia</option>
												<option value="TR">Turkey</option>
												<option value="TM">Turkmenistan</option>
												<option value="TC">Turks and Caicos Islands</option>
												<option value="TV">Tuvalu</option>
												<option value="VI">US Virgin Islands</option>
												<option value="UG">Uganda</option>
												<option value="UA">Ukraine</option>
												<option value="AE">United Arab Emirates</option>
												<option value="GB">United Kingdom</option>
												<option value="US">United States</option>
												<option value="UM">United States Minor Outlying Islands</option>
												<option value="UY">Uruguay</option>
												<option value="UZ">Uzbekistan</option>
												<option value="VU">Vanuatu</option>
												<option value="VA">Vatican City</option>
												<option value="VE">Venezuela</option>
												<option value="VN">Vietnam</option>
												<option value="WF">Wallis and Futuna Islands</option>
												<option value="EH">Western Sahara</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row" style="width:80%">			
								<div class="col-md-9 col-md-offset-3">
									<div class="form-group">
										<label for="comment-profile"><p>Comments:</p></label>
										<textarea style="max-width: 100%;" class="form-control" rows="3" id="profile-comments"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div id="profile-public" class="tab-pane">
							<div class="page-header">
								<h1>Public Information</h1>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="input-group">
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="sc2hot-profile">Starcraft 2 Heart of the Swarm
											</label>
										</div>
										<input type="text" class="form-control" placeholder="Character Code">									
									</div>
									<div class="input-group">
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="wow-profile">World of WarCraft
											</label>
										</div>
										<input type="text" class="form-control" placeholder="Character Code">
									</div>
									<div class="input-group">
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="hearthstone-profile">Hearth Stone
											</label>
										</div>
										<input type="text" class="form-control" placeholder="Character Code">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="input-group">
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="csgo-profile">Counter Strike Global Offensive
											</label>
										</div>
										<input type="text" class="form-control" placeholder="Character Code">
									</div>
									<div class="input-group">
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="herosofthestorm-profile">Heroes of the Storm
											</label>
										</div>
										<input type="text" class="form-control" placeholder="Character Code">
									</div>
									<div class="input-group">									
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="leagueoflegends-profile">League of Legends
											</label>
										</div>
										<input type="text" class="form-control" placeholder="Character Code">
									</div>
									<div class="input-group">
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="mgsvonline-profile" disabled>Metal Gear Solid V: Multiplayer
											</label>
										</div>
										<input type="text" class="form-control" placeholder="Character Code">
									</div>
								</div>
							</div>
							</br>
							<div class="row" style="width:80%">
								<div class="col-xs-10 col-xs-offset-2">
									<div class="input-group">
										<span class="input-group-addon" style="width:100px;" id="sizing-addon2">Steam</span>
										<input type="text" class="form-control" placeholder="Steam Name" aria-describedby="sizing-addon2">
									</div>
									<div class="input-group">
										<span class="input-group-addon" style="width:100px;" id="sizing-addon2">Battle.net</span>
										<input type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2">
									</div>
									<div class="input-group">
										<span class="input-group-addon" style="width:100px;" id="sizing-addon2">Origin</span>
										<input type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2">
									</div>
								</div>
							</div>
						</div>
						<div id="profile-prefs" class="tab-pane">
							<div class="page-header">
								<h1>Preferences</h1>
							</div>
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
					</div>
						

				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>