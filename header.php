<head>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/header.css" />
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bodyInicio.css" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nominados.css"/>

</head>

<body  class="cuerpo">
<header class="cabecera" >

	
	<div class="nav-superior" id="nav-principal"  >
		
		<div class="menu-nav" >
			
			
			<nav> 
				<div class="nav-envoltura">
					
					<ul id="nav_mobile" class="left hide-o-and-down">
						<li>
							<a>
								<?php
								wp_nav_menu(array(
									'caprimint_nav' => 'http://www.localhost/'
								));
								?>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			
		</div>
		
		
		<div>

			<?php $logo = get_field( 'logo' ); ?>
            
            <?php if ( $logo ) { ?>
                    <center>
                        <img class="img-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                    </center>
            <?php } ?>

		</div>
	
	</div>
	
	
	
</header>


