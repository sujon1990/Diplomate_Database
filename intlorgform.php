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
            <a href="dataentry.php">Back |</a> 
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

       <h3 align="center"  >Add Intl. Organization Info</h3>

        <div align="center" style="font-family: 'arial';">
            <form method="post" action="getintorgform.php" enctype="multipart/form-data">
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
                            <img src="images/intorg.jpg" onClick="triggerClick()" id="profileDisplay">
                            </span>
                                <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                                <label>Intl. Organization</label>
                            </div>
                            </div>

                    </div>

                    <tr>
                        <th><label>1. Name of the Organization</label></th>
                        <td><strong>: </strong><input type="text" name="oname" value=""  required size="50"></td>
                    </tr>

                                       <tr>
                        <td><br></td>
                    </tr>

                      <tr>
                        <th><label>2. Country</label></th>
                        <td><strong>: </strong>
                            <select name="country"   >
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
                        <th><label>3. Name of Organization Head</label></th>
                        <td><strong>: </strong><input type="text" name="name" value=""  required size="50"></td>
                    </tr>

                      <tr>
                        <td><br></td>
                    </tr>


                      <tr>
                        <td><br></td>
                    </tr>

                    
                    <tr>
                        <th> <label>4. Starting Date</label></th>
                        <td><strong>: </strong><input type="text" name="sdate" value="" placeholder="mm/dd/yyyy" size="50"  id="dateapp"></td> 
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>

                   
                        <th> <label>5. Location</label></th>
                        <td>&nbsp &nbsp<textarea  name="location"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

         

                    <tr>
                        <th><div style="padding-left: 52px">Police Station</div></th>
                        <td><strong>: </strong><input type="text" name="Lroad" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><div  style="padding-left: 52px"> Post Code</div></th>
                        <td><strong>: </strong><input type="text" name="Lps" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th><div style="padding-left: 52px">District</div></th>
                        <td><strong>: </strong><input type="text" name="Lplot" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    
 
                     <tr>
                        <th> <label>6. Contact Details</label></th>
                        <td> </td>
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
                        <th> <label>6. Number of Diplomats</label></th>
                        <td><strong> : </strong><input type="text" name="noe" value=""   size="50"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>7. Number of Non-Diplomats</label></th>
                        <td><strong> : </strong><input type="text" name="sumlocalempembassy" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>8.Total Number of Foreign staffs</label></th>
                        <td><strong> : </strong><input type="text" name="sumforeignempembassy" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
        
                    <tr>
                        <th> <label>9.Number of Local staffs</label></th>
                        <td><strong> : </strong><input type="text" name="sumlocalemployee" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
        
                    <tr>
                        <th> <label>9. Branch</label></th>
                        <td>&nbsp &nbsp<textarea  name="branch"    rows="4" cols="50" ></textarea></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    

                    <tr>
                        <th> <label>10. Remarks</label></th>
                        <td>&nbsp &nbsp<textarea  name="remark"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>11. Other Info (If any)</label></th>
                        <td>&nbsp &nbsp<textarea  name="other"    rows="4" cols="50" ></textarea></td>
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
            dateFormat: "mm/dd/yy",
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