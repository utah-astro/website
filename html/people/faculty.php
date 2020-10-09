<h2>Faculty</h2>
<?php
    try {
        $members = array(
            "Ben Bromley" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0095165",
                "homepage" => "http://www.physics.utah.edu/~bromley",
                "keywords" => "Planet formation, Solar System Planets, Origins of Milky Way Stars, Milky Way Structure, Astrophysics.",
                "datascience" => "Applications of Parallel Supercomputing: Dynamical Simulation, Data Mining."),
            "Joel Brownstein" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0707758",
                "homepage" => "https://faculty.utah.edu/~joelbrownstein",
                "keywords" => "Galaxy Clustering and Evolution, Dark Matter, Gravitational Lensing, Cosmology, Gravity",
                "datascience" => "Machine Learning, Deep Learning, Data Mining, Data Access, Data Visualization"),
            "Tabitha Buehler" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0707758",
                "homepage" => "http://faculty.utah.edu/u0791607-TABITHA_CHRISTI_BUEHLER/research/index.hml",
                "keywords" => "Best Teaching Practices, Public Outreach, Informal Education Engagement",
                "datascience" => "");
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }    
    //membertable($members);
?>
