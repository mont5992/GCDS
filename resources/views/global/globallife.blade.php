@extends('layouts.app')
@section('styles')
<link href="{{ asset('css/join.css') }}" rel="stylesheet">
@endsection


@section('title', 'Join GCDS today to gain access to thousands of ministry resources from trusted, Christ-focused leaders. | Global Church Divinity School')

@section('content')
<style>
  form {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    max-width: 800px;
    margin: auto;
    font-family: Arial, sans-serif;
    text-align: left; 
  }

.content {
    padding: 1px 0 !important;
}

  .col-md-12 {
    flex: 1 1 100%;
        margin-top: 20px;
  }

  .col-md-6 {
    flex: 1 1 48%;
  }

  .col-md-4 {
    flex: 1 1 30%;
        margin-top: 20px;
  }

  label {
    color: #999;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 14px;
  }

  select {
    background-color: #fff;
  }

  .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
        float: left;
    }

  @media (max-width: 768px) {
    .col-md-6,
    .col-md-4 {
      flex: 1 1 100%;
    }
  }
  .btn {
    margin-top: 25px;
    border-radius: 12px;
    width: 125px;
    height: 45px;
    background-color: #1c4f6f;
    color: white;
    text-transform: uppercase;
  }
  
button[type="submit"]
{
  width: 10%;
}

</style>
<center>
    <div id="memberships">
<div id="selected-plan">
  <div class="content">
    <div class="container">
      <div class="plan plan-grand">       
          <h2>Global Life</h2>
          <h1>University</h1>                                   
        </div>      
    </div> 
  </div>
</div>
    <div id="registration">
    <div class="content">
      <div class="container">
        <h2>Registration</h2>
        <h3>Create Your Account</h3>

        <form action="/register" method="POST">

          

          <div class="row">

            

            
            <div class="col-md-6">
              <label for="">First Name</label> <br>
              <input type="text" class="text" required="" name="first_name" value="" style="width: 90%">
            </div> <!--col-->

            <div class="col-md-6">
              <label for="">Last Name</label> <br>
              <input type="text" class="text" required="" name="last_name" value="">
            </div>

            <div class="col-md-12">
              <label for="">Email</label> <br>
              <input type="text" class="text" required="" name="email" value="">
            </div>

            <div class="col-md-12">
              <label for="">Address</label> <br>
              <input type="text" class="text" required="" name="address" value="">
            </div>

            <div class="col-md-4">
              <label for="">State / Province / Region</label> <br>
              <input type="text" class="text" required="" name="state" value="" style="width: 90%">
            </div>
            <div class="col-md-4">
              <label for="">City</label> <br>
              <input type="text" class="text" required="" name="city" value="" style="width: 90%">
            </div>
            <div class="col-md-4">
              <label for="">Country</label> <br>
              <select name="country" id="">
                                <option value="">Select</option>
                                  <option value="US">United States</option>
                                  <option value="AF">Afghanistan</option>
                                  <option value="AX">Aland Islands</option>
                                  <option value="AL">Albania</option>
                                  <option value="DZ">Algeria</option>
                                  <option value="AS">American Samoa</option>
                                  <option value="AD">Andorra</option>
                                  <option value="AO">Angola</option>
                                  <option value="AI">Anguilla</option>
                                  <option value="AQ">Antarctica</option>
                                  <option value="AG">Antigua And Barbuda</option>
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
                                  <option value="BA">Bosnia And Herzegovina</option>
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
                                  <option value="CG">Congo</option>
                                  <option value="CD">Congo, Democratic Republic</option>
                                  <option value="CK">Cook Islands</option>
                                  <option value="CR">Costa Rica</option>
                                  <option value="CI">Cote D'Ivoire</option>
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
                                  <option value="FK">Falkland Islands (Malvinas)</option>
                                  <option value="FO">Faroe Islands</option>
                                  <option value="FJ">Fiji</option>
                                  <option value="FI">Finland</option>
                                  <option value="FR">France</option>
                                  <option value="GF">French Guiana</option>
                                  <option value="PF">French Polynesia</option>
                                  <option value="TF">French Southern Territories</option>
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
                                  <option value="GG">Guernsey</option>
                                  <option value="GN">Guinea</option>
                                  <option value="GW">Guinea-Bissau</option>
                                  <option value="GY">Guyana</option>
                                  <option value="HT">Haiti</option>
                                  <option value="HM">Heard Island &amp; Mcdonald Islands</option>
                                  <option value="VA">Holy See (Vatican City State)</option>
                                  <option value="HN">Honduras</option>
                                  <option value="HK">Hong Kong</option>
                                  <option value="HU">Hungary</option>
                                  <option value="IS">Iceland</option>
                                  <option value="IN">India</option>
                                  <option value="ID">Indonesia</option>
                                  <option value="IR">Iran, Islamic Republic Of</option>
                                  <option value="IQ">Iraq</option>
                                  <option value="IE">Ireland</option>
                                  <option value="IM">Isle Of Man</option>
                                  <option value="IL">Israel</option>
                                  <option value="IT">Italy</option>
                                  <option value="JM">Jamaica</option>
                                  <option value="JP">Japan</option>
                                  <option value="JE">Jersey</option>
                                  <option value="JO">Jordan</option>
                                  <option value="KZ">Kazakhstan</option>
                                  <option value="KE">Kenya</option>
                                  <option value="KI">Kiribati</option>
                                  <option value="KR">Korea</option>
                                  <option value="KW">Kuwait</option>
                                  <option value="KG">Kyrgyzstan</option>
                                  <option value="LA">Lao People's Democratic Republic</option>
                                  <option value="LV">Latvia</option>
                                  <option value="LB">Lebanon</option>
                                  <option value="LS">Lesotho</option>
                                  <option value="LR">Liberia</option>
                                  <option value="LY">Libyan Arab Jamahiriya</option>
                                  <option value="LI">Liechtenstein</option>
                                  <option value="LT">Lithuania</option>
                                  <option value="LU">Luxembourg</option>
                                  <option value="MO">Macao</option>
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
                                  <option value="FM">Micronesia, Federated States Of</option>
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
                                  <option value="MP">Northern Mariana Islands</option>
                                  <option value="NO">Norway</option>
                                  <option value="OM">Oman</option>
                                  <option value="PK">Pakistan</option>
                                  <option value="PW">Palau</option>
                                  <option value="PS">Palestinian Territory, Occupied</option>
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
                                  <option value="BL">Saint Barthelemy</option>
                                  <option value="SH">Saint Helena</option>
                                  <option value="KN">Saint Kitts And Nevis</option>
                                  <option value="LC">Saint Lucia</option>
                                  <option value="MF">Saint Martin</option>
                                  <option value="PM">Saint Pierre And Miquelon</option>
                                  <option value="VC">Saint Vincent And Grenadines</option>
                                  <option value="WS">Samoa</option>
                                  <option value="SM">San Marino</option>
                                  <option value="ST">Sao Tome And Principe</option>
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
                                  <option value="GS">South Georgia And Sandwich Isl.</option>
                                  <option value="ES">Spain</option>
                                  <option value="LK">Sri Lanka</option>
                                  <option value="SD">Sudan</option>
                                  <option value="SR">Suriname</option>
                                  <option value="SJ">Svalbard And Jan Mayen</option>
                                  <option value="SZ">Swaziland</option>
                                  <option value="SE">Sweden</option>
                                  <option value="CH">Switzerland</option>
                                  <option value="SY">Syrian Arab Republic</option>
                                  <option value="TW">Taiwan</option>
                                  <option value="TJ">Tajikistan</option>
                                  <option value="TZ">Tanzania</option>
                                  <option value="TH">Thailand</option>
                                  <option value="TL">Timor-Leste</option>
                                  <option value="TG">Togo</option>
                                  <option value="TK">Tokelau</option>
                                  <option value="TO">Tonga</option>
                                  <option value="TT">Trinidad And Tobago</option>
                                  <option value="TN">Tunisia</option>
                                  <option value="TR">Turkey</option>
                                  <option value="TM">Turkmenistan</option>
                                  <option value="TC">Turks And Caicos Islands</option>
                                  <option value="TV">Tuvalu</option>
                                  <option value="UG">Uganda</option>
                                  <option value="UA">Ukraine</option>
                                  <option value="AE">United Arab Emirates</option>
                                  <option value="GB">United Kingdom</option>
                                  <option value="UM">United States Outlying Islands</option>
                                  <option value="UY">Uruguay</option>
                                  <option value="UZ">Uzbekistan</option>
                                  <option value="VU">Vanuatu</option>
                                  <option value="VE">Venezuela</option>
                                  <option value="VN">Viet Nam</option>
                                  <option value="VG">Virgin Islands, British</option>
                                  <option value="VI">Virgin Islands, U.S.</option>
                                  <option value="WF">Wallis And Futuna</option>
                                  <option value="EH">Western Sahara</option>
                                  <option value="YE">Yemen</option>
                                  <option value="ZM">Zambia</option>
                                  <option value="ZW">Zimbabwe</option>
                              </select>
            </div>


            <div class="col-md-6">
              <label for="">Primary Language</label> <br>
              <select name="primary_language" id=""  style="width: 90%">
                                <option value="">Select</option>
                                  <option value="English">English</option>
                                  <option value="Abkhazian">Abkhazian</option>
                                  <option value="Afar">Afar</option>
                                  <option value="Afrikaans">Afrikaans</option>
                                  <option value="Akan">Akan</option>
                                  <option value="Albanian">Albanian</option>
                                  <option value="Amharic">Amharic</option>
                                  <option value="Arabic">Arabic</option>
                                  <option value="Aragonese">Aragonese</option>
                                  <option value="Armenian">Armenian</option>
                                  <option value="Assamese">Assamese</option>
                                  <option value="Avaric">Avaric</option>
                                  <option value="Avestan">Avestan</option>
                                  <option value="Aymara">Aymara</option>
                                  <option value="Azerbaijani">Azerbaijani</option>
                                  <option value="Bambara">Bambara</option>
                                  <option value="Bashkir">Bashkir</option>
                                  <option value="Basque">Basque</option>
                                  <option value="Belarusian">Belarusian</option>
                                  <option value="Bengali">Bengali</option>
                                  <option value="Bihari languages">Bihari languages</option>
                                  <option value="Bislama">Bislama</option>
                                  <option value="Bosnian">Bosnian</option>
                                  <option value="Breton">Breton</option>
                                  <option value="Bulgarian">Bulgarian</option>
                                  <option value="Burmese">Burmese</option>
                                  <option value="Catalan, Valencian">Catalan, Valencian</option>
                                  <option value="Central Khmer">Central Khmer</option>
                                  <option value="Chamorro">Chamorro</option>
                                  <option value="Chechen">Chechen</option>
                                  <option value="Chichewa, Chewa, Nyanja">Chichewa, Chewa, Nyanja</option>
                                  <option value="Chinese">Chinese</option>
                                  <option value="Church Slavonic, Old Bulgarian, Old Church Slavonic">Church Slavonic, Old Bulgarian, Old Church Slavonic</option>
                                  <option value="Chuvash">Chuvash</option>
                                  <option value="Cornish">Cornish</option>
                                  <option value="Corsican">Corsican</option>
                                  <option value="Cree">Cree</option>
                                  <option value="Croatian">Croatian</option>
                                  <option value="Czech">Czech</option>
                                  <option value="Danish">Danish</option>
                                  <option value="Divehi, Dhivehi, Maldivian">Divehi, Dhivehi, Maldivian</option>
                                  <option value="Dutch, Flemish">Dutch, Flemish</option>
                                  <option value="Dzongkha">Dzongkha</option>
                                  <option value="Esperanto">Esperanto</option>
                                  <option value="Estonian">Estonian</option>
                                  <option value="Ewe">Ewe</option>
                                  <option value="Faroese">Faroese</option>
                                  <option value="Fijian">Fijian</option>
                                  <option value="Finnish">Finnish</option>
                                  <option value="French">French</option>
                                  <option value="Fulah">Fulah</option>
                                  <option value="Gaelic, Scottish Gaelic">Gaelic, Scottish Gaelic</option>
                                  <option value="Galician">Galician</option>
                                  <option value="Ganda">Ganda</option>
                                  <option value="Georgian">Georgian</option>
                                  <option value="German">German</option>
                                  <option value="Gikuyu, Kikuyu">Gikuyu, Kikuyu</option>
                                  <option value="Greek (Modern)">Greek (Modern)</option>
                                  <option value="Greenlandic, Kalaallisut">Greenlandic, Kalaallisut</option>
                                  <option value="Guarani">Guarani</option>
                                  <option value="Gujarati">Gujarati</option>
                                  <option value="Haitian, Haitian Creole">Haitian, Haitian Creole</option>
                                  <option value="Hausa">Hausa</option>
                                  <option value="Hebrew">Hebrew</option>
                                  <option value="Herero">Herero</option>
                                  <option value="Hindi">Hindi</option>
                                  <option value="Hiri Motu">Hiri Motu</option>
                                  <option value="Hungarian">Hungarian</option>
                                  <option value="Icelandic">Icelandic</option>
                                  <option value="Ido">Ido</option>
                                  <option value="Igbo">Igbo</option>
                                  <option value="Indonesian">Indonesian</option>
                                  <option value="Interlingua (International Auxiliary Language Association)">Interlingua (International Auxiliary Language Association)</option>
                                  <option value="Interlingue">Interlingue</option>
                                  <option value="Inuktitut">Inuktitut</option>
                                  <option value="Inupiaq">Inupiaq</option>
                                  <option value="Irish">Irish</option>
                                  <option value="Italian">Italian</option>
                                  <option value="Japanese">Japanese</option>
                                  <option value="Javanese">Javanese</option>
                                  <option value="Kannada">Kannada</option>
                                  <option value="Kanuri">Kanuri</option>
                                  <option value="Kashmiri">Kashmiri</option>
                                  <option value="Kazakh">Kazakh</option>
                                  <option value="Kinyarwanda">Kinyarwanda</option>
                                  <option value="Komi">Komi</option>
                                  <option value="Kongo">Kongo</option>
                                  <option value="Korean">Korean</option>
                                  <option value="Kwanyama, Kuanyama">Kwanyama, Kuanyama</option>
                                  <option value="Kurdish">Kurdish</option>
                                  <option value="Kyrgyz">Kyrgyz</option>
                                  <option value="Lao">Lao</option>
                                  <option value="Latin">Latin</option>
                                  <option value="Latvian">Latvian</option>
                                  <option value="Letzeburgesch, Luxembourgish">Letzeburgesch, Luxembourgish</option>
                                  <option value="Limburgish, Limburgan, Limburger">Limburgish, Limburgan, Limburger</option>
                                  <option value="Lingala">Lingala</option>
                                  <option value="Lithuanian">Lithuanian</option>
                                  <option value="Luba-Katanga">Luba-Katanga</option>
                                  <option value="Macedonian">Macedonian</option>
                                  <option value="Malagasy">Malagasy</option>
                                  <option value="Malay">Malay</option>
                                  <option value="Malayalam">Malayalam</option>
                                  <option value="Maltese">Maltese</option>
                                  <option value="Manx">Manx</option>
                                  <option value="Maori">Maori</option>
                                  <option value="Marathi">Marathi</option>
                                  <option value="Marshallese">Marshallese</option>
                                  <option value="Moldovan, Moldavian, Romanian">Moldovan, Moldavian, Romanian</option>
                                  <option value="Mongolian">Mongolian</option>
                                  <option value="Nauru">Nauru</option>
                                  <option value="Navajo, Navaho">Navajo, Navaho</option>
                                  <option value="Northern Ndebele">Northern Ndebele</option>
                                  <option value="Ndonga">Ndonga</option>
                                  <option value="Nepali">Nepali</option>
                                  <option value="Northern Sami">Northern Sami</option>
                                  <option value="Norwegian">Norwegian</option>
                                  <option value="Norwegian Bokmål">Norwegian Bokmål</option>
                                  <option value="Norwegian Nynorsk">Norwegian Nynorsk</option>
                                  <option value="Nuosu, Sichuan Yi">Nuosu, Sichuan Yi</option>
                                  <option value="Occitan (post 1500)">Occitan (post 1500)</option>
                                  <option value="Ojibwa">Ojibwa</option>
                                  <option value="Oriya">Oriya</option>
                                  <option value="Oromo">Oromo</option>
                                  <option value="Ossetian, Ossetic">Ossetian, Ossetic</option>
                                  <option value="Pali">Pali</option>
                                  <option value="Panjabi, Punjabi">Panjabi, Punjabi</option>
                                  <option value="Pashto, Pushto">Pashto, Pushto</option>
                                  <option value="Persian">Persian</option>
                                  <option value="Polish">Polish</option>
                                  <option value="Portuguese">Portuguese</option>
                                  <option value="Quechua">Quechua</option>
                                  <option value="Romansh">Romansh</option>
                                  <option value="Rundi">Rundi</option>
                                  <option value="Russian">Russian</option>
                                  <option value="Samoan">Samoan</option>
                                  <option value="Sango">Sango</option>
                                  <option value="Sanskrit">Sanskrit</option>
                                  <option value="Sardinian">Sardinian</option>
                                  <option value="Serbian">Serbian</option>
                                  <option value="Shona">Shona</option>
                                  <option value="Sindhi">Sindhi</option>
                                  <option value="Sinhala, Sinhalese">Sinhala, Sinhalese</option>
                                  <option value="Slovak">Slovak</option>
                                  <option value="Slovenian">Slovenian</option>
                                  <option value="Somali">Somali</option>
                                  <option value="Sotho, Southern">Sotho, Southern</option>
                                  <option value="South Ndebele">South Ndebele</option>
                                  <option value="Spanish, Castilian">Spanish, Castilian</option>
                                  <option value="Sundanese">Sundanese</option>
                                  <option value="Swahili">Swahili</option>
                                  <option value="Swati">Swati</option>
                                  <option value="Swedish">Swedish</option>
                                  <option value="Tagalog">Tagalog</option>
                                  <option value="Tahitian">Tahitian</option>
                                  <option value="Tajik">Tajik</option>
                                  <option value="Tamil">Tamil</option>
                                  <option value="Tatar">Tatar</option>
                                  <option value="Telugu">Telugu</option>
                                  <option value="Thai">Thai</option>
                                  <option value="Tibetan">Tibetan</option>
                                  <option value="Tigrinya">Tigrinya</option>
                                  <option value="Tonga (Tonga Islands)">Tonga (Tonga Islands)</option>
                                  <option value="Tsonga">Tsonga</option>
                                  <option value="Tswana">Tswana</option>
                                  <option value="Turkish">Turkish</option>
                                  <option value="Turkmen">Turkmen</option>
                                  <option value="Twi">Twi</option>
                                  <option value="Uighur, Uyghur">Uighur, Uyghur</option>
                                  <option value="Ukrainian">Ukrainian</option>
                                  <option value="Urdu">Urdu</option>
                                  <option value="Uzbek">Uzbek</option>
                                  <option value="Venda">Venda</option>
                                  <option value="Vietnamese">Vietnamese</option>
                                  <option value="Volap_k">Volap_k</option>
                                  <option value="Walloon">Walloon</option>
                                  <option value="Welsh">Welsh</option>
                                  <option value="Western Frisian">Western Frisian</option>
                                  <option value="Wolof">Wolof</option>
                                  <option value="Xhosa">Xhosa</option>
                                  <option value="Yiddish">Yiddish</option>
                                  <option value="Yoruba">Yoruba</option>
                                  <option value="Zhuang, Chuang">Zhuang, Chuang</option>
                                  <option value="Zulu">Zulu</option>
                              </select>
            </div>

            <div class="col-md-6">
              <label for="">What Form Of Ministry Do You Have?</label> <br>
              <select name="form_of_ministry" id="">
                                <option value="">Select</option>
                                  <option value="Pastor">Pastor</option>
                                  <option value="Youth Pastor or Leader&nbsp;">Youth Pastor or Leader&nbsp;</option>
                                  <option value="Teacher (Professor)">Teacher (Professor)</option>
                                  <option value="Evangelist">Evangelist</option>
                                  <option value="Missionary&nbsp;">Missionary&nbsp;</option>
                                  <option value="Church Planter">Church Planter</option>
                                  <option value="Business Leader">Business Leader</option>
                                  <option value="College Student">College Student</option>
                              </select>
            </div>


            <div class="col-md-6">
              <label for="">Password</label> <br>
              <input type="password" class="text" required="" name="pass" style="width: 90%">
            </div>

            <div class="col-md-6">
              <label for="">Password</label> <br>
              <input type="password" class="text" required="" name="pass_repeat">
            </div>

          <div class="col-md-12">    
              <label for="" style="text-align: center; margin-bottom: 0px;">Access Code</label> <br>
                <input type="text" class="text" name="promo" style="width: 100%;">
          </div>
           <div class="col-md-12">
        <button type="submit" class="btn btn-primary" style="width: 12%; display:block; margin: 0 auto;">Continue</button>
      </div>
                    </div>
    </div>
      </form>
    </div>
  </div>
  </div>
</center>
@endsection