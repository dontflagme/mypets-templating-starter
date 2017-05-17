<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
      <h1><?= $title ?></h1>
      <p>User login is <?= $username ?> use <?= $password ?></p>
      
      <h3>Temperature</h3>
      <p>Fahrenheit: <?= $temp ?> degrees</p>
      <p>Celsius: <?= ($temp -32) * (5.0/9.0) ?> degrees</p>
      <p>Temp Total: <?= $temp + $temp2 ?></p>
      <p>Favorite color: <?= $color ?></p>
      <p>Favorite radius: <?= $radius ?></p>
      
      <h3>bookmark</h3>
      <p>My first bookmark is <a href="<?= $bookmarks[0] ?>"><?= $bookmarks[0] ?></a></p>
      
      <ul>
        <?php foreach (($bookmarks?:[]) as $bookmark): ?>
            <li><a href="<?= $bookmarks[0] ?>"><?= str_replace('http://','',$bookmark); ?></a></li>
        <?php endforeach; ?>
      </ul>
      
      <h3>Addresses</h3>
      <p><?= $address['primary'] ?></p>
      <p><?= $address['secondary'] ?></p>
      
      <ul>
      <?php foreach (($address?:[]) as $key=>$value): ?>
        <li><?= $key ?> - <?= $value ?></li>
        
        <p>Chocolate: <?= $desserts['chocolate'] ?></p>
        <p>Vanillia: <?= $desserts['vanilla'] ?></p>
        <p>strawberry: <?= $desserts['strawberry'] ?></p>
        
        <?php foreach (($desserts?:[]) as $key=>$value): ?>
            <input type='checkbox' value='<?= $key ?>'/><?= $value ?></br>
        <?php endforeach; ?>
      <?php endforeach; ?>
      </ul>
    </body>
</html>