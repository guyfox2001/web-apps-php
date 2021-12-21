<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="content/md_auth.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="bg" class="bg">
    <form action="#" id="sign_window" class="sign_window" name="form_reg_name">
        <p> Please Sign In</p>
        <input class="input" id="signout_name_input" type="text" name="email_input" placeholder="name" size="30" required>
        <input class="input" id="signout_surname_input" type="text" name="email_input" placeholder="suremane" size="30" required>
        <input class="input" id="signout_phonenumber_input" type="tel" name="email_input" placeholder="Your phone" size="30" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}" required>
        <input class="input" id="signout_email_input" type="email" name="email_input" placeholder="your@email.com" size="30" required>
        <input class="input" id="signout_pass_input" type="password" name="pass_input" placeholder="Enter password" size="30" required>
        <input class="input" id="signout_try_pass_input" type="password" name="pass_input" placeholder="Try password" size="30" required>
        <button type="submit" id ="btn">Sign In</button>
    </form>
</div>
</body>
</html>