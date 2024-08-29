<h2 id='alumni'>Alumni</h2>
<?php
    try {
        $members = array(
            "Allyson Brodzeller" => array(
                "image" => "../resources/jpg/allyson_brodzeller.jpg",
                "advisor" => "Prof. Kyle Dawson",
                "date" => "Ph.D. 2023",
		"position" => "Postdoc at Berkeley Lab",
                ),
            "Mallory Molina" => array(
                "image" => "../resources/jpg/molina_mallory_crop.jpeg",
                "homepage" => "https://sites.google.com/view/m-molina/home",
		"date" => "Eccles Fellow at the U from 2022 to 2024",
		"position" => "Faculty at Vanderbilt University",
                ),
            "Steve Rossland" => array(
                "advisor" => "Prof. Dan Wik",
                "date" => "Ph.D. 2022. Postdoc at the U from 2022 to 2023",
            ),
            "Abigail A. Coker" => array(
                "image" => "../resources/jpg/abigail_headshot.jpg",
                "advisor" => "Prof. Yao-Yuan Mao",
                "date" => "Master 2023",
		"position" => "Data Analyst, HRL Laboratories",
                ),
            "Joseph Summers" => array(
                "advisor" => "Prof. Joel Brownstein",
                "date" => "Master 2023"
            ),
            "Angela Berti" => array(
                "image" => "../resources/jpg/angela_berti.jpg",
                "homepage" => "http://angelaberti.com/",
                "date" => "Postdoc at the U until summer 2023",
            ),
            "Ay&#351;eg&uuml;l T&uuml;mer" => array(
                "image" => "../resources/jpg/aysegul_tumer.JPG",
                "homepage" => "https://aysegultumer.wordpress.com/",
                "position" => "Postdoc at MIT Kavli Institute",
                "date" => "Postdoc at the U from 2019 to 2022",
                ),
            "Qian Wang" => array(
                "date" => "Postdoc at the U from 2019 to 2022",
                ),
            "Antoine Dumont" => array(
                "image" => "../resources/jpg/antoine_dumont.jpg",
                "homepage" => "https://antoinedumontneira.github.io/",
                "advisor" => "Prof. Anil Seth",
                "image_shift" => "-15%",
                "date" => "Ph.D. 2022",
                "position" => "Postdoc at MPIA in Heidelberg",
                ),
            "Aishwarya (Ash) Ashok" => array(
                "homepage" => "https://www.ashashok.com/",
                "advisor" => "Prof. Anil Seth",
                "date" => "Ph.D. 2022",
		"position" => "Senior Data Scientist, Data and Analytics at PURE Group of Insurance Companies",
                ),
            "Chia-Hsun (Albert) Chuang" => array(
                "date" => "Postdoc at the U from Sep. 2021 to Aug. 2022",
                ),
            "Tobin Wainer" => array(
                "image" => "../resources/jpg/wainer_tobin.JPG",
                "homepage" => "https://tobin-wainer.github.io/",
                "advisor" => "Profs. Anil Seth and Gail Zasowski",
                "date" => "Postbac at the U until 2022",
                "position" => "PhD Student at the University of Washington",
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
                "date" => "Postdoc at the U until Aug. 2021",
                "position" => "Faculty at Yunnan University",
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
                "date" => "Postdoc at the U from 2016 to 2019",
                "homepage" => "https://sites.google.com/view/karina-voggel/home",
                "position" => "CNES Postdoctoral Fellow at Strasbourg Observatory",
                ),
            "Sarah Eftekharzadeh" => array(
                "date" => "Postdoc at the U until Dec. 2020",
                ),
            "Hong Guo" => array(
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
                "advisor" => "Prof. Zheng Zheng",
                "phd_thesis" => "Galaxy Color-Luminosity-Halo Mass Relation from Galaxy Clustering",
                "date" => "Ph.D. 2018",
                "position" => "Postdoc at Shanghai Jiao Tong University",
                "image_shift" => "-25%",
                ),
	        "Mark den_Brok" => array(
                "date" => "Postdoc at the U from 2012 to 2015",
                "position" => "Postdoc at Leibniz Institute Potsdam",
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
