<?php
require 'facebook.php';

$app_id = "1456430557902623";
$app_secret = "e9ee887a87be1ee3371b8e10f16ecc0a";
$facebook = new Facebook(array(
'appId' => $app_id,
'secret' => $app_secret,
'cookie' => true
));

$signed_request = $facebook->getSignedRequest ();
$like_status = $signed_request["page"]["liked"];

?>
<!DOCTYPE html>
<html>
<head>
<title>Free Demo</title>
</head>
<body>
<?php if ($like_status) { ?>
Fans will see this.
<?php } else { ?>
Non Fans see this.
<?php } ?>
</body>
</html>