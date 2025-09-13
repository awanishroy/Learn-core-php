<?php

    /*
        Like other framework PHP doesn't have template engine by default so here is function to solve problem of 
        combining all theme in one but currently it is under development.
    */

    function base($page, $data = [])
    {
        # Always load DB first
        require __DIR__ . "/../database/connection.php";

        # Then layout parts
        include __DIR__ . "/layout/header.php";
        include __DIR__ . "/layout/navbar.php";

        # Then page content (can safely use DB now)
        include $page;

        include __DIR__ . "/layout/footer.php";
    }

    # Call base
    base(__DIR__ . "/../index.php", []);
