<?php
    function membertable($members) {
        if ( isset($members) ) {
            echo "<table class='table table-header-shade table-bordered'>";
            foreach ($members as $name => $member) {
                $image = $member["image"];
                $homepage = $member["homepage"];
                $keywords = $member["keywords"];
                $datascience = $member["datascience"];
                echo "<tr>";
                echo "<td width='150'><a href='$homepage'><img src='$image' alt='$name' width='150' height='150'></a></td>";
                echo "<td>";
                echo "<h4><a href='$homepage'>$name</a></h4>";
                if ( isset($keywords) ) {echo "<p><i class='fa fa-star-o' aria-hidden='true'></i> $keywords</p>";}
                if ( isset($datascience) ) {echo "<p>$datascience</p>";}
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>
