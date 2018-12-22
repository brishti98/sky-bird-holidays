<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="booking.css">
</head>
<body>
<header>
<div class="logo">
<img src="sky.jpg" alt="logo"/>
</div>
<h1>Sky Bird Holidays<br/><p>Enjoy the holidays with us</b></p></h1> 
</header>
<div class="nav">
<ul>
	<li><a href="home.php">HOME</a></li>
	<li><a href="about.php">ABOUT US</a></li>
	<li><a href="Bhutan.php">BHUTAN</a>
		<ul>
		<li><a href="b1.php">CULTURAL & HISTORICAL TOURS</a></li>
		<li><a href="b2.php">TREKKING & HIKING</a></li>
		<li><a href="b3.php">BHUTAN FESTIVAL 2018</a></li>
		</ul>
	</li>
	<li><a href="India.php">INDIA</a>
		<ul>
		<li><a href="i1.php">CULTURAL & HISTORICAL TOURS</a></li>
		<li><a href="i2.php">TREKKING & HIKING</a></li>
		<li><a href="i3.php">MULTIPLE ACTIVITES</a></li>
		</ul>		
	</li>
	<li><a href="Nepal.php">NEPAL</a>
		<ul>
		<li><a href="n1.php">CULTURAL & HISTORICAL TOURS</a></li>
		<li><a href="n2.php">TREKKING & HIKING</a></li>
		<li><a href="n3.php">MULTIPLE ACTIVITES</a></li>
		</ul>
	</li>
	<li><a href="visa.php">VISA</a>
		<ul>
		<li><a href="visab.php">BHUTAN</a></li>
		<li><a href="visai.php">INDIA</a></li>
		<li><a href="visan.php">NEPAL</a></li>
		</ul>	
	</li>
	<li><a href="booking.php">BOOKING</a></li>
	<li><a href="contact.php">CONTACT US</a></li>
</ul>	
</div>
<div class="one">
<div class="two">
<b>To book the tour of your choice please fill the form below:</b><br><br>
<form action="connect1.php" method="POST">
<label for="fname">First Name:</label><br>
<input type="text" id="fname" name="fname" size="40" maxlength="40" required /><br><br>
<label for="mname">Middle Name:</label><br>
<input type="text" id="mname" name="mname" size="40" maxlength="40" /><br><br>
<label for="lname">Last Name:</label><br>
<input type="text" id="lname" name="lname" size="40" maxlength="40" required /><br><br>
<label for="email">Email:</label><br>
<input type="text" id="email" name="email" size="40" maxlength="50" required /><br><br>
<label for="contact">Contact No. :</label><br>
<input type="tel" id="contact" name="contact" size="40" maxlength="10" required /></br><br>
<label for="nation">Country:</label><br>
<select id="nation" name="nation" required>
	<option>---Select a country---</option>
	<option>Afganistan</option>
	<option>Albania</option>
	<option>Algeria</option>
	<option>Andorra</option>
	<option>Angola</option>
	<option>Antigue and Barbuda</option>
	<option>Argentina</option>
	<option>Armenia</option>
	<option>Australia</option>
	<option>Austria</option>
	<option>Azerbaijan</option>
	<option>The Bahamas</option>
	<option>Bahrain</option>
	<option>Bangladesh</option>
	<option>Barbados</option>
	<option>Belarus</option>
	<option>Belgium</option>
	<option>Belize</option>
	<option>Benin</option>
	<option>Bhutan</option>
	<option>Bolivia</option>
	<option>Bosnia and Herzegovina</option>
	<option>Botswana</option>
	<option>Brazil</option>
	<option>Brunei</option>
	<option>Bulgaria</option>
	<option>Burkina Faso</option>
	<option>Burundi</option>
	<option>Cabo Verde</option>
	<option>Cambodia</option>
	<option>Cameroon</option>
	<option>Canada</option>
	<option>Central African Republic</option>
	<option>Chad</option>
	<option>Chile</option>
	<option>China</option>
	<option>Colombia</option>
	<option>Comoros</option>
	<option>Congo, Democratic Republic of the</option>
	<option>Congo, Republic of the</option>
	<option>Costa Rica</option>
	<option>Cote d'Ivoire</option>
	<option>Croatia</option>
	<option>Cuba</option>
	<option>Cyprus</option>
	<option>Czech Republic</option>
	<option>Denmark</option>
	<option>Djibouti</option>
	<option>Dominica</option>
	<option>Dominican Republilc</option>
	<option>East Timor</option>
	<option>Eucador</option>
	<option>Egypt</option>
	<option>El Salvador</option>
	<option>Equiatorial Guinea</option>
	<option>Eritrea</option>
	<option>Estonia</option>
	<option>Ethiopia</option>
	<option>Fiji</option>
	<option>Finland</option>
	<option>France</option>
	<option>Gabon</option>
	<option>The Gambia</option>
	<option>Georgia</option>
	<option>Germany</option>
	<option>Ghana</option>
	<option>Greece</option>
	<option>Grenada</option>
	<option>Guatemala</option>
	<option>Guinea</option>
	<option>Guinea-Bissau</option>
	<option>Guyana</option>
	<option>Haiti</option>
	<option>Honduras</option>
	<option>Hungary</option>
	<option>Iceland</option>
	<option>India</option>
	<option>Indonesia</option>
	<option>Iran</option>
	<option>Iraq</option>
	<option>Ireland</option>
	<option>Israel</option>
	<option>Italy</option>
	<option>Jamaica</option>
	<option>Japan</option>
	<option>Jordan</option>
	<option>Kazakhstan</option>
	<option>Kenya</option>
	<option>Kiribati</option>
	<option>Korea, North</option>
	<option>Korea, South</option>
	<option>Kosovo</option>
	<option>Kuwait</option>
	<option>Kyrgyzstan</option>
	<option>Laos</option>
	<option>Latvia</option>
	<option>Lebanon</option>
	<option>Lesotho</option>
	<option>Liberia</option>
	<option>Libya</option>
	<option>Liechtenstein</option>
	<option>Lithuania</option>
	<option>Luxembourg</option>
	<option>Macedonia</option>
	<option>Madagascar</option>
	<option>Malawi</option>
	<option>Malaysia</option>
	<option>Maldives</option>
	<option>Mali</option>
	<option>Malta</option>
	<option>Marshall Islands</option>
	<option>Mauritania</option>
	<option>Mauritius</option>
	<option>Mexico</option>
	<option>Micronesia, Federted States of</option>
	<option>Moldova</option>
	<option>Monaco</option>
	<option>Mongolia</option>
	<option>Montenegro</option>
	<option>Morocco</option>
	<option>Mozambique</option>
	<option>Myanmar(Burma)</option>
	<option>Namibia</option>
	<option>Nauru</option>
	<option>Nepal</option>
	<option>Netherlands</option>
	<option>New Zealand</option>
	<option>Nicaragua</option>
	<option>Niger</option>
	<option>Nigeria</option>
	<option>Norway</option>
	<option>Oman</option>
	<option>Pakistan</option>
	<option>Palau</option>
	<option>Panama</option>
	<option>Papua New Guinea</option>
	<option>Paraguay</option>
	<option>Peru</option>
	<option>Philippines</option>
	<option>Poland</option>
	<option>Portugal</option>
	<option>Qatar</option>
	<option>Romania</option>
	<option>Russia</option>
	<option>Rwanda</option>
	<option>Saint Kitts and Nevis</option>
	<option>Sain Lucia</option>
	<option>Saint Vincent and the Grenadies</option>
	<option>Samoa</option>
	<option>San Marino</option>
	<option>Soa Tome and Principe</option>
	<option>Saudi Arabia</option>
	<option>Senegal</option>
	<option>Serbia</option>
	<option>Seychelles</option>
	<option>Sierra Leone</option>
	<option>Singapore</option>
	<option>Slovakia</option>
	<option>Slovenia</option>
	<option>Solomon Islands</option>
	<option>Somalia</option>
	<option>South Africa</option>
	<option>Spain</option>
	<option>Sri Lanka</option>
	<option>Sudan</option>
	<option>Sudan, South</option>
	<option>Suriname</option>
	<option>Swaziland</option>
	<option>Sweden</option>
	<option>Switzerland</option>
	<option>Syria</option>
	<option>Taiwan</option>
	<option>Tajikistan</option>
	<option>Tanzania</option>
	<option>Thailand</option>
	<option>Togo</option>
	<option>Tongo</option>
	<option>Trinidad and Tobago</option>
	<option>Tunisia</option>
	<option>Turkey</option>
	<option>Turkmenistan</option>
	<option>Tuvalu</option>
	<option>Uganda</option>
	<option>Ukraine</option>
	<option>United Arab Emirates</option>
	<option>United Kingdom</option>
	<option>United States</option>
	<option>Uruguay</option>
	<option>Uzbekistan</option>
	<option>Vanuatu</option>
	<option>Vatican City</option>
	<option>Venezuela</option>
	<option>Vietnam</option>
	<option>Yemen</option>
	<option>Zambia</option>
	<option>Zimbabwe</option>
</select><br><br>
<label for="travellers">Number of travellers:</label><br><br>
Adults(above age group of 12):
<select name="travellers" required>
	<option>---Select a number---</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
</select><br><br>
Children(below age group of 12):
<select name="travellers1" required>
	<option>---Select a number---</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
</select><br><br>
<label for="package">Package:</label><br>
Note: The package amount is based on per person.<br>
<div class="three">
<h4>Bhutan</h4>
<table>
<tr>
<td>Cultural & Historical Tours:</td>
<td>Trekking & Hiking:</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="bc1">Enchanting Bhutan (In and Ex Paro) - Rs. 22,350</td>
	<td><input type="checkbox" value="1" name="bt1">Chomolhari Trek - Rs. 3,650</td></td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="bc2">Bhutan and Dooars Adventure (In and Ex Bagdogra) - Rs. 24,955</td>
	<td><input type="checkbox" value="1" name="bt2">Druk Path Trek with Three Days Cultural Tour in Bhutan - Rs. 24,955</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="bc3">Bhutan - The Thunder Dragon Bike Tour - Rs. 39,000</td>
	<td><input type="checkbox" value="1" name="bt3">Laya Gasa Trek - Rs. 26,500</td>
</tr>
<tr>
	<td><input type="checkbox" value="1"name="bc4">Exotic Bhutan and Dooars (In and Ex Bagdogra) - Rs. 28,500</td>
	<td></td>
</tr>
<tr>
	<td><input type="checkbox" value="1"name="bc5">Majestic Bhutan (In and Ex Paro) - Rs. 24,610</td>
	<td></td>
</tr>
</table>
</div>
<div class="three">
<h4>India</h4>
<table>
<tr>
	<td>Cultural & Historical Tours</td>
	<td>Trekking & Hiking</td>
	<td>Multiple Activities</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="ic1">Statue of Unity - Rs. 4,500</td>
	<td><input type="checkbox" value="1" name="it1">Triund Trek in Himachal Pradesh - Rs. 1,500</td>
	<td><input type="checkbox" value="1" name="im1">Camel Safari at Dera Village - Rs. 5,550</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="ic2">Delhi & Agra Tour - Rs, 15,050</td>
	<td><input type="checkbox" value="1" name="it2">Chadar Frozen River Trekking - Rs. 19,000</td>
	<td><input type="checkbox" value="1" name="im2">Alluring wildlife at K Gudi Wilderness Camp, BRT Hills - Rs. 5,057</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="ic3">Gateway to Eastern Himalayas - Rs. 26,999</td>
	<td><input type="checkbox" value="1" name="it3">Sandhan Valley Trekking & Camping - Rs. 1,998</td>
	<td><input type="checkbox" value="1" name="im3">Scuba Diving in Goa - Rs. 3,390</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="ic4">Hills of North East, Darjeeling & Gangtok - Rs. 25,500</td>
	<td><input type="checkbox" value="1" name="it4">Gokarna Beach Trekk from Mumbai - Rs. 3,476</td>
	<td></td>	
</tr>
<tr>
	<td><input type="checkbox" value="1" name="ic5">The Serai, Chikmagalur - Rs. 23,270</td>
	<td><input type="checkbox" value="1" name="it5">The Bagini Glacier Trek - Rs. 11,800</td>
	<td></td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="ic6">South Indian Bonanza-(Bangalore - Coorg - Wayanad - Ooty) - Rs. 18,000</td>
	<td><input type="checkbox" value="1" name="it6">Kedarkantha Trek - Rs. 9,500</td>
	<td></td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="ic7">Jaipur Bikaner Jaisalmer Tour - Rs. 50,000</td>
	<td><input type="checkbox" value="1" name="it7">Nag Tibba Trek Uttarakhand - Rs. 3,500</td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td><input type="checkbox" value="1" name="ic8">Chadar and Lingshed Trek - Rs. 24,000</td>
	<td></td>
</tr>
</tr>
</table>
</div>
<div class="three">
<h4>Nepal</h4>
<table>
<tr>
	<td>Cultural & Historical Tours</td>
	<td>Trekking & Hiking</td>
	<td>Multiple Activities</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="nc1">Kathmandu - $40</td>
	<td><input type="checkbox" value="1" name="nt1">Annapurna Circuit Trek - $1550</td>
	<td><input type="checkbox" value="1" name="nm1">Bungy Jump - $500</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="nc2">Patan - $30</td>
	<td><input type="checkbox" value="1" name="nt2">Annapurna Base Camp Trek - $999</td>
	<td><input type="checkbox" value="1" name="nm2">Mountain Flight - $190</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="nc3">Bhaktapur - $35</td>
	<td><input type="checkbox" value="1" name="nt3">Ghandruk & Ghorepani Trekking - $497</td>
	<td><input type="checkbox" value="1" name="nm3">Paragliding - $50 for 30 minutes and $130 for 40-60 minutes</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="nc4">Gorkha Durbar & Manakamana Temple - $130</td>
	<td><input type="checkbox" value="1" name="nt4">Everest Base Camp Trek - $1199</td>
	<td><input type="checkbox" value="1" name="nm4">Rafting - Cost depends on the place</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="nc5">Lumbini - $100</td>
	<td><input type="checkbox" value="1" name="nt5">Langtang - $495</td>
	<td><input type="checkbox" value="1" name="nm5">Canyoning - $99- $200</td>
</tr>
<tr>
	<td><input type="checkbox" value="1" name="nc6">Pokhara - $199</td>
	<td><input type="checkbox" value="1" name="nt6">Gosaikunda Trekking - $445</td>
	<td><input type="checkbox" value="1" name="nm6">Chitwan National Park - $99</td>
</tr>
<tr>
	<td></td>
	<td><input type="checkbox" value="1" name="nc7">Mustang Trekking - $1750</td>
	<td><input type="checkbox" value="1" name="nt7">Bardia National Park - $120</td>
</tr>
</table>
</div><br><br>
<label for="date">From:</label><br>
<input type="date" name="today"/ required><br><br> 
<label for="date">To:</label><br>
<input type="date" name="lday"/ required><br><br>  
<label for="msg">Message:</label><br>
<textarea type="text" cols="100" rows="10" id="msg"/></textarea><br><br>
<center><input type="submit" name="login" value="SUBMIT"/> <input type="reset" value="RESET"/></center>
</form>
</div>
</div>
<footer>
&copy; 2018 Sky Bird Holidays
</footer>
</body>
</html>