<?php
    try {
        $news_list = array(
            "https://www.physics.utah.edu/news/gravitational-waves-thrum-through-the-cosmos/" => array(
                "title" => "Gravitational waves thrum through the cosmos",
                "date" => 20230727,
            ),
            "https://attheu.utah.edu/facultystaff/desi-early-data-release-holds-nearly-2-million-objects/" => array(
                "title" => "DESI early data release holds nearly 2 million objects",
                "date" => 20230613,
            ),
            "https://attheu.utah.edu/announcements/u-joins-association-of-universities-for-astronomy/" => array(
                "title" => "U joins Association of Universities for Astronomy",
                "date" => 20230531,
            ),
            "https://attheu.utah.edu/facultystaff/aurora-borealis-caught-on-video/" => array(
                "title" => "Aurora borealis caught on video",
                "date" => 20230504,
            ),
            "https://attheu.utah.edu/facultystaff/new-study-questions-decades-long-understanding-of-gamma-ray-bursts/" => array(
                "title" => "New study questions decades-long understanding of gamma ray bursts",
                "date" => 20230328,
            ),
            "https://attheu.utah.edu/research/moon-dust/" => array(
                "title" => "Space dust as Earth’s sun shield",
                "date" => 20230208,
            ),
            "https://attheu.utah.edu/facultystaff/mysterious-bright-flash-is-a-black-hole-jet-pointing-straight-at-earth/" => array(
                "title" => "Mysterious bright flash is a black hole jet pointing straight at Earth",
                "date" => 20221130,
            ),
            "https://www.physics.utah.edu/news/u-students-create-new-presentations-during-planetarium-internship/" => array(
                "title" => "U students create new presentations during planetarium internship",
                "date" => 20220922,
            ),
            "https://www.physics.utah.edu/news/u-astrophysicist-dan-wik-is-member-of-team-whose-proposal-has-been-selected-by-nasa-for-further-study/" => array(
                "title" => "U astrophysicist Dan Wik is member of team whose proposal has been selected by NASA for further study",
                "date" => 20220824,
            ),
            "https://attheu.utah.edu/facultystaff/to-boldly-know-what-no-one-has-known-before/" => array(
                "title" => "To boldly know what no one has known before",
                "date" => 20220818,
            ),
            "https://attheu.utah.edu/facultystaff/boom-a-meteor-crashes-across-utahs-sky/" => array(
                "title" => "BOOM! A meteor crashes across Utah’s sky",
                "date" => 20220818,
            ),
            "https://attheu.utah.edu/facultystaff/u-astronomers-tackle-decades-biggest-questions/" => array(
                "title" => "U astronomers tackle decade’s biggest questions",
                "date" => 20220805,
            ),
            "https://www.physics.utah.edu/news/out-with-a-bang-explosive-neutron-star-merger-captured-for-the-first-time-in-millimeter-light/" => array(
                "title" => "Out with a bang: explosive neutron star merger captured for the first time in millimeter light",
                "date" => 20220803,
            ),
            "https://www.physics.utah.edu/news/gail-zasowski-receives-early-career-teaching-award/" => array(
                "title" => "Gail Zasowski Receives Early Career Teaching Award",
                "date" => 20220217,
            ),
            "https://attheu.utah.edu/science-technology/extraordinary-black-hole/" => array(
                "title" => "Extraordinary black hole found in neighboring galaxy",
                "date" => 20220124,
            ),
            "https://attheu.utah.edu/facultystaff/sdss-vs-robots-turn-their-eyes-to-the-sky/" => array(
                "title" => "SDSS-V’s robots turn their eyes to the sky",
                "date" => 20220114,
            ),
            "https://www.physics.utah.edu/news/tabitha-buehler-honored-with-us-distinguished-teaching-award/" => array(
                "title" => "Tabitha Buehler Honored with U’s Distinguished Teaching Award",
                "date" => 20220104,
            ),
            "https://attheu.utah.edu/facultystaff/watch-launch-of-biggest-most-powerful-telescope-ever/" => array(
                "title" => "Watch launch of biggest, most powerful telescope",
                "date" => 20211223,
            ),
            "https://www.physics.utah.edu/news/joel-brownstein-receives-award-for-sdss-work/" => array(
                "title" => "Joel Brownstein Receives Award for SDSS Work",
                "date" => 20210901,
            ),
            "https://attheu.utah.edu/facultystaff/new-effort-to-map-the-universe-unravel-mysteries-of-dark-energy/" => array(
                "title" => "New effort to map the universe, unravel mysteries of ‘dark energy’",
                "date" => 20210526,
            ),
            "https://attheu.utah.edu/facultystaff/black-holes-and-humankind/" => array(
                "title" => "Black holes and humankind Learn how understanding black holes can help us understand ourselves.",
                "date" => 20210318,
            ),
            "https://attheu.utah.edu/facultystaff/next-gen-astronomical-survey-makes-its-first-observations/" => array(
                "title" => "Next-gen astronomical survey makes its first observations",
                "date" => 20201102,
            ),
            "https://attheu.utah.edu/facultystaff/largest-3d-map-of-the-universe-ever-created/" => array(
                "title" => "Largest 3-D map of the universe ever created",
                "date" => 20200720,
            ),
            "https://attheu.utah.edu/facultystaff/mysterious-ultraviolet-radiation/" => array(
                "title" => "Discovery points to origin of mysterious ultraviolet radiation",
                "date" => 20200309,
            ),
            "https://attheu.utah.edu/facultystaff/capturing-the-colors-of-the-cosmos/" => array(
                "title" => "Capturing the colors of the cosmos",
                "date" => 20191031,
            ),
            "https://attheu.utah.edu/facultystaff/next-wave-of-discovery/" => array(
                "title" => "Next Wave if Discovery",
                "date" => 20171228,
            ),
            "https://archive.unews.utah.edu/news_releases/earthlike-star-wars-tatooines-may-be-common/" => array(
                "title" => "Earthlike ‘Star Wars’ Tatooines may be common",
                "date" => 20150330,
            ),
            "https://archive.unews.utah.edu/news_releases/smallest-known-galaxy-with-a-supermassive-black-hole/" => array(
                "title" => "Smallest Known Galaxy with a Supermassive Black Hole",
                "date" => 20140917,
            ),
            "https://archive.unews.utah.edu/news_releases/helping-the-public-reach-for-the-stars/" => array(
                "title" => "Helping the Public Reach for the Stars",
                "date" => 20140605,
            ),
            "https://archive.unews.utah.edu/news_releases/nearest-bright-hypervelocity-star-found/" => array(
                "title" => "Nearest Bright ‘Hypervelocity Star’ Found",
                "date" => 20140507,
            ),
            "https://archive.unews.utah.edu/news_releases/u-re-enlists-with-astronomy-project/" => array(
                "title" => "U Re-enlists with Astronomy Project",
                "date" => 20130624,
            ),
            "https://archive.unews.utah.edu/news_releases/andromeda-wants-you/" => array(
                "title" => "Andromeda Wants You!",
                "date" => 20121205,
            ),
            "https://archive.unews.utah.edu/news_releases/when-galaxies-eat-galaxies/" => array(
                "title" => "When Galaxies Eat Galaxies",
                "date" => 20121012,
            ),
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        $news_list = NULL;
    }
    newstable($news_list);
?>
