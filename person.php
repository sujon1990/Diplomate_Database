<?php

session_start();

if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must login first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['zonee']);
    header("location: login.php");
}
?>

<?php include 'db.php';?>
<div style="background-color: #CCFFFF">
    <?php include 'header.php';?>

    <div id="footer">
        <h4>
            <a href="dataentry.php"> BACK | </a>
            <a href="index.php">Home</a>

        </h4>
    </div>
    <br>
    <br>

    <div >

<html>
<head>
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="boots/district.min.js"></script>
    <link rel="stylesheet" href="jquery-ui.css">

</head>
</html>
    <div >

       <h3 align="center"  >Add Personal Profile</h3>

        <div align="center" style="font-family: 'Times New Roman', sans-serif;">
            <form method="post" action="getPerson.php" enctype="multipart/form-data">
                <table align="center">

                    <div style="width: 20%; >
                        <?php if (!empty($msg)): ?>
                                <div class="alert <?php echo $msg_class ?>" role="alert">
                                    <?php echo $msg; ?>
                                </div>
                            <?php endif; ?>
                            <div style="width: 225px;" class="container">
                            <div class="form-group text-center" style="position: relative;" >
                            <span class="img-div">
                            <div class="text-center img-placeholder"  onClick="triggerClick()"> <h3>Upload Here</h3></div>
                            <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
                            </span>
                                <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                                <label>Person Image</label>
                            </div>
                            </div>

                    </div>
                    <tr>
                        <th><label>1. Type of Organization</label></th>
                        <td> <strong>: </strong>
                            <select name="infotype" required>
                                <option value="">Select</option>
                                <option value="Embassy">Embassy</option>
                                <option value="Inetrnational Organization">Inetrnational Organization</option>
                                <option value="Honorary Consuls">Honorary Consuls</option>
                                <option value="Non-Resident DA MA">Non-Resident DA MA</option>
                                <option value="Non-Resident Ambassador">Non-Resident Ambassador</option>
                            </select>
                        </td>
                     </tr>

                       <tr>
                        <td><br></td>
                    </tr>

                     <tr>
                        <th><label>2.  Name of Organization</label></th>
                        <td><strong>: </strong><input type="text" name="oname" value=""  size="50"></td>
                    </tr>

                      <tr>
                        <td><br></td>
                    </tr>

                      <tr>
                        <th><label>3.  Country</label></th>
                        <td><strong>: </strong>
                            <select name="country">
                                <option value="">Select</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote Divoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="European Union">European Union</option>
                                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See Vatican City State">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea Democratic Peoples Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea Republic of">Korea, Republic of</option>
                                <option value="Kosovo">Kosovo</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao Peoples Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands British">Virgin Islands, British</option>
                                <option value="Virgin Islands US">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                 
                            </select>
                        </td>
                    </tr>

                      <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><label>4. Name of Individual</label></th>
                        <td><strong>: </strong><input type="text" name="name" value=""  required size="50"></td>
                    </tr>

                      <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>5. Employee Type</label></th>
                        <td><strong>: </strong>
                             <select name="emptype" required>
                                <option value="">Select</option>
                                <option value="Local">Local</option>
                                <option value="Foreign">Foreign</option>
                            </select>
                        </td>
                    </tr>

                      <tr>
                        <td><br></td>
                    </tr>


                     <tr>
                        <th> <label>6. Designation</label></th>
                        <td><strong>: </strong>
                            <input list="xx" name="designation" />
                             <datalist id="xx">
                                <option value="">Select</option>
                                <option value="Ambassador">Ambassador</option>
                                <option value="HC">HC</option>
                                <option value="DA/MA">DA/MA</option>
                                <option value="DDA/ADA">DDA/ADA</option>
                                <option value="Others">Others</option>

                            </datalist>
                        </td>
                    </tr>

                      <tr>
                        <td><br></td>
                    </tr>

                    
                    <tr>
                        <th> <label>7. Date of Assuming Appointment</label></th>
                        <td><strong>: </strong><input type="text" name="dateapp" value="" placeholder="yyyy/mm/dd" size="50"  id="dateapp"></td> 
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>8. Appointment</label></th>
                        <td><strong>: </strong><input type="text" name="appt" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>


                    <tr>
                        <th> <label>9. BD Entry Date</label></th>
                        <td><strong>: </strong><input type="text" name="bdentry" value=""  placeholder="yyyy/mm/dd" size="50" id="bdentry"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>
                    

                    <tr>
                        <th> <label>10 . Departure Date</label></th>
                        <td><strong>: </strong><input type="text" name="dep" value="" placeholder="yyyy/mm/dd"  size="50" id="dep"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>


                    <tr>
                        <th> <label>11. Status</label></th>
                        <td><strong>: </strong>
                             <select name="status">
                                <option value="">Select</option>
                                <option value="Diplomat">Diplomat</option>
                                <option value="Non Diplomat">Non Diplomat</option>
                                <option value="Dependent">Dependent</option>
                                <option value="Other">Other</option>
                            </select>
                        </td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>


                     <tr>
                        <th><label>12.  Nationality</label></th>
                        <td><strong>: </strong>
                            <select name="nationality">
                                <option value="">Select</option>
                                <option value="afghan">Afghan</option>
                                <option value="albanian">Albanian</option>
                                <option value="algerian">Algerian</option>
                                <option value="american">American</option>
                                <option value="andorran">Andorran</option>
                                <option value="angolan">Angolan</option>
                                <option value="antiguans">Antiguans</option>
                                <option value="argentinean">Argentinean</option>
                                <option value="armenian">Armenian</option>
                                <option value="australian">Australian</option>
                                <option value="austrian">Austrian</option>
                                <option value="azerbaijani">Azerbaijani</option>
                                <option value="bahamian">Bahamian</option>
                                <option value="bahraini">Bahraini</option>
                                <option value="bangladeshi">Bangladeshi</option>
                                <option value="barbadian">Barbadian</option>
                                <option value="barbudans">Barbudans</option>
                                <option value="batswana">Batswana</option>
                                <option value="belarusian">Belarusian</option>
                                <option value="belgian">Belgian</option>
                                <option value="belizean">Belizean</option>
                                <option value="beninese">Beninese</option>
                                <option value="bhutanese">Bhutanese</option>
                                <option value="bolivian">Bolivian</option>
                                <option value="bosnian">Bosnian</option>
                                <option value="brazilian">Brazilian</option>
                                <option value="british">British</option>
                                <option value="bruneian">Bruneian</option>
                                <option value="bulgarian">Bulgarian</option>
                                <option value="burkinabe">Burkinabe</option>
                                <option value="burmese">Burmese</option>
                                <option value="burundian">Burundian</option>
                                <option value="cambodian">Cambodian</option>
                                <option value="cameroonian">Cameroonian</option>
                                <option value="canadian">Canadian</option>
                                <option value="cape verdean">Cape Verdean</option>
                                <option value="central african">Central African</option>
                                <option value="chadian">Chadian</option>
                                <option value="chilean">Chilean</option>
                                <option value="chinese">Chinese</option>
                                <option value="colombian">Colombian</option>
                                <option value="comoran">Comoran</option>
                                <option value="congolese">Congolese</option>
                                <option value="costa rican">Costa Rican</option>
                                <option value="croatian">Croatian</option>
                                <option value="cuban">Cuban</option>
                                <option value="cypriot">Cypriot</option>
                                <option value="czech">Czech</option>
                                <option value="danish">Danish</option>
                                <option value="djibouti">Djibouti</option>
                                <option value="dominican">Dominican</option>
                                <option value="dutch">Dutch</option>
                                <option value="east timorese">East Timorese</option>
                                <option value="ecuadorean">Ecuadorean</option>
                                <option value="egyptian">Egyptian</option>
                                <option value="emirian">Emirian</option>
                                <option value="equatorial guinean">Equatorial Guinean</option>
                                <option value="eritrean">Eritrean</option>
                                <option value="estonian">Estonian</option>
                                <option value="ethiopian">Ethiopian</option>
                                <option value="European Union">European Union</option>
                                <option value="fijian">Fijian</option>
                                <option value="filipino">Filipino</option>
                                <option value="finnish">Finnish</option>
                                <option value="french">French</option>
                                <option value="gabonese">Gabonese</option>
                                <option value="gambian">Gambian</option>
                                <option value="georgian">Georgian</option>
                                <option value="german">German</option>
                                <option value="ghanaian">Ghanaian</option>
                                <option value="greek">Greek</option>
                                <option value="grenadian">Grenadian</option>
                                <option value="guatemalan">Guatemalan</option>
                                <option value="guinea bissauan">Guinea-Bissauan</option>
                                <option value="guinean">Guinean</option>
                                <option value="guyanese">Guyanese</option>
                                <option value="haitian">Haitian</option>
                                <option value="herzegovinian">Herzegovinian</option>
                                <option value="honduran">Honduran</option>
                                <option value="hungarian">Hungarian</option>
                                <option value="icelander">Icelander</option>
                                <option value="indian">Indian</option>
                                <option value="indonesian">Indonesian</option>
                                <option value="iranian">Iranian</option>
                                <option value="iraqi">Iraqi</option>
                                <option value="irish">Irish</option>
                                <option value="israeli">Israeli</option>
                                <option value="italian">Italian</option>
                                <option value="ivorian">Ivorian</option>
                                <option value="jamaican">Jamaican</option>
                                <option value="japanese">Japanese</option>
                                <option value="jordanian">Jordanian</option>
                                <option value="kazakhstani">Kazakhstani</option>
                                <option value="kenyan">Kenyan</option>
                                <option value="kittian and nevisian">Kittian and Nevisian</option>
                                <option value="Kosovan">Kosovan</option>
                                <option value="kuwaiti">Kuwaiti</option>
                                <option value="kyrgyz">Kyrgyz</option>
                                <option value="laotian">Laotian</option>
                                <option value="latvian">Latvian</option>
                                <option value="lebanese">Lebanese</option>
                                <option value="liberian">Liberian</option>
                                <option value="libyan">Libyan</option>
                                <option value="liechtensteiner">Liechtensteiner</option>
                                <option value="lithuanian">Lithuanian</option>
                                <option value="luxembourger">Luxembourger</option>
                                <option value="macedonian">Macedonian</option>
                                <option value="malagasy">Malagasy</option>
                                <option value="malawian">Malawian</option>
                                <option value="malaysian">Malaysian</option>
                                <option value="maldivan">Maldivan</option>
                                <option value="malian">Malian</option>
                                <option value="maltese">Maltese</option>
                                <option value="marshallese">Marshallese</option>
                                <option value="mauritanian">Mauritanian</option>
                                <option value="mauritian">Mauritian</option>
                                <option value="mexican">Mexican</option>
                                <option value="micronesian">Micronesian</option>
                                <option value="moldovan">Moldovan</option>
                                <option value="monacan">Monacan</option>
                                <option value="mongolian">Mongolian</option>
                                <option value="moroccan">Moroccan</option>
                                <option value="mosotho">Mosotho</option>
                                <option value="motswana">Motswana</option>
                                <option value="mozambican">Mozambican</option>
                                <option value="namibian">Namibian</option>
                                <option value="nauruan">Nauruan</option>
                                <option value="nepalese">Nepalese</option>
                                <option value="new zealander">New Zealander</option>
                                <option value="ni vanuatu">Ni-Vanuatu</option>
                                <option value="nicaraguan">Nicaraguan</option>
                                <option value="nigerien">Nigerien</option>
                                <option value="north korean">North Korean</option>
                                <option value="northern irish">Northern Irish</option>
                                <option value="norwegian">Norwegian</option>
                                <option value="omani">Omani</option>
                                <option value="pakistani">Pakistani</option>
                                <option value="palauan">Palauan</option>
                                <option value="panamanian">Panamanian</option>
                                <option value="papua new guinean">Papua New Guinean</option>
                                <option value="paraguayan">Paraguayan</option>
                                <option value="peruvian">Peruvian</option>
                                <option value="polish">Polish</option>
                                <option value="portuguese">Portuguese</option>
                                <option value="qatari">Qatari</option>
                                <option value="romanian">Romanian</option>
                                <option value="russian">Russian</option>
                                <option value="rwandan">Rwandan</option>
                                <option value="saint lucian">Saint Lucian</option>
                                <option value="salvadoran">Salvadoran</option>
                                <option value="samoan">Samoan</option>
                                <option value="san marinese">San Marinese</option>
                                <option value="sao tomean">Sao Tomean</option>
                                <option value="saudi">Saudi</option>
                                <option value="scottish">Scottish</option>
                                <option value="senegalese">Senegalese</option>
                                <option value="serbian">Serbian</option>
                                <option value="seychellois">Seychellois</option>
                                <option value="sierra leonean">Sierra Leonean</option>
                                <option value="singaporean">Singaporean</option>
                                <option value="slovakian">Slovakian</option>
                                <option value="slovenian">Slovenian</option>
                                <option value="solomon islander">Solomon Islander</option>
                                <option value="somali">Somali</option>
                                <option value="south african">South African</option>
                                <option value="south korean">South Korean</option>
                                <option value="spanish">Spanish</option>
                                <option value="sri lankan">Sri Lankan</option>
                                <option value="sudanese">Sudanese</option>
                                <option value="surinamer">Surinamer</option>
                                <option value="swazi">Swazi</option>
                                <option value="swedish">Swedish</option>
                                <option value="swiss">Swiss</option>
                                <option value="syrian">Syrian</option>
                                <option value="taiwanese">Taiwanese</option>
                                <option value="tajik">Tajik</option>
                                <option value="tanzanian">Tanzanian</option>
                                <option value="thai">Thai</option>
                                <option value="togolese">Togolese</option>
                                <option value="tongan">Tongan</option>
                                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                <option value="tunisian">Tunisian</option>
                                <option value="turkish">Turkish</option>
                                <option value="tuvaluan">Tuvaluan</option>
                                <option value="ugandan">Ugandan</option>
                                <option value="ukrainian">Ukrainian</option>
                                <option value="uruguayan">Uruguayan</option>
                                <option value="uzbekistani">Uzbekistani</option>
                                <option value="vatican">vatican</option>
                                <option value="venezuelan">Venezuelan</option>
                                <option value="vietnamese">Vietnamese</option>
                                <option value="welsh">Welsh</option>
                                <option value="yemenite">Yemenite</option>
                                <option value="zambian">Zambian</option>
                                <option value="zimbabwean">Zimbabwean</option>
                 
                            </select>
                        </td>
                    </tr>

                      <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>13. NID/SSN</label></th>
                        <td><strong>: </strong><input type="text" name="nid" value=""   size="50"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>


                    <tr>
                        <th> <label>14. Date of Birth</label></th>
                        <td><strong>: </strong><input type="text" name="dob" value=""  placeholder="yyyy/mm/dd" size="50" id="dob"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>


                    <tr>
                        <th> <label>15. Place of Birth</label></th>
                        <td><strong>: </strong><input type="text" name="pob" value=""   size="50"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>


                    <tr>
                        <th> <label>16. Religion</label></th>
                        <td><strong>: </strong>
                             <select name="religion">
                                <option value="">Select</option>
                                <option value="Islam">Islam</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Sikhism">Sikhism</option>
                                <option value="Jewish">Jewish</option>
                                <option value="Folk religion">Folk religion</option>
                                <option value="Atheist">Atheist</option>
                                <option value="Other">Other</option>
                 
                            </select>
                        </td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>



                    <tr>
                        <th> <label>17. Passport No</label></th>
                        <td><strong>: </strong><input type="text" name="passno" value=""   size="50"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>18. Passport Type</label></th>
                        <td><strong>: </strong><input type="text" name="passtype" value=""   size="50"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>



                    
                    

                    <tr>
                        <th> <label>19. Office Address</label></th>
                        <td><textarea  name="Oadd"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><div style="padding-left: 52px">District</div></th>
                        <td><strong>: </strong><input type="text" name="Oplot" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><div style="padding-left: 52px">Police Station</div></th>
                        <td><strong>: </strong><input type="text" name="Oroad" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><div  style="padding-left: 52px"> Post Code</div></th>
                        <td><strong>: </strong><input type="text" name="Ops" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
                    

                    <tr>
                        <th> <label>20. Residence Address</label></th>
                        <td><strong>: </strong><textarea  name="radd"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
        
                    <tr>
                        <th><div style="padding-left: 52px">District</div></th>
                        <td><strong>: </strong><input type="text" name="Rplot" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><div style="padding-left: 52px">Police Station</div></th>
                        <td><strong>: </strong><input type="text" name="Rroad" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><div  style="padding-left: 52px"> Post Code</div></th>
                        <td><strong>: </strong><input type="text" name="Rps" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
                    
 
                     <tr>
                        <th> <label>21. Contact Details :</label></th>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><div style="padding-left: 52px">(a) Phone Number</div></th>
                        <td><strong>: </strong><input type="text" name="phonenum" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><div style="padding-left: 52px">(b) Fax Number</div></th>
                        <td><strong>: </strong><input type="text" name="fax" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><div  style="padding-left: 52px">(c) E-mail</div></th>
                        <td><strong>: </strong><input type="email" name="email" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><div style="padding-left: 52px">(d) Web Address</div></th>
                        <td><strong>: </strong><input type="text" name="webadd" value=""   size="50"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>
 
                     <tr>
                        <th> <label>22. Family Information :</label></th>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td><br></td>
                    </tr>
                    
                            <tr>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Passport Number</th>
                                <th style="text-align: center;">Relationship</th>
                            </tr>

                              <tr>
                        <td><br></td>
                    </tr>
        
                            
                    <tr>
                        <td style="padding-left: 52px;padding-right:20px"><input type="text" name="spouse" placeholder="Name" value=""   size="40"></td>
                        <td><input type="text" name="kids" placeholder="Passport Number" value=""   size="50"></td>
                        <td style="padding-left: 20px">
                             <select name="relation">
                                <option value="">Relation Type</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Siblings">Siblings</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Other">Other</option>
                 
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>


                    <tr>
                        <td style="padding-left: 52px;padding-right:20px"><input type="text" name="spouse2" placeholder="Name" value=""   size="40"></td>
                        <td><input type="text" name="kids2" placeholder="Passport Number" value=""   size="50"></td>
                        <td style="padding-left: 20px">
                             <select name="relation2">
                                <option value="">Relation Type</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Siblings">Siblings</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Other">Other</option>
                 
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 52px;padding-right:20px"><input type="text" name="spouse3" placeholder="Name" value=""   size="40"></td>
                        <td><input type="text" name="kids3" placeholder="Passport Number" value=""   size="50"></td>
                        <td style="padding-left: 20px">
                             <select name="relation3">
                                <option value="">Relation Type</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Siblings">Siblings</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Other">Other</option>
                 
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 52px;padding-right:20px"><input type="text" name="spouse4" placeholder="Name" value=""   size="40"></td>
                        <td><input type="text" name="kids4" placeholder="Passport Number" value=""   size="50"></td>
                        <td style="padding-left: 20px">
                             <select name="relation4">
                                <option value="">Relation Type</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Siblings">Siblings</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Other">Other</option>
                 
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 52px;padding-right:20px"><input type="text" name="spouse5" placeholder="Name" value=""   size="40"></td>
                        <td><input type="text" name="kids5" placeholder="Passport Number" value=""   size="50"></td>
                        <td style="padding-left: 20px">
                             <select name="relation5">
                                <option value="">Relation Type</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Siblings">Siblings</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Other">Other</option>
                 
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>23. Educational Qualification</label></th>
                        <td><input type="text" name="edu" value=""   size="50"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>24. Experience/Previous Posting</label></th>
                        <td><textarea  name="exp"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
        
                    <tr>
                        <th> <label>25. Hobby</label></th>
                        <td><textarea  name="hobby"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>26. Special Skills</label></th>
                        <td><textarea  name="spskills"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
 

                    <tr>
                        <th> <label>27. Intelligence Background (If any) </label></th>
                        <td><textarea  name="Intelligence"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    

                    <tr>
                        <th> <label>28. Remarks </label></th>
                        <td><textarea  name="remark"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>29. Other Info (If any) </label></th>
                        <td><textarea  name="other"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>


            
                     <input type="hidden" name="det" value="<?php echo $_SESSION['username']; ?>">  

                    <tr>
                        <td></td>
                        <td><input type="submit" name="save_profile" class="btn btn-success" value="Submit"></td>
                    </tr>
        <tr>
            <td>
                <h7>
                    <br>
                </h7>
            </td>
        </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<script src="boots/jquery1.min.js"></script>
<script src="boots/bootstrap.min.js"></script>
<script src="scripts.js"></script>
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<script>
    $(function () {
        $("#dateapp").datepicker({
            dateFormat: "yy-mm-dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            //gotoCurrent: true,
        });
    });
</script>
<script>
    $(function () {
        $("#bdentry").datepicker({
            dateFormat: "yy-mm-dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            //gotoCurrent: true,
        });
    });
</script>
<script>
    $(function () {
        $("#dep").datepicker({
            dateFormat: "yy-mm-dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            //gotoCurrent: true,
        });
    });
</script>
<script>
    $(function () {
        $("#dob").datepicker({
            dateFormat: "yy-mm-dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            //gotoCurrent: true,
        });
    });
</script>

<?php include 'footer.php';?>
