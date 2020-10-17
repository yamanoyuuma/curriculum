
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブログ</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
    require('pdo.php');

    $users = $db->query('SELECT CONCAT (last_name,first_name) FROM users');

    $user = $users->fetch();
   

    $last_login = $db->query('SELECT last_login FROM users');
    $login = $last_login->fetch();

?>
<header>
    <img src="img/YIG.png" alt="">
        <div class="right clearfix">
            <div class="users">
                <p>ようこそ <?php print($user['CONCAT (last_name,first_name)']) ?> さん</p>
            </div>
        
            <div class="last-login">
                <p>最終ログイン日：<?php print($login['last_login']); ?></p>
            </div>
        </div>
</header>
<article>
    <table>
        <tr>
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <?php

        $posts = $db->prepare('SELECT * FROM posts ORDER BY ID DESC');
        $posts->execute();

        

        ?>
        <?php while ($post = $posts->fetch()):?>
        <tr>
            <td><?php print($post['id']);?></td>
            <td><?php print($post['title']); ?></td>
            <td><?php print($post['category']); ?></td>
            <td><?php print($post['comment']); ?></td>
            <td><?php print($post['created']); ?></td>
            <?php endwhile;?>
        </tr>
    </table>
</article>
  
<footer>
    <p>Y&I Group.inc</p>
</footer>

</body>
</html>