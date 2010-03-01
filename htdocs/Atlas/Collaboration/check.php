<?php 
/*$ftp_server="lxplus.cern.ch";
echo $conn_id = ftp_ssl_connect($ftp_server);
echo substr(sprintf('%o', fileperms ("templates")), -4);*/
/*copy("http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20General%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01","xmls/general.xml");*/
//$stringData = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Notes');
/*$ftp_server="ftp.procab-group.com";
$conn_id = ftp_connect($ftp_server); 
$ftp_user_name="procabgr123@procab-group.com";
$ftp_user_pass="geneveCAB*@#";
// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

// check connection
if ((!$conn_id) || (!$login_result)) { 
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user $ftp_user_name"; 
        exit; 
    } else {
        echo "Connected to $ftp_server, for user $ftp_user_name";
    }

// upload the file

//General News
$generalnews = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20General%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');
$generalnews_myFile = "atlas/xmls/general.xml";
$fh = fopen($generalnews_myFile, 'w') or die("can't open file");
fwrite($fh, $generalnews);
/*$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY); 

// check upload status
if (!$upload) { 
        echo "FTP upload has failed!";
    } else {
        echo "Uploaded $source_file to $ftp_server as $destination_file";
    }


fclose($fh);
*/

if (!function_exists("ssh2_connect")) die("function ssh2_connect doesn't exist");
// log in at server1.example.com on port 22
if(!($con = ssh2_connect("lxplus.cern.ch", 22))){
    echo "fail: unable to establish connection\n";
} else {
    // try to authenticate with username root, password secretpassword
    if(!ssh2_auth_password($con, "atlspage", "Procab2009")) {
        echo "fail: unable to authenticate\n";
    } else {
        // allright, we're in!
        echo "okay: logged in...\n";
        
        // execute a command
        if(!($stream = ssh2_exec($con, "ls -al" )) ){
            echo "fail: unable to execute command\n";
        } else{
            // collect returning data from command
            stream_set_blocking( $stream, true );
            $data = "";
            while( $buf = fread($stream,4096) ){
                $data .= $buf;
            }
            fclose($stream);
        }
    }
}
?>

