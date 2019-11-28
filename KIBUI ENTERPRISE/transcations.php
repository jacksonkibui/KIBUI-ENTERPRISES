<?php
class DB{
private $link;

public function __construct(){
$this->link = mysqli_connect("localhost", "root", "", "buzina");
if (mysqli_connect_errno()) {
printf("Connect failed: %sn", mysqli_connect_error());
exit();
}
}
//...
public function dbProcessEmail($customer_id,$cust_name,$city,$grade,$salesman_id){
mysqli_autocommit($this->link,FALSE);
mysqli_query($this->link,"INSERT INTO customer(customer_id,cust_name,city,grade,salesman_id) VALUES
($customer_id','$cust_name','$city','$grade','$salesman_id')");
if(mysqli_errno($this->link)){
echo "transaction aborted";
mysqli_rollback($this->link);
return -1;
}
else{
mysqli_query($this->link,"INSERT INTO salesman(Salesman_ID,name,city,commission) VALUES('$salesman_id','null','null','null')");
if(mysqli_errno($this->link)){
echo"transaction aborted";
mysqli_rollback($this->link);
return -1;
}
else{
printf("transaction succeededn");
mysqli_commit($this->link);
return 1;
}
}
return -1;
}
};
?>