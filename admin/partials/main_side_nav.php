  <?php
  include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');

  $navItemsInJson = file_get_contents($adminResources."side_nav.json");
  $navItems = json_decode($navItemsInJson);
?>

<div class="card card-sidebar-mobile">
	<ul class="nav nav-sidebar" data-nav-type="accordion">
    <?php
          foreach($navItems as $navItem){
			echo "<li class='nav-item" . (isset($navItem->subnav) ? ' nav-item-submenu' : '')."'>";
			if(isset($navItem->url)){ 
				echo "<a href={$navItem->url} class='nav-link'><i class={$navItem->icon}></i> <span>{$navItem->name}</span></a>";
			}else{
				echo "<a class='nav-link'><i class={$navItem->icon}></i> <span>{$navItem->name}</span></a>";
			};
			

			if(isset($navItem->subnav)){
				echo "<ul class='nav nav-group-sub' data-submenu-title={$navItem->name}>";
						foreach($navItem->subnav as $subMenu){
							echo "<li class='nav-item'><a href='{$subMenu->url}' class='nav-link active'>{$subMenu->name}</a></li>";
						}	
				echo "</ul>";
			}
			echo "</li>";

		  }
    ?>
	</ul>
</div>