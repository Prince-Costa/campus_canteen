<?php
    $menuChilds = [
        ["menu" => "Dashboard",  "icon" => "icon-home4"],
        ["menu" => "POS",  "icon" => "icon-printer4"],
        ["menu" =>"Customers",  "icon" => "icon-users2", "SubMenu"=>["Add Customer", "Customers"]],
        ["menu" =>"Category",  "icon" => "icon-list","SubMenu"=>["Add Category","Categories"]],
        ["menu" =>"Outdoor Place",  "icon" => "icon-exit3","SubMenu"=>["Add Outdoor Place", "Outdoors"]],
        ["menu" =>"Orders",  "icon" => "icon-compose","SubMenu"=>["Add Order","Orders"]],
        ["menu" =>"Settings",  "icon" => "icon-cogs","SubMenu"=>["Add User","Users","User Roles","Permitions"]],
        ["menu" =>"App configuration",  "icon" => "icon-android","SubMenu"=>["App Config","Banner Images","Privecy And Policy Page","About Page"]],
    ];
?>

<div class="card card-sidebar-mobile">
	<ul class="nav nav-sidebar" data-nav-type="accordion">
    <?php
        foreach($menuChilds as $menuChild){
        echo ' <li class="nav-item">
                     <a href="" class="nav-link active">
                        <i class='.$menuChild['icon'].'></i>
						<span>
						'.$menuChild['menu'].'
						</span>
                    </a>
					<ul class="nav nav-group-sub" data-submenu-title="Layouts">';
					if(array_key_exists('SubMenu', $menuChild)){
						foreach($menuChild['SubMenu'] as $subMenu){
							echo '<li class="nav-item"><a href="add_customer.html" class="nav-link active">'.$subMenu.'</a></li>';
						};
                	};	
				echo '</ul>
            </li>';
        };
    ?>
					
                   

                        <!-- <li class="nav-item">
							<a href="index.html" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="pos_index.html" class="nav-link active">
								<i class="icon-printer4"></i>
								<span>
									POS
								</span>
							</a>
						</li>

					
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-users2 mr-3"></i> <span>Customers</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_customer.html" class="nav-link active">Add Castomer</a></li>
								<li class="nav-item"><a href="customers.html" class="nav-link active">Castomers</a></li>
							</ul>
						</li>

					
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-list mr-3"></i> <span>Category</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_category.html" class="nav-link active">Add Category</a></li>
								<li class="nav-item"><a href="categories.html" class="nav-link active">Categories</a></li>
							</ul>
						</li>

						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-basket mr-3"></i> <span>Product</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_product.html" class="nav-link active">Add Product</a></li>
								<li class="nav-item"><a href="products.html" class="nav-link active">Products</a></li>
							</ul>
						</li>

					
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-exit3 mr-3"></i> <span>Outdoor Place</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_outdoor_place.html" class="nav-link active">Add Outdoor Place</a></li>
								<li class="nav-item"><a href="outdoor_places.html" class="nav-link active">Outdoor Places</a></li>
							</ul>
						</li>

					
						<li class="nav-item">
							<a href="orders.html" class="nav-link active">
								<i class="icon-compose"></i>
								<span>
									Orders
								</span>
							</a>
						</li>

						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cogs mr-3"></i> <span>Settings</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_user.html" class="nav-link active">Add User</a></li>
								<li class="nav-item"><a href="users.html" class="nav-link active">Users</a></li>
								<li class="nav-item"><a href="user_roles.html" class="nav-link active">User Roles</a></li>
								<li class="nav-item"><a href="#" class="nav-link active">Permishions</a></li>
							</ul>
						</li>

					
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-android mr-3"></i> <span>App configuration</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="app_config.html" class="nav-link active">App Config</a></li>
								<li class="nav-item"><a href="banner_images.html" class="nav-link active">Banner Images</a></li>
								<li class="nav-item"><a href="privecy_policy_page_setup.html" class="nav-link active">Privecy And Policy Page</a></li>
								<li class="nav-item"><a href="about_page_setup.html" class="nav-link active">About Page</a></li>
							</ul>
						</li> -->
					</ul>
				</div>