<?php include 'config.php';?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="<?php echo ''.$url.'/static/style.css';?>" rel="stylesheet" type="text/css">
<link href="<?php echo ''.$url.'/static/font.css';?>" rel="stylesheet" type="text/css">
<script src="<?php echo ''.$url.'/static/jquery.js';?>"></script>
<script src="<?php echo ''.$url.'/static/style.js';?>"></script>
<link rel="icon" href="<?php echo ''.$url.'/static/logo.png';?>"/>
    
<?php
if($_GET)
{
if ($_GET['page'] == 'ad')
{
echo '<title>'.$title.'</title>';
}
else
{
echo '<title>'.ucfirst($page).'</title>';
}
}
else
{
echo '<title>'.$title.'</title>';
}
?>    

<?php include ''.$dir.'/query/database.php';?>
</head>

<body class="bg-dark">
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
<div class="d-flex flex-row">

<a class="navbar-brand" href="<?php echo ''.$url.'';?>">
<img src="<?php echo ''.$url.'/static/logo.png';?>" width="75" height="75" class="d-inline-block align-top">
</a> 
    
<input class="form-control align-self-center bg-dark btn-dark text-white" type="search" placeholder="Search" aria-label="Search">

<a class="btn btn-success align-self-center mx-2" href="<?php echo ''.$url.'/?page=post';?>" role="button">Post</a>

</div>    
    
<ul class="nav <?php if (!isset($_COOKIE['token'])){echo "invisible";}else{echo "visible";}?>">
<li class="nav-item">
<a class="nav-link active" href="?page=me">Me</a>
</li>
<li class="nav-item">
<a class="nav-link" href="?page=settings">Settings</a>
</li>
<li class="nav-item">
<a class="nav-link text-muted" href="?page=logout" tabindex="-1" aria-disabled="true">Logout</a>
</li>
</ul>    

</nav>  
</body>