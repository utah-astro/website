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
                                <h4><a href='#faculty'>Faculty</a></h4>
                                <h4><a href='#postdocs'>Postdocs</a></h4>
                                <h4><a href='#graduates'>Graduate Students</a></h4>
                                <h4><a href='#alumni'>Alumni</a></h4>
                                <?php include 'faculty.php'; ?>
                                <?php include 'postdocs.php';?>
                                <?php include 'graduates.php';?>
                                <?php include 'alumni.php';?>
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

