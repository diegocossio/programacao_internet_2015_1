<?php
function process_card($card_details)
{
  // connect to payment gateway or
  // use gpg to encrypt and mail or
  // store in DB if you really want to

  return true;
}

function insert_order($order_details)
{
  global $HTTP_SESSION_VARS;

   //extract order_details out as variables
  extract($order_details);


  //set shipping address same as address
  if(!$ship_name&&!$ship_address&&!$ship_city&&!$ship_state&&!$ship_zip&&!$ship_country)
  {
    $ship_name = $name;
    $ship_address = $address;
    $ship_city = $city;
    $ship_state = $state;
    $ship_zip = $zip;
    $ship_country = $country;
  }

  $conn = db_connect();
 
  //insert customer address
  $query = "select customerid from customers where  
            name = '$name' and address = '$address' 
            and city = '$city' and state = '$state' 
            and zip = '$zip' and country = '$country'";
  $result = mysql_query($query);
  if(mysql_numrows($result)>0)
  {
    $customer_id = mysql_result($result, 0, 'customerid');
  }
  else
  {
    $query = "insert into customers values
            ('', '$name','$address','$city','$state','$zip','$country')";
    $result = mysql_query($query);
    if (!$result)
       return false;
  }
  $query = "select customerid from customers where  
            name = '$name' and address = '$address' 
            and city = '$city' and state = '$state' 
            and zip = '$zip' and country = '$country'";
  $result = mysql_query($query);
  if(mysql_numrows($result)>0)
    $customerid = mysql_result($result, 0, 'customerid');
  else
    return false; 
  $date = date('Y-m-d');
  $query = "insert into orders values
            ('', $customerid, ".$HTTP_SESSION_VARS['total_price'].", '$date', 'PARTIAL', '$ship_name',
             '$ship_address','$ship_city','$ship_state','$ship_zip',
              '$ship_country')";
  $result = mysql_query($query);
  if (!$result)
    return false;

  $query = "select orderid from orders where 
               customerid = $customerid and 
               amount > ".$HTTP_SESSION_VARS['total_price']."-.001 and
               amount < ".$HTTP_SESSION_VARS['total_price']."+.001 and
               date = '$date' and
               order_status = 'PARTIAL' and
               ship_name = '$ship_name' and
               ship_address = '$ship_address' and
               ship_city = '$ship_city' and
               ship_state = '$ship_state' and
               ship_zip = '$ship_zip' and
               ship_country = '$ship_country'";
  $result = mysql_query($query);
  if(mysql_numrows($result)>0)
    $orderid = mysql_result($result, 0, 'orderid');
  else
    return false; 


  // insert each book
  foreach($HTTP_SESSION_VARS['cart'] as $isbn => $quantity)
  {
    $detail = get_book_details($isbn);
    $query = "delete from order_items where  
              orderid = '$orderid' and isbn =  '$isbn'";
    $result = mysql_query($query);
    $query = "insert into order_items values
              ('$orderid', '$isbn', ".$detail['price'].", $quantity)";
    $result = mysql_query($query);
    if(!$result)
      return false;
  }

  return $orderid;
}

?>
