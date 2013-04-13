<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Items: Show item details</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles/items.css">
</head>

<body>
<h1>{$item.summary}</h1>
    
<p>
{$item.details} 

<p>
(<a href="item_list.php?id={$category.id}">{$category.name}</a>)

<p>
<a href="delete_item.php?id={$item.id}">Delete this item</a>
<p>
<a href="update_item.php?id={$item.id}">Update this item</a>
<p>
<a href="category_list.php">Home</a>
</body>
</html>
