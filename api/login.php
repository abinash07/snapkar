<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	require_once("connect.php");


	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$params = json_decode(file_get_contents("php://input"), true);
		
		if(isset($params['username']) && isset($params['password'])){

			$email = mysqli_real_escape_string($con,$params['username']);
			$email = htmlentities($email);

			$password = mysqli_real_escape_string($con,$params['password']);
			$password = htmlentities($password);
			
			$device_token = $params['fcm_token'];
			#$device_token = '123456';

			$date = time();

			$emailquery ="SELECT * FROM user WHERE email='$email'";
			$equery = mysqli_query($con,$emailquery);
			$emailcount= mysqli_num_rows($equery);

		    if($emailcount){
				$email_pass = mysqli_fetch_assoc($equery);
				$db_pass = $email_pass['password'];
				$userid = $email_pass['userid'];
				$status = $email_pass['status'];
				$pass_decode= password_verify($password, $db_pass);

				if($status){
					if($pass_decode){
						$query3 = "SELECT u.name, u.username, u.email, u.phone, u.reffer_id, u.created_on, am.bio, am.image FROM user as u LEFT JOIN aboutme as am ON u.userid = am.userid WHERE u.userid = '$userid'";
						$run3 = mysqli_query($con,$query3);
						$row3 = mysqli_fetch_assoc($run3);
						
						$auth_key = _generate_key($email,'123456');
						$query4 = "UPDATE user SET auth_key = '$auth_key', auth_key_time = '$date', device_token ='$device_token' WHERE userid ='$userid'";
						$run4 = mysqli_query($con,$query4);

						$message = array(
							'name' => $row3['name'],
							'username' => $row3['username'],
							'bio' => $row3['bio'],
							'email' => $email,
							'phone' => $row3['phone'],
							'reffer_id' => $row3['reffer_id'],
							'auth_key' => $auth_key,
							'image' => $baseurl.'/knockapi/docs/profile/'.$row3['image'],
							'image_last_name'=> $row3['image'],
							'created_on' => $row3['created_on']
						);
						echo json_encode(array('status'=> 1, 'code'=>200, 'message'=>'Login success','result'=>$message));
					}else{
						echo json_encode(array('status'=> 0, 'code'=>400, 'message'=>'*Password does not Match, Click on Forgot'));
					}
				}else{
					echo json_encode(array('status'=> 0, 'code'=> 400, 'message' => 'Your account has been blocked'));
				}
			}else{
				echo json_encode(array('status'=> 0, 'code' => 400, 'message'=>'Wrong email/username'));
			}
		}else{
			echo json_encode(array("status" => 0, "code"=> 400, "message" => "Please provide email, and password"));
		}
	}else{
		echo json_encode(array("status" => 0, 'code'=> 405, "message" => "Method Not Allowed"));
	}






	function _generate_key($email,$token){
		do
		{
			// Generate a random salt
			$salt = base_convert(bin2hex(random_bytes(64)), 16, 36);
			// If an error occurred, then fall back to the previous method
			if ($salt === FALSE)
			{
				$salt = hash('sha256', time() . mt_rand().base64_encode($email.$token));
			}

			$new_key = substr($salt, 0, 40);
		}
		while (_key_exists($new_key));
		return $new_key;
	}
	function _key_exists($key){
		return false;
	}
?>