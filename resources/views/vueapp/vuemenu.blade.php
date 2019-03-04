<?php
/*
 * Filename: menu.blade.php
 *
 * Description - Navigation menu for the site
 *
 * Details - The items on the menu are shown / hidden based on two factors:
 *      1. User is logged in or not
 *      2. Access level of the person that is logged in.  Definitions of login levels are defined
 *          as constants in the Users.php model file.
 */
?>

<header class="navbar navbar-default navbar-fixed-top topnav" role="banner">
    <div class="container topnav">
        <nav role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand topnav" href="/"><img src="/img/logo.png"/></a>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>
			