<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	require_once("connect.php");

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$params = json_decode(file_get_contents("php://input"), true);

		if(isset($params['auth_key']) && isset($params['query'])){

			$auth_key = mysqli_real_escape_string($con,$params['auth_key']);
			$auth_key = htmlentities($auth_key);

            $query = mysqli_real_escape_string($con,$params['query']);
			$query = htmlentities($query);
			
			$skip = isset($params['skip']) ? $params['skip'] : 0;
			$top = isset($params['top']) ? $params['top'] : 10;

            $query1 = "SELECT u.userid, u.username, u.name, ui.image, ub.id as book, s.profile_in_search
            FROM user as u 
            LEFT JOIN aboutme as ui ON ui.userid = u.userid 
            LEFT JOIN userbook as ub ON ub.guestuserid = u.userid 
            LEFT JOIN setting as s ON s.userid = u.userid
            WHERE (s.profile_in_search IS NULL OR s.profile_in_search = 1) AND (u.email LIKE '%{$query}%' OR u.username = '$query') LIMIT $skip, $top";
            $run1 = mysqli_query($con, $query1);
            if(mysqli_num_rows($run1)){
            	while($row1 = mysqli_fetch_assoc($run1)){
            		if($row1['book'] != NULL){
            			$saved_status = 0;
            			$button_text = "Save";
            		}else{
            			$saved_status = 1;
            			$button_text = "Message";
            		}
	                $message[] = array(
	                    'name' => $row1['name'],
	                    'userid'=> $row1['userid'],
	                    'username'=> $row1['username'],
	                    'image' => $baseurl.'/knockapi/docs/profile/'.$row1['image'],
	                    'saved_status' => $saved_status,
	                    'button_text' => $button_text,
	                    'button_color' => '#07BDDA',
	                    'profile_in_search' => $row1['profile_in_search'],
	                    'verified' => true,
	                );
            	}
                echo json_encode(array('status'=> 1, 'code'=>200, 'message'=>'No record found', 'result'=>$message));
            }else{
                echo json_encode(array('status'=> 1, 'code'=>200, 'message'=>'No record found'));
            }
		}else{
			echo json_encode(array("status" => 0, "code"=> 400, "message" => "Unauthorized"));
		}
	}else{
		echo json_encode(array("status" => 0, 'code'=> 405, "message" => "Method Not Allowed"));
	}



?>