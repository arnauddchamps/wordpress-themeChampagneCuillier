<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod animi consequuntur neque a possimus qui recusandae facilis accusantium tempora nisi, obcaecati labore, modi ullam illo suscipit vel, molestiae nemo eaque." />


<?php wp_head();  ?>

</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mt-5">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="jumbotron">
            <h1>Coucou c'est Vincent</h1>
        </div> 
    </div> <!-- /container -->

    <?php if (have_posts()): 
        while(have_posts()):

            the_post();

            the_title(); echo "<br>";


        endwhile;



    else:
        echo "il n'y a pas de résultats";
    endif;

    die();
    ?>





        <section>
            <div class="container">
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/SCRUM.png" alt="test1" class="img-fluid">
                
                    </div>
                    <div class="col-6">
                        <h1>Coucou c'est moi</h1>    
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. At quae id voluptates rerum corporis numquam sed voluptatibus inventore similique, magnam quis non asperiores alias reiciendis, illo suscipit soluta expedita? Impedit!</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/SCRUM.png" alt="test1" class="img-fluid">
                
                    </div>
                    <div class="col-6">
                        <h1>Coucou c'est moi</h1>    
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. At quae id voluptates rerum corporis numquam sed voluptatibus inventore similique, magnam quis non asperiores alias reiciendis, illo suscipit soluta expedita? Impedit!</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/SCRUM.png" alt="test1" class="img-fluid">
                
                    </div>
                    <div class="col-6">
                        <h1>Coucou c'est moi</h1>    
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. At quae id voluptates rerum corporis numquam sed voluptatibus inventore similique, magnam quis non asperiores alias reiciendis, illo suscipit soluta expedita? Impedit!</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/SCRUM.png" alt="test1" class="img-fluid">
                
                    </div>
                    <div class="col-6">
                        <h1>Coucou c'est moi</h1>    
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. At quae id voluptates rerum corporis numquam sed voluptatibus inventore similique, magnam quis non asperiores alias reiciendis, illo suscipit soluta expedita? Impedit!</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/SCRUM.png" alt="test1" class="img-fluid">
                
                    </div>
                    <div class="col-6">
                        <h1>Coucou c'est moi</h1>    
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. At quae id voluptates rerum corporis numquam sed voluptatibus inventore similique, magnam quis non asperiores alias reiciendis, illo suscipit soluta expedita? Impedit!</p>
                    </div>
                </div>

            </div>    
        </section>
        
    </div>

    
<?php wp_footer();  ?> 
</body>
</html>