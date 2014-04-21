<?php
//Theme with update info
$packages['theme'] = array( //Replace theme with theme stylesheet slug that the update is for
    'versions' => array(
        '1.0' => array( //Array name should be set to current version of update
            'version' => '1.0', //Current version available
            'date' => '2013-01-22', //Date version was released
            //theme.zip is the same as file_name
            'package' => 'http://url-api-website/download.php?key=' . md5('theme.zip' . mktime(0,0,0,date("m"),date("d"),date("Y"))),
            //file_name is the name of the file in the update folder.
            'file_name' => 'theme.zip',	//File name of theme zip file
            'author' => 'Author Name', //Author name - can be linked using html - <a href="http://url-to-your-website">Author Name</a>
            'name' => 'Theme Name', //Name of theme
            'requires' => '2.8', //Wordpress version required
            'tested' => '3.5', //WordPress version tested up to
            'screenshot_url' => 'http://url-theme-website/screenshot.png' //url of screenshot of theme
        )
    ),
    'info' => array(
        'url' => 'http://url-theme-website' //Website devoted to theme if available
    )
);

//Plugin with update info
$packages['plugin'] = array( //Replace plugin with the plugin slug that updates will be checking for
    'versions' => array(
        '1.0.0' => array( //Array name should be set to current version of update
            'version' => '1.0.0', //Current version available
            'date' => '2013-01-22', //Date version was released
            'author' => 'Author Name', //Author name - can be linked using html - <a href="http://url-to-your-website">Author Name</a>
            'requires' => '2.8', //WP version required for plugin
            'tested' => '3.5', //WP version tested with
            'homepage' => 'http://url-plugin-website', //Site devoted to your plugin if available
            'downloaded' => '1000', //Number of times downloaded
            'external' => '', //Unused
            //plugin.zip is the same as file_name
            'package' => 'http://url-api-website/download.php?key=' . md5('plugin.zip' . mktime(0,0,0,date("m"),date("d"),date("Y"))),
            //file_name is the name of the file in the update folder
            'file_name' => 'plugin.zip',
            'sections' => array(
                /*
                 * Plugin Info sections tabs. Each key will be used as the title of the tab, value is the contents of tab.
                 * Must be lowercase to function properly
                 * HTML can be used in all sections below for formating. Must be properly escaped ie a single quote would have to be \'
                 * Screenshot section must use exteranl links for img tags.
                 */
                'description' => 'Description of Plugin', //Description Tab
                'installation' => 'Installation Info', //Installaion Tab
                'screenshots' => 'Screenshots', //Screenshots Tab
                'changelog' => 'Changelog', //Changelog Tab
                'faq' => 'FAQ', //FAQ Tab
                'other notes' => 'Other Notes' //Other Notes Tab
            )
        )
    ),
    'info' => array(
        'url' => 'http://url-plugin-website' //Site devoted to your plugin if available
    )
);
