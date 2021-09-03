<?php
$json = file_get_contents('https://canary.discord.com/api/guilds/855918593497759754/widget.json');
$data = json_decode($json);
str_contains($_SERVER['HTTP_USER_AGENT'], "Discordbot");
if (!str_contains($_SERVER['HTTP_USER_AGENT'], "Discordbot")) {
	header("Location: $data->instant_invite");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:title" content="SugarcaneMC Discord" />
	<meta property="og:description" content="SugarcaneMC - The high performance Minecraft server you've always wished for!" />
	<meta property="og:url" content="<?= $data->instant_invite ?>" />
</head>

</html>