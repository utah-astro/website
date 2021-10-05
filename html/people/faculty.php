<h2 id='faculty'>Faculty</h2>
<?php
    try {
        $members = array(
            "Ben Bromley" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0095165",
                "homepage" => "http://www.physics.utah.edu/~bromley",
                "keywords" => "Planet formation, Solar System Planets, Origins of Milky Way Stars, Milky Way Structure, Astrophysics, Applications of Parallel Supercomputing: Dynamical Simulation, Data Mining."
                ),
            "Joel Brownstein" => array(
                "image" => "../resources/jpg/joelbrownstein.jpg",
                "homepage" => "https://www.physics.utah.edu/~joelbrownstein",
                "keywords" => "Galaxy Clustering and Evolution, Dark Matter, Gravitational Lensing, Cosmology, Gravity, Data Access, Data Visualization, Machine Learning",
                "links" => "<a target='_blank' href='https://data.sdss.org'>SDSS Data</a>, <a target='_blank' href='https://www.sdss5.org'>SDSS-V</a>, <a target='_blank' href='https://datascience.utah.edu'>Utah Center For Data Science</a>, <a target='_blank' href='http://admin.masterlens.org/index.php'>The Master Lens Database</a>, <a target='_blank' href='https://scholar.google.com/citations?user=Yr5IIFEAAAAJ'>Google Scholar Citations</a>, <a target='_blank' href='https://orcid.org/0000-0002-8725-1069'>ORCiD Works</a>"
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
                "links" => "<a target='_blank' href='https://www.sdss.org/surveys/eboss/'>eBOSS</a>, <a target='_blank' href='https://www.desi.lbl.gov'>DESI</a>, <a target='_blank' href='https://datascience.utah.edu'>Utah Center For Data Science</a>"
                ),
            "Anil Seth" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0778105",
                "homepage" => "http://www.astro.utah.edu/~aseth/",
                "links" => "<a target='_blank' href='https://www.nasa.gov/mission_pages/hubble/spacecraft/index.html'>Hubble Space Telescope</a>",
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
                "links" => "<a target='_blank' href='https://www.sdss.org/surveys/apogee/'>APOGEE-2</a>, <a target='_blank' href='https://www.sdss5.org'>SDSS-V</a>"
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
