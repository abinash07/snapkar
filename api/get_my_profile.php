<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	require_once("connect.php");

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$params = json_decode(file_get_contents("php://input"), true);

		if(isset($params['auth_key'])){
			$auth_key = mysqli_real_escape_string($con,$params['auth_key']);
			$auth_key = htmlentities($auth_key);
            
            $query = "SELECT * FROM sk_user WHERE auth_key = '$auth_key'";
            $run = mysqli_query($con, $query);
            if(mysqli_num_rows($run)){
                $query2 = "SELECT u.userid as userid, u.username, u.name, u.email, am.bio, am.image, am.views 
                FROM sk_user as u 
                LEFT JOIN sk_about_me as am ON am.userid = u.userid 
                WHERE u.auth_key = '$auth_key'";
                $run2 = mysqli_query($con, $query2);
                if(mysqli_query($con,$query2)){
                    $row2 = mysqli_fetch_assoc($run2);
                    $userid = $row2['userid'];
                    $name = $row2['name'];
                    $username = $row2['username'];
                    $email = $row2['email'];
                    $views = $row2['views'];
                    $bio = $row2['bio'];


                    $message = array(
                        'userid' => $userid,
                        'name' => $name,
                        'username' => $username,
                        'email' => $email,
                        'views' => $views,
                        'bio' => $bio,
                    );

                    echo json_encode(array("status" => 1, "code"=> 200, "message" => "Record found", "result" => $message));
                }else{
                    echo json_encode(array("status" => 0, "code"=> 400, "message" => "No record found", "result" => ""));
                }
            }else{
                echo json_encode(array("status" => 0, "code"=> 400, "message" => "In Valid Authkey"));
            }
		}else{
			echo json_encode(array("status" => 0, "code"=> 400, "message" => "Unauthorized"));
		}
	}else{
		echo json_encode(array("status" => 0, 'code'=> 405, "message" => "Method Not Allowed"));
	}
?>