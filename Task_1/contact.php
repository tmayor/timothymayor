<!DOCTYPE html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    
    <form action="processform.php" method="POST">
        <p>
			<label for="first_name">First Name</label><br />
			<input type="text" name="first_name" placeholder="Enter Your First Name" />
        </p>
        <p>
			<label for="last_name">Last Name</label><br />
			<input type="text" name="last_name" placeholder="Enter Your Last Name" />
        </p>
        <p>
			<label for="email">Email</label><br />
			<input type="email" name="email" placeholder="Enter Your Email" required />
        </p>

        <p>
            <label for="department">Department</label><br />

             <select name="department">
                <option>Select Department</option>
                <option>HR</option>
                <option>Marketing</option>
                <option>Finance </option>
                <option>Operations</option>
              </select>
        </p>

        <p>
			<label for="gender">Gender</label><br />
            <input type="radio" name="gender" /> Male
            <input type="radio" name="gender" /> Female 
        </p>

        <p>
			<label for="email">Message</label><br />
			<textarea name="message"></textarea>
        </p>
        
        <p>
		
            <input type="checkbox" name="terms"  required /> By Checking this box you agree to our terms and conditions
                      
        </p>

         <button type="submit" name="submit">Send Message</button>

    </form>


</body>
</html>
