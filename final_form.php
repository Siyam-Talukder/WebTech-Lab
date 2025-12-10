<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
</head>

<body>
    <h1>Profile</h1>
	<form method="POST" action="form_data.php">
    <table width="100%">
        <tr>
            <td>
                <fieldset>
                    <legend>General Information</legend>
                    <table width="100%" align="center">
                        <tr>
                            <td><b>First Name: </b></td>
                            <td> <input type="text" name="fname"></td>
                        </tr>
                        <tr>
                            <td><b>Last Name: </b></td>
                            <td> <input type="text" name="lname"></td>
                        </tr>

						 <tr>
							  <td><b>Choose Gender </b></td>
							  <td>
							 <input type="radio" name="Gender" value="Male">
							 <label for="male">Male </label>
						     <input type="radio" name="Gender" value="Female">
						     <label for="female">Female </label>
							 </td>
                        </tr>

                        <tr>
                            <td><b>Father's Name: </b></td>
                             <td> <input type="text" name="father_name"></td>
                        </tr>
                        <tr>
                            <td><b>Mother's Name </b></td>
                             <td> <input type="text" name="mother_name"></td>
                        </tr>
                        <tr>
                            <td><b>Blood Group</b></td>
                            <td> 
								<select name="blood">
									<option>A+</option>
									<option>B+</option>
									<option>O-</option>
								</select>
							</td>
                        </tr>
                        <tr>
                            <td><b>Religion</b></td>
                            <td> 
							<select name="religion" >
									<option>Islam</option>
									<option>Hindu</option>
									<option>Cristian</option>
							</select>
							</td>
                        </tr>
                    </table>
            </td>
            </fieldset>
            <td>
                <fieldset>
                    <legend>Contact Information</legend>
                    <table width="100%" align="center">
                        <tr>
                            <td><b>Email: </b></td>
                            <td> <input type="text" name="email"></td> 
                        </tr>
                        <tr>
                            <td><b>Phone/Mobile: </b></td>
                            <td> <input type="text" name="mobile"></td> 
                        </tr>
                        <tr>
                            <td><b>Website:</b></td>
                            <td> <input type="text" name="web"></td> 
                        </tr>
                        <tr>
                            <td><b>Address </b></td>
                            <td> 
								
						<fieldset>
							<legend>Present Addrress</legend>
							<select name="country" >
									<option>Bangladesh</option>
									<option>IND</option>
									<option>AUS</option>
							</select>
							<select name="city" >
									<option>Dhaka</option>
									<option>Barishal</option>
									<option>Cumilla</option>
							</select>
							<br>
							<textarea rows="4" cols="20" placeholder="Road/Street/City" name="address"></textarea>
							<br>
							<input type="text" id="post" placeholder="Post Code" name="post">
							<br>
						 </fieldset>

							</td>
                        </tr>
                    </table>
            </td>
            </fieldset>
            </td>

           
            <td>
                <fieldset>
                    <legend>Contact Information</legend>
                    <table width="100%" align="center">
                        <tr>
                            <td><b>Username: </b></td>
                            <td> <input type="text" name= 'uname'></td> 
                        </tr>
                        <tr>
                            <td><b>Password: </b></td>
                            <td> <input type="text" name= 'pass'></td> 
                        </tr>
                        <tr>
                            <td><b>Confirm Password: </b></td>
                            <td> <input type="text" name= 'cpass'></td> 
                        </tr>
                    </table>
            </td>
            </fieldset>
            </td>

        </tr>
    </table>
	<input type="Submit" value="Register">
	<form>
	

</body>

</html>