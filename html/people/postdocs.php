<h2>Postdocs</h2>
<?php
    try {
        $members = array(
            "Nicholas Boardman" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "Galaxy structure and evolution, Milky Way Analogs",
                "homepage" => "https://sites.google.com/view/nickybastro/home"
                ),
            "Sten Hasselquist" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "Galaxy evolution, dwarf galaxies, stellar spectroscopy and chemcial abundances",
                "homepage" => "https://drstenhq.com/"
                ),
            "Jianhui Lian" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "homepage" => "https://ljh520hw.wixsite.com/mysite"
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
