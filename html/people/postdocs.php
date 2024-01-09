<h2 id='postdocs'>Postdocs</h2>
<?php
    try {
        $members = array(
            "Allyson Brodzeller" => array(
                "image" => "../resources/jpg/allyson_brodzeller.jpg",
                "keywords" => "Cosmology, Large-scale structure, Applications of machine learning",
                //"advisor" => "Prof. Kyle Dawson",
                //"date" => "Ph.D. 2023",
                ),
            "Bobby Butler" => array(
                "image" => "../resources/jpg/Butler_Bobby.jpg",
                "keywords" => "Interstellar medium, Dust extinction, Dust properties, Survey Astronomy",
                "office" => "INSCC 304"
                ),
            "Mallory Molina" => array(
                "image" => "../resources/jpg/molina_mallory_crop.jpeg",
                "keywords" => "Black holes in dwarf galaxies, AGN feedback, black hole-galaxy interactions, star formation and dust attenuation",
                "homepage" => "https://sites.google.com/view/m-molina/home",
                "remark" => ", <i>Eccles Fellow</i>",
                "office" => "INSCC 316"
                ),
            "Ekta Patel" => array(
                "image" => "../resources/jpg/ekta_patel.jpeg",
                "keywords" => "Galaxy formation and evolution, galactic dynamics, dwarf galaxies, dark matter, near-field cosmology",
                "homepage" => "https://www.ektapatelastro.com/",
                "remark" => ", <i>NASA Hubble Fellow</i>",
                "office" => "INSCC 316"
                ),
            "Ragadeepika Pucha" => array(
                "office" => "INSCC 318"
                ),
            "Randall Rojas-Bolivar" => array(
                "image" => "../resources/jpg/randall_rojasbolivar.png",
                "keywords" => "Galaxy Clusters, Mergers and Non-thermal Phenomena, Dark Matter",
            ),
            "Zixian Wang (Purmortal)" => array(
                "image" => "../resources/jpg/wang_purmortal_zixian.jpg",
                "keywords" => "The Milky Way, Star Clusters, Milky Way Analogues, Integral-field spectroscopy",
                "office" => "INSCC 304",
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
