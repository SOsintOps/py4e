<?php

use \Tsugi\Util\U;

function buildMenu() {
    global $CFG, $USER;
    $R = $CFG->apphome . '/';
    $T = $CFG->wwwroot . '/';
    $adminmenu = isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true";
    $isInstructor = (isset($USER) && $USER && isset($USER->instructor) && $USER->instructor)
        || (isset($_SESSION['instructor']) && $_SESSION['instructor']);
    $path = U::rest_path();
    $base_path = ($path && isset($path->parent)) ? $path->parent : ''; // e.g., /announce
    $showCalendarDueUi = isset($_SESSION['id'])
        && U::isNotEmpty($CFG->lessons)
        && \Tsugi\Grades\GradeUtil::showDueDates(U::get($_SESSION, 'context_id', 0));

    $json_url = $R . 'announcements/json';
    $dismiss_url = $R . 'announcements/dismiss';
    $view_url = $R . 'announcements';

    $set = new \Tsugi\UI\MenuSet();
    $set->setHome($CFG->servicename, $CFG->apphome);
    $set->addLeft('Lezioni', $R.'lessons');
    if ( isset($_SESSION['id']) ) {
        $set->addLeft('Compiti', $R.'assignments');
        $set->addLeft('Libro', $R . 'book');
    } else {
        $set->addLeft('Libro', $R . 'book');
    }
    
    if ( isset($_SESSION['id']) ) {
        $submenu = new \Tsugi\UI\Menu();
        $submenu->addLink('Avvisi', $R.'announcements');
        $submenu->addLink('Voti', $R.'grades');
        $submenu->addLink('Pagine', $R.'pages');
        $submenu->addLink('Discussioni', $R.'discussions');
        if ( $isInstructor ) {
            $submenu->addLink('Notifiche', $R.'notifications');
        }
        $submenu->addLink('Corsi', 'https://online.dr-chuck.com', false, 'target="_self"');
        if ( isset($CFG->google_map_api_key) ) {
            $submenu->addLink('Mappa', $R.'map');
        }
        $submenu->addLink('Profilo', $R.'profile');
        if ( $showCalendarDueUi ) {
            $submenu->addLink('Calendario', $R.'calendar');
        }

        $submenu->addLink('Badge', $R.'badges');
        $submenu->addLink('Materiali', $R.'materials');
        if ( $CFG->providekeys ) {
            $submenu->addLink('Integrazioni con LMS', $T . 'settings');
        }
        if ( isset($CFG->google_classroom_secret) && (int) ($_SESSION['gc_count'] ?? 0) > 0 ) {
            $submenu->addLink('Corsi di Google Classroom', $T.'gclass/courses');
        }
        $submenu->addLink('App Store gratuito', 'https://www.tsugicloud.org');
        $submenu->addLink('Valuta questo corso', 'https://www.class-central.com/mooc/7363/python-for-everybody');
        $submenu->addLink('Privacy', $R.'privacy');
        $submenu->addLink('Livello di servizio', $R.'service');
        if ( isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true" ) {
            $submenu->addLink('Amministra', $T . 'admin/');
        }
        $submenu->addLink('Esci', $R.'logout');

        if ( isset($_SESSION['avatar']) ) {
            $set->addRight('<img src="'.$_SESSION['avatar'].'" title="'.htmlentities(__('User Profile Menu - Includes logout')).'" style="height: 2em;" referrerpolicy="no-referrer" alt="Avatar" loading="lazy"/>', $submenu);
            // htmlentities($_SESSION['displayname']), $submenu);
        } else {
            $set->addRight(htmlentities($_SESSION['displayname']), $submenu);
        }
    } else {
        $set->addRight('Accedi', $R.'login');
        $set->addRight('Corsi', 'https://online.dr-chuck.com', true, 'target="_self"');
    }

    if ( isset($_SESSION['id']) ) {
        $set->addRight(
            '<tsugi-notifications api-url="'. htmlspecialchars($T . 'api/notifications.php') . '" notifications-view-url="'. htmlspecialchars($R . 'notifications') . '" announcements-view-url="'. htmlspecialchars($R . 'announcements') . '"></tsugi-notifications>',
            false,
            true,
            'hidden-xs tsugi-wc-nav-item'
        );

        if ( $showCalendarDueUi ) {
            $set->addRight(
                '<tsugi-calendar-due api-url="'. htmlspecialchars($R . 'calendar/json') . '" lessons-url="'. htmlspecialchars($R . 'calendar') . '" calendar-url="'. htmlspecialchars($R . 'calendar') . '"></tsugi-calendar-due>',
                false,
                true,
                'hidden-xs tsugi-wc-nav-item'
            );
        }

        if ( isset($CFG->tdiscus) && $CFG->tdiscus ) {
            $set->addRight(
                '<tsugi-discussions api-url="'. htmlspecialchars($R . 'discussions/json') . '" discussions-url="'. htmlspecialchars($R . 'discussions') . '"></tsugi-discussions>',
                false,
                true,
                'hidden-xs tsugi-wc-nav-item'
            );
        }

        if ( \Tsugi\Controllers\Courses::showCoursesWidget() ) {
            $set->addRight(
                '<tsugi-courses api-url="'. htmlspecialchars($T . 'courses/json') . '" all-url="'. htmlspecialchars($T . 'courses') . '" enter-url="'. htmlspecialchars($T . 'courses') . '"></tsugi-courses>', 
                false,
                true,
                'hidden-xs tsugi-wc-nav-item' 
            );
        }

    }


    return($set);
}

