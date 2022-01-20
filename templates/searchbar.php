<?php
//
  require "connection.php";

?>

<div class="search-box">
  <form action="search-results.php?q=<?php $GET['q']?>" method="GET" id="search-form">
    <label for="search"><i class="fas fa-search" id="submit"></i></label>
    <input type="search" name="q" id="search">
    <!-- <input type="submit" name="submit" value="submit"> -->
  </form>
</div>

<script type="text/javascript">
  var button = document.getElementById("submit") // get the search icon
  var searchForm = document.getElementById("search-form") // get
  button.addEventListener("click", function(){
    searchForm.submit();
  });
</script>



<?php
 // }
?>
