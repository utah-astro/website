<?php
    function compare_date($a, $b){
        return intval($b["date"]) - intval($a["date"]);
    }

    function format_date($date){
        $date = strval($date);
        $year = substr($date, 0, 4);
        $month = substr($date, 4, 2);
        $day = substr($date, 6, 2);
        return "{$month}/{$day}/{$year}";
    }

    function newstable($news_list) {
        if ( isset($news_list) ) {
            $link = fa('external-link');
            echo "<ul class='newslist'>";
            uasort($news_list, 'compare_date');
            foreach ($news_list as $url => $metadata) {
                $title = $metadata["title"];
                $date = format_date($metadata["date"]);
                if ( ! empty($title) ) {echo "<li>[$date] <a target='_blank' href='$url'>$title</a> $link</li>";}
            }
            echo "</ul>";
        }
    }

    function fa($icon) {
        return "<i class=\"fa fa-".$icon."\" aria-hidden=\"true\"></i>";
    }
?>
