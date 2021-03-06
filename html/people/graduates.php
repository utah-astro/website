<h2>Graduate Students</h2>
<?php
    try {
        $members = array(
            "Aishwarya (Ash) Ashok" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "Galaxy Evolution, Galaxy structure, Star clusters and Stellar populations",
                "links" => "",
                "advisor" => "Prof. Anil Seth"
                ),
            "Allyson Brodzeller" => array(
                "image" => "../resources/jpg/allyson_brodzeller.jpg",
                "keywords" => "Cosmology, Large-scale structure, Applications of machine learning",
                "links" => "",
                "advisor" => "Prof. Kyle Dawson"
                ),
            "Callie Clontz" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Zheng Zheng"
                ),
            "Antoine Dumont" => array(
                "image" => "../resources/jpg/antoine_dumont.jpg",
                "homepage" => "https://antoinedumontneira.github.io/",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Anil Seth"
                ),
            "Hannah Fritze" => array(
                "image" => "../resources/jpg/hannah_fritze.jpg",
                "keywords" => "X-ray Astrophysics, Black Hole Binaries, and Intermediate Mass Black Holes",
                "links" => "",
                "advisor" => "Prof. Dan Wik"
                ),
            "Ben Gibson" => array(
                "image" => "../resources/jpg/ben_gibson.jpg",
                "homepage" => "https://faculty.utah.edu/u1267339-Benjamin_J_Gibson/research/index.hml",
                "keywords" => "Galaxy Evolution and Stellar Populations",
                "links" => "",
                "advisor" => "Prof. Gail Zasowski"
                ),
            "Christian Hannah" => array(
                "image" => "../resources/jpg/christian_hannah.jpg",
                "keywords" => "Galaxy Evolution, Stellar Populations, and Massive Black Holes",
                "links" => "",
                "advisor" => "Prof. Anil Seth"
                ),
            "Austin King" => array(
                "image" => "../resources/jpg/austin_king.jpg",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Ben Bromley"
                ),
            "Kevin McCarthy" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Zheng Zheng"
                ),
            "Vijith Jacob Poovelil" => array(
                "image" => "../resources/jpg/vijith_poovelil.jpeg",
                "homepage" => "https://faculty.utah.edu/u1063369-VIJITH_JACOB_POOVELIL/research/index.hml", 
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Gail Zasowski"
                ),
            "Cicely Potter" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Dan Wik"
                ),
            "Randall Rojas Bolivar" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Dan Wik"
                ),
            "Steve Rossland" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Dan Wik"
                ),
            "Michael S. Talbot" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "Galaxy-Galaxy Strong Gravitational Lensing, Spectroscopic Identification of Lensing Objects (SILO) Project",
                "links" => "<a target='_blank' href='https://www.sdss.org/surveys/eboss/'>eBOSS</a>, <a target='_blank' href='https://www.sdss.org/surveys/manga/'>MaNGA</a>",
                "advisor" => "Prof. Joel Brownstein"
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
