<h2>Postdocs</h2>
<?php
    try {
        $members = array(
            "Angela Berti" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "homepage" => ""
                ),
            "Nicholas Boardman" => array(
                "image" => "../resources/jpg/nick_boardman.jpg",
                "keywords" => "Galaxy structure and evolution, Milky Way Analogs",
                "homepage" => "https://sites.google.com/view/nickybastro/home"
                ),
            "Sarah Eftekharzadeh" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "homepage" => ""
                ),
            "Sten Hasselquist" => array(
                "image" => "https://drstenhq.com/wp-content/uploads/2018/12/IMG_8270-768x632.jpg",
                "keywords" => "Galaxy evolution, dwarf galaxies, stellar spectroscopy and chemical abundances",
                "homepage" => "https://drstenhq.com/"
                ),
            "Jianhui Lian" => array(
                "image" => "../resources/jpg/jianhui_lian.jpg",
                "keywords" => "Chemical evolution and star formation histories of galaxies, galaxy environment and structure",
                "homepage" => "https://ljh520hw.wixsite.com/mysite"
                ),
            "Ay&#351;eg&uuml;l T&uuml;mer" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "homepage" => ""
                ),
            "Qian Wang" => array(
                "image" => "https://hcav.am/wp-content/uploads/2020/03/work-on-laptop-icon-150x150.jpg",
                "keywords" => "",
                "homepage" => ""
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
