<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
{* Displays items in given category or results of search. *}
<html>
<head>
<title>Items: Show search results</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles/items.css">
</head>

<body>
{if $category}
    <h1>Items in category '{$category.name}'</h1>
{else}
    <h1>Results of search for '{$summary}'</h1>
{/if}
    
{if $items}
<ul>
{foreach from=$items item=item}
    <li><a href="item_detail.php?id={$item.id}">{$item.summary}</a>
{/foreach}
</ul>
{else}
<p>No items.</p>
{/if}

{if $category}
    <p>
    <a href="add_item.php?id={$category.id}">Add a new item to this category</a>
{else}
    {include file="search_form.tpl"}
{/if}

<p>
<a href="category_list.php">Home</a>
</body>
</html>
