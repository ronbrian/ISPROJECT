<head>
    <link rel="stylesheet" type="text/css" href="../../stylingfile.css">
    <!-- EXTERNAL CSS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta content='width=device-width, initial-scale=1' name='viewport' />
    <title> *** </title>
    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById("display").value = this.responseText;
                    }
                };
                xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>

    
    <script>
        $(document).ready(function () {
            //$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
            $("#passwordform").hide();
            $("#loginform").hide();



        });


    </script>


    <script>
        function func1() {
            document.getElementById("sessionuser").innerHTML = document.getElementById("display1").value ;
            document.getElementById("sessionuser1").innerHTML = document.getElementById("display1").value ;


            if (document.getElementById("display").value =="PASSWORD AVAILABLE" ) {
                document.getElementById("user").value = document.getElementById("display1").value ;
                $("#loginform").show();
                //$("#loginform").fadeIn(20000);
                $("#passwordform").hide();

            } else if(document.getElementById("display").value =="NO PASSWORD") {
                $("#passwordform").show();
               // $("#passwordform").fadeIn(3000);
                $("#loginform").hide();
            }else{
                $("#passwordform").hide();
                $("#loginform").hide();
                alert('USER DOES NOT EXIST');
            }


        }
    </script>

</head>

<body>

    <div class="row">
        <div class="card">

            <form>
                Enter your ID Number:<br>
                <input type="text" onkeyup="showHint(this.value)" id="display1">
            </form>
            <button onclick="func1()"> Submit </button><br>
            <input id="display" type="text" onkeyup="" value="" disabled>

        </div>
        <div class="card" id="passwordform">
            <p> Welcome <strong id="sessionuser" ></strong>  <br>
                It seems you havent logged in before,<br>
                Create Your Password so as to access your info.</p>

            <form>
                <div class="">
                    <label for="pass" class="label">Password</label><br>
                    <input id="pass" type="password" name="password" class="input" data-type="password">
                </div>

                <div class="">
                        <label for="rptpass" class="label">Repeat Password</label><br>
                        <input id="name" type="password" name="rptpassword" onkeyup="" class="input" data-type="password">
                    </div>

                    <input type="submit" class="button" value="Sign Up and Proceed to Log In" onclick="myfunc2()" >


            </form>

        </div>

        <div class="card" id="loginform">
            <p> Welcome Back <strong id="sessionuser1" ></strong><br>
            Kindly Log in Below to continue</p>
            <form action ="loginx.php" method="">
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Username</label><br>
							<input id="user" type="text" name="loginusername" class="input" >
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label><br>
							<input id="pass" type="password" name="loginpassword" class="input" data-type="password">
						</div>
						<div class="group">
							<input id="check" type="checkbox"  class="check" checked>
							<label for="check">
								<span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">Forgot Password?</a>
						</div>
				</form>
        </div>


    </div>

</body>

<script>

 function myfunc2() {
     var xyz = document.getElementById("name").value + "&uname=" + document.getElementById("display1").value;
            if (xyz.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById("display").value = this.responseText;
                    }
                };
                xmlhttp.open("GET", "savepasswordx.php?q=" + xyz, true);
                xmlhttp.send();
            }
        }    
    
    
    
    
</script>
