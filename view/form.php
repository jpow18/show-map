<form id="show-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
  <label for="show-input">Enter Show Date (YYYY-MM-DD):</label>
  <input type="text" name="show" id="show-input" pattern="\d{4}-\d{2}-\d{2}" title="Date must be in YYYY-MM-DD format" placeholder="2014-07-03">
  <button type="submit">Submit</button>
  <button type="reset" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>'">Reset</button>
</form>