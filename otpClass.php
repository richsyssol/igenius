<?php

define('Key', 'd1b8de639e466a67d5586625a244c11827ddabeec7b64077a047dd8f6b16417c');
define('IV', 'be2375806f1b5f7f13af7453c1d0b185');

class OneTimePassword
{
	public $conn;

    public function __construct()
    {
		 include 'includes/session.php';
        include 'includes/slugify.php';	
		 $this->conn = $pdo->open();
        
    }


    public function send($mobile,$name,$email,$address,$message)
    {
    $otp = $this->generateOTP();
     $response = $this->sendOtp($mobile,$name,$otp);
    //$response = true;

if($response){
 $data = $this->insertOTP($name,$email,$mobile,$address,$message,$otp);

        return $data;
}
		return 0;
       
   

   
    }
	
	

    private function encryption($data)
    {
        return openssl_encrypt($data, 'aes-256-cbc', hex2bin(Key), 0, hex2bin(IV));
    }
    public function decryption($encryptedData)
    {
        return openssl_decrypt($encryptedData, 'aes-256-cbc', hex2bin(Key), 0, hex2bin(IV));
    }

    private function sendOtp($mobile, $name, $otp)
    {
        $msg = "Dear $name Your OTP is : $otp Thank you so much for contacting us.
I-Genius Abacus Academy";

        $data = [
            'username' => 'genius999',
            'pass' => 'Igenius@sms23',
            'senderid' => 'IGNEIS',
            'dest_mobileno' => $mobile,
            'msgtype' => 'TXT',
            'message' => $msg,
            'response' => 'Y'
        ];

        // Build the query string
        $queryString = http_build_query($data);

        // Replace %40 with @
        $queryString = str_replace('%40', '@', $queryString);

        // Construct the full URL
        $url = "https://www.smsjust.com/sms/user/urlsms.php?" . $queryString;
		
		


        $ch = curl_init();

        // Set the URL for the POST request

        curl_setopt($ch, CURLOPT_URL, $url);

        // Specify that this is a POST request
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);


        $response = curl_exec($ch);
        curl_close($ch);
        if (curl_errno($ch)) {
            return 'cURL Error: ' . curl_error($ch);
        } else {
            // Check HTTP response code
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            return $httpCode;
        }
    }

    private function insertOTP($name,$email,$contact,$address,$message,$otp)
    {

       
      
        try {
            $stmt =  $this->conn->prepare("INSERT INTO tbl_otp (email,mobile,otp) VALUES (:email, :mobile, :otp)");
            if ($stmt->execute(['email' => $email, 'mobile' => $contact, 'otp' => $otp])) {
			
                $last_id = $this->conn->lastInsertId();

                $userData = [
                    'id' => $last_id,
                    'name' => $name,
                    'email' => $email,
                    'address' => $address,
                    'contact' => $contact,
                    'message' => $message

                ];
		
                $jsonString = json_encode($userData);
				
		

             return $this->encryption($jsonString);
               



            }






        } catch (PDOException $e) {
            echo $e->getMessage();
            $_SESSION['error'] = $e->getMessage();
        }


        $pdo->close();
    }

    private function generateOTP()
    {
        $characters = '0123456789'; // Define characters for OTP
        $charactersLength = strlen($characters);
        $otp = '';

        for ($i = 0; $i < 6; $i++) {
            $otp .= $characters[rand(0, $charactersLength - 1)]; // Append random character to OTP
        }

        return $otp;
    }
	
		public function otpExist($email,$contact,$id){

		
		


        $stmt =  $this->conn->prepare("SELECT COUNT(*) FROM tbl_otp WHERE email = :email AND mobile = :mobile AND id = :id");
        $stmt->execute(['email' => $email, 'mobile' => $contact,'id'=>$id]);



        $stmt->execute();
        $count = $stmt->fetchColumn();
		
		return $count;
	
	}
		public function deleteOTP($email,$contact,$id){

		
		
			  $stmt_2 =  $this->conn->prepare("DELETE FROM tbl_otp WHERE email = :email AND mobile = :mobile AND id = :id");
    $stmt_2->execute(['email' => $email, 'mobile' => $contact,'id'=>$id]);
		
		
	}

}

?>