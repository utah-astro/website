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
                "homepage" => "https://astro.utah.edu/~joelbrownstein",
                "keywords" => "Galaxy Clustering and Evolution, Dark Matter, Gravitational Lensing, Cosmology, Gravity, Data Access, Data Visualization, Machine Learning",
                "affiliations" => "<a target='_blank' href='https://data.sdss.org'>SDSS-IV Data</a>, <a target='_blank' href='https://test.sdss5.org'>SDSS-V (coming soon)</a>, <a target='_blank' href='https://datascience.utah.edu'>Utah Center For Data Science</a>"
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
                "homepage" => "http://www.astro.utah.edu/~aseth/"
                ),
            "Daniel Wik" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u6008171",
                "homepage" => "http://www.astro.utah.edu/~wik/"
                ),
            "Gail Zasowski" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0948422",
                "homepage" => "http://www.physics.utah.edu/~zasowski/"
                )
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }    
    membertable($members);
?>
