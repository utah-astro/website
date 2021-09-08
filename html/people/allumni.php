<h2>Allumni</h2>
<?php
    try {
        $members = array(
            "Nicholas Boardman" => array(
                "image" => "../resources/jpg/nick_boardman.jpg",
                "keywords" => "Galaxy Structure and Evolution, Milky Way Analogs",
                "homepage" => "https://sites.google.com/view/nickybastro/home",
                "date" => "At the U until Aug. 2021",
                "position" => "Postdoc at University of St Andrews"
                ),
            "Sten Hasselquist" => array(
                "image" => "https://drstenhq.com/wp-content/uploads/2018/12/IMG_8270-768x632.jpg",
                "keywords" => "Galaxy Evolution, Dwarf Galaxies, Stellar Spectroscopy and Chemical Abundances",
                "homepage" => "https://drstenhq.com/",
                "date" => "At the U until Aug. 2021",
                "position" => "Staff scientist at Space Telescope Science Institute"
                ),
            "Michael S. Talbot" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "Galaxy-Galaxy Strong Gravitational Lensing, Spectroscopic Identification of Lensing Objects (SILO) Project",
                "links" => "<a target='_blank' href='https://www.sdss.org/surveys/eboss/'>eBOSS</a>, <a target='_blank' href='https://www.sdss.org/surveys/manga/'>MaNGA</a>",
                "advisor" => "Prof. Joel Brownstein",
                "phd_thesis" => "Extending the Search for Strong Galaxy-Galaxy Gravitational Lenses within SDSS",
                "date" => "Graduated Aug. 2021",
                "position" => ""
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
