<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="c.css">
    <title>JSON</title>
</head>
<body>


<table>
    <p>ques 2<p>
    <tr>
        <th>user-id</th>
        <th>name</th>
        <th>email address</th>
        <th>phone number</th>
        <th>Button</th>
</tr>

    <?php
    $json_data=file_get_contents("details.json");
$details =json_decode($json_data,true);
if(count($details) !=0)
{
    foreach($details as $detail)
    {
        ?>
<tr>
<td><?php echo $detail['user-id'];?></td>
        <td><?php echo $detail['name'];?></td>
        <td><?php echo $detail['emailaddress'];?></td>
        <td><?php echo $detail['phonenumber'];?></td>
        
 
    <td>
        <select name="actions" id="actions">
            <option value="select">Select action</option>
            <option value="remove">Remove</option>
            <option value="finish">finish</option>
</select>
    </td>
</tr>
        <?php
    }
}
?>
</table>
</body>
</html>