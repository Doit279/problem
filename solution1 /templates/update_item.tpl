<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Items: Update item</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles/items.css">
</head>

<body>
<h1>Update item</h1>

{if $error}
    <p class="alert">{$error}</p>
{/if}

<form method="post" action="update_item_action.php">
<input type="hidden" name="id" value="{$item.id}">
<table>
    <tr>
	<td>Summary: </td>
	<td><input type="text" name="summary" value="{$item.summary}"></td>
    </tr>
    <tr>
	<td>Details: </td>
        <td><textarea name="details">{$item.details}</textarea></td>
    </tr>
    <tr>
	<td>Category: </td?
	<td>
	    <select name="category">
	    {foreach from=$categories item=category}
	        <option value={$category.id} {if $category.id == $item.category} selected="selected" {/if} > {$category.name} </option> 
	    {/foreach}
	    </select>
	</td>
    </tr>
    <tr>
        <td colrows=2>
	    <input type="submit" value="Update item">
	</td>
    </tr>
</table>
</form>

<p>
<a href="category_list.php">Home</a>
</body>
</html>
