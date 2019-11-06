<?php
/*****************************************
	menu gestionable en wordpress
*****************************************/

    function caprimint_nav(){
        register_nav_menu(
            array(
                    'navegation'=> __( 'Menú de navegación' ),
            )
        );
    }

    add_action( 'inet', 'caprimint_nav' );


