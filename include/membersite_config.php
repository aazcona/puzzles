<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('worldpuzzles.alwaysdata.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('primitech.studios@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'mysql-worldpuzzles.alwaysdata.net',
                      /*username*/'120074',
                      /*password*/'191087',
                      /*database name*/'worldpuzzles_main',
                      /*table name*/'user');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('9w2CCD208ddyLj3');

?>