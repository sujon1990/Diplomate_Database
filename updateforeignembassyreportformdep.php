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
<?php include 'header.php';?>
<?php

$id =  $_GET['id'];
$sql = "SELECT * FROM project.person where id = $id";

$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_array($result))
    {

        
        $infotype = $row["infotype"];
        $pp = $row["profile_image"];

        $oname = $row["oname"];
        $name = $row["name"];

        $country = $row["country"];

        $emptype = $row["emptype"];

        $designation = $row["designation"];



        $dep = $row["dep"];

        $dateapp = $row["dateapp"];

        $appt = $row["appt"];




        $status = $row["status"];

        $nationality = $row["nationality"];

        $nid = $row["nid"];




        $dob = $row["dob"];
        $nid = $row["nid"];

        $pob = $row["pob"];

        $religion = $row["religion"];

        $bdentry = $row["bdentry"];
        $passno = $row["passno"];
        $passtype = $row["passtype"];
        $radd = $row["radd"];
        // $Lplot = $row["Lplot"];
        // $Lroad = $row["Lroad"];
        // $Lps = $row["Lps"];

        $Oadd = $row["Oadd"];
        $Oplot = $row["Oplot"];
        $Oroad = $row["Oroad"];
        $Ops = $row["Ops"];
        $radd = $row["radd"];
        $Rplot = $row["Rplot"];
        $Rroad = $row["Rroad"];
        $Rps = $row["Rps"];
        $phonenum = $row["phonenum"];

        $fax = $row["fax"];
        $email = $row["email"];

        $webadd = $row["webadd"];

        $spouse = $row["spouse"];
        $kids = $row["kids"];
        $relation = $row["relation"];
        $spouse2 = $row["spouse2"];
        $kids2 = $row["kids2"];
        $relation2 = $row["relation2"];
        $spouse3 = $row["spouse3"];
        $kids3 = $row["kids3"];
        $relation3 = $row["relation3"];
        $spouse4 = $row["spouse4"];
        $kids4 = $row["kids4"];
        $relation4 = $row["relation4"];
        $spouse5 = $row["spouse5"];
        $kids5 = $row["kids5"];
        $relation5 = $row["relation5"];

        $depname = $row["depname"];
        $deppass = $row["deppass"];

        $edu = $row["edu"];
        $exp = $row["exp"];
        $hobby = $row["hobby"];


        $spskills = $row["spskills"];
        $Intelligence = $row["Intelligence"];
        $remark = $row["remark"];

        $other = $row["other"];
        $submit = $row["submit"];
    }

}
else
{
    echo 'Data Not Found';
}
?>



<html>
<head>
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="boots/district.min.js"></script>
    <link rel="stylesheet" href="jquery-ui.css"> 

</head>

<body>
<div style="background-color: #CCFFFF">
<div id="customers" align="center">
    <br><br>
    <h4 align="center" > <u>Personal Information </u></h4>




    <form method="post" action="updateforeignembassyreportdep.php" enctype="multipart/form-data" onsubmit="return confirm('Are You Sure to Update the Data?');">
        <table align="center">

            <tr>
                    <th colspan="2"><div align="center"><img src="<?php echo 'images/' . $pp ?>" width="150px" height="150px" alt="image not found"></div><div align="center"></div></th>
                </tr>
             <tr>
                        <th><label>1. Type of Organization  :</label></th>
                        <td> 
                            <select name="infotype"   >
                                <option value="<?php echo $infotype; ?>"><?php echo $infotype; ?></option>
                                <option value="Embassy">Embassy</option>
                                <option value="Inetrnational_Organization">Inetrnational Organization</option>
                                <option value="Honorary_Consuls">Honorary Consuls</option>
                                <option value="Non-Resident_DA_MA">Non-Resident DA MA</option>
                                <option value="Non-Resident_Ambassador">Non-Resident Ambassador</option>
                            </select>
                        </td>
                     </tr>

                       <tr>
                        <br>
                    </tr>

                     <tr>
                        <th><label>2.  Name of Organization  :</label></th>
                        <td><input type="text" name="oname" value="<?php echo $oname; ?>"  required size="50"></td>
                    </tr>

        

                      <tr>
                        <th><label>3.  Country :</label></th>
                        <td>
                            <select name="country">
                                <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                                 <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland_Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American_Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua_and_Barbuda">Antigua and Barbuda</option>
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
                                <option value="Bosnia_and_Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet_Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British_Indian_Ocean_Territory">British Indian Ocean Territory</option>
                                <option value="Brunei_Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina_Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape_Verde">Cape Verde</option>
                                <option value="Cayman_Islands">Cayman Islands</option>
                                <option value="Central_African_Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas_Island">Christmas Island</option>
                                <option value="Cocos_Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo_The_Democratic_Republic_of_The">Congo, The Democratic Republic of The</option>
                                <option value="Cook_Islands">Cook Islands</option>
                                <option value="Costa_Rica">Costa Rica</option>
                                <option value="Cote_Divoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech_Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican_Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El_Salvador">El Salvador</option>
                                <option value="Equatorial_Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland_Islands">Falkland Islands (Malvinas)</option>
                                <option value="Faroe_Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French_Guiana">French Guiana</option>
                                <option value="French_Polynesia">French Polynesia</option>
                                <option value="French_Southern_Territories">French Southern Territories</option>
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
                                <option value="Guinea_bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard_Island_and_Mcdonald_Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy_See_Vatican_City_State">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong_Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran_Islamic_Republic_of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle_of_Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea_Democratic_Peoples_Republic_of">Korea, Democratic People's Republic of</option>
                                <option value="Korea_Republic_of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao_Peoples_Democratic_Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan_Arab_Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia_The_Former_Yugoslav_Republic_of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall_Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia_Federated_States_of">Micronesia, Federated States of</option>
                                <option value="Moldova_Republic_of">Moldova, Republic of</option>
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
                                <option value="Netherlands_Antilles">Netherlands Antilles</option>
                                <option value="New_Caledonia">New Caledonia</option>
                                <option value="New_Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk_Island">Norfolk Island</option>
                                <option value="Northern_Mariana_Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian_Territory_Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua_New_Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto_Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian_Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint_Helena">Saint Helena</option>
                                <option value="Saint_Kitts_and_Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint_Lucia">Saint Lucia</option>
                                <option value="Saint_Pierre_and_Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint_Vincent_and_The_Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San_Marino">San Marino</option>
                                <option value="Sao_Tome_and_Principe">Sao Tome and Principe</option>
                                <option value="Saudi_Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra_Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon_Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South_Africa">South Africa</option>
                                <option value="South_Georgia_and_The_South_Sandwich_Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri_Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard_and_Jan_Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian_Arab_Republic">Syrian Arab Republic</option>
                                <option value="Taiwan_Province_of_China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania_United_Republic_of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor_leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad_and_Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks_and_Caicos_Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United_Arab_Emirates">United Arab Emirates</option>
                                <option value="United_Kingdom">United Kingdom</option>
                                <option value="United_States">United States</option>
                                <option value="United_States_Minor_Outlying_Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet_Nam">Viet Nam</option>
                                <option value="Virgin_Islands_British">Virgin Islands, British</option>
                                <option value="Virgin_Islands_US">Virgin Islands, U.S.</option>
                                <option value="Wallis_and_Futuna">Wallis and Futuna</option>
                                <option value="Western_Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                 
                            </select>
                        </td>
                    </tr>


                    <tr>
                        <th><label>4. Name of Individuals :</label></th>
                        <td><input type="text" name="name" value="<?php echo $name; ?>"  required size="50"></td>
                    </tr>


                    <tr>
                        <th> <label>5. Employee Type :</label></th>
                        <td>
                             <select name="emptype" >
                                <option value="<?php echo $emptype; ?>"><?php echo $emptype; ?></option>
                                <option value="Local">Local</option>
                                <option value="Foreign">Foreign</option>
                            </select>
                        </td>
                    </tr>

              

                    <tr>
                        <th> <label>6. Designation :</label></th>
                            <td><input type="text" name="designation" value="<?php echo $designation; ?>"  required size="50"></td>
                    </tr>

                  

                    <tr>
                        <th> <label>7. Date of Assuming Appointment :</label></th>
                        <td><input type="text" name="dateapp" value="<?php echo $dateapp; ?>"   size="50" id="dateapp" ></td>
                    </tr>



                    <tr>
                        <th> <label>8. Apptointment :</label></th>
                        <td><input type="text" name="appt" value="<?php echo $appt; ?>"   size="50"></td>
                    </tr>


                    <tr>
                        <th> <label>9. BD Entry Date :</label></th>
                        <td><input type="text" name="bdentry" value="<?php echo $bdentry; ?>"   size="50" id="bdentry"></td>
                    </tr>


                      
                    <tr>
                        <th> <label>10. Dep Det :</label></th>
                        <td><input type="text" name="dep" value="<?php echo $dep; ?>"   size="50" id="dep"></td>
                    </tr>


                    <tr>
                        <th> <label>11. Status :</label></th>
                        <td>
                             <select name="status">
                                <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                                <option value="Diplomat">Diplomat</option>
                                <option value="Non_Diplomat">Non Diplomat</option>
                                <option value="Other">Other</option>
                            </select>
                        </td>
                    </tr>



                     <tr>
                        <th><label>12.  Nationality :</label></th>
                        <td>
                            <select name="nationality" >
                                <option value="<?php echo $nationality; ?>"><?php echo $nationality; ?></option>
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
                                <option value="cape_verdean">Cape Verdean</option>
                                <option value="central_african">Central African</option>
                                <option value="chadian">Chadian</option>
                                <option value="chilean">Chilean</option>
                                <option value="chinese">Chinese</option>
                                <option value="colombian">Colombian</option>
                                <option value="comoran">Comoran</option>
                                <option value="congolese">Congolese</option>
                                <option value="costa_rican">Costa Rican</option>
                                <option value="croatian">Croatian</option>
                                <option value="cuban">Cuban</option>
                                <option value="cypriot">Cypriot</option>
                                <option value="czech">Czech</option>
                                <option value="danish">Danish</option>
                                <option value="djibouti">Djibouti</option>
                                <option value="dominican">Dominican</option>
                                <option value="dutch">Dutch</option>
                                <option value="east_timorese">East Timorese</option>
                                <option value="ecuadorean">Ecuadorean</option>
                                <option value="egyptian">Egyptian</option>
                                <option value="emirian">Emirian</option>
                                <option value="equatorial_guinean">Equatorial Guinean</option>
                                <option value="eritrean">Eritrean</option>
                                <option value="estonian">Estonian</option>
                                <option value="ethiopian">Ethiopian</option>
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
                                <option value="guinea_bissauan">Guinea-Bissauan</option>
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
                                <option value="kittian_and_nevisian">Kittian and Nevisian</option>
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
                                <option value="ni_vanuatu">Ni-Vanuatu</option>
                                <option value="nicaraguan">Nicaraguan</option>
                                <option value="nigerien">Nigerien</option>
                                <option value="north_korean">North Korean</option>
                                <option value="northern_irish">Northern Irish</option>
                                <option value="norwegian">Norwegian</option>
                                <option value="omani">Omani</option>
                                <option value="pakistani">Pakistani</option>
                                <option value="palauan">Palauan</option>
                                <option value="panamanian">Panamanian</option>
                                <option value="papua_new_guinean">Papua New Guinean</option>
                                <option value="paraguayan">Paraguayan</option>
                                <option value="peruvian">Peruvian</option>
                                <option value="polish">Polish</option>
                                <option value="portuguese">Portuguese</option>
                                <option value="qatari">Qatari</option>
                                <option value="romanian">Romanian</option>
                                <option value="russian">Russian</option>
                                <option value="rwandan">Rwandan</option>
                                <option value="saint_lucian">Saint Lucian</option>
                                <option value="salvadoran">Salvadoran</option>
                                <option value="samoan">Samoan</option>
                                <option value="san_marinese">San Marinese</option>
                                <option value="sao_tomean">Sao Tomean</option>
                                <option value="saudi">Saudi</option>
                                <option value="scottish">Scottish</option>
                                <option value="senegalese">Senegalese</option>
                                <option value="serbian">Serbian</option>
                                <option value="seychellois">Seychellois</option>
                                <option value="sierra_leonean">Sierra Leonean</option>
                                <option value="singaporean">Singaporean</option>
                                <option value="slovakian">Slovakian</option>
                                <option value="slovenian">Slovenian</option>
                                <option value="solomon_islander">Solomon Islander</option>
                                <option value="somali">Somali</option>
                                <option value="south_african">South African</option>
                                <option value="south_korean">South Korean</option>
                                <option value="spanish">Spanish</option>
                                <option value="sri_lankan">Sri Lankan</option>
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
                                <option value="trinidadian_or_tobagonian">Trinidadian or Tobagonian</option>
                                <option value="tunisian">Tunisian</option>
                                <option value="turkish">Turkish</option>
                                <option value="tuvaluan">Tuvaluan</option>
                                <option value="ugandan">Ugandan</option>
                                <option value="ukrainian">Ukrainian</option>
                                <option value="uruguayan">Uruguayan</option>
                                <option value="uzbekistani">Uzbekistani</option>
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
                        <th> <label>13. NID/SSN :</label></th>
                        <td><input type="text" name="nid" value="<?php echo $nid; ?>"   size="50"></td>
                    </tr>


                    <tr>
                        <th> <label>14. Date of Birth :</label></th>
                        <td><input type="text" name="dob" value="<?php echo $dob; ?>"   size="50" id="dob"></td>
                    </tr>


                    <tr>
                        <th> <label>15. Place of Birth :</label></th>
                        <td><input type="text" name="pob" value="<?php echo $pob; ?>"   size="50"></td>
                    </tr>


                    <tr>
                        <th> <label>16. Religion :</label></th>
                        <td>
                             <select name="religion" >
                                <option value="<?php echo $religion; ?>"><?php echo $religion; ?></option>
                                <option value="Islam">Islam</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Sikhism">Sikhism</option>
                                <option value="Jewish">Jewish</option>
                                <option value="Folk_religion">Folk religion</option>
                                <option value="Atheist">Atheist</option>
                                <option value="Other">Other</option>
                 
                            </select>
                        </td>
                    </tr>



                    <tr>
                        <th> <label>17. Passport No :</label></th>
                        <td><input type="text" name="passno" value="<?php echo $passno; ?>"   size="50"></td>
                    </tr>

                    <tr>
                        <th> <label>18. Passport Type :</label></th>
                        <td><input type="text" name="passtype" value="<?php echo $passtype; ?>"   size="50"></td>
                    </tr>


                    <!-- <tr>
                        <th> <label>19. Location :</label></th>
                        <td><textarea  name="location"    rows="4" cols="50" ><?php echo $radd; ?></textarea></td>
                    </tr>

                    <tr>
                        <th><div style="padding-left: 52px">District :</div></th>
                        <td><input type="text" name="Lplot" value="<?php echo $Lplot; ?>"   size="50"></td>
                    </tr>


                    <tr>
                        <th><div style="padding-left: 52px">Police Station :</div></th>
                        <td><input type="text" name="Lroad" value="<?php echo $Lroad; ?>"   size="50"></td>
                    </tr>


                    <tr>
                        <th><div  style="padding-left: 52px"> Post Code :</div></th>
                        <td><input type="text" name="Lps" value="<?php echo $Lps; ?>"   size="50"></td>
                    </tr> -->


                    <tr>
                        <th> <label>20. Office Address :</label></th>
                        <td><textarea  name="Oadd"    rows="4" cols="50" ><?php echo $Oadd; ?></textarea></td>
                    </tr>


                    <tr>
                        <th><div style="padding-left: 52px">District :</div></th>
                        <td><input type="text" name="Oplot" value="<?php echo $Oplot; ?>"   size="50"></td>
                    </tr>


                    <tr>
                        <th><div style="padding-left: 52px">Police Station :</div></th>
                        <td><input type="text" name="Oroad" value="<?php echo $Oroad; ?>"   size="50"></td>
                    </tr>


                    <tr>
                        <th><div  style="padding-left: 52px"> Post Code :</div></th>
                        <td><input type="text" name="Ops" value="<?php echo $Ops; ?>"   size="50"></td>
                    </tr>



                    <tr>
                        <th> <label>21. Residence Address :</label></th>
                        <td><textarea  name="radd"    rows="4" cols="50" ><?php echo $radd; ?></textarea></td>
                    </tr>


                    <tr>
                        <th><div style="padding-left: 52px">District :</div></th>
                        <td><input type="text" name="Rplot" value="<?php echo $Rplot; ?>"   size="50"></td>
                    </tr>


                    <tr>
                        <th><div style="padding-left: 52px">Police Station :</div></th>
                        <td><input type="text" name="Rroad" value="<?php echo $Rroad; ?>"   size="50"></td>
                    </tr>


                    <tr>
                        <th><div  style="padding-left: 52px"> Post Code :</div></th>
                        <td><input type="text" name="Rps" value="<?php echo $Rps; ?>"   size="50"></td>
                    </tr>


                     <tr>
                        <th> <label>22. Contact Details :</label></th>
                        <td></td>
                    </tr>
            
                    <tr>
                        <th><div style="padding-left: 52px">(a) Phone Number :</div></th>
                        <td><input type="text" name="phonenum" value="<?php echo $phonenum; ?>"   size="50"></td>
                    </tr>


                    <tr>
                        <th><div style="padding-left: 52px">(b) Fax Number :</div></th>
                        <td><input type="text" name="fax" value="<?php echo $fax; ?>"   size="50"></td>
                    </tr>


                    <tr>
                        <th><div  style="padding-left: 52px">(c) E-mail :</div></th>
                        <td><input type="email" name="email" value="<?php echo $email; ?>"   size="50"></td>
                    </tr>

                    <tr>
                        <th><div style="padding-left: 52px">(d) Web Address :</div></th>
                        <td><input type="text" name="webadd" value="<?php echo $webadd; ?>"   size="50"></td>
                    </tr>

 
                    <tr>
                        <th> <label>23. Name of the person by whom dependent to (if status is dependent):</label></th>
                        <td><input type="text" name="depname" value="<?php echo $depname; ?>"   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>24. Passport of the person by whom dependent to (if status is dependent):</label></th>
                        <td><input type="text" name="deppass" value="<?php echo $deppass; ?>"   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>


                    
                    <tr>
                        <th> <label>25. Educational Qualification :</label></th>
                        <td><input type="text" name="edu" value="<?php echo $edu; ?>"   size="50"></td>
                    </tr>



                    <tr>
                        <th> <label>26. Experience/Previous Posting :</label></th>
                        <td><textarea  name="exp"    rows="4" cols="50" ><?php echo $exp; ?></textarea></td>
                    </tr>

                    <tr>
                        <th> <label>27. Hobby :</label></th>
                        <td><textarea  name="hobby"    rows="4" cols="50" ><?php echo $hobby; ?></textarea></td>
                    </tr>


                    <tr>
                        <th> <label>28. Special Skills :</label></th>
                        <td><textarea  name="spskills"    rows="4" cols="50" ><?php echo $spskills; ?></textarea></td>
                    </tr>


                    <tr>
                        <th> <label>29. Intelligence Background (If any) :</label></th>
                        <td><textarea  name="Intelligence"    rows="4" cols="50" ><?php echo $Intelligence; ?></textarea></td>
                    </tr>


                    <tr>
                        <th> <label>30. Remarks :</label></th>
                        <td><textarea  name="remark"    rows="4" cols="50" ><?php echo $remark; ?></textarea></td>
                    </tr>

                    <tr>
                        <th> <label>31. Other Info (If any) :</label></th>
                        <td><textarea  name="other"    rows="4" cols="50" ><?php echo $other; ?></textarea></td>
                    </tr>


            
                    <input type="hidden" name="det" value="<?php echo $_SESSION['username']; ?>">
                    <input type="hidden" value="<?php echo $id;?>" name="id">


            <tr>
                <th colspan="2" ><div align="center"><button class="btn btn-info" onclick= history.back()>BACK</button>&nbsp &nbsp &nbsp<input type="submit" class="btn btn-success" value="Update"></div></th>

            </tr>

        </table>
    </form>

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

</body>

</html>
