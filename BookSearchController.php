

<?php


require_once 'Author.php';
require_once 'AuthorDao.php';
require_once 'AuthorDaoImpl.php';

require_once 'Books.php';
require_once 'BookAuth.php';
require_once 'BookAuthDao.php';
require_once 'Author.php';
require_once 'BooksDaoImpl.php';

require_once 'BookAuthDaoImpl.php';
//require_once 'BookAuthDaoImpl.php';
require_once 'PublisherDaoImpl.php';
require_once 'PublisherDao.php';

//require_once 'AuthorDaoImpl.php';

$results = array();

$isbn_no=array();
$book_name="";

if ( isset($_POST['book_name']))
{
     $book_name= $_POST['book_name'];


     if ( isset($_POST['publishers']))
     {
          $pub_id= $_POST['publishers'];


          $PublisherDao = new PublisherDaoImpl();
   
        $publishers=$PublisherDao->searchPublisher($pub_id);
    
          
       $_POST['publisher']=$publishers;
        $BooksDao =new BooksDaoImpl();
        $results=$BooksDao->searchBooks($book_name,$pub_id);


      
    } 
   }
   
 

 

$_POST['results'] = $results;

  
include 'BookSearchMVC.php';
?>










   

    
   
   
