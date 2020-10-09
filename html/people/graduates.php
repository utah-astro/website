<h2>Graduate Students</h2>
<?php
    try {
        $members = array(
            "Michael S. Talbot" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "Galaxy-Galaxy Strong Gravitational Lensing, Spectroscopic Identification of Lensing Objects (SILO) Project",
                "links" => "<a target='_blank' href='https://www.sdss.org/surveys/eboss/'>eBOSS</a>, <a target='_blank' href='https://www.sdss.org/surveys/manga/'>MaNGA</a>",
                "advisor" => "Prof. Joel Brownstein"
                )
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
