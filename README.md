# A Css handler for PHP

This class will load css files given in order to create one single css file served to the client to save both requests and KB.

Example:
index.php
```
<?
$css = new Css();
$css->add("path/to/css/file.css");
$css->compile();
$css->save();
?>
<html>
<head>
	<link href="css.php" />
</head>
</html>
```

css.php
```
<?
$css = new Css();
$css->dump();
?>
```
