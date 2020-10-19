<h2>Postdocs</h2>
<?php
    try {
        $members = array(
            "Angela Berti" => array(
                "image" => "../resources/jpg/angela_berti.jpg",
                "keywords" => "Galaxy evolution and the Galaxy-halo Connection, Cosmology and Large-scale Structure, Galaxy Clustering, Statistical Methods",
                "homepage" => "http://angelaberti.com/"
                ),
            "Nicholas Boardman" => array(
                "image" => "../resources/jpg/nick_boardman.jpg",
                "keywords" => "Galaxy Structure and Evolution, Milky Way Analogs",
                "homepage" => "https://sites.google.com/view/nickybastro/home"
                ),
            "Sarah Eftekharzadeh" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "homepage" => ""
                ),
            "Sten Hasselquist" => array(
                "image" => "https://drstenhq.com/wp-content/uploads/2018/12/IMG_8270-768x632.jpg",
                "keywords" => "Galaxy Evolution, Dwarf Galaxies, Stellar Spectroscopy and Chemical Abundances",
                "homepage" => "https://drstenhq.com/"
                ),
            "Jianhui Lian" => array(
                "image" => "../resources/jpg/jianhui_lian.jpg",
                "keywords" => "Chemical Evolution and Star Formation Histories of Galaxies, Galaxy Environment and Structure",
                "homepage" => "https://ljh520hw.wixsite.com/mysite"
                ),
            "Ay&#351;eg&uuml;l T&uuml;mer" => array(
                "image" => "../resources/jpg/aysegul_tumer.jpg",
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
