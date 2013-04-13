<!DOCTYPE html>
<html>
<head>
<title>Items: Show categories</title>
<meta  charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/items.css">
</head>

<body>
<h1>Categories</h1>
    
{if $categories}
<ul>
{foreach from=$categories item=category}
    <li>
	<a href="item_list.php?id={$category.id}">{$category.name}</a>
	({$category.description})
    </li>
{/foreach}
</ul>
{else}
<p>No categories defined.</p>
{/if}

<p>
<a href="add_item.php">Add a new item</a>

</body>
</html>
