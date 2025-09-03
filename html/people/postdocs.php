<h2 id='postdocs'>Postdocs</h2>
<?php
    try {
        $members = array(
            "Catherine Manea" => array(
                "image" => "https://images.squarespace-cdn.com/content/v1/5c0edfee620b85c81c0233bb/3f90a22e-346f-453d-9491-7a59b0a97d97/Manea_Headshot.jpeg?format=750w",
                "homepage" => "https://www.catherinemanea.com/",
                "office" => "LSSB W3258",
                "remark" => ", <i>NSF Fellow</i>",
            ),
            "Bobby Butler" => array(
                "image" => "../resources/jpg/Butler_Bobby.jpg",
                "keywords" => "Interstellar medium, Dust extinction, Dust properties, Survey Astronomy",
                "office" => "LSSB W3258",
            ),
            "Ragadeepika Pucha" => array(
                "keywords" => "Dwarf Galaxies, Intermediate-Mass Black Holes, Galaxy Formation and Evolution",
                "image" => "../resources/jpg/raga_pucha.jpg",
                "office" => "LSSB W3256"
            ),
            "Cicely Potter" => array(
                #"advisor" => "Prof. Dan Wik",
				"date" => "Ph.D. 2025 with Prof. Dan Wik",
				"office" => "LSSB W2266"
            ),
            "Randall Rojas-Bolivar" => array(
                "image" => "../resources/jpg/randall_rojasbolivar.png",
                "keywords" => "Galaxy Clusters, Mergers and Non-thermal Phenomena, Dark Matter",
            ),
            "Zixian Wang (Purmortal)" => array(
                "image" => "../resources/jpg/wang_purmortal_zixian.jpg",
                "keywords" => "The Milky Way, Star Clusters, Milky Way Analogues, Integral-field spectroscopy",
                "office" => "LSSB W2266",
            ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
