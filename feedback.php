<?php include 'inc/header.php' ?>
   
<?php 
    $sql = 'SELECT * FROM feedback';
    $result = mysqli_query($conn,$sql);
    $Feedback = mysqli_fetch_all($result,MYSQLI_ASSOC)

?>

    <h2>Past Feedbacks</h2>
<?php if(empty($Feedback)) : ?>
    <p class="lead mt3">There is no Feedback available</p>
  <?php endif;  ?>
  <?php foreach($Feedback as $item) : ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
       <div class="text-secondary mt-2">
        By <?php echo $item['name'] ?> 
       </div>
     </div>
   </div>
  <?php endforeach; ?>
   
<?php include 'inc/footer.php' ?>
  
