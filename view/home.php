<?php include 'header.php'; ?>

<div class="wrapper">

  <?php foreach ($_SESSION['array'] as $key => $value) {
    if ($value == '?') {
      ?>

    <form action="" method="post" class="button">
      <input type="hidden" name="<?php echo $key; ?>" value="x">
      <button><?php echo $value; ?></button>
    </form>

    <?php } else { ?>

      <div class="button">
        <?php echo $value; ?>
      </div>

    <?php
    }
  }
  ?>

</div>

<form action="" method="post" class="reset">
  <input type="submit" name="reset" value="Reset">
</form>

<?php include 'footer.php'; ?>