<h2>Astro Group Faculty</h2>
<?php
    try {
        $members = array(
            "Ben Bromley" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0095165",
                "homepage" => "http://www.physics.utah.edu/~bromley",
                "keywords" => "Planets"),
            "Joel Brownstein" => array(
                "image" => "https://faculty.utah.edu/bytes/image.hml?id=u0707758",
                "homepage" => "https://faculty.utah.edu/~joelbrownstein",
                "keywords" => "Galaxies")
        );
        echo "<table class='table table-header-shade table-bordered'>";
        foreach ($members as $key => $value) {
            echo "<tr>";
            echo "    <td width='150'><img src='$member->image' alt='$membername' width='150' height='150'></td>";
            echo "    <td>";
            echo "        <h4><a href='$member->homepage'>$membername</a></h4>";
            echo "        <span>$member->keywords</span>";
            echo "    </td>";
            echo "</tr>";
        }
        echo "</table>";
        
    } catch (Exception $e) {
        echo 'Exception: ',  $e->getMessage(), "\n";
    }
?>
