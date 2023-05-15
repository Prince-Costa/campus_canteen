  <?php
  include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');

  $navItemsInJson = file_get_contents($adminResources."side_nav.json");
  $navItems = json_decode($navItemsInJson);

    // $menuChilds = [
    //     ["menu" => "Dashboard",  "icon" => "icon-home4", 'link'=>'index.php'],
    //     ["menu" => "POS",  "icon" => "icon-printer4", 'link'=>'pos_index.html'],
    //     ["menu" =>"Customers",  "icon" => "icon-users2",  
	// 	"subMenu"=>["Add Customer",  "Customers"], 
	// 	"subLink" =>["add_customer.html", "customers.html"]
	// 	],
    //     ["menu" =>"Category",  "icon" => "icon-list", 
	// 	"subMenu"=>["Add Category","Categories"], 
	// 	"subLink" =>["add_category.html", "categories.html"]
	// 	],
    //     ["menu" =>"Outdoor Place",  "icon" => "icon-exit3",
	// 	"subMenu"=>["Add Outdoor Place", "Outdoors"],
	// 	"subLink" =>["add_outdoor_place.html", "outdoor_places.html"]
	// 	],
    //     ["menu" =>"Orders",  "icon" => "icon-compose", 
	// 	"subMenu"=>["Add Order","Orders"], 
	// 	"subLink" =>["add_order.html", "orders.html"]
	// 	],
    //     ["menu" =>"Settings",  "icon" => "icon-cogs", 
	// 	"subMenu"=>["Add User","Users","User Roles","Permitions"], 
	// 	"subLink" =>["add_user.html", "users.html", "user_roles.html", "premishions.html"]
	// 	],
    //     ["menu" =>"App configuration",  "icon" => "icon-android", 
	// 	"subMenu"=>["App Config","Banner Images","Privecy And Policy Page","About Page"], 
	// 	"subLink" =>["app_config.html", "banner_images.html", "privecy_policy_page_setup.html", ]
	// 	],
    // ];
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