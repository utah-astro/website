<?php
    function compare_date($a, $b){
        $a_date = $a["date"];
        $b_date = $b["date"];
        if ($a_date > $b_date) return -1;
        if ($a_date < $b_date) return 1;
        return 0;
    }

    function newstable($news_list) {
        if ( isset($news_list) ) {
            $link = fa('external-link');
            echo "<ul class='newslist'>";
            usort($news_list, compare_date);
            foreach ($news_list as $url => $metadata) {
                $title = $metadata["title"];
                $date = $metadata["date"];
                if ( ! empty($title) ) {echo "<li>$date <a target='_blank' href='$url'>$title</a> $link</li>";}
            }
            echo "</ul>";
        }
    }

    function fa($icon) {
        return "<i class=\"fa fa-".$icon."\" aria-hidden=\"true\"></i>";
    }
?>
