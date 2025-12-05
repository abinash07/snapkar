<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	require_once("connect.php");
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$params = json_decode(file_get_contents("php://input"), true);

		if(isset($params['name']) && isset($params['email']) && isset($params['password'])){

		    $name = mysqli_real_escape_string($con,$params['name']);
		    $name = htmlentities($name);
		    $firstname = strtok($name, " ");

		    $email = mysqli_real_escape_string($con,$params['email']);
		    $email = htmlentities($email);

		    $password = mysqli_real_escape_string($con,$params['password']);
		    $password = htmlentities($password);
		    $pass = password_hash($password, PASSWORD_BCRYPT);
		    
		    $device_token = $params['device_token'] ?? NULL;

			if(isset($params['reffer'])){
			    $reffer = mysqli_real_escape_string($con,$params['reffer']);
			    $reffer = htmlentities($reffer);
			}else{
				$reffer = "Snapkar";
			}

		    $query2 = "SELECT email FROM sk_user WHERE email ='$email'";
		    $run2 = mysqli_query($con,$query2);
		    if(mysqli_num_rows($run2)>0){
		        echo json_encode(array('status'=> 0, "code"=> 400, 'message' => 'This email id is already used.'));
		    }else{
			    $query1 = "SELECT id FROM sk_user ORDER BY 1 DESC LIMIT 1";
			    $run1 = mysqli_query($con,$query1);
			    $row1 = mysqli_fetch_array($run1);
			    $lid = @$row1['id'];
			    $reffer_id ="SK".date("Y").$lid;
			    $username = $firstname.$lid;
			    $userid = uniqid().$lid;

			    $date = time();
		    	$token = bin2hex(random_bytes(35));
			    $lastlogin = time();
			    $auth_key = _generate_key($email,'123456');


		        $query="INSERT INTO sk_user (userid,username,name,email,phone,reffer,reffer_id,userlink,password,token,auth_key,auth_key_time,device_token,status,created_on) VALUES ('$userid','$username','$name','$email','','$reffer','$reffer_id','$password','$pass','$token','$auth_key','$date','$device_token','1','$date')";


		        if(mysqli_query($con,$query)){
					$message = array(
						'name' => $name,
						'username' => $username,
                        'email' => $email,
						'bio' => "Hi you can knock me",
                        'image' => $baseurl.'knockapi/docs/profile/noimg.png',
						'reffer_id' => $reffer_id,
						'auth_key' => $auth_key,
					);
		          	echo json_encode(array('status'=>1, "code"=> 200, 'message'=>'You account has been created','result'=>$message));
		        }else{
		            echo json_encode(array('status'=>0, "code"=> 400,'message'=>'Something error, Try after sometime'));
		        }
		    }
		}else{
			echo json_encode(array("status" => 0, "code"=> 400, "message" => "Please provide name, email and password"));
		}
	}else{
	    echo json_encode(array("status" => 0, "code"=> 405, "message" => "Method Not Allowed"));
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