<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <title> Login </title>


        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

        <link rel="stylesheet" href="css/stylelogin.css">


</head>

<body>

        <div class="login-wrap">
                <div class="login-html">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                        <label for="tab-1" class="tab">Sign In</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up">
                        <label for="tab-2" class="tab"></label>


                        <div class="login-form">


                                <form action="register patientx.php" method="">


                                        <div class="sign-in-htm">

                                                <div class="group">
                                                        <label for="user" class="label">Full Names</label>
                                                        <input id="name" type="text" name="name" class="input">
                                                </div>

                                                <div class="group">
                                                        <label for="user" class="label">Age</label>
                                                        <input id="age" type="text" name="age" class="input">
                                                </div>

                                                <div class="group">
                                                        <label for="user" class="label">ID No.</label>
                                                        <input id="id no" type="text" name="id" class="input">
                                                </div>

                                                <div class="group">
                                                        <label for="user" class="label">Phone No.</label>
                                                        <input id="phone" type="text" name="phone" class="input">
                                                </div>

                                                <div class="group">
                                                        <label for="user" class="label">Email</label>
                                                        <input id="email" type="text" name="email" class="input">
                                                </div>

                                                <div class="group">
                                                        <label for="user" class="label">Gender</label>
                                                        <input id="gender" type="text" name="gender" class="input">
                                                </div>

                                                <div class="hr"></div>
                                                <div class="group">
                                                        <label for="user" class="label"><u>
                                                                        <center>HEALTH RECORDS INFO</center>
                                                                </u></label>
                                                </div>
                                                <div class="hr"></div>

                                                <div class="group">
                                                        <label for="user" class="label">Height</label>
                                                        <input id="height" type="number" name="height" class="input">
                                                </div>

                                                <div class="group">
                                                        <label for="user" class="label">Weight</label>
                                                        <input id="weight" type="number" name="weight" class="input">
                                                </div>

                                                <div class="group">
                                                        <label for="user" class="label">bmi</label>
                                                        <input id="bmi" type="text" name="bmi" class="input" value = "" disabled>
                                                </div>

                                                <div class="group">
                                                        <label for="user" class="label">Blood Pressure</label>
                                                        <input id="bp" type="text" name="bp" class="input">
                                                </div>

                                                <div class="group">
                                                        <label for="user" class="label">Pre-Existing Condition</label>
                                                        <input id="condition" type="text" name="condition" class="input">
                                                </div>

                                                <div class="group">
                                                        <label for="user" class="label">Date</label>
                                                        <input id="date" type="text" name="date" class="input"
                                                                placeholder="**CURRENT DATE TO BE OBTAINED FROM TIMEZONE with javascript">
                                                </div>


                                                <div class="group">
                                                        <input type="submit" class="button" value="REGISTER PATIENT">
                                                </div>
                                                <div class="hr"></div>

                                </form>
                        </div>

                </div>
        </div>
        </div>



</body>

</html>

<script>

</script>