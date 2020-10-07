<?php include '../head.php';?>
<body class="two-column-left">
    <!-- Code to be included after the opening <body> tag can go here -->
    <div class="uu-page-wrapper">
        <?php include '../header.php';?>
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
                        <a href="http://www.physics.utah.edu/research/astronomy-astrophysics.php">Astronomy &amp; Astrophysics</a>
                    </li>
                    <li class="active">Computing</li>
                </ol>
            </div>
        </div>
        <main class="uu-main">
            <div class="uu-container">
                <div class="uu-main-top row" id="uu-skip-target">
                    <div class="uu-top-content">
                        <h1 class="page-title">Astronomy and High Energy Astrophysics: Computing</h1>
                    </div>
                </div>
                <div class="uu-main-bottom row">
                    <div class="uu-main-column">
                        <div class="uu-main-content">
                            <p><img class="img-float-left" src="/images/banner/bnr_people.jpg"></p>
                            <h3>The Astronomy group computing resources are Hosted by the <a href="https://www.chpc.utah.edu/">Center for High Performance Computing (CHPC)</a>, and include:</h3>
                            <H5>Astro filesystem:</H5>
                            <UL>
                                <LI>Home disk: 2 TB total, including daily back up (i.e. shared disk for home directories)</LI>
                                <LI>Data disk: 100 TBs of RAIDed disk space, separated by research group / faculty<br/>
                                Access via <code>cd /uufs/chpc.utah.edu/common/home/astro</code></LI>
                            </UL>
                            </p><p>
                                <H5>Interactive astro nodes (for computation and data analysis):</H5>
                                <UL>
                                    <LI>astro01:  392 GB RAM, 40 core, Intel Xeon Gold 6230 CPU @ 2.10 GHz</LI>
                                    <LI>astro02:  392 GB RAM, 40 core, Intel Xeon Gold 6230 CPU @ 2.10 GHz</LI>
                                    <LI>astro03:  392 GB RAM, 40 core, Intel Xeon Gold 6230 CPU @ 2.10 GHz</LI>
                                    <LI>astro04:  392 GB RAM, 40 core, Intel Xeon Gold 6230 CPU @ 2.10 GHz</LI>
                                    <LI>astro05:  128 GB RAM, 20 core, 1200 MHz per core</LI>
                                    <LI>astro06:  32 GB RAM, 16 core, 2100 MHz per core</LI>
                                    <LI>astro07:  64 GB RAM, 16 core, 2100 MHz per core</LI>
                                </UL>
                            </p><p>
                                Additional high performance computing resources are available through the<br/> <a href="https://www.chpc.utah.edu/">Center for High Performance Computing</a>.
                            </p>
                        </div>
                    </div>
                    <?php include '../submenu.php';?>
                </div>
            </div>
        </main>
        <?php include '../footer.php';?>
    </div>
    <?php include '../scripts.php';?>
</body>
</html>

