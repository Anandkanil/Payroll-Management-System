<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>#1 HTML Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
 </head>
<style>
    :root {
    --body_gradient_left: #7200D0;
    --body_gradient_right: #C800C1;
    --form_bg: #ffffff;
    --input_bg: #E5E5E5;
    --input_hover: #eaeaea;
    --submit_bg: #1FCC44;
    --submit_hover: #40e263;
    --icon_color: #6b6b6b;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    /* make the body full height*/
    height: 100vh;
    /* set our custom font */
    font-family: 'Roboto',
        sans-serif;
    /* create a linear gradient*/
    background-image: linear-gradient(to right, var(--body_gradient_left), var(--body_gradient_right));
    display: flex;
}

#form_wrapper {
    width: 1000px;
    height: 700px;
    /* this will help us center it*/
    margin: auto;
    background-color: var(--form_bg);
    border-radius: 50px;
    /* make it a grid container*/
    display: grid;
    /* with two columns of same width*/
    grid-template-columns: 1fr 1fr;
    /* with a small gap in between them*/
    grid-gap: 5vw;
    /* add some padding around */
    padding: 5vh 15px;
}

#form_left {
    /* center the image */
    display: flex;
    justify-content: center;
    align-items: center;
}

#form_left img {
    width: 350px;
    height: 350px;
}

#form_right {
    margin-top:90px;
    display: grid;
    /* single column layout */
    grid-template-columns: 1fr;
    /* have some gap in between elements*/
    grid-gap: 20px;
    padding: 10% 5%;
}

h1,
span {
    text-align: center;
}

.input_container {
    background-color: var(--input_bg);
    /* vertically align icon and text inside the div*/
    display: flex;
    align-items: center;
    padding-left: 20px;
}

.input_container:hover {
    background-color: var(--input_hover);
}

.input_container,
#input_submit {
    height: 60px;
    /* make the borders more round */
    border-radius: 30px;
    width: 100%;
}

.input_field {
    /* customize the input tag with lighter font and some padding*/
    color: var(--icon_color);
    background-color: inherit;
    width: 90%;
    border: none;
    font-size: 1.3rem;
    font-weight: 400;
    padding-left: 30px;
}

.input_field:hover,
.input_field:focus {
    /* remove the outline */
    outline: none;
}

#input_submit {
    /* submit button has a different color and different padding */
    background-color: var(--submit_bg);
    padding-left: 0;
    font-weight: bold;
    color: white;
    text-transform: uppercase;
}

#input_submit:hover {
    background-color: var(--submit_hover);
    /* simple color transition on hover */
    transition: background-color,
        1s;
    cursor: pointer;
}

/* shift it a bit lower */
#create_account {
    display: block;
    position: relative;
    top: 30px;
}

a {
    /* remove default underline */
    text-decoration: none;
    color: var(--submit_bg);
    font-weight: bold;
}

a:hover {
    color: var(--submit_hover);
}

i {
    color: var(--icon_color);
}

/* make it responsive */
@media screen and (max-width:768px) {

    /* make the layout  a single column and add some margin to the wrapper */
    #form_wrapper {
        grid-template-columns: 1fr;
        margin-left: 10px;
        margin-right: 10px;
    }
    /* on small screen we don't display the image */
    #form_left {
        display: none;
    }
}
</style>
<body>
    <div id="form_wrapper">
        <div id="form_left">
         <img src="icon.png" alt="computer icon">
        </div>
        <form action="" method="post">
        <div id="form_right">
            
            <h1>Member Login</h1>
            <div class="input_container">
                <i class="fas fa-envelope"></i>
                <input placeholder="Username" type="text" name="Email"require_once id="field_email" class='input_field'required>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input  placeholder="Password" type="Password" name="Password" id="field_Password" class='input_field'required>
            </div>
            <input type="submit" value="Login" name="Login" id='input_submit' class='input_field'>
            <span>Forgot <a href="#"> Username / Password ?</a></span>
            
            <span id='create_account'>
                <a href="registration.html">Create your account &#x27A1; </a>
            </span>
            
        </div>
    </div>
    </form>
</body>

</html>
<?php
$host="localhost";
$user="root";
$Password="";
$db="demo";

$mycon=mysqli_connect($host,$user,$Password);
mysqli_select_db($mycon,$db);

if(isset($_POST['Email'])){
    
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    
    $sql="select * from users where Email='".$Email."'AND Password='".$Password."' limit 1";
    
    $result=mysqli_query($mycon,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo"<script>alert('SUCCESSFULLY LOGED IN')</script>";
        
    }
    else{
        echo"<script>alert('WRONG')</script>";
    }
        
}