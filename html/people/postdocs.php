<h2>Postdocs</h2>
<?php
    try {
        $members = array(
            "Name Here" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "Research topics",
                "homepage" => ""
                )
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
