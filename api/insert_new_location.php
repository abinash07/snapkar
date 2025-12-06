<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	require_once("connect.php");
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$params = json_decode(file_get_contents("php://input"), true);

		if(isset($params['auth_key']) && isset($params['state']) && isset($params['city']) && isset($params['sub_city']) && isset($params['locality'])){

	        $auth_key = mysqli_real_escape_string($con,$params['auth_key']);
		    $auth_key = htmlentities($auth_key);
			
            $state = mysqli_real_escape_string($con,$params['state']);
			$state = htmlentities($state);

            $city = mysqli_real_escape_string($con,$params['city']);
			$city = htmlentities($city);

            $sub_city = mysqli_real_escape_string($con,$params['sub_city']);
			$sub_city = htmlentities($sub_city);

            $locality = mysqli_real_escape_string($con,$params['locality']);
			$locality = htmlentities($locality);

            $code = strtoupper(substr($locality,0,3));

            $time = time();
            
		    $query = "SELECT * FROM sk_user WHERE auth_key = '$auth_key'";
            $run = mysqli_query($con, $query);
            if(mysqli_num_rows($run)){
                $row = mysqli_fetch_assoc($run);
                $userid = $row['userid'];
                
                $query3 = "INSERT INTO sk_village_master (sub_city_id,name,code,status,created_by,created_on) values ('$sub_city','$locality','$code',1,1,'$time')";
                if(mysqli_query($con,$query3)){
                    echo json_encode(array("status" => 1, "code"=> 200, "message" => "Added"));
                }else{
                    echo json_encode(array("status" => 0, "code"=> 400, "message" => "Something error, Try after sometime"));
                }
            }else{
                echo json_encode(array("status" => 0, "code"=> 400, "message" => "Unauthorized"));
            }
		}else{
			echo json_encode(array("status" => 0, "code"=> 400, "message" => "Unauthorized"));
		}
	}else{
		echo json_encode(array("status" => 0, 'code'=> 405, "message" => "Method Not Allowed"));
	}
?>