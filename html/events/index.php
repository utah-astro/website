<?php include 'functions.php';?>
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
                        <a href="../overview">Astro Group</a>
                    </li>
                    <li class="active">Events</li>
                </ol>
            </div>
        </div>
        <main class="uu-main">
            <div class="uu-container">
                <div class="uu-main-top row" id="uu-skip-target">
                    <div class="uu-top-content">
                        <h1 class="page-title">High Energy Astrophysics (HEAP)</h1>
                    </div>
                </div>
                <div class="uu-main-bottom row">
                    <div class="uu-main-column">
                        <div class="uu-main-content">
                            <?php physics_heap(); ?>
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

