<html>
    <body>
        <ul>
            <?php foreach($this->data['users'] as $user) { ?>
            <li><?= $user->getName() ?></li>
            <?php } ?>
        </ul>
    </body>
</html>