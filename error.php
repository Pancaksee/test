<?php
$error = $_GET['code'];
if(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) == "/error.php") {
    $error = "404";
    http_response_code(404);
};
$codes = array(100=>'Continue',101=>'Switching Protocols',102=>'Processing',200=>'OK',201=>'Created',202=>'Accepted',203=>'Non-Authoritative Information',204=>'No Content',205=>'Reset Content',206=>'Partial Content',207=>'Multi-Status',208=>'Already Reported',226=>'IM Used',300=>'Multiple Choices',301=>'Moved Permanently',302=>'Found',303=>'See Other',304=>'Not Modified',305=>'Use Proxy',306=>'Switch Proxy',307=>'Temporary Redirect',308=>'Permanent Redirect',400=>'Bad Request',401=>'Unauthorized',402=>'Payment Required',403=>'Forbidden',404=>'Not Found',405=>'Method Not Allowed',406=>'Not Acceptable',407=>'Proxy Authentication Required',408=>'Request Timeout',409=>'Conflict',410=>'Gone',411=>'Length Required',412=>'Precondition Failed',413=>'Request Entity Too Large',414=>'Request-URI Too Long',415=>'Unsupported Media Type',416=>'Requested Range Not Satisfiable',417=>'Expectation Failed',418=>'I\'m a teapot',419=>'Authentication Timeout',420=>'Enhance Your Calm',420=>'Method Failure',422=>'Unprocessable Entity',423=>'Locked',424=>'Failed Dependency',424=>'Method Failure',425=>'Unordered Collection',426=>'Upgrade Required',428=>'Precondition Required',429=>'Too Many Requests',431=>'Request Header Fields Too Large',444=>'No Response',449=>'Retry With',450=>'Blocked by Windows Parental Controls',451=>'Redirect',451=>'Unavailable For Legal Reasons',494=>'Request Header Too Large',495=>'Cert Error',496=>'No Cert',497=>'HTTP to HTTPS',499=>'Client Closed Request',500=>'Internal Server Error',501=>'Not Implemented',502=>'Bad Gateway',503=>'Service Unavailable',504=>'Gateway Timeout',505=>'HTTP Version Not Supported',506=>'Variant Also Negotiates',507=>'Insufficient Storage',508=>'Loop Detected',509=>'Bandwidth Limit Exceeded',510=>'Not Extended',511=>'Network Authentication Required',598=>'Network read timeout error',599=>'Network connect timeout error');
$error_decription = $codes[$error];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title><?=$error?> - <?=$error_decription?></title>
</head>

<body>
    <div class="card border-warning mb-3"
        style="max-width: 20rem; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <div class="card-header">An error occurred!</div>
        <div class="card-body">
            <p class="card-text"><?php echo "$error - $error_decription";?></p>
            <button type="button" class="btn btn-success" onclick="location.href='/'">Go Home</button>
        </div>
    </div>
</body>

</html>