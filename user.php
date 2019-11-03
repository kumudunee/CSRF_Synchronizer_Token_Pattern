<!DOCTYPE html>
<?php
    session_start();
    if (!isset($_COOKIE["active"]) || $_COOKIE["active"] !== session_id()) {
        header("Location: logout.php");
    }
?>
<html>
    <body>
        <h1>Welcome Admin!</h1>
        <form method="POST" action="submit.php" id="csrf">
            <button name="param" value="delete" type="submit">Delete Account</button>
        </form>
        <a href="logout.php">Logout</a>
        <script>
            var ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var tokenInput = document.createElement("INPUT");
                    tokenInput.setAttribute("type", "hidden");
                    tokenInput.setAttribute("name", "token");
                    tokenInput.setAttribute("value", this.response);
                    document.getElementById("csrf").appendChild(tokenInput);
                }
            };
            ajax.open("POST", "token_request.php", true);
            ajax.send();
        </script>
    </body>
</html>