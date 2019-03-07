<!DOCTYPE html>
<html>
    <head>
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
    <!-- //Starting the session to get the session variable from the last page-->
    <div>
        <?php
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        $NumberValue = $_POST['txtNum'];
        echo "The name is: ".$fullNameValue.".";
        echo "<br></br>";
        echo "The phone number is: ".$NumberValue.".";
        echo "<br></br>";
        echo "The total value is ".$totalValue.".";
    ?>
    </div>
</body>
</html>



