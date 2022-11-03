


<html>
    <header></header>
    <body>
        <?php setcookie('mname', 'Beck') ; ?>
        <form method="post" action="page2.php?fname=peter&lname=smith">
            <input type="hidden" value="Simon" name="fname">
            pleae enter your last name: <input type="text" size="15" name="lname">
            <input type="submit" value="submit">
        </form>
    </body>
</html>
