<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link rel="stylesheet" href="buyagrade.css" />
</head>

<body>
<h1>Thanks, sucker!</h1>
<p>Your information has been recorded.</p>
<?php if($_SERVER["REQUEST_METHOD"]!='POST') { ?>

<?php } else {?>
<dl>
    <dt>Name</dt>
    <dd>
        <?= $_POST["name"] ?>
    </dd>

    <dt>Section</dt>
    <dd>
        <?= $_POST["section"] ?>
    </dd>

    <dt>Credit Card</dt>
    <dd><?= $_POST["cardnumber"] ?> (<?= $_POST["cardtype"] ?>)</dd>
</dl>
    <p>Here are all the suckers who have submitted here:</p>
    <pre>
         <?php
         $sucker = file_get_contents('sucker.txt');
         echo $sucker;
         ?>

    </pre>
<?php } ?>

</body>
</html>
