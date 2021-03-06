<?php namespace WiGit; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php print getTitle() ?> &raquo; Editing <?php print getPage() ?></title>
		<link rel="stylesheet" type="text/css" href="<?php print getCSSURL() ?>" />
	</head>
	<body>
		<div id="navigation">
			<p><a href="<?php print getHomeURL() ?>">Home</a> 
			| <a href="<?php print getGlobalHistoryURL() ?>">History</a>
			<?php if (getUser() != "") { ?>| Logged in as <?php print getUser(); } ?>
			</p>
		</div>

		<div id="header">
			<h1 id="title">Editing <?php print getPage() ?></h1>
		</div>

		<div id="form">
			<form method="post" action="<?php print getPostURL(); ?>">
				<p><textarea name="data" cols="80" rows="20" style="width: 100%"><?php print getRawData(); ?></textarea></p>
				<p><input type="submit" value="publish" /></p>
			</form>
		</div>

		<div id="footer" style='text-align: left;'>
			<p class='syntax'>
				<span style='font-weight: bold;'>Syntax:</span> <?php print getEditingHelpText(); ?>
			</p>
		</div>

		<div id="plug">
			<p>
				Powered by <a href="http://el-tramo.be/software/wigit">WiGit</a>
			</p>
		</div>

	</body>
</html>
