<?php
    // An INI file is a configuration file for computer software that consists of a text-based content with a structure and syntax comprising key–value pairs for
    
    // Purpose
    // It’s a very essential configuration file that controls what a user can or cannot do with the website.
    // Each time PHP is initialized, the php.ini file is read by the system.
    // Sometimes you need to change the behaviour of PHP at runtime, then this configuration file is to use.
    // All the settings related to registering global variables, uploading maximum size, display log errors, resource limits, the maximum time to execute a PHP script and others are written in a file as a set of directives that helps in declaring changes.
    // The php.ini file is the default configuration file for running applications that require PHP. It is used to control variables such as upload sizes, file timeouts, and resource limits.
    // php.ini file is the configuration file. It is always checked when the server gets started or HTTP is restarted in the module and it configures the website to know what a user can do or can’t do with a website.
    // It also helps with the administration of the web server easily.
    
    // Note:
    // Whenever some changes are made to the file, you need to restart your web server.
    // It helps in easy administration of the web with a server using these configuration files. We can also write our own custom configuration files.
    
    // Important settings or common parameters of the php.ini file:
    // 1. short_open_tag = Off
    // 2. memory_limit
    // 3. enable_safe_mode
    // 4. register_globals 
    // 5. upload_max_filesize 
    // 6. post_max_size  
    // 7. upload_tmp_dir = [DIR]  
    // 8. display_errors 
    // 9. error_reporting = E_ALL & ~E_NOTICE:
    
    ini_set('upload_max_filesize', '500M');
    ini_set('memory_limit', '500M');
    ini_set('post_max_size', '200M');
    ini_set('upload_tmp_dir', '/tmp');
    
    echo ini_get('upload_max_filesize');
    echo ini_get('memory_limit');
    echo ini_get('post_max_size');
    echo ini_get('upload_tmp_dir');
    var_dump('error_reporting', E_ALL);
    var_dump('display_errors');
?>