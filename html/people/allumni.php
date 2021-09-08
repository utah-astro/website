<h2 id='allumni'>Allumni</h2>
<?php
    try {
        $members = array(
            "Nicholas Boardman" => array(
                "image" => "../resources/jpg/nick_boardman.jpg",
                "homepage" => "https://sites.google.com/view/nickybastro/home",
                "date" => "Postdoc at the U until Aug. 2021",
                "position" => "Postdoc at University of St Andrews",
                ),
            "Sten Hasselquist" => array(
                "image" => "https://drstenhq.com/wp-content/uploads/2018/12/IMG_8270-768x632.jpg",
                "homepage" => "https://drstenhq.com/",
                "date" => "Postdoc the U until Aug. 2021",
                "position" => "Staff scientist at Space Telescope Science Institute",
                ),
            "Michael S. Talbot" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "advisor" => "Prof. Joel Brownstein",
                "phd_thesis" => "Extending the Search for Strong Galaxy-Galaxy Gravitational Lenses within SDSS",
                "date" => "Graduated Aug. 2021",
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
