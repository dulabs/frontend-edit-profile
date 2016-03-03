<?php
    if (!defined('FEP')) {
        exit;
    }

        $profilepage = get_option('fep_profilepage');
        $redirect = get_permalink($profilepage);
        echo sprintf('You already logged in. To see your profile, go to %s', "<a href=\"$redirect\">$redirect</a>");
