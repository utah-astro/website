<h2 id='alumni'>Alumni</h2>
<?php
    try {
        $members = array(
            "Aishwarya (Ash) Ashok" => array(
                "homepage" => "https://www.ashashok.com/",
                "advisor" => "Prof. Anil Seth"
                ),
            "Tobin Wainer" => array(
                "image" => "../resources/jpg/wainer_tobin.JPG",
                "homepage" => "https://tobin-wainer.github.io/",
                "advisor" => "Profs. Anil Seth and Gail Zasowski",
                "date" => "Postbac at the U until 2022",
                "position" => "Graduate Student at the University of Washington",
                "image_shift" => "-5%",
                ),
            "Michael S. Talbot" => array(
                "image" => "https://science.jpl.nasa.gov/media/images/talbot_pic.max-255x355.jpg",
                "homepage" => "https://science.jpl.nasa.gov/people/michael-talbot/",
                "advisor" => "Prof. Joel Brownstein",
                "phd_thesis" => "Extending the Search for Strong Galaxy-Galaxy Gravitational Lenses within SDSS",
                "date" => "Ph.D. 2021",
                "position" => "NASA Postdoc in the Origin of the Universe Group at JPL",
                "image_shift" => "-5%",
                "image_landscape" => true,
                ),
            "Vijith Jacob Poovelil" => array(
                "image" => "../resources/jpg/vijith_poovelil.jpeg",
                "homepage" => "https://www.linkedin.com/in/vijith-jacob-poovelil/",
                "advisor" => "Prof. Gail Zasowski",
                "phd_thesis" => "Exploring Galactic Chemical Evolution Using Cluster Chemistry and Variability",
                "date" => "Ph.D. 2021",
                "position" => "Data Scientist",
                ),
            "Nicholas Boardman" => array(
                "image" => "../resources/jpg/nick_boardman.jpg",
                "homepage" => "https://sites.google.com/view/nickybastro/home",
                "date" => "Postdoc at the U until Aug. 2021",
                "position" => "Postdoc at the University of St Andrews",
                ),
            "Jianhui Lian" => array(
                "image" => "../resources/jpg/jianhui_lian.jpg",
                "homepage" => "https://ljh520hw.wixsite.com/mysite",
                "date" => "Posdoc at the U until Aug. 2021",
                "position" => "Postdoc at Max-Planck-Institut f&uuml;r Astronomie",
                ),
            "Sten Hasselquist" => array(
                "image" => "https://drstenhq.com/wp-content/uploads/2018/12/IMG_8270-768x632.jpg",
                "homepage" => "https://drstenhq.com/",
                "date" => "Postdoc at the U until June 2021",
                "position" => "Staff scientist at Space Telescope Science Institute",
                "image_shift" => "-10%",
                "image_landscape" => true,
                ),
            "Kevin S. McCarthy" => array(
                "image" => "https://science.jpl.nasa.gov/media/images/Kevin_McCarthy_pic.max-255x355.jpg",
                "advisor" => "Prof. Zheng Zheng",
                "phd_thesis" => "Improving Cosmological Growth-Rate Constraints with Galaxy Clustering",
                "date" => "Ph.D. 2021",
                "position" => "NASA Postdoc at IPAC/JPL",
                ),
            "Renuka Pechetti" => array(
                "advisor" => "Prof. Anil Seth",
                "date" => "Ph.D. 2020",
                "homepage" => "https://www.renukapechetti.com/",
                "position" => "Postdoc at Liverpool John Moores University",
                ),
            "Karina Voggel" => array(
                "date" => "Postdoc at U from 2016 to 2019",
                "homepage" => "https://sites.google.com/view/karina-voggel/home",
                "position" => "CNES Postdoctoral Fellow at Strasbourg Observatory",
                ),
            "Sarah Eftekharzadeh" => array(
                "date" => "Postdoc at the U until Dec. 2020",
                ),
            "Hong Guo" => array(
                "image" => "http://sdss4.shao.ac.cn/guoh/img/about.jpg",
                "homepage" => "http://sdss4.shao.ac.cn/guoh",
                "date" => "Postdoc at the U until Aug. 2015",
                "position" => "Research Professor at Shanghai Astronomical Observatory, Chinese Academy of Sciences",
                ),
            "Xiaoju Xu" => array(
                "advisor" => "Prof. Zheng Zheng",
                "phd_thesis" => "An Investigation of Halo and Galaxy Assembly Bias",
                "date" => "Ph.D. 2019",
                "position" => "Postdoc at CWRU and Shanghai Jiao Tong University",
                ),
             "Chris Ahn" => array(
                "advisor" => "Prof. Anil Seth",
                "date" => "Ph.D. 2018",
                "homepage" => "https://www.linkedin.com/in/christopher-ahn/",
                "position" => "Lead Data Scientist at Intermountain Healthcare",
                ),
	        "Dieu Nguyen" => array(
                "advisor" => "Prof. Anil Seth",
                "date" => "Ph.D. 2018",
                "homepage" => "https://www.linkedin.com/in/dieu-nguyen-6086b447/",
                "position" => "Postdoc at Center of Research in Astrophysics of Lyon",
                ),
            "Haojie Xu" => array(
                "image" => "http://astro.sjtu.edu.cn/media/com_mtree/images/listings/m/136.jpg",
                "advisor" => "Prof. Zheng Zheng",
                "phd_thesis" => "Galaxy Color-Luminosity-Halo Mass Relation from Galaxy Clustering",
                "date" => "Ph.D. 2018",
                "position" => "Postdoc at Shanghai Jiao Tong University",
                ),
	        "Mark den_Brok" => array(
                "date" => "Postdoc at U from 2012 to 2015",
                "position" => "Postdoc at Leibniz Institute Potsdam",
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
