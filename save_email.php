<?php 
    	// Connect to database
	$conn = mysqli_connect('eu-cdbr-west-03.cleardb.net', 'bfbcc486e9367e', 'b1f4951b', 'heroku_4f9d53a2e933baf');
// mysql://bfbcc486e9367e:b1f4951b@eu-cdbr-west-03.cleardb.net/heroku_4f9d53a2e933baf?reconnect=true
	//check connection

	if(!$conn) {
		echo "connection error: " . mysqli_connect_error();
	}

    $email = "";
    $errors = array('email' => '');
    $success = "success";


    if (isset($_POST['submit'])) {
        	//check email
		if (empty($_POST['email'])) {
			$errors['email'] = "An email is required <br/>";
		} else {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errors['email'] = "email must be a valid email address";
			}
      
        }

   //  	mysqli_query('INSERT INTO ...');
			// if (mysqli_errno() == 1062) {
			//     print 'no way!';
			// }
//         $res = @mysql_query( “INSERT INTO Categories SET Category=’$cat’”);

// if( $res ){

// } else {
// // An error occured

// if( mysql_errno() == ‘code used for not unique’ )

// echo “please enter a unique value”;

// }

// }
        
        if (array_filter($errors)) {
			//echo "there are errors in the form";
		} else {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            
            	//create sql
            $sql = "INSERT INTO test_email_capture(email) VALUES('$email')";

            if (mysqli_query($conn, $sql)) {
				//success
                // echo "email registration was successful";
				header(('Location: subscribed.php'));
			} else {
				//error
				//echo 'query error: ' . mysqli_error($conn);
				$errors['email'] = "email has already been registered";
			}


			// echo "form is valid";
			
		}
    } //end of POST check

?>