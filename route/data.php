<?

use ZealPHP\App;

$app = App::instance();

$app->route('/data/{id}', function($id) {
    echo "<h1>This is example API to receive ID: $id</h1>";
});