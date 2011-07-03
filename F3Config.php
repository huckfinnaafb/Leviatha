<?php

// Database Access
F3::set('DB',
    new DB(
        'mysql:host=127.0.0.1;port=3306;dbname=leviatha_revised',
        'root',
        ''
    )
);

// Debug
F3::set('DEBUG', 1);

// Error
F3::set('ONERROR',
    function() {
        include F3::get('GUI') . "e404.html";
    }
);