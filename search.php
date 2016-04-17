<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div id="container" style="width:100%;">

    <div id="left" style="float:left; width:50%;">
        <p>Results matching by Subject:</p>
        <br><br>
        <p><?php include 'subjectsearch.php'; ?>
    </div>


    <div id="right" style="float:right; width:50%;">
        <p>Results matching by content:</p>
        <br><br>
        <p><?php include 'extract_search.php'; ?>
    </div>
</div>
</html>