<div ng-controller="crudCtrl">
	<div><a href="#!add" class="btn btn-default pull-right">Add</a><h2><?= $title ?></h2></div>
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
				<td>{{$index + 1}}</td>
				<td>{{user.name}}</td>
				<td>{{user.address}}</td>
				<td width="150">
					<a class="btn btn-default btn-xs" href="#!/edit/{{user.id}}">Edit</a>
					<a class="btn btn-danger btn-xs" ng-click="delUser(user.id)">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
