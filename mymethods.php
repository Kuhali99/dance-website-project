<?php
 
    function dbConnect()
    {
        $hostname="localhost";
        $username="root";
        $password="";
        $dbname="dance";


        $conn=mysqli_connect($hostname,$username,$password,$dbname);

        return $conn;
    }

    function displaydetails()
    {
        {
            $conn=dbConnect();
            
            if($conn)
            {
                $sql="select * from danceform";
                $res=mysqli_query($conn,$sql);
                
                return $res;
            }
            else
            {
                return "not connected";
            }
        }
    }

    function scheduledetails()
    {
        {
            $conn=dbConnect();
            
            if($conn)
            {
                $sql="select * from schedule";
                $res=mysqli_query($conn,$sql);
                
                return $res;
            }
            else
            {
                return "not connected";
            }
        }
    }
    
    function getscheduleDataById($scheduleid)
    {
        $conn=dbConnect();

    if($conn)
        {
            $sql="select * from schedule where scheduleid='$scheduleid'";
            $res=mysqli_query($conn,$sql);
            
            return $res;
        }
        else
        {
            return "not connected";
        }
    }

    function getdetailsaddress()
    {
        {
            $conn=dbConnect();
            
            if($conn)
            {
                $sql="select * from login";
                $res=mysqli_query($conn,$sql);
                
                return $res;
            }
            else
            {
                return "not connected";
            }
        }
    }

    
    include('phpmailer/PHPMailerAutoload.php');

    function contactus($data)
    {

    $name=$data['name'];
    $contact=$data['contact'];
    $email=$data['email'];
    $msgus=$data['msgus'];
    
        $conn=dbConnect();

        if($conn)
        {
            $sql="INSERT INTO mail VALUES ('$name','$contact','$email','$msgus')";
            $res=mysqli_query($conn,$sql);
            if($res==1)
            {
                sendNotify($email);
                return "added and sent mail successfully";
            }
            
            else
            return "not added";
        }
        else
        {
            return "not connected";
        }
    }

    function sendNotify($toEmail)
    {
        $mail = new phpmailer;
		$mail->isSMTP();  //Only enable when use in local server 

		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';

		$mail->Username = 'kuhalisaha00@gmail.com'; //company emailid
		$mail->Password = 'tyrfxxjzfoxahket';

		$mail->setFrom('kuhalisaha00@gmail.com', 'Dropbeat'); //company emailid and company name
		$mail->addAddress($toEmail);
		$mail->addReplyTo('kuhalisaha00@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = 'New contact enquery';
		$mail->Body = '<h1>Thank you for connecting with us</h1>';

		if(!$mail->send())
		{
			return 0;
		}
		else{
			return 1;
		}
    }

    function submit($data)
    {

       
        $hostname="localhost";
        $username="root";
        $password="";
        $dbname="dance";


        $conn=mysqli_connect($hostname,$username,$password,$dbname);

        $name=$data['name'];
        $contactno=$data['contactno'];
        $subject=$data['subject'];
        $year=$data['year'];
        $msg=$data['msg'];

   
    if($conn)
    
    {
        $sql="INSERT INTO feedback(name,contactno,subject,year,msg ) VALUES ('$name','$contactno','$subject','$year','$msg')";
        $res=mysqli_query($conn,$sql);

        if($res==1)
        
           
        return "success";
    }
        
    else
    {
        return "error";
    }

    }
  
?>