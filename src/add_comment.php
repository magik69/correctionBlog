<?php

  include 'application/bdd_connection.php';

  // Ajout d'un commentaire à un article du blog.
  $query =
  '
      INSERT INTO
          Comment
          (NickName, Contents, Post_Id, CreationTimestamp)
      VALUES
          (?, ?, ?, NOW())
  ';
  $resultSet = $pdo->prepare($query);
  $resultSet->execute([$_POST['nickName'], $_POST['contents'], $_POST['postId']]);
?>

  <li class="comment">
    <h4><i class="fa fa-comment"></i> Rédigé par <?= htmlspecialchars($_POST['nickName']) ?></h4>
    <article><?= htmlspecialchars($_POST['contents']) ?></article>
  </li>
