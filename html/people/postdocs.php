<h2 id='postdocs'>Postdocs</h2>
<?php
    try {
        $members = array(
            "Angela Berti" => array(
                "image" => "../resources/jpg/angela_berti.jpg",
                "keywords" => "Galaxy evolution and the Galaxy-halo Connection, Cosmology and Large-scale Structure, Galaxy Clustering, Statistical Methods",
                "homepage" => "http://angelaberti.com/",
                "office" => "INSCC 318",
                ),
            "Mallory Molina" => array(
                "image" => "../resources/jpg/molina_mallory_crop.jpeg",
                "keywords" => "Black holes in dwarf galaxies, AGN feedback, black hole-galaxy interactions, star formation and dust attenuation",
                "homepage" => "https://sites.google.com/view/m-molina/home",
                "remark" => ", <i>Eccles Fellow</i>"
                ),
            "Randall Rojas Bolivar" => array(
                ),
            "Steve Rossland" => array(
                "office" => "INSCC 305-10",
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
