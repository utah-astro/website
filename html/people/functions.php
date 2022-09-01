<?php
    function compare_last_name($a, $b){
        $a_last = end(explode(" ", $a));
        $b_last = end(explode(" ", $b));
        return strcmp($a_last, $b_last);
    }

    function membertable($members) {
        if ( isset($members) ) {
            $astro = fa('star-o');
            $link = fa('external-link');
            $university = fa('university');
            $book = fa('book');
            $address = fa('address-book');
            $calendar = fa('calendar-o');
            echo "<table class='table table-header-shade table-bordered'>";
            uksort($members, compare_last_name);
            foreach ($members as $name => $member) {
                $image = $member["image"];
                if( empty($image) ) {$image = "../resources/jpg/work-on-laptop-icon-150x150.jpg";}
                $image_shift = $member["image_shift"];
                $image_landscape = $member["image_landscape"];
                $homepage = $member["homepage"];
                $keywords = $member["keywords"];
                $links = $member["links"];
                $advisor = $member["advisor"];
                $phd_thesis = $member["phd_thesis"];
                $date = $member["date"];
                $position = $member["position"];
                echo "<tr>";
                /* Profile picture */
                echo "<td><div class='avatar'>";
                if ( ! empty($homepage) ) {echo "<a target='_blank' href='$homepage'>";}
                echo "<img src='$image' alt='Picture of $name' title='$name'";
                $image_shift_axis = "Y";
                if ( ! empty($image_landscape) ) {echo " class='landscape'"; $image_shift_axis="X";}
                if ( ! empty($image_shift) ) {echo " style='transform:translate$image_shift_axis($image_shift);'";}
                echo ">";
                if ( ! empty($homepage) ) {echo "</a>";}
                echo "</div></td>";
                /* Description */
                echo "<td>";
                if ( ! empty($homepage) ) {echo "<h4><a target='_blank' href='$homepage'>$name</a> $link</h4>";}
                else{ echo "<h4 style='color:#C00;'>$name</h4>";}
                if ( ! empty($keywords) ) {echo "<p>$astro $keywords</p>";}
                if ( ! empty($links) ) {echo "<p>$link $links</p>";}
                if ( ! empty($phd_thesis) ) {echo "<p>$book Thesis: $phd_thesis</p>";}
                if ( ! empty($advisor) ) {echo "<p>$university Advisor: $advisor</p>";}
                if ( ! empty($date) ) {echo "<p>$calendar $date</p>";}
                if ( ! empty($position) ) {echo "<p>$address Current Position: $position</p>";}
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
