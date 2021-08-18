
<?php 
  class BookSearchHelper 
  { 
    private $publishers,$book_name;

    public function __construct() 
    { 
       if ( isset($_POST['book_name'])) 
       { 
         $this->book_name = $_POST['book_name']; 
       } 
       
       if ( isset($_POST['publishers'])) 
       { 
         $this->publishers = $_POST['publishers']; 
       } 
      
    }

   

   public function ispublisherChecked($par) 
    { 
        if ( !$this->publishers ) 
            return ''; 
        foreach ( $this->publishers as $pub)
             if ( $pub == $par )
             return  'checked'; 
          
        return '';  
    } 
  
    public function isBookName() 
    { 
        if ( !$this->book_name ) 
            return ''; 
  
       else 
       return $this->book_name;
    } 
  
   


    

  } 
?>