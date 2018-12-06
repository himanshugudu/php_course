<script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
<script src="data_edit.js"></script>
<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.



$input = filter_input_array(INPUT_POST);

$mysqli = new mysqli('localhost', 'root','', 'mithun');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

if ($input['action'] == 'edit') {
    $mysqli->query("UPDATE MyGuests SET firstname='" . $input['firstname'] . "', lastname='" . $input['lastname'] . "', WHERE id='" . $input['id'] . "'");
} else if ($input['action'] == 'delete') {
    $mysqli->query("UPDATE MyGuests SET deleted=1 WHERE id='" . $input['id'] . "'");
} else if ($input['action'] == 'restore') {
    $mysqli->query("UPDATE MyGuests SET deleted=0 WHERE id='" . $input['id'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
?>
<table class="table table-striped table-bordered" id="example6">
	<thead>
		<tr>
			<th>#</th>
			<th>Username</th>
			<th>Email</th>
			<th>Avatar</th>
		<th class="tabledit-toolbar-column"></th></tr>
	</thead>
	<tbody>
		<tr id="1">
			<td>
				<span class="tabledit-span tabledit-identifier">1</span>
				<input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="1" disabled="">
			</td>
			<td class="tabledit-view-mode">
				<span class="tabledit-span">markcell</span>
				<input class="tabledit-input form-control input-sm" type="text" name="username" value="markcell" style="display: none;" disabled="">
			</td>
			<td class="tabledit-view-mode">
				<span class="tabledit-span">markcell@example.com</span>
				<input class="tabledit-input form-control input-sm" type="text" name="email" value="markcell@example.com" style="display: none;" disabled="">
			</td>
			<td class="tabledit-view-mode"><span class="tabledit-span">Iron Man</span><select class="tabledit-input form-control input-sm" name="avatar" style="display: none;" disabled=""><option value="1">Black Widow</option><option value="2">Captain America</option><option value="3" selected="">Iron Man</option></select></td>
		<td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
				   <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></button></div>
				   <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
				   <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
				   <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
			   </div></td></tr>
		<tr id="2">
			<td><span class="tabledit-span tabledit-identifier">2</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="2" disabled=""></td>
			<td class="tabledit-view-mode"><span class="tabledit-span">dotz</span><input class="tabledit-input form-control input-sm" type="text" name="username" value="dotz" style="display: none;" disabled=""></td>
			<td class="tabledit-view-mode"><span class="tabledit-span">dotz@example.com</span><input class="tabledit-input form-control input-sm" type="text" name="email" value="dotz@example.com" style="display: none;" disabled=""></td>
			<td class="tabledit-view-mode"><span class="tabledit-span">Captain America</span><select class="tabledit-input form-control input-sm" name="avatar" style="display: none;" disabled=""><option value="1">Black Widow</option><option value="2" selected="">Captain America</option><option value="3">Iron Man</option></select></td>
		<td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
				   <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></button></div>
				   <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
				   <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
				   <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
			   </div></td></tr>
		<tr id="3">
			<td><span class="tabledit-span tabledit-identifier">3</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="3" disabled=""></td>
			<td class="tabledit-view-mode"><span class="tabledit-span">zikospeed</span><input class="tabledit-input form-control input-sm" type="text" name="username" value="zikospeed" style="display: none;" disabled=""></td>
			<td class="tabledit-view-mode"><span class="tabledit-span">zikospeed@example.com</span><input class="tabledit-input form-control input-sm" type="text" name="email" value="zikospeed@example.com" style="display: none;" disabled=""></td>
			<td class="tabledit-view-mode"><span class="tabledit-span">Black Widow</span><select class="tabledit-input form-control input-sm" name="avatar" style="display: none;" disabled=""><option value="1" selected="">Black Widow</option><option value="2">Captain America</option><option value="3">Iron Man</option></select></td>
		<td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
				   <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></button></div>
				   <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
				   <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
				   <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
			   </div></td></tr>
	</tbody>
</table>