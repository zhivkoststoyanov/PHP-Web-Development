
<form method="post"> 
	<table>
		<tr>
			<th>Name:</th>
                        <td><input type="text" name="product_name"/></td>
		</tr>
		<tr>
			<th>Price:</th>
                        <td><input type="text" name="price" /></td>
		</tr>
		<tr>
			<th>Description:</th>
			<td><textarea name="description"></textarea></td>
		</tr>
		<tr>
			<th>Category</th>
			<td>
				<select name="cat_id">
                                    <option></option>
					<?php foreach($categories_obj->getList() as $category): ?>
                                        <option value="<?=$category['cat_id']?>"><?=$category['cat_name']?></option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit" name="save" value="1">Create</button>
			</td>
	</table>
</form>
