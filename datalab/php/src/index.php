<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>
<body>

    <h1>Contact</h1>

    <form action="process-form.php" method="post">

        <label for="Fname">First Name</label>
        <input type="text" id="Fname" name="Fname">

        <label for="Lname">Last Name</label>
        <input type="text" id="Lname" name="Lname">

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email">

        <label for="Age">Age</label>
        <input type="int" id="Age" name="Age">
        

        <label>
            <input type="checkbox" name="terms">
            I agree to the terms and conditions
        </label>

        <br>

        <button>Submit</button>

    </form>

</body>
</html>