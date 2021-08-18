<?php

require_once 'Author.php';
require_once 'AuthorDao.php';

require_once 'Books.php';

require_once 'DatabaseUtilities.php';



class AuthorsDaoImpl implements AuthorsDao
{
    public function searchAuthor($auth_id)
    {
 $authors=array();
 $connection=DatabaseUtilities::getConnection('bookstore');

 $sql='select * from authors where author_id= ?';


 

$statement=$connection->prepare($sql);
$statement->bind_param("i",$auth_id);


if($statement->execute())
{
   $resultstmt=$statement->get_result();
   while($row=$resultstmt->fetch_assoc())
   //$statement->bind_result($auth_id,$auth_name,$email);
  // if($statement->fetch())
   {
   $author=new Authors($row['author_id'],$row['auth_name'],$row['email']);
   $authors[]=$author;

   }
}
      




$statement->close();
$connection->close();


   return ($authors);

}



}


?>