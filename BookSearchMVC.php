
<!DOCTYPE html>

<?php
    require_once 'BookSearchHelper.php';    
    $bookHelper = new BookSearchHelper();

    $results = false;
   
    if ( isset($_POST['results']))
         $results = $_POST['results'];
   

?>

<html>
  <head>
    
  </head>

  <body >
    <br>
    <br>
    <form name="BookForm" method="post" action="BookSearchController.php" >
   book name:
      <input type='text' name='book_name' size="10" value='<?php echo $bookHelper->isBookName() ;?>'/>
      <br>
       <br>
       publisher : 
       <input type="checkbox" name="publishers[]" value="90" <?php echo $bookHelper->ispublisherChecked('90'); ?> />pearson
       <input type="checkbox" name="publishers[]" value="91" <?php echo $bookHelper->ispublisherChecked('91'); ?> />oxford
       <input type="checkbox" name="publishers[]" value="92" <?php echo $bookHelper->ispublisherChecked('92'); ?> />mc graw hill

       
       <br>
       <br>
     
      

<br><br>
       <input type="submit" value="Submit" />
       <br>
       <br>
       <?php
    
          if($results)
          {
          //echo var_dump($results);
 $BookAuthDao=new BookAuthDaoImpl();
 
 $AuthorsDao=new AuthorsDaoImpl();
 $BooksDao=new BooksDaoImpl();
$PublisherDao=new PublisherDaoImpl();
        
            
?>
  <br><br>
        <table border='1'>
         <tr><th>isbn</th><th>name</th><th>pubid</th><th>year</th><th>pages</th><th>price</th><th>author name</th><th>publisher name</th></tr>
<?php
          foreach($results as $result)
          {
            $authorids=$BookAuthDao->searchBookAuthor($result->getIsbnNo());

     # foreach($authorids as $authid)
#{
  #$id=$authid->getAuthId();
  //echo var_dump($id);
 # $authors=$AuthorsDao->searchAuthor($id);
 //$publishers=$publisherDao->searchPublisher($result->getPubId());
 //echo $result->getPubId();
#}

?>

        <tr><td><?php echo $result->getIsbnNo(); ?></td>
        <td><?php echo $result->getName();?></td>
        <td><?php echo $result->getPubId();?></td>
        <td><?php echo $result->getPubYear();?></td>
        <td><?php echo $result->getPages();?></td>
        <td><?php echo $result->getPrice();?></td>
        <td>
       <?php 
      foreach($authorids as $authid)
      {
        $id=$authid->getAuthId();
        
       
        $authors=$AuthorsDao->searchAuthor($id);
        foreach($authors as $auth)
            echo $auth->getAuthName().'<br>';
      }
//$authorids=$BookAuthDao->searchBookAuthor($result->getIsbnNo());

     /*  foreach($authorids as $authid)
{
  $id=$authid->getAuthId();
  //echo var_dump($id);
  $authors=$AuthorsDao->searchAuthor($id); */
  #echo $authors->getAuthName().'<br>';  
 ?></td>
 <td><?php echo $PublisherDao->getPubName($result->getPubId());?>
 </tr>
<?php
          }


          }
      
   ?>  
   
      </table>             
    </form>
   
  </body>

</html>




 