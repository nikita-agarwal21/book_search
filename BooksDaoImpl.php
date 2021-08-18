<?php

require_once 'Books.php';
require_once 'BooksDao.php';
require_once 'BookAuthDaoImpl.php';
require_once 'BookAuthDao.php';
require_once 'Author.php';
require_once 'DatabaseUtilities.php';

class BooksDaoImpl implements BooksDao
{
    public function searchBooks($book_name,$pub_id)
    {
        $books=array(); $authors=array();
       $flag=false;
 $sql="select * from books where name like '%".$book_name."%' and pub_id in (";

foreach($pub_id as $pubid)
{
  if($flag==false)
  {
    $sql=$sql.$pubid;
    $flag=true;
  }
  else
    $sql=$sql.','.$pubid;
}
$sql=$sql.")";


//echo $sql;
$connection=DatabaseUtilities::getConnection('bookstore');
 $resultSet=$connection->query($sql);

 if (!empty($resultSet) && $resultSet->num_rows >0)
{
    
        while($row=$resultSet->fetch_assoc())
        {
           

         $book=new Books($row['isbn_no'], $row['name'], $row['pub_id'],$row['pub_year'],$row['price'],$row['pages']);
     
        $books[]=$book;
       
        }

 }

$resultSet->close();
$connection->close();

    return ($books);

    }







}






?>