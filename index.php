<?php
include 'inc/functions.php';

init_locale("pl_PL.UTF-8");

$query = query('SELECT np.* FROM newsplus np INNER JOIN `posts_news+` p ON np.thread=p.id WHERE np.dead IS FALSE ORDER BY p.bump DESC');
if ($query) {
	$newsplus = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
	$newsplus = false;
}

$index = Element("8chan/index.html", array("config" => $config, "newsplus" => $newsplus));
file_write('index.html', $index);

header('Location: /index.html');
