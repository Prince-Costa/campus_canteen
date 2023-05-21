<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');

$navItemsInJson = file_get_contents($dataResources . "side_nav.json");

$navItems = json_decode($navItemsInJson);

?>


<div class="card card-sidebar-mobile">
	<ul class="nav nav-sidebar" data-nav-type="accordion">
		<?php foreach ($navItems as $navItem): ?>
			<li class="nav-item <?= isset($navItem->subnav) ? 'nav-item-submenu' : '' ?>">
				<a href="<?= isset($navItem->url) ? $navItem->url : '' ?>" class="nav-link legitRipple"><i
						class="<?= $navItem->icon ?>"></i> <span>
						<?= $navItem->name ?>
					</span></a>

				<?php if (isset($navItem->subnav)): ?>
					<ul class="nav nav-group-sub" data-submenu-title="<?= $navItem->name ?>" style="display: none;">
						foreach($navItem->subnav as $submenu){
						echo '<li class="nav-item"><a href="'.$submenu->url.'"
								class="nav-link legitRipple">'.$submenu->name.'</a></li>';
						}
					</ul>
				<?php endif ?>
			</li>
		<?php endforeach ?>
	</ul>
</div>