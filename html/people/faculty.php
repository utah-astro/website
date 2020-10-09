<h2>Faculty</h2>
<?php
    try {
        $members = array(
            "Ben Bromley" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0095165",
                "homepage" => "http://www.physics.utah.edu/~bromley",
                "keywords" => "Planet formation, Solar System Planets, Origins of Milky Way Stars, Milky Way Structure, Astrophysics, Applications of Parallel Supercomputing: Dynamical Simulation, Data Mining."
                ),
            "Joel Brownstein" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0707758",
                "homepage" => "http://physics.utah.edu/~joelbrownstein",
                "keywords" => "Galaxy Clustering and Evolution, Dark Matter, Gravitational Lensing, Cosmology, Gravity, Data Access, Data Visualization, Machine Learning",
                "affiliations" => "<a target='_blank' href='https://data.sdss.org'>SDSS-IV</a>, <a target='_blank' href='https://test.sdss5.org'>SDSS-V</a>, <a target='_blank' href='https://datascience.utah.edu'>Utah Center For Data Science</a>, <a target='_blank' href='https://admin.masterlens.org'>The Master Lens Database</a>"
                ),
            "Tabitha Buehler" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0791607",
                "homepage" => "https://faculty.utah.edu/u0791607-TABITHA_BUEHLER/research/index.hml",
                "keywords" => "Best Teaching Practices, Public Outreach, Informal Education Engagement"
                ),
            "Kyle Dawson" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0634757",
                "homepage" => "http://www.astro.utah.edu/~kdawson/",
                "keywords" => "Origins of Cosmic Acceleration, Cosmology, Galaxy Clustering",
                "affiliations" => "<a target='_blank' href='https://www.sdss.org/surveys/eboss/'>eBOSS</a>, <a target='_blank' href='https://www.desi.lbl.gov'>DESI</a>, <a target='_blank' href='https://datascience.utah.edu'>Utah Center For Data Science</a>"
                ),
            "Anil Seth" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0778105",
                "homepage" => "http://www.astro.utah.edu/~aseth/",
                "keywords" => "Galaxy Formation, Nearby Galaxies, Massive Star Clusters &amp; Black Holes in Galaxy Centers"
                ),
            "Daniel Wik" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u6008171",
                "homepage" => "http://www.astro.utah.edu/~wik/",
                "keywords" => "X-ray Astronomy, Galaxy Clusters, Galaxies, Black Holes, Cosmology"
                ),
            "Gail Zasowski" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0948422",
                "homepage" => "http://www.physics.utah.edu/~zasowski/",
                "keywords" => "Galactic Archeology, The Milky Way, Stellar Populations, The Interstellar Medium",
                "affiliations" => "<a target='_blank' href='https://www.sdss.org/surveys/apogee/'>APOGEE-2</a>, <a target='_blank' href='https://test.sdss5.org'>SDSS-V (coming soon)</a>"
                ),
            "Zheng Zheng" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0786031",
                "homepage" => "http://www.astro.utah.edu/~zhengzheng/",
                "keywords" => "Galaxy Formation and Evolution, Cosmology, Large-Scale Structure, Cosmic Reionization"
                )
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }    
    membertable($members);
?>
