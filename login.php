<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <meta name="title" content="Log in">
    <meta name="author" content="Irina Tiron">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/font.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <form action="control.php" method="post" class="wrap" autocomplete="off">
        <div class="field" id="field-username">
            <label for="inp_username" class="field-label">Username</label>
            <input type="text" class="field-input" id="inp_username" name="inp_username" maxlength="15" required>
        </div>
        <div class="field" id="field-password">
            <label for="inp_password" class="field-label">Password</label>
            <input type="password" class="field-input" id="inp_password" name="inp_password" minlength="8" maxlength="15" required>
        </div>
<!--
        <div class="field">
            <input type="checkbox" id="PassVisibility" name="PassVisibility" onclick="passVis()">
            <label for="PassVisibility">Show Password</label>
        </div>
-->
        <div id="form-submit">
            <input type="submit" value="Let me in!">
        </div>
    </form>
    <script>
        function passVis() {
            var pw = document.getElementById("inp_password");
            if (pw.type === "password") {
                pw.type = "text";
            } else {
                pw.type = "password";
            }
        }
        const pasteBox = document.getElementById("inp_password");
        pasteBox.onpaste = e => {
            e.preventDefault();
            return false;
        };
    </script>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="assets/js/main.js"></script>
</html>
