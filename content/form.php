<br>
<main>
	<form  id="form">
<div class="center" >
                <img class="image " width="250" height="150"src="../maltesse.png" alt="no picture">
				<h2> Application form</h2>
				<h3>Personal records</h3>
				<table>
					<tbody><tr>
						<td><strong>Name: </strong></td>
						<td>
						<input type="text" id="Name" name="Name" placeholder="Your Name" maxlength="25">
						</td>
					</tr>
					<tr>
						<td><strong>Surname: </strong></td>
						<td>
						<input type="text" id="FamilyName" name="FamilyName" placeholder="Your Surname" maxlength="15">
						</td>
					</tr>
					<tr>
						<td valign="top"><strong>Sex:</strong></td>
						<td>
						<input type="radio" id="male" name="gender" value="male">
						<label for="male">Male</label>
						<input type="radio" id="female" name="gender" value="female">
						<label for="female">Female</label>
						</td>
					</tr>
					<tr>
						<td><strong>Email: </strong></td>
						<td>
						<input type="email" id="email" name="email" placeholder="e-mail" maxlength="100">
						</td>
					</tr>

					<tr>
						<td><strong>Address: </strong></td>
						<td>
						<input type="text" id="address" name="address" placeholder="Address">
						</td>
					</tr>

				</tbody></table>
				<h2>Membership</h2>
				<table>
				<tbody><tr>
					<td><strong>ID number: </strong></td>
					<td><input type="text" id="idnumber" name="idnumber" placeholder="id-number"></td>
				</tr>
				<tr>
					<td><strong> Nationality: </strong></td>
					<td><input type="text" id="owner" name="ower" placeholder="Nationality"></td>
				</tr>
					<tr>
<td valign="top"><strong>Membership Type</strong></td>
<td>

<input type="checkbox" id="valiki" class="Age" value="Adult">
<label for="valiki">Adult</label>
<br>
<input type="checkbox" id="valik2" class="Age" value="Student" checked>
<label for="valik2">Student</label>
<br>
<input type="checkbox" id="valik3" class="Age" value="Child">
<label for="valik3">Child</label>
</td>
</tr>
				<tr>
					<td><strong>Start date: </strong></td>
					<td>
					<select id="startperiod">
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
					<select id="startyear">
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
					</select>
					</td>
				</tr>
				<tr>
				<td><strong> End date: </strong></td>
					<td>
					<select id="endperiod">
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
					<select id="endyear">
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
					</select>
					</td>
					</tr>
			<tr>
<td valign="top">
<strong> Location</strong>
</td>
<td>
<select id="city">
<option value="Tallinn"> Tallinn</option>
<option value="Tartu"> Tartu</option>
<option value="Narva"> Narva</option>
<option value="Kohtla-jarve"> Kohtla-jarve</option>
<option value="Parnu"> Parnu</option>
</select>
</td>
</tr>
				<tr>

						<td>
						<h4> Cover letter: </h4></td></tr>
						<tr>
						<td><strong> File: </strong></td>
						<td>
							<label for="doc"></label>
							<input type="file" name="doc" id="doc">
						</td>
					</tr>

				</tbody></table>
<h2>Security</h2>
				<table>
				<tbody><tr>
					<td><strong>Password: </strong></td>
					<td>
					<input type="password"  id="password"  placeholder="password">
					</td>
				</tr>
				<tr>
					<td><strong>Repeat your password: </strong></td>
					<td>
					<input type="password" id="password1"  placeholder="password once again">
					</td>
				</tr>
					<tr>

					<td>
					<h4>Please confirm: </h4>
						<input type="checkbox" id="agreement">
						<label for="agreement">I hereby consent to the processing of the personal data.</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" id="notify_email">
						<label for="notify_email"> I hereby consent to receive news via email</label>
					</td>
				</tr>
				<tr>
					<td><input type="button" value="Register" onclick="tervitus()"> </td>
					<td><input type="reset" value="Clear!" onclick="puhasta()"> </td>
				</tr>
				</tbody></table>
</div>
	</form>
      </main>