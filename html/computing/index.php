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
                    <li class="active">Computing Resources</li>
                </ol>
            </div>
        </div>
        <main class="uu-main">
            <div class="uu-container">
                <div class="uu-main-top row" id="uu-skip-target">
                    <div class="uu-top-content">
                        <h1 class="page-title">Astro Group: Computing Resources</h1>
                    </div>
                </div>
                <div class="uu-main-bottom row">
                    <div class="uu-main-column">
                        <div class="uu-main-content">
                            <p><img class="img-float-left" src="../resources/jpg/bnr_people.jpg"></p>
                            <p>Computing resources are hosted by the <a href="https://www.chpc.utah.edu/">Center for High Performance Computing</a>, including:</p>
                            <h5>Astro filesystem:</h5>
                            <ul>
                                <li>Home disk: 2 TB total, including daily back up (i.e. shared disk for home directories)</li>
                                <li>Data disk: 100 TBs of RAIDed disk space, separated by research group / faculty<br/>
                                Access via <code>cd /uufs/chpc.utah.edu/common/home/astro</code></li>
                            </ul>
                            <p>
                                <h5>Interactive astro nodes (for computation and data analysis):</h5>
                                <ul>
                                    <li>astro01:  392 GB RAM, 40 core, Intel Xeon Gold 6230 CPU @ 2.10 GHz</li>
                                    <li>astro02:  392 GB RAM, 40 core, Intel Xeon Gold 6230 CPU @ 2.10 GHz</li>
                                    <li>astro03:  392 GB RAM, 40 core, Intel Xeon Gold 6230 CPU @ 2.10 GHz</li>
                                    <li>astro04:  392 GB RAM, 40 core, Intel Xeon Gold 6230 CPU @ 2.10 GHz</li>
                                    <li>astro05:  128 GB RAM, 20 core, 1200 MHz per core</li>
                                    <li>astro06:  32 GB RAM, 16 core, 2100 MHz per core</li>
                                    <li>astro07:  64 GB RAM, 16 core, 2100 MHz per core</li>
                                </ul>
                            </p>
                            <p>
                            <a target="_blank" href="https://docs.google.com/document/d/1gFNYtmOuLpHJynnK5raI0eK2CQGr4xcCp4hwH9g77Ps/edit?usp=sharing">Click here for our computing help file</a>
                            </p>
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

