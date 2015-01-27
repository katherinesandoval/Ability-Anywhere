<?php
$dbhost = '*******';
$dbuser = '*******';
$dbpass = '*******';
$db = "abilityAnywhere";
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if($conn)
{
    $dbconn = mysql_select_db($db) or die(mysql_error());
}
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
if(isset($_POST['add']))
{
$autism = isset($_POST['autism']) ?$_POST['autism']:0;
$deafblind = isset($_POST['deafblind']) ?$_POST['deafblind']:0;
$deafness = isset($_POST['deafness']) ?$_POST['deafness']:0;
$devdelay = isset($_POST['devdelay']) ?$_POST['devdelay']:0;
$disturbance= isset($_POST['disturbance']) ?$_POST['disturbance']:0;
$hearing = isset($_POST['hearing']) ?$_POST['hearing']:0;
$intdis = isset($_POST['intdis']) ?$_POST['intdis']:0;
$muldis = isset($_POST['muldis']) ?$_POST['muldis']:0;
$multdis = isset($_POST['multdis']) ? $_POST['multdis'] : 0 ;
$orthopedic =isset($_POST['orthopedic']) ? $_POST['orthopedic']:0;
$healthimp =isset($_POST['healthimp']) ? $_POST['healthimp']:0;
$otherhealth= isset($_POST['otherhealth']) ? $_POST['otherhealth'] : 0 ;
$spec =isset($_POST['spec']) ?$_POST['spec']:0;
$speech = isset($_POST['speech'])?$_POST['speech']:0;
$brain = isset($_POST['brain'])?$_POST['brain']:0;
$visual = isset($_POST['visual'])?$_POST['visual']:0;
$ambulatory = isset($_POST['ambulatory'])?$_POST['ambulatory']:0;
$scare = isset($_POST['scare'])?$_POST['scare']:0;
$living = isset($_POST['living'])?$_POST['living']:0;
$name = isset($_POST['name'])?$_POST['name']:0;
$address = isset($_POST['address'])?$_POST['address']:0;
$city= isset($_POST['city'])?$_POST['city']:0;
$zip = isset($_POST['zip'])?$_POST['zip']:0;
$phone = isset($_POST['phone'])?$_POST['phone']:0;
$mail = isset($_POST['mail'])?$_POST['mail']:0;
$person= isset($_POST['person'])?$_POST['person']:0;
$family = isset($_POST['family'])?$_POST['family']:0;
$advocate = isset($_POST['advocate'])?$_POST['advocate']:0;
$telephone = isset($_POST['telephone'])?$_POST['telephone']:0;
$caregiver = isset($_POST['caregiver'])?$_POST['caregiver']:0;
$health=isset($_POST['health'])? $_POST['health']:0;
$care = isset($_POST['care'])?$_POST['care']:0;
$adcare = isset($_POST['adcare'])?$_POST['adcare']:0;
$phon = isset($_POST['phon'])?$_POST['phon']:0;
$inperson= isset($_POST['inperson'])?$_POST['inperson']:0;
$assist = isset($_POST['assist'])?$_POST['assist']:0;
$other = isset($_POST['other'])?$_POST['other']:0;
$specify = isset($_POST['specify']) ? $_POST['specify'] : 0 ;
$answer = isset($_POST['answer'])?$_POST['answer']:0;
$answer1= isset($_POST['answer1'])?$_POST['answer1']:0;
$answer2 = isset($_POST['answer2'])?$_POST['answer2']:0;
$answer3 = isset($_POST['answer3'])?$_POST['answer3']:0;
$yes = isset($_POST['yes'])?$_POST['yes']:0;
$no=isset($_POST['no'])? $_POST['no']:0;
$idn = isset($_POST['idn'])?$_POST['idn']:0;
$answer4 = isset($_POST['answer4'])?$_POST['answer4']:0;
$sql = "INSERT INTO survey1".
       "(id , autism, deafblind , deafness, devdelay,disturbance,hearing,intdis, muldis,orthopedic, healthimp, otherhealth, spec, speech, brain, visual, ambulatory, scare, living, 
       name, address, city,zip, phone, mail, person, family, advocate, caregiver,health, care,adcare, telephone, phon,
     inperson, assist, other, specify, answer, answer1, answer2, answer3, yes, no,idn, answer4 ) ".
       "VALUES('autoincremented ID value','$autism', '$deafblind' , '$deafness', '$devdelay','$disturbance','$hearing','$intdis','$muldis','$orthopedic', '$healthimp', '$otherhealth', '$spec', '$speech', '$brain','$visual', '$ambulatory', '$scare', '$living', 
       '$name', '$address', '$city','$zip', '$phone', '$mail', '$person', '$family', '$advocate', '$caregiver','$health', '$care','$adcare', '$telephone', '$phon',
     '$inperson', '$assist', '$other', '$specify', '$answer', '$answer1', '$answer2', '$answer3', '$yes', '$no','$idn', '$answer4' )";
$retval = mysql_query($sql);
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}else{
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Thank you!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="width: 960px; margin:0 auto; background-color:#C4D0FC;">
        <div style="margin-top: 30px; text-align: center"><h2>Thank you, your survey has been submitted</h2></div>
    </body>
</html>



<?php
}
}
?>