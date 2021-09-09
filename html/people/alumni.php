<h2 id='alumni'>Alumni</h2>
<?php
    try {
        $members = array(
            "Hong Guo" => array(
                "image" => "http://sdss4.shao.ac.cn/guoh/img/about.jpg",
                "homepage" => "http://sdss4.shao.ac.cn/guoh",
                "date" => "Postdoc at the U until Aug. 2015",
                "position" => "Research Professor at Shanghai Astronomical Observatory, Chinese Academy of Sciences",
                ),
            "Sarah Eftekharzadeh" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "date" => "Postdoc at the U until Dec. 2020",
                ),
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
            "Kevin S. McCarthy" => array(
                "image" => "https://science.jpl.nasa.gov/media/images/Kevin_McCarthy_pic.max-255x355.jpg",
                "advisor" => "Prof. Zheng Zheng",
                "phd_thesis" => "Improving Cosmological Growth-Rate Constraints with Galaxy Clustering",
                "date" => "Ph.D. 2021",
                "position" => "NASA Postdoc at IPAC/JPL",
                ),
            "Michael S. Talbot" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "advisor" => "Prof. Joel Brownstein",
                "phd_thesis" => "Extending the Search for Strong Galaxy-Galaxy Gravitational Lenses within SDSS",
                "date" => "Ph.D. 2021",
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
