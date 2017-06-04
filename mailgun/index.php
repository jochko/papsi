<?php
// error_reporting(0);
require dirname(__FILE__).'/vendor/autoload.php';
use Mailgun\Mailgun;
$server = "localhost";
$username = $_SERVER['SERVER_NAME'] === 'localhost' ? 'root' : 'username_db';
$password = $_SERVER['SERVER_NAME'] === 'localhost' ? '' : 'password_db';
$database = "db_papsiciletuh";

$conn = mysql_connect($server,$username,$password);
if ($conn) {
    mysql_select_db($database);
}
else{
    echo "Not Connected";
    die;
}
$list_data = mysql_query("SELECT * FROM t_trigger_mailgun mailgun WHERE 1 AND mailgun.`status`=0");

while ($result = mysql_fetch_assoc($list_data)) {
    $data[] = $result;
}

if (!empty($data)) {
    foreach ($data as $key => $value) {
        $headers  = '';
        $temp     = '';
        $mail_body= '';

        $mail_body = $value['message'];

        $subject   = '[Website Title] Contact: '; 
        $headers  .= "Content-Type: text/html; charset=ISO-8859-1\r\n".
        $headers  .= "From: from@gmail.com <from@gmail.com>\r\n";


        $_mailgun_api_key   = 'key-2386df7a0ece03bbdc1d9a6a697f13c6';
        $_mailgun_domain    = 'https://api.mailgun.net/v3/dev.antikode.com';


        // KEY MONSTORE MAILGUN 
        // $_mailgun_api_key   = "key-238a17989183dd1bba1eb4fd2180e9cb";
        // $_mailgun_domain    = "heymonstore.com";

        // KEY ANTIKODE MAILGUN 
        // $_mailgun_api_key   = "key-382c00b77267aa9f6b2f4d4fe9bc4efa";
        // $_mailgun_domain    = "https://api.mailgun.net/v3/mail.antikode.com";


        $_mailgun_from     = $value['from'];
        $_mailgun_to       = $value['email_to'];
        $_mailgun_subject  = $value['subject'];
        $mg                = new Mailgun($_mailgun_api_key);
        $domain            = $_mailgun_domain;
        
        if (!empty($value['attachment'])) {
            $data = $mg->sendMessage($domain, array('from'  => $_mailgun_from, 
                                                 'to'      => $_mailgun_to, 
                                                 'subject' => $_mailgun_subject, 
                                                 'html'    => $mail_body),array("attachment" => array(0 =>getcwd()."/../".$value['attachment'])));
        }
        else{
             $data = $mg->sendMessage($domain, array('from'  => $_mailgun_from, 
                                                  'to'      => $_mailgun_to, 
                                                  'subject' => $_mailgun_subject, 
                                                  'html'    => $mail_body));   
        }

        // print_r($data);
        // die;
        $queUpdate = "UPDATE t_trigger_mailgun SET status='1',response='".$data->http_response_body->message."' WHERE 1 AND id='".$value['id']."'";
        mysql_query($queUpdate);
    }
}


?>  