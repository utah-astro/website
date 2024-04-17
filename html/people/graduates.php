<h2 id='graduates'>Graduate Students</h2>
<?php
    try {
        $members = array(
            "Callie Clontz" => array(
                "image" => "../resources/jpg/clontz_headshot.jpeg",
                "keywords" => "Stellar Populations, Nuclear Star Clusters",
                "advisor" => "Prof. Anil Seth"
                ),
            "Hayley Coluccio" => array(
                "image" => "../resources/jpg/Coluccio_Hayley.jpg",
                "keywords" => "Milky Way Stellar Populations, Galaxy Evolution",
                "advisor" => "Prof. Gail Zasowski"
                ),
            "Benjamin Gibson" => array(
                "image" => "../resources/jpg/bengibson_headshot.jpg",
                "homepage" => "https://benjamin-gibson.github.io/",
                "keywords" => "Galaxy Evolution and Stellar Populations, Integrated Light Spectroscopy",
                "advisor" => "Prof. Gail Zasowski"
                ),
            "Christian H. Hannah" => array(
                "image" => "../resources/jpg/christian_hannah.jpg",
                "homepage" => "https://www.christianhhannah.com/",
                "keywords" => "Stellar Populations, Tidal Disruption Events, and Massive Black Holes",
                "advisor" => "Prof. Anil Seth",
                "image_shift" => "-10%",
                "image_landscape" => true,
                ),
            "Austin King" => array(
                "image" => "../resources/jpg/austin_king.jpg",
                "advisor" => "Prof. Ben Bromley"
                ),
            "Aidan McBride" => array(
                "homepage" => "https://faculty.utah.edu/u1371365-AIDAN_THOMAS_MCBRIDE/research/index.hml",
                "image" => "../resources/jpg/McBride_Aidan.jpg",
                "keywords" => "Interstellar medium dynamics, molecular clouds",
                "advisor" => "Prof. Gail Zasowski"
                ),
            "Hannah Moon" => array(
                "image" => "../resources/jpg/hannah_fritze.jpg",
                "keywords" => "X-ray Astrophysics, Black Hole Binaries, and Intermediate Mass Black Holes",
                "advisor" => "Prof. Dan Wik"
                ),
            "Cicely Potter" => array(
                "advisor" => "Prof. Dan Wik",
                "keywords" => "X-ray Astrophysics, Galaxy Clusters"
                ),
            "Amaya Sinha" => array(
                "homepage" => "https://faculty.utah.edu/u1363702-AMAYA_SINHA/research/index.hml",
                "image" => "../resources/jpg/Sinha_Amaya.jpg",
                "keywords" => "Stellar clusters, stellar chemistry",
                "advisor" => "Prof. Gail Zasowski"
                ),
            "Kameron Goold" => array(
                "advisor" => "Prof. Anil Seth",
                "image" => "../resources/jpg/kameron_headshot.jpg",
                "keywords" => "Black Holes, JWST, Low-Luminosity AGN",
                ),
            "Tyler Hagen" => array(
                "advisor" => "Profs. Kyle Dawson and Zheng Zheng",
                ),
            "Pengfei Li" => array(
                "advisor" => "Prof. Zheng Zheng",
                ),
            "David Ohlson" => array(
                "advisor" => "Prof. Anil Seth",
                ),
            "Samantha Creech" => array(
                "advisor" => "Prof. Dan Wik",
                "image" => "../resources/jpg/sam_creech.jpg",
                "homepage" => "https://www.astro.utah.edu/~u1373637/SamCreech_About.html",
                "keywords" => "X-ray Astrophysics, AGN Surveys, Galaxy Clusters"
                ),
            "Emily Strickland" => array(
                "advisor" => "Prof. Yao-Yuan Mao",
                ),
            "Corinna Pena" => array(
                "advisor" => "Prof. Tanmoy Laskar",
                ),
            "Josh Ratajczak" => array(
                "advisor" => "Prof. Kyle Dawson",
                ),
            "Christian Norseth" => array(
                "advisor" => "Prof. Dan Wik",
                "keywords" => "X-ray Astrophysics, Galaxy Clusters"
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
