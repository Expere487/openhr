<?php
include "layout/head.php";
include "layout/header.php";
include "layout/leftSidebar.php";
$clientsListSql = "select * from clients";
$clientsList = $db->prepare($clientsListSql);
$clientsList->execute();

?>
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Clients</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Clients
								</li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<a class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
							data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
							Add New <i style="font-size:20px" class="bi bi-plus pt-2"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Clients list</h4>
				</div>
				<div class="pb-20">
					<table class="dataBaseList table stripe hover nowrap">
						<thead>
							<tr>
								<th class="table-plus">Name</th>
								<th>Manager</th>
								<th>Website</th>
								<th>Label</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($clientsList as $db) { ?>
								<tr>
									<td class="table-plus">
										<?php echo $db["name"] ?>
									</td>
									<td>
										<?php echo $db["manager"] ?>
									</td>
									<td>
										<?php echo $db["website"] ?>
									</td>
									<td>
										<?php echo $db["label"] ?>
									</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> Test
													Connection</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit
													Database</a>
												<button class="dropdown-item" onclick="deleteDb('<?php echo $db['db_id'] ?>')" ><i class="dw dw-delete-3"></i> Delete
													Database</button>
											</div>
										</div>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title" id="offcanvasRightLabel">Add New Database</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<form action="" id="addDbFrm">
			<div class="form-group row">
				<label class="col-sm-12 col-md-12 col-form-label">Database Name</label>
				<div class="col-sm-12 col-md-12">
					<input class="form-control" type="hidden" name="user_id" value="<?php echo $user["customer_id"] ?>" placeholder="exampleDatabase">
					<input class="form-control" type="text" name="dbName" placeholder="exampleDatabase">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-12 col-md-12 col-form-label">Database Host</label>
				<div class="col-sm-12 col-md-12">
					<input class="form-control" type="text" name="dbHost" placeholder="ls-xxxyzyzy-db-instance">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-12 col-md-12 col-form-label">Database User</label>
				<div class="col-sm-12 col-md-12">
					<input class="form-control" type="text" name="dbUser" placeholder="backupUser">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-12 col-md-12 col-form-label">Database Password</label>
				<div class="col-sm-12 col-md-12">
					<input class="form-control" type="text" name="dbPass" placeholder="backupUserPass">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-12 col-md-12 col-form-label">Database Type</label>
				<div class="col-sm-12 col-md-12">
					<select class="custom-select2 form-control select2-hidden-accessible" name="dbType"
						style="width: 100%; height: 38px" data-select2-id="1" tabindex="-1" aria-hidden="true">
						<?php foreach($dbTypeList as $dbType){ ?>
							<option value="<?php echo $dbType["db_type_id"] ?>"><?php echo $dbType["db_type_name"] ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-12 col-md-12">
					<button class="btn btn-primary btn-xl float-end" id="addDBbtn" type="button" onclick="addDb()">Save Database</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php
include "layout/footer.php";
?>