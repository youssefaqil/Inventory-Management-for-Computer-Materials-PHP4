<?php
    session_start();
    if(isset($_GET['decnx'])) session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8" />
<title>Welcome</title>
<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.uniform.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
      $(function(){
        $("input:checkbox, input:radio, input:file, select").uniform();
      });
    </script>
</head>
<body>
<article>
<h1>Gestion de Stock</h1>
    <?php
    if (isset($_GET['err'])) {
    
    if($_GET['err']==1)
    {
    ?>
    <script type="text/javascript">alert("Veuillez verifier votre donnes !!  ")</script>
    <a href="javascript:history.back();"><h2>Retour</h2></a></p>
    
<?php
}
}
else
{
    //<p style="color:red;">Veuillez verifier votre donnes .<br><a href="javascript:history.back();">Retour</a></p>
?>

<form name="f1" action="connexionLOG.php" method="post">
    <ul>
        <li>
            <label for="name">Login:</label>
            <input type="text" size="40" id="name" name="LogUser" />
        </li>
        <li>
            <label for="email">Password:</label>
            <input type="password" size="40" id="email"  name="PassUser"/>
        </li>
        <li>
            <label for="type">User:</label>
            <input type="text" size="40" id="type"  name="TypeUser"/>
        </li>
        

    </ul>
    <p>
        <button type="submit" class="action" name="valider">Call to action</button>
        <button type="reset" class="right">Reset</button>
    </p>
</form>
</article>
<footer>
<p>Veuillez vous pouvez visiter notre site <a href="http://www.safi-invest.ma/">CRI</a></p>
</footer>

<?php
}
?>

</body>
</html>