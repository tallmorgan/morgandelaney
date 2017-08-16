<?php

/**
 * Serve either full or simple version of site
 *
 * This is based on a simple whitelist in terms of query string
 * parameters in order to make sharing easy for visitors with the link.
 */
if (isset($_GET['full'])) {
    include('full/libs/content.php');
    include('index-full.php');
} else {
    include('index-simple.php');
}