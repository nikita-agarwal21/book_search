<?php

require_once 'Publisher.php';
require_once 'PublisherDao.php';

require_once 'DatabaseUtilities.php';



class PublisherDaoImpl implements PublisherDao
{
    public function searchPublisher($pub_id)
    {
       
 $flag=false;
 $sql='select * from publishers where  ';
 
 foreach($pub_id as $pubid)
 {
    if($flag == false)
    {
        $sql=$sql."pub_id = "."'".$pubid."'";
        $flag=true;
    }
    else 
    $sql=$sql." or pub_id = "."'".$pubid."'";
 }
// echo $sql;
 $publishers=array();
 $pub_id=array();
 
 $connection=DatabaseUtilities::getConnection('bookstore');

 $resultSet=$connection->query($sql);

 if ($resultSet->num_rows >0)
{
        while($row=$resultSet->fetch_assoc())
        {
         $pubid=new Publishers($row['pub_id'], $row['pub_name'], $row['email']);
         $pub_id[]=$pubid->getPubName();    
        }


 }

$resultSet->close();
$connection->close();

    return $pub_id;
}

public function getPubName($pub_id)
{
 $connection=DatabaseUtilities::getConnection('bookstore');
$name=false;

$sql='select * from publishers where pub_id= ?';
$statement =$connection->prepare($sql);

$statement->bind_param('i',$pub_id);
if($statement->execute())
{$statement->bind_result($pub_id,$pub_name,$email);
    if($statement->fetch())
    {
    $name=new Publishers($pub_id,$pub_name,$email);
    $pub_name=$name->getPubName();
}}
$statement->close();
$connection->close();

    return $pub_name;
}






}






?>