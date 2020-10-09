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
        foreach ($members as $member_name => $member) {
            <tr>
                <td width="150"><img src="$member->image" alt="$member_name" width="150" height="150"></td>
                <td>
                    <h4><a href="$member->homepage">$member_name</a></h4>
                    <span>$member->keywords</span>
                </td>
            </tr>
        }
    </table>
?>
