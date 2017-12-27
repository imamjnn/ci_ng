<div ng-controller="crudCtrl">
	<h2><?= $title ?></h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th width="30">#</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="user in users">
				<td>1</td>
				<td>{{user.name}}</td>
				<td>{{user.address}}</td>
				<td width="100"><a href="">Edit</a> | <a href="">Delete</a></td>
			</tr>
		</tbody>
	</table>
</div>
