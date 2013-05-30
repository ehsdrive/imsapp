<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<base href="<?php echo base_url();?>"/>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main-wapper-div">

<div class="main-menu">
<div class="fixed-div-main">
<?php 
//---menus start here----//
$menus = get_admin_menus();
if($menus)
{
?>
<div id="menu">
<ul>
<?php
	foreach($menus as $menu)
	{
	?>
	<li><a href=""><span><?php echo $menu->menu;?></span></a>
	<?php	
		if(isset($menu->sub_menus))
		{
		?>
		<div class="sub-div">
			<ul>
		<?php
			$sub_menus = $menu->sub_menus;
			foreach($sub_menus as $sub_menu)
			{
			?>
				<li><a href=""><span><?php echo $sub_menu->menu;?></span></a></li>
			<?php
			}
			?>
			</ul>
		</div>
			<?php
		}
	}
	?>
</ul>

<!--<div class="module-div">
<span>Module : </span>
<select class="styled-select">
      <option>Here is the first option</option>
      <option>The second option</option>
   </select>
</div>-->

</div>
<?php
}
//---menus ends here----//
?>

</div></div>