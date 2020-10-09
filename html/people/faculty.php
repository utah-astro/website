<h2>Astro Group Faculty</h2>
<?php
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

    <table class="table table-header-shade table-bordered">
        foreach ($members as $key => $value) {
            <tr>
                <td>
                    <span>$key</span>
                </td>
            </tr>
        }
    </table>
?>
