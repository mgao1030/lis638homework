<!DOCTYPE html>
<html>
<body>
<header>
</header>

<?php
$book = array(array("Title"=>"PHP and MySQL Web Development", "First Name"=>"Luke", "Last name"=>"Welling", "Number of pages"=>144, "Type"=>"Paperback", "Price"=>31.63),
              array("Title"=>"Web Design with HTML, CSS, JavaScript and jQuery", "First Name"=>"Jon", "Last name"=>"Duckett", "Number of pages"=>135, "Type"=>"Paperback", "Price"=>41.23),
			  array("Title"=>"PHP Cookbook: Solutions & Examples for PHP Programmers", "First Name"=>"David", "Last name"=>"Sklar", "Number of pages"=>14, "Type"=>"Paperback", "Price"=>40.88),
	          array("Title"=>"JavaScript and JQuery: Interactive Front-End Web Development", "First Name"=>"Jon", "Last name"=>"Duckett", "Number of pages"=>251, "Type"=>"Paperback", "Price"=>22.09),
	          array("Title"=>"Modern PHP: New Features and Good Practices", "First Name"=>"Josh", "Last name"=>"Lockhart", "Number of pages"=>7, "Type"=>"Paperback", "Price"=>28.49),
	          array("Title"=>"Programming PHP", "First Name"=>"Kevin", "Last name"=>"Tatroe", "Number of pages"=>26, "Type"=>"Paperback", "Price"=>28.96)
             ); 
?>

<style>
table {
    border-collapse: collapse;
    margin: auto;
}

table, td, th {
    border: 1px solid black;
}
th {
    background-color: #6F6E6E;
    color: white;
}
</style>

<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($book))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php
	foreach ($book as $row): array_map('htmlentities', $row);
?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>

<p><?php
$Price = array_column($book, 'Price');
echo "Your total price is $" . array_sum($Price);
?></p>

<style>
p {
  font-size: 16pt;
  color: white;
  background-color: #6F6E6E;
  padding: 10px;   
  border-radius: 25px;
  width: 15%;
  text-align: center;
  margin: auto;
}
</style>

<header>
<h1>Coin Toss - Part c</h1>
</header>

<?php
function cointoss($x){
	echo "Beginning the coin flipping, looking for $x heads in a row...<br>";
	$head = 0;
	$flip = 0;
	while ($head < $x){
	if (mt_rand(0,1) == 0) {
	echo '<img src="head.jpg" />';	
	$head++;
	$flip++;
	} else {
	echo '<img src="tail.png" />';
	$head = 0;
	$flip++;
	}
}
	echo "<br>";
	echo "Flipping $x heads in a row, in $flip flips!";
}
echo cointoss(4);
?>

</body>
</html>