<h2 id='postdocs'>Postdocs</h2>
<?php
    try {
        $members = array(
            "Angela Berti" => array(
                "image" => "../resources/jpg/angela_berti.jpg",
                "keywords" => "Galaxy evolution and the Galaxy-halo Connection, Cosmology and Large-scale Structure, Galaxy Clustering, Statistical Methods",
                "homepage" => "http://angelaberti.com/"
                ),
            "Sarah Eftekharzadeh" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "homepage" => ""
                ),
            "Jianhui Lian" => array(
                "image" => "../resources/jpg/jianhui_lian.jpg",
                "keywords" => "Chemical Evolution and Star Formation Histories of Galaxies, Galaxy Environment and Structure",
                "homepage" => "https://ljh520hw.wixsite.com/mysite"
                ),
            "Ay&#351;eg&uuml;l T&uuml;mer" => array(
                "image" => "../resources/jpg/aysegul_tumer.JPG",
                "keywords" => "High Energy Astrophysics (X-Ray), Non-Cool Core Galaxy Clusters and Mergers, Evolution of Galaxy Clusters, 
                               X-ray Background Reduction Methods, Data Analysis of NuSTAR/XMM-Newton/Chandra Observatories, 
                               AGN Feedback Mechanisms in Brightest Cluster Galaxies, X-Ray Spectral and Imaging Methods",
                "homepage" => ""
                ),
            "Qian Wang" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "homepage" => ""
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
