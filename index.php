<?php
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();
    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    //Default route
    $f3->route('GET /', function($f3) {
        
        $f3->set('username', 'jshmo');
        $f3->set('password', sha1('Password01'));
        $f3->set('title', 'working with Templates');
        $f3->set('temp', 68);
        $f3->set('color', 'I like purple cats');
        $f3->set('radius', 10);
        $f3->set('bookmarks', array('http://www.cnn.com', 'http://www.reddit.com/r/news','http://edition.cnn.com/sport'));
        $f3->set('address', array('primary'=>
                             '1000 apple ln. Seattle, Wa 98999',
                             'secondary'=>
                             '2510 100th court tac, wa 90000'));
        $f3->set('desserts', array('chocolate' => 'chocolate mousse',
                                   'vanilla' => 'Vanilla custard',
                                   'strawberry'=> 'strawberry shortcake'));
                             
        echo Template::instance()->render('pages/info.html');
        
    });

    //Run fat free
    $f3->run();
    