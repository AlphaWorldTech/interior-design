 <?php
if($_POST['mail_click']=='clicked')
{
    $email = $_POST['email'];

    $work = $_POST['work'];


    $working = $_POST['working'];
    $property = $_POST['area'];

    $budget = $_POST['budget'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $messages = $_POST['message'];

    echo $email;
    echo $working;
    echo $property;
    echo $budget;
    echo $name;
    echo $phone;
    echo  $messages;

    try{
                
                
            ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
            $from = "info@alphaworldtech.com";
            $to = $email;
            $subject = "Interested Discussion";
            $message = "
            Dear {$name}
            
            Thank for showing your interest in intrested Discussion With our Team,
            here is your detals..
            Name : {$name}
            Phone : {$phone}
            New Work/ Rennovation : {$work}
            Working / Reworking : {$working}
            Property Area : {$property}
            Budget : {$budget}
            Message : {$messages}
            
            
            Thanks!
            
            RG Design Team
            
            ";
            
            $headers = "From:" ."Career" ;
            if(mail($to,$subject,$message, $headers))
            {
            echo "The email message was sent.";
            $message = "success";
            echo mail($to,$subject,$message, $headers);
            header("location: /contact-us.php?message={$message}");
            } 
            else
            {
            	echo "The email message was not sent.";
            	$message= "nosuccesss";
            	 header("location: /contact-us.php?message={$message}");
            }
                    




        }
        catch(Exception $e){
         echo 'Message: ' .$e->getMessage();
            $message= "nosuccesss";
            header("location: /contact-us.php?message={$message}");

       }
}

?>