<h2 id='graduates'>Graduate Students</h2>
<?php
    try {
        $members = array(
            "Allyson Brodzeller" => array(
                "image" => "../resources/jpg/allyson_brodzeller.jpg",
                "keywords" => "Cosmology, Large-scale structure, Applications of machine learning",
                "advisor" => "Prof. Kyle Dawson"
                ),
            "Callie Clontz" => array(
                "image" => "../resources/jpg/clontz_headshot.jpg",
                "keywords" => "Stellar Populations, Nuclear Star Clusters",
                "advisor" => "Prof. Anil Seth"
                ),
            "Abigail A. Coker" => array(
                "image" => "../resources/jpg/abigail_headshot.jpg",
                "homepage" => "https://faculty.utah.edu/u1373588-ABIGAIL_ALLISON_COKER/research/index.hml",
                "advisor" => "Prof. Yao-Yuan Mao"
                ),
            "Hannah Fritze" => array(
                "image" => "../resources/jpg/hannah_fritze.jpg",
                "keywords" => "X-ray Astrophysics, Black Hole Binaries, and Intermediate Mass Black Holes",
                "advisor" => "Prof. Dan Wik"
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
            "Cicely Potter" => array(
                "advisor" => "Prof. Dan Wik",
                ),
            "Amaya Sinha" => array(
                "homepage" => "https://faculty.utah.edu/u1363702-AMAYA_SINHA/research/index.hml",
                "image" => "../resources/jpg/Sinha_Amaya.jpg",
                "keywords" => "Stellar clusters, stellar chemistry",
                "advisor" => "Prof. Gail Zasowski"
                ),
            "Joseph Summers" => array(
                "keywords" => "Astronomy and Data Science",
                "advisor" => "Prof. Joel Brownstein",
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
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
