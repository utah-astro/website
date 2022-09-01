<h2 id='postdocs'>Postdocs</h2>
<?php
    try {
        $members = array(
            "Angela Berti" => array(
                "image" => "../resources/jpg/angela_berti.jpg",
                "keywords" => "Galaxy evolution and the Galaxy-halo Connection, Cosmology and Large-scale Structure, Galaxy Clustering, Statistical Methods",
                "homepage" => "http://angelaberti.com/"
                ),
            "Mallory Molina" => array(
                "image" => "../resources/jpg/molina_mallory_crop.jpeg",
                "keywords" => "Black holes in dwarf galaxies, AGN feedback, black hole-galaxy interactions, star formation and dust attenuation",
                "homepage" => "https://sites.google.com/view/m-molina/home",
                "remark" => ", <i>Eccles Fellow</i>"
                ),
            "Ay&#351;eg&uuml;l T&uuml;mer" => array(
                "image" => "../resources/jpg/aysegul_tumer.JPG",
                "keywords" => "High Energy Astrophysics (X-Ray), Non-Cool Core Galaxy Clusters and Mergers, Evolution of Galaxy Clusters,
                               X-ray Background Reduction Methods, Data Analysis of NuSTAR/XMM-Newton/Chandra Observatories,
                               AGN Feedback Mechanisms in Brightest Cluster Galaxies, X-Ray Spectral and Imaging Methods",
                ),
            "Qian Wang" => array(
                ),
            "Randall Rojas Bolivar" => array(
                ),
            "Steve Rossland" => array(
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
