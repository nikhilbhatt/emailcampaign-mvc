<?php
 use Aws\Ses\SesClient;
 use Aws\Exception\AwsException;
 class SendEmail{
   protected $pdo,$recipient_emails=[];
   public function __construct($pdo)
   {
       $this->pdo=$pdo;
   }
   public function getrecieveremail($table)
   {
      $stmt=$this->pdo->query("SELECT email from {$table}");
      $emails=$stmt->fetchAll(PDO::FETCH_NUM);
      foreach($emails as $key=>$e)
       {
           array_push($this->recipient_emails,$e[0]);
       }
   }
   public function sesemailsend($subject,$html_body)
   {
       //use ses api to send email here. catch the $recieveremail and $senderemail $subject and $body.
        $this->getrecieveremail('subscriber');
        require 'app/core/vendor/autoload.php';
       
       $SesClient = new SesClient([
         'profile' => 'default',
         'version' => '2010-12-01',
         'region'  => 'ap-south-1'
        ]);
       $sender_email = 'japer78029@allmtr.com';
       $configuration_set = 'ConfigSet';
       $plaintext_body = 'This email was sent with Amazon SES using the AWS SDK for PHP.' ;
       $char_set = 'UTF-8';
       try {
                $result = $SesClient->sendEmail([
                        'Destination' => [
                                           'ToAddresses' => $this->recipient_emails,
                                          ],
                         'ReplyToAddresses' => [$sender_email],
                         'Source' => $sender_email,
                         'Message' => [
                         'Body' => [
                                     'Html' => [
                                                'Charset' => $char_set,
                                                'Data' => $html_body,
                                                ],
                                      'Text' => [
                                                'Charset' => $char_set,
                                                'Data' => $plaintext_body,
                                                ],
                                    ],
                        'Subject' => [
                                     'Charset' => $char_set,
                                     'Data' => $subject,
                                    ],
                                ],
                        'ConfigurationSetName' => $configuration_set,
                    ]);

                    $messageId = $result['MessageId'];
                    $this->savedata($subject,$html_body);
                    echo '<script>alert("email sent!!")</script>';
            } catch (AwsException $e) {
                // output error message if fails
                echo '<script>alert("The email was not sent.")</script>';
                //  header("location:sendemail");
            }
   }
   public function savedata($sub,$body)
   {
       $table='listpreviousemail';
       $sendby=$_SESSION['user_email'];
       $st=$this->pdo->prepare("INSERT INTO {$table}(`subject`,`body`,`sendby`,`time`) VALUES('$sub','$body','$sendby',CURRENT_TIME())");
       $st->execute();
    //    $newstmt=$this->pdo->prepare("INSERT INTO {$table}(`name`,`email`) VALUES('$name','$email')");
    //    $newstmt->execute();
   }
}
?>