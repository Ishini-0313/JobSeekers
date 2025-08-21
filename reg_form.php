<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
    </head>
    <body>
        <h2 style="text-align:center ; background-color:pink ;">JOB SEEKER REGISTRATION FORM</h2>
        <h3>Registration Details</h3>
        <form action = "insertdata.php" method = "post">
            Title:
                <select name="title" id="">
                    <option value="">Select Title</option>
                    <option value="Mr">Mr</option>
                    <option value="Ms">Ms</option>
                    <option value="Dr">Dr</option>
                    <option value="Prof">Prof</option>
                </select>
                <br><br>
            Name:
                <input type="text" name="name">
                <br><br>
            Gender:
                <input type="radio" value="male" name="gender">male               
                <input type="radio" value="female" name="gender">female
                <br><br>
            Date of Birth:
                <input type="date" name="dob">
                <br><br>
            <input type="submit" value="Sign Up">
            <input type="reset" value="reset">
        </form>
    </body>
</html>