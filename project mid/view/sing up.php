<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <form method="post" action="../controller/singup checker.php"
        style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>Quick Eagle Currer Service</td>
                <td align="right"><a href="index.php">Back to Home!?</a></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <fieldset>
                        <form method="post" action="../controller/singup checker.php">
                            <legend>User Registration Panel</legend>
                            <table border="1" cellpadding="10" cellspacing="0">
                                <tr>
                                    <td>Name: </td>
                                    <td>
                                        <input type="text" name="uname" id="" required
                                            placeholder="enter your name here.">
                                    </td>
                                </tr>

                                <tr>
                                    <td>E-mail: </td>
                                    <td>
                                        <input type="email" name="uemail" id="" required
                                            placeholder="enter your email here.">
                                        <input type="submit" value="i" title="hint: example@example.com">
                                    </td>
                                </tr>

                                <tr>

                                    <td>Gender: </td>
                                    <td>
                                        <Select name="ugender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </Select>
                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td>Date Of Birth: </td>
                                    <td><input type="date" name="udob" id="" required>
                                    
                                </td>
                                </tr>

                                <tr>
                                    <td>Phone Number: </td>
                                    <td><input type="number" name="uphone" id="" required placeholder="enter your phone number here.">
                                    
                                </td>
                                </tr>
                                <tr>
                                    <td>NID Number: </td>
                                    <td><input type="number" name="unid" id="" required placeholder="enter your nid no here.">
                                    
                                </td>
                                </tr>

                                <tr>
                                    <td>Password: </td>
                                    <td>
                                        <input type="password" name="upassword" id="" required placeholder="type your password here.">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>Re-password: </td>
                                    <td>
                                        <input type="password" name="rePassword" id="" required placeholder="retype your password">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" name="submit" id="" value="REGISTER ME">
                                        <input type="reset" name="reset" id="" value="Reset">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="2">
                                        <a href="sing in.php">Already Have An Account?</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <p>
                        Having trouble!? <br>
                    <p style="color: red;">Hotline: 01760262200</p>
                    </p>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>