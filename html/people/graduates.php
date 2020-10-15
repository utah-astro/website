<h2>Graduate Students</h2>
<?php
    try {
        $members = array(
            "Aishwarya (Ash) Ashok" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Anil Seth"
                ),
            "Allyson Brodzeller" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
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
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Anil Seth"
                ),
            "Hannah Fritz" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Dan Wik"
                ),
            "Ben Gibson" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Gail Zasowski"
                ),
            "Christian Hannah" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "links" => "",
                "advisor" => "Prof. Anil Seth"
                ),
            "Austin King" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
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
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
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
