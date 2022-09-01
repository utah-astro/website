<h2 id='graduates'>Graduate Students</h2>
<?php
    try {
        $members = array(
            "Aishwarya (Ash) Ashok" => array(
                "keywords" => "Galaxy Evolution, Galaxy structure, Star clusters and Stellar populations",
                "advisor" => "Prof. Anil Seth"
                ),
            "Allyson Brodzeller" => array(
                "image" => "../resources/jpg/allyson_brodzeller.jpg",
                "keywords" => "Cosmology, Large-scale structure, Applications of machine learning",
                "advisor" => "Prof. Kyle Dawson"
                ),
            "Callie Clontz" => array(
                "advisor" => "Prof. Zheng Zheng"
                ),
            "Abigail A. Coker" => array(
                "image" => "../resources/jpg/abigail_headshot.jpg",
                "homepage" => "https://faculty.utah.edu/u1373588-ABIGAIL_ALLISON_COKER/research/index.hml",
                "advisor" => "Prof. Yao-Yuan Mao"
                ),
            "Antoine Dumont" => array(
                "image" => "../resources/jpg/antoine_dumont.jpg",
                "homepage" => "https://antoinedumontneira.github.io/",
                "advisor" => "Prof. Anil Seth",
                "image_shift" => "-15%",
                ),
            "Hannah Fritze" => array(
                "image" => "../resources/jpg/hannah_fritze.jpg",
                "keywords" => "X-ray Astrophysics, Black Hole Binaries, and Intermediate Mass Black Holes",
                "advisor" => "Prof. Dan Wik"
                ),
            "Ben Gibson" => array(
                "image" => "../resources/jpg/ben_gibson.jpg",
                "homepage" => "https://benjamin-gibson.github.io/",
                "keywords" => "Galaxy Evolution and Stellar Populations",
                "advisor" => "Prof. Gail Zasowski"
                ),
            "Christian Hannah" => array(
                "image" => "../resources/jpg/christian_hannah.jpg",
                "keywords" => "Galaxy Evolution, Stellar Populations, and Massive Black Holes",
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
                "advisor" => "Prof. Dan Wik"
                ),
            "Randall Rojas Bolivar" => array(
                "advisor" => "Prof. Dan Wik"
                ),
            "Steve Rossland" => array(
                "advisor" => "Prof. Dan Wik"
                ),
            "Amaya Sinha" => array(
                "homepage" => "https://faculty.utah.edu/u1363702-AMAYA_SINHA/research/index.hml",
                "image" => "../resources/jpg/Sinha_Amaya.jpg",
                "keywords" => "Stellar clusters, stellar chemistry",
                "advisor" => "Prof. Gail Zasowski"
                ),
            "Joseph Summers" => array(
                "keywords" => "Astronomy and Data Science",
                "advisor" => "Prof. Joel Brownstein"
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
