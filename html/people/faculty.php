<h2 id='faculty'>Faculty</h2>
<?php
    try {
        $members = array(
            "Ben Bromley" => array(
                "image" => "https://profiles.faculty.utah.edu/u0095165/thumbnail",
                "homepage" => "http://www.physics.utah.edu/~bromley",
                "keywords" => "Planet formation, Solar System Planets, Origins of Milky Way Stars, Milky Way Structure, Astrophysics, Applications of Parallel Supercomputing: Dynamical Simulation, Data Mining.",
                "office" => "LSSB W3226",
                ),
            "Joel Brownstein" => array(
                "image" => "../resources/jpg/joelbrownstein.jpg",
                "homepage" => "https://astro.utah.edu/people/joelbrownstein",
                "keywords" => "Galaxy Clustering and Evolution, Dark Matter, Gravitational Lensing, Cosmology, Gravity, Data Access, Data Visualization, Machine Learning",
                "links" => "<a target='_blank' href='https://data.sdss.org'>SDSS Data</a>, <a target='_blank' href='https://www.sdss.org'>SDSS-V</a>, <a target='_blank' href='https://datascience.utah.edu'>Utah Center For Data Science</a>, <a target='_blank' href='http://admin.masterlens.org/index.php'>The Master Lens Database</a>, <a target='_blank' href='https://scholar.google.com/citations?user=Yr5IIFEAAAAJ'>Google Scholar Citations</a>, <a target='_blank' href='https://orcid.org/0000-0002-8725-1069'>ORCiD Works</a>",
                "office" => "LSSB W3228",
                ),
            "Tabitha Buehler" => array(
                "remark" => " (on leave)",
                "image" => "https://www.physics.utah.edu/wp-content/uploads/sites/65/2022/01/Tabitha-2-scaled-e1641331374979.jpeg",
                "keywords" => "Best Teaching Practices, Public Outreach, Informal Education Engagement",
                "image_shift" => "-15%",
                ),
            "Kyle Dawson" => array(
                "image" => "https://profiles.faculty.utah.edu/u0634757/thumbnail",
                "homepage" => "http://www.astro.utah.edu/~kdawson/",
                "keywords" => "Origins of Cosmic Acceleration, Cosmology, Galaxy Clustering",
                "links" => "<a target='_blank' href='https://www.sdss.org/surveys/eboss/'>eBOSS</a>, <a target='_blank' href='https://www.desi.lbl.gov'>DESI</a>, <a target='_blank' href='https://datascience.utah.edu'>Utah Center For Data Science</a>",
                "office" => "LSSB W3222",
                ),
            "Tanmoy Laskar" => array(
                "image" => "https://scholar.harvard.edu/files/laskar/files/laskar_t_29777-0011_0.jpg",
                "homepage" => "https://tanmoylaskar.github.io/",
                "keywords" => "Time Domain Astronomy, Relativistic Explosions (Gravitational Wave Events, Gamma-ray Bursts, Tidal Disruption Events), High-energy Astrophysics, Galaxy Evolution, Multi-wavelength Observations & Modeling, Machine Learning.",
                "image_shift" => "-10%",
                "image_landscape" => true,
                "office" => "LSSB W3271",
                ),
            "Yao-Yuan Mao" => array(
                "image" => "https://yymao.github.io/images/Mao_Yao-Yuan_480.jpg",
                "homepage" => "https://yymao.github.io/",
                "keywords" => "Low-mass and Low-redshift Galaxies, Galaxy Formation and Evolution, Dark Matter, Cosmological Simulations, Astronomical Surveys",
                "links" => "<a target='_blank' href='https://sagasurvey.org/'>SAGA Survey</a>, <a target='_blank' href='https://lsstdesc.org/'>Rubin LSST DESC</a>",
                "office" => "LSSB W3218",
                ),
            "Anil Seth" => array(
                "image" => "https://profiles.faculty.utah.edu/u0778105/thumbnail",
                "homepage" => "https://web.physics.utah.edu/~aseth/Anil_Seth.html",
                "links" => "<a target='_blank' href='https://ui.adsabs.harvard.edu/search/q=orcid%3A0000-0003-0248-5470'>Published Papers</a>",
                "keywords" => "Massive Black Holes, Nearby Galaxies, Nuclear Star Clusters",
                "image_shift" => "-6%",
                "image_landscape" => true,
                "office" => "LSSB W3227",
                ),
            "Grace Telford" => array(
                "image" => "https://ogtelford.github.io/images/headshot.jpg",
                "homepage" => "https://ogtelford.github.io/",
                "keywords" => "Massive Stars, Low-mass Galaxies, Stellar Populations, Interstellar Medium, Galaxy Evolution",
                "links" => "<a target='_blank' href='https://ui.adsabs.harvard.edu/search/q=orcid%3A0000-0003-4122-7749'>Publications</a>",
                "office" => "LSSB W3214",
                ),
            "Daniel Wik" => array(
                "image" => "https://profiles.faculty.utah.edu/u6008171/thumbnail",
                "homepage" => "http://www.astro.utah.edu/~wik/",
                "keywords" => "X-ray Astronomy, Galaxy Clusters, Galaxies, Black Holes, Cosmology",
                "office" => "LSSB W3220",
                ),
            "Gail Zasowski" => array(
                "image" => "https://profiles.faculty.utah.edu/u0948422/thumbnail",
                "homepage" => "http://www.physics.utah.edu/~zasowski/",
                "keywords" => "Galactic Archeology, The Milky Way, Stellar Populations, The Interstellar Medium",
                "links" => "<a target='_blank' href='https://www.sdss.org/surveys/apogee/'>APOGEE-2</a>, <a target='_blank' href='https://www.sdss.org'>SDSS-V</a>, <a target='_blank' href='https://ui.adsabs.harvard.edu/search/q=orcid%3A0000-0001-6761-9359&sort=date+desc'>Publications</a>",
                "office" => "LSSB W3225",
                ),
            "Zheng Zheng" => array(
                "image" => "https://profiles.faculty.utah.edu/u0786031/thumbnail",
                "homepage" => "http://www.astro.utah.edu/~zhengzheng/",
                "keywords" => "Galaxy Formation and Evolution, Cosmology, Large-Scale Structure, Cosmic Reionization",
                "image_shift" => "-7%",
                "office" => "LSSB W3221",
                ),
            "Rhett Zollinger" => array(
                "office" => "LSSB W2285",
                )
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
