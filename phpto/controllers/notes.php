<?php 

$config = require '/xampp/htdocs/phpto/config.php';
$db = new Database($config['database']);

$heading = 'Notes';

$notes = [];

dd($db);

require '/xampp/htdocs/phpto/views/notes.view.php';