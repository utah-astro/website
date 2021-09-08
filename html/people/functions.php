<?php
    function membertable($members) {
        if ( isset($members) ) {
            $astro = fa('star-o');
            $link = fa('external-link');
            $university = fa('university');
            $book = fa('book');
            $address = fa('address-book');
            $calendar = fa('calendar-o');
            echo "<table class='table table-header-shade table-bordered'>";
            foreach ($members as $name => $member) {
                $image = $member["image"];
                $homepage = $member["homepage"];
                $keywords = $member["keywords"];
                $links = $member["links"];
                $advisor = $member["advisor"];
                $phd_thesis = $member["phd_thesis"];
                $date = $member["date"];
                $position = $member["position"];
                echo "<tr>";
                echo "<td width='150'><a target='_homepage' href='$homepage'><img src='$image' alt='$name' width='150' height='150'></a></td>";
                echo "<td>";
                echo "<h4><a target='_homepage' href='$homepage'>$name</a></h4>";
                if ( ! empty($keywords) ) {echo "<p>$astro $keywords</p>";}
                if ( ! empty($links) ) {echo "<p>$link $links</p>";}
                if ( ! empty($phd_thesis) ) {echo "<p>$book Ph.D. Thesis: $phd_thesis</p>";}
                if ( ! empty($advisor) ) {echo "<p>$university Advisor: $advisor</p>";}
                if ( ! empty($date) ) {echo "<p>$calendar $date</p>";}
                if ( ! empty($contact) ) {echo "<p>$address Current Position: $position</p>";}
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
