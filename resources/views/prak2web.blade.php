<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>Praktikum 2</title>

        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }

            body{

                justify-content: center;
                align-items: center;
                display: flex;
                min-height: 100vh;
            }

            .main{
                display: inline-flex;
                box-shadow: 0 5px 15px 15px rgba(0,0,0,0.2)
            }

            label{
                display: inline-block;
                width: 150px;
            }

            textarea {
                vertical-align: top;
            }

            </style>
    </head>
    <body>
        <div style="background-image: url(images/BG3.jpeg);" class="container shadow-lg">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
            <center><h1>Registration Form</h1></center> <br>
            <form name="RegistrationForm" action="https://www.w3schools.com/" method="post">

                <div class="form-group">
                    <label>User id:</label>
                    <input type="text" name="userid" id="userid" required>
                </div>

                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="pass" id="pass" required maxlength="16" minlength="7">
                </div>

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" required maxlength="40" minlength="3">
                </div>

                <div class="form-group">
                    <label>Address:</label>
                    <input type="text" name="address" >
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label>Country:</label>
                    <select name="country" id="country">
                        <option value="">(Select a country)</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="malaysia">Malaysia</option>
                        <option value="singapura">Singapura</option>
                        <option value="thailand">Thailand</option>
                    </select>
                </div>

                <div class="form-group">
                        <label for="zipcode">Zip Code :</label>
                        <input type="text" id="zipcode" class="zip" required />
                </div>

                <div class="form-group">
                    <label for="sex">Sex: </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio" >Female
                    </label>
                </div>

            <div class="form-group" >
                <label for="language">Language: </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="">English
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="">Non English
                </label>
            </div>

                <div class="form-group">
                    <label for="About" class="form-label">About :</label>
                    <textarea rows="5" cols="30" id="TITLE"> </textarea>
                  </div>

                    <br>
                   <center><button type="submit" class="btn btn-primary" id="submit">Submit</button></center>
                   <br>
            </form>
                </div>
            </div>
        </div>


         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js%22%3E"></script>
        <script>
            $(document).ready(function(){
                $("#submit").click(function(){

                    var UserId = $("#userid").val();
                    if(UserId.length < 5 || UserId.length > 12) {
                        alert("User ID must be of length 5 to 12");
                        return false;
                    }

                    var Password = $("#pass").val();
                    if(Password.length < 7 || Password.length > 16) {
                        alert("Password must be of length 7 to 16");
                        return false;
                    }

                    var Name = $("#name").val();
                    var pattern= /^[a-zA-Z\s]+$/;
                    if(!Name.match(pattern)) {
                        alert("Use Alphabet only");
                        return false;
                    }

                    var Email = $("#email").val();
                    var email = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if(!(Email.match(email))){
                        alert("Invalid Email");
                        return false;
                    }

                    var country = $('select option:selected').val();
                    if (country == 0){
                        alert("Country must be select");
                        return (false);
                    }

                    var ZipCode = $(".zip").val();
                    if (isNaN(ZipCode)){
                        alert("Zip Code must be a number");
                        return (false);
                    }

                    var sex = $("input[type='radio']:checked");
                    if(sex.length == 0){
                        alert("Sex must be select");
                        return (false);
                    }

                    var language = $("input[type='checkbox']:checked");
                    if(language.length == 0 ){
                        alert("Language must be select");
                        return (false);
                    }

                });
            });
        </script>
    </body>
</html>
