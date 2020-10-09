<?php
    function membertable($members) {
        if ( isset($members) ) {
            $astro = fa('star-o');
            $link = fa('external-link');
            $university = fa('university');
            echo "<table class='table table-header-shade table-bordered'>";
            foreach ($members as $name => $member) {
                $image = $member["image"];
                $homepage = $member["homepage"];
                $keywords = $member["keywords"];
                $links = $member["links"];
                $advisor = $member["advisor"];
                echo "<tr>";
                echo "<td width='150'><a href='$homepage'><img src='$image' alt='$name' width='150' height='150'></a></td>";
                echo "<td>";
                echo "<h4><a href='$homepage'>$name</a></h4>";
                if ( isset($keywords) ) {echo "<p>$astro $keywords</p>";}
                if ( isset($links) ) {echo "<p>$link $links</p>";}
                if ( isset($advisor) ) {echo "<p>$university Advisor: $advisor</p>";}
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }

    function fa($icon) {
        return "<i class=\"fa fa-".$icon."\" aria-hidden=\"true\"></i>";
    }
?>
