<?php

require_once 'BookAuth.php';
require_once 'BookAuthDao.php';
require_once 'Author.php';
require_once 'DatabaseUtilities.php';

class BookAuthDaoImpl implements BookAuthDao
{
    public function searchBookAuthor($isbn_no)
    {
        $authorids=array();
       
        $connection=DatabaseUtilities::getConnection('bookstore');
 
 $sql='select * from bookauthors where isbn_no = '."'".$isbn_no."'";
 



 
 $resultSet=$connection->query($sql);
 
 if ($resultSet->num_rows >0)
{
    
        while($row=$resultSet->fetch_assoc())
        {
         $author=new BookAuth($row['isbn_no'],$row['author_id']);
         $authorids[]=$author;    
        }
 }

$resultSet->close();
$connection->close();


    return ($authorids);
}

}






?>