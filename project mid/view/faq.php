<?php
include_once('faq.php');
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
</head>
<body>
     <td align="right"><a href="index.php">Back to Home!?</a></td>
        <table width="100%" height="550"align="center">
            <tr>
                <td 
                    <main>
                        <table align="center">
                            <form method="post" action="../controllar/index.php">
                                <fieldset align="center" width="70%" height="300">
                                    <legend align="center"><h1>FAQ</h1></legend>
                                    Comment: <input type="text" name="name"/><br><br>
                                    
                                    
                                    <input type="submit" name="FAQ" value="Submit">  
                                    
                                </fieldset>
                            </form>
                        </table>
                    </main>
                </td>
            </tr>
        </table>
</body>
</html>

<?php



?>