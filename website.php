<!doctype html>
<html lan="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
</head>

<body bgcolor="blue ">
    <h1 style="border:10px solid pink;padding:10px;color:deepskyblue;text-align:center;"><B>Scholership-form</scholership-form></B></h1>
    <h2 style="color:gree;text-align:center;">GOV. OF INDIA</h2>
    <h2 style="color:green;text-align:center;">To avail this offer Give your basic details</h2>
    <h2 style="color:red;text-align:center;"><u><i>REGISTRATION FORM</i></u></h2>

    <p style="color:coral;text-align:center;">WE REQUEST YOU TO KINDLY FILL THIS FORM:</P>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div style="color:lightseagreen;text-align:center;">
            FIRST NAME:<input type="text" name="fname" placeholder="first name"><br><br>
            LAST NAME:<input type="text" name="lname" placeholder="last name"><br><br>
            DATE OF BIRTH:<input type="text" name="DOB" placeholder="DD/MM/YY"><br><br>
            EMAIL ID:<input type="email" name="email-id" placeholder="Email-id"><br><br>
            MOBILE NO:<input type="text" name="phone" placeholder="10 digit number"><br><br>
            GENDER:
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="female">Other<br><br>
            UPLOAD PHOTO:
            <input type="FILE" name="photo"><br><br>
            ADDERSS:
            <textarea cols="25" rows="4" name="address" placeholder="Discription"></textarea><br><br>
            CITY:
            <INPUT TYPE="text" name="city"><br><br>
            PIN CODE:
            <INPUT TYPE="text" name="PINCODE"><br><br>
            state:<input type="text" name="state">
            <select>
                <option>delhi</option>
                <option>rajasthan</option>
                <option>jaipur</option>
                <option>utterpradesh</option>
            </select><br><br>
            Cource:
            <select>name="COURCE">
                <option>ACCP PRO</option>
                <option>MIS</option>
                <option>TALLY</option>
                <option>BASIC COMPUTER</option>
            </select><br><br>
            country
            <input type="text" name="country" value="india" readonly="readonly"><br><br>
        </div>


        <input type="submit" name="submit">
        <input type="reset" name="reset">
        <h1 style="color:chartreuse;border:5px solid blue;text-align:center;"> The data entered is:</h1>

    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    echo $_POST['fname'];
    echo "<br>";
    echo $_POST['lname'];
    echo "<br>";
    echo $_POST['DOB'];
    echo "<br>";
    echo $_POST['email-id'];
    echo "<br>";
    echo $_POST['phone'];
    echo "<br>";
    echo $_POST['gender'];
    echo "<br>";
    echo $_POST['photo'];
    echo "<br>";
    echo $_POST['address'];
    echo "<br>";
    echo $_POST['city'];
    echo "<br>";
    echo $_POST['PINCODE'];
    echo "<br>";
    echo $_POST['state'];
    echo "<br>";
}
?>