<?php include '../common/head.php';?>
<body class="two-column-left">
    <!-- Code to be included after the opening <body> tag can go here -->
    <div class="uu-page-wrapper">
        <?php include '../common/header.php';?>
        <div class="uu-breadcrumb">
            <div class="uu-container">
                <p class="sr-only">You are here:</p>
                <ol class="breadcrumb">
                    <li>
                        <a href="https://www.physics.utah.edu/">Home</a>
                    </li>
                    <li>
                        <a href="https://www.physics.utah.edu/research/">Research</a>
                    </li>
                    <li>
                        <a href="http://www.physics.utah.edu/research/astronomy-astrophysics.php">Astro Group</a>
                    </li>
                    <li class="active">People</li>
                </ol>
            </div>
        </div>
        <main class="uu-main">
            <div class="uu-container">
                <div class="uu-main-top row" id="uu-skip-target">
                    <div class="uu-top-content">
                        <h1 class="page-title">Astro Group: People</h1>
                    </div>
                </div>
                <div class="uu-main-bottom row">
                    <div class="uu-main-column">
                        <div class="uu-main-content">
                            <div class="scroll-overflow-sm">
                                <?php include 'faculty.php';?>
                                <table class="table table-header-shade table-bordered">
                                    foreach ($persons as $name => $person) {
                                        <tr>
                                            <td width="150"><img src="$person->image" alt="$name" width="150" height="150"></td>
                                            <td>
                                                <h4><a href="$person->homepage">$name</a></h4>
                                                <span>$person->keywords</span>
                                            </td>
                                        </tr>
                                    }
                                </table>
                                <?php include 'postdocs.php';?>
                                <?php include 'graduates.php';?>
                            </div>
                        </div>
                    </div>
                    <?php include '../common/submenu.php';?>
                </div>
            </div>
        </main>
        <?php include '../common/footer.php';?>
    </div>
    <?php include '../common/scripts.php';?>
</body>
</html>

