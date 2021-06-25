<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf=8">
    <title></title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>

      <h1>お問い合わせ内容確認</h1>    
      <div class="form">
        <p>お問い合わせ内容はこちらで宜しいでしょうか?<br>よろしければ「送信する」ボタンを押して下さい。</p>
        <p>名前</p>
        <?php echo $_POST['name']; ?>
        <p>メールアドレス</p>
        <?php echo $_POST['mail']; ?>
        <p>年齢</p>
        <?php echo $_POST['age']."歳"; ?>
        <p>コメント</p>
        <?php echo $_POST['comments']; ?><br>
        <form action="index.html">
          <input type="submit" value="戻って修正する" class="grey_button button">
        </form>  
        <form method="post" action="insert.php">
          <input type="submit" value="登録する" class="orange_button button">
          <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
          <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
          <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
          <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
          
        </form> 
      </div>

  </body>
</html>