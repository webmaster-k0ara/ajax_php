<?php include('header.php') ?>


<?php
$a = new Tools($posts);
$a->prm();
Tools::show_count();
?>

<?php if ($posts) : ?>
  <ul>
    <?php foreach ($posts as $index => $post) : ?>
      <li>
        <h3><?= $index . "番目" . $post["title"] ?></h3>
        <p><?= $index . "番目" . $post["content"] ?></p>
        <p><?php aaa($post["title"]) ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

<script>
  // $.ajax({
  //   type: "GET",
  //   data: "json",
  //   url: "./lib/api.php",
  // })
  //   .done((data) => {
  //     console.log(data);
  //   })
  //   .fail((error) => {
  //     console.log("通信エラー", error)
  //   })
  //   .always(() => {
  //     console.log('通信完了');
  //   })


  postsAjax().then((data) => {
    console.log(data);
    return testAjax();
  }).then((data) => {
    console.log(data);
  }).catch((e) => {
    console.log(e);
  });

  function postsAjax() {
    return $.ajax({
      type: "GET",
      data: "json",
      url: "./lib/api.php",
    });
  }

  function testAjax() {
    return $.ajax({
      type: "GET",
      data: "json",
      url: "./lib/test.php",
    });
  }

</script>

<?php include('footer.php') ?>
