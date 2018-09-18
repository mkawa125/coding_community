<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 9/9/18
 * Time: 11:08 PM
 */
?>
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>coders-tz</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my-sheet.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Styles -->
</head>
<body style="background-color: whitesmoke">

<div class="container-fluid">
    <header>
        @include('include.head')
    </header>
</div>

<div class="container-fluid">
    <div class="col-sm-10 main-content" style="">
        <div class="row">
            <div class="col-sm-5">
                <h5 class="register-head"><strong style="color: #2874A6">You have two steps to complete your registration. Please follow the steps to complete registration</strong></h5>
                <h5 class="register-head" style="color: chocolate"><strong>Step 1 of 2</strong></h5>
                <p class="welcome-register">Fill the the correct details to form the given form and then click next to proceed with the other steps.
                Please make sure your details are correct so that people can know who are you in computer programming field.
                </p>

                {{--<div id="demo" class="carousel slide register-slide" data-ride="carousel">--}}
                    {{--<ul class="carousel-indicators">--}}
                        {{--<li data-target="#demo" data-slide-to="0" class="active"></li>--}}
                        {{--<li data-target="#demo" data-slide-to="1"></li>--}}
                        {{--<li data-target="#demo" data-slide-to="2"></li>--}}
                    {{--</ul>--}}
                    {{--<div class="carousel-inner">--}}
                        {{--<div class="carousel-item active">--}}
                            {{--<img src="{{ asset('images/start1.png') }}" alt="Los Angeles" width="100%" height="300">--}}
                            {{--<div class="carousel-caption">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<img src="{{ asset('images/start2.jpeg') }}" alt="Chicago" width="100%" height="300">--}}
                            {{--<div class="carousel-caption">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<img src="{{ asset('images/start4.png') }}" alt="New York" width="100%" height="300">--}}
                            {{--<div class="carousel-caption">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<img src="{{ asset('images/start3.jpeg') }}" alt="Chicago" width="100%" height="300">--}}
                            {{--<div class="carousel-caption">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<img src="{{ asset('images/start5.jpeg') }}" alt="New York" width="100%" height="300">--}}
                            {{--<div class="carousel-caption">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<a class="carousel-control-prev" href="#demo" data-slide="prev">--}}
                        {{--<span class="carousel-control-prev-icon"></span>--}}
                    {{--</a>--}}
                    {{--<a class="carousel-control-next" href="#demo" data-slide="next">--}}
                        {{--<span class="carousel-control-next-icon"></span>--}}
                    {{--</a>--}}
                {{--</div>--}}

                <div class="social">
                    <h5 class="register-head"><strong>Social Networks</strong></h5>
                    <a class="#" href="#" title="facebook" ><i class="fa fa-facebook-square"></i></a>
                    <a class="#" href="#" title="Instagram" ><i class="fa fa-instagram"></i></a>
                    <a class="#" href="#" title="Linkedin"><i class="fa fa-linkedin-square"></i></a>
                    <a class="#" href="#" title="twitter"><i class="fa fa-twitter-square"></i></a>
                    <a class="#" href="#" title="youtube"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-sm-6" style="margin: 0 auto">
                <div class="panel">

                    <!-- Modal Header -->
                    <div class="panel-heading">
                        <h4 class="panel-title home-head"><strong>Programming community registration form</strong></h4>
                    </div>

                    <!-- Modal body -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="/register" name="register-form" class="#" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    {{--Displying errors--}}
                                    <h5 style="font-size: small">
                                        @if($errors->has('username'))
                                            <span class="has-error">
                                                    <small>{{ $errors->first('username') }}</small>
                                                </span>
                                        @endif
                                    </h5>
                                    <label for="pass1" ><strong>Username:</strong></label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="e.g. mkawa92">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 style="font-size: small">
                                                @if($errors->has('first_name'))
                                                    <span class="has-error">
                                                    <small>{{ $errors->first('first_name') }}</small>
                                                </span>
                                                @endif
                                            </h5>
                                            <label for="first-name"><strong>First name:</strong></label>
                                            <div class="input-group">
                                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter your name" >
                                            </div>


                                        </div>
                                        <div class="col-sm-6">
                                            <h5 style="font-size: small">
                                                @if($errors->has('first_name'))
                                                    <span class="has-error">
                                                    <small>{{ $errors->first('first_name') }}</small>
                                                </span>
                                                @endif
                                            </h5>
                                            <label for="pass2"><strong>Surname:</strong></label>
                                            <div class="input-group">
                                                <input type="text" name="surname" id="surname" class="form-control" placeholder="please fill the last name" >
                                            </div>
                                        </div>
                                    </div>

                                    <h5 style="font-size: small">
                                        @if($errors->has('email'))
                                            <span class="has-error">
                                                    <small>{{ $errors->first('email') }}</small>
                                                </span>
                                        @endif
                                    </h5>
                                    <label for="email-address" ><strong>Email Address:</strong></label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="e.g dahabusaidi@gmail.com">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 style="font-size: small">
                                                @if($errors->has('password'))
                                                    <span class="has-error">
                                                    <small>{{ $errors->first('password') }}</small>
                                                </span>
                                                @endif
                                            </h5>
                                            <label for="password"><strong>Enter password:</strong></label>
                                            <div class="input-group">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="************" >
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 style="font-size: small">
                                                @if($errors->has('re_password'))
                                                    <span class="has-error">
                                                    <small>{{ $errors->first('re_password') }}</small>
                                                </span>
                                                @endif
                                            </h5>
                                            <label for="pass2"><strong>Confirm password:</strong></label>
                                            <div class="input-group">
                                                <input type="password" name="re_password" id="re_password" class="form-control" placeholder="*************" >
                                            </div>
                                        </div>
                                    </div>

                                    <label for="location"><strong>location:</strong></label>
                                    <div class="input-group">
                                        <select name="location" class="form-control" id="location">
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
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
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
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
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
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
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
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
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
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
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of" selected>Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
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
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary btn-xs" name="login" type="submit" style="background-color: #2874A6; float: right; margin-top: 5px; padding: 5px; font-size: small">
                                        Next <i class="fa fa-arrow-right" style="font-size: smaller"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="panel-footer">
                         <a href="#">terms of services</a> and <a href="#">privacy policies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--modal for user login--}}

<footer>
    @include('include.footer')
</footer>

</body>
</html>


