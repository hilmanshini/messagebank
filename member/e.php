
<style>
</style>
<script>
$(function() {
$( "#accordion" ).accordion();
});
</script>
<?php
include "../dbconfig/c.php";
$q = mysql_query("select a.id, a.sympathy , a.title , a.text from history as a ORDER by a.datetime desc limit 6 ",E::getConnection());

?>
<div id="accordion">

<h3>Section 1</h3>
<div>
 
    <?php
while ($row = mysql_fetch_assoc($q)) {

?>
  <p>
  <?php echo $row['title'] ;?>
</p>
  <p>  <?php echo $row['text'] ;?></p>
  <p><a href="like.php?id=  <?php echo $row['id'] ;?>">resep</a> </p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<?php
}

?>
</div>
<h3>Section 1</h3>
<div>
<p>
texxt
</p>
</div>
<h3>Section 1</h3>
<div>
<p>
texxt
</p>
</div>




</div>
