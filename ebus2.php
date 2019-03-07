<?php
session_start();
$fullNameValue = "";
$totalValue = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SEESION['txtNum'] = $NumberValue;
/*
 * Allocate the mobile number seesion variable to a textbox
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
        
         <style>
				body {
					background-image: url("images/purplebackground.jpg");
					background-size: 100% 150%;
						}
                                                div {
                                        
                                        margin-top: 200px;
                                        margin-bottom: 200px;
                                        margin-right: 200px;
                                        margin-left: 100px;
                                        
                                       }
                                th, td {
                                        padding: 5px;
                                        }     
			</style>

    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value=""></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="tel" id="txtNum" name="txtNum"
                            pattern="[0-9]{3}-[0-9]{3} [0-9]{4}"
                            title="Format: 123-456 7890" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" id="txtEmail" name="txtEmail"
                            
                            title="Format: _____@____.___" required>
                            </td>
                        </tr>
                       
                        <tr>
                            <td>PIN</td>
                            <td><input type="password" id="psw" name="psw"
                                       pattern="[0-9]{4}"
                                       title="Please enter a 4 digit pin" required></td>
                        </tr>
                        <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                        
                    </table>
               </center>
                <center>
                  <input type="submit" name="btnContinue" onclick="" value="Continue" />  
                </center>
       </div>
     </form>
    </body>
</html>

