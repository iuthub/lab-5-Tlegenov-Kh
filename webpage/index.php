<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link rel="stylesheet" type="text/css" href="buyagrade.css" />

</head>

<body>
<h1>Buy Your Way to a Better Education!</h1>

<p>
    The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr />

<h2>Give us your money</h2>
<form action="sucker.php" method="post" enctype="multipart/form-data">
    <dl>
        <dt>Name</dt>
        <dd>
            <input type="text" name="name" />
        </dd>

        <dt>Section</dt>
        <dd>
            <select name="section">
                <option value="">(Select a section)</option>
                <option>MA</option>
                <option>MB</option>
                <option>MC</option>
                <option>MD</option>
                <option>ME</option>
                <option>MF</option>
                <option>MG</option>
                <option>MH</option>
            </select>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <input type="text" name="cardnumber" /><br />
            <label><input type="radio" name="cardtype" value="visa" />Visa</label>
            <label><input type="radio" name="cardtype" value="mastercard" />MasterCard</label>
        </dd>
    </dl>

    <div>
        <input type="submit" value="I am a giant sucker." />

    </div>

</form>
</body>
</html>
<?php
extract ($_REQUEST);

$file=fopen("sucker.txt", "a");

    $name = $_POST["name"];
    $section = $_POST["section"];
    $cardnumber = $_POST["cardnumber"];
    $cardtype = $_POST["cardtype"];
    fwrite($file, $name.";");
    fwrite($file, $section.";");
    fwrite($file, $cardnumber.";");
    fwrite($file, $cardtype.";");
    fclose($file);

?>
