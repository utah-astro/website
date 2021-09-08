<h2>Postdocs</h2>
<?php
    try {
        $members = array(
            "Nicholas Boardman" => array(
                "image" => "../resources/jpg/nick_boardman.jpg",
                "keywords" => "Galaxy Structure and Evolution, Milky Way Analogs",
                "homepage" => "https://sites.google.com/view/nickybastro/home"
                ),
            "Sten Hasselquist" => array(
                "image" => "https://drstenhq.com/wp-content/uploads/2018/12/IMG_8270-768x632.jpg",
                "keywords" => "Galaxy Evolution, Dwarf Galaxies, Stellar Spectroscopy and Chemical Abundances",
                "homepage" => "https://drstenhq.com/"
                ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $members = NULL;
    }
    membertable($members);
?>
