<?php  include_once('header.php');
       include_once('sidebar.php'); ?>

		<!--<div class="main">-->
		<!--	<nav class="navbar navbar-expand navbar-light navbar-bg">-->
		<!--		<a class="sidebar-toggle d-flex">-->
  <!--                <i class="hamburger align-self-center"></i>-->
  <!--              </a>-->

		<!--		<form class="form-inline d-none d-sm-inline-block">-->
		<!--			<div class="input-group input-group-navbar">-->
		<!--				<input type="text" class="form-control" placeholder="Search…" aria-label="Search">-->
		<!--				<div class="input-group-append">-->
		<!--					<button class="btn" type="button">-->
  <!--              <i class="align-middle" data-feather="search"></i>-->
  <!--            </button>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</form>-->

		<!--		<div class="navbar-collapse collapse">-->
		<!--			<ul class="navbar-nav navbar-align">-->
		<!--				<li class="nav-item dropdown">-->
		<!--					<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">-->
		<!--						<div class="position-relative">-->
		<!--							<i class="align-middle" data-feather="bell"></i>-->
		<!--							<span class="indicator">4</span>-->
		<!--						</div>-->
		<!--					</a>-->
		<!--					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">-->
		<!--						<div class="dropdown-menu-header">-->
		<!--							4 New Notifications-->
		<!--						</div>-->
		<!--						<div class="list-group">-->
		<!--							<a href="#" class="list-group-item">-->
		<!--								<div class="row no-gutters align-items-center">-->
		<!--									<div class="col-2">-->
		<!--										<i class="text-danger" data-feather="alert-circle"></i>-->
		<!--									</div>-->
		<!--									<div class="col-10">-->
		<!--										<div class="text-dark">Update completed</div>-->
		<!--										<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>-->
		<!--										<div class="text-muted small mt-1">30m ago</div>-->
		<!--									</div>-->
		<!--								</div>-->
		<!--							</a>-->
		<!--							<a href="#" class="list-group-item">-->
		<!--								<div class="row no-gutters align-items-center">-->
		<!--									<div class="col-2">-->
		<!--										<i class="text-warning" data-feather="bell"></i>-->
		<!--									</div>-->
		<!--									<div class="col-10">-->
		<!--										<div class="text-dark">Lorem ipsum</div>-->
		<!--										<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>-->
		<!--										<div class="text-muted small mt-1">2h ago</div>-->
		<!--									</div>-->
		<!--								</div>-->
		<!--							</a>-->
		<!--							<a href="#" class="list-group-item">-->
		<!--								<div class="row no-gutters align-items-center">-->
		<!--									<div class="col-2">-->
		<!--										<i class="text-primary" data-feather="home"></i>-->
		<!--									</div>-->
		<!--									<div class="col-10">-->
		<!--										<div class="text-dark">Login from 192.186.1.8</div>-->
		<!--										<div class="text-muted small mt-1">5h ago</div>-->
		<!--									</div>-->
		<!--								</div>-->
		<!--							</a>-->
		<!--							<a href="#" class="list-group-item">-->
		<!--								<div class="row no-gutters align-items-center">-->
		<!--									<div class="col-2">-->
		<!--										<i class="text-success" data-feather="user-plus"></i>-->
		<!--									</div>-->
		<!--									<div class="col-10">-->
		<!--										<div class="text-dark">New connection</div>-->
		<!--										<div class="text-muted small mt-1">Christina accepted your request.</div>-->
		<!--										<div class="text-muted small mt-1">14h ago</div>-->
		<!--									</div>-->
		<!--								</div>-->
		<!--							</a>-->
		<!--						</div>-->
		<!--						<div class="dropdown-menu-footer">-->
		<!--							<a href="#" class="text-muted">Show all notifications</a>-->
		<!--						</div>-->
		<!--					</div>-->
		<!--				</li>-->
		<!--				<li class="nav-item dropdown">-->
		<!--					<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">-->
		<!--						<div class="position-relative">-->
		<!--							<i class="align-middle" data-feather="message-square"></i>-->
		<!--						</div>-->
		<!--					</a>-->
		<!--					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">-->
		<!--						<div class="dropdown-menu-header">-->
		<!--							<div class="position-relative">-->
		<!--								4 New Messages-->
		<!--							</div>-->
		<!--						</div>-->
		<!--						<div class="list-group">-->
		<!--							<a href="#" class="list-group-item">-->
		<!--								<div class="row no-gutters align-items-center">-->
		<!--									<div class="col-2">-->
		<!--										<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">-->
		<!--									</div>-->
		<!--									<div class="col-10 pl-2">-->
		<!--										<div class="text-dark">Vanessa Tucker</div>-->
		<!--										<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>-->
		<!--										<div class="text-muted small mt-1">15m ago</div>-->
		<!--									</div>-->
		<!--								</div>-->
		<!--							</a>-->
		<!--							<a href="#" class="list-group-item">-->
		<!--								<div class="row no-gutters align-items-center">-->
		<!--									<div class="col-2">-->
		<!--										<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">-->
		<!--									</div>-->
		<!--									<div class="col-10 pl-2">-->
		<!--										<div class="text-dark">William Harris</div>-->
		<!--										<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>-->
		<!--										<div class="text-muted small mt-1">2h ago</div>-->
		<!--									</div>-->
		<!--								</div>-->
		<!--							</a>-->
		<!--							<a href="#" class="list-group-item">-->
		<!--								<div class="row no-gutters align-items-center">-->
		<!--									<div class="col-2">-->
		<!--										<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">-->
		<!--									</div>-->
		<!--									<div class="col-10 pl-2">-->
		<!--										<div class="text-dark">Christina Mason</div>-->
		<!--										<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>-->
		<!--										<div class="text-muted small mt-1">4h ago</div>-->
		<!--									</div>-->
		<!--								</div>-->
		<!--							</a>-->
		<!--							<a href="#" class="list-group-item">-->
		<!--								<div class="row no-gutters align-items-center">-->
		<!--									<div class="col-2">-->
		<!--										<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">-->
		<!--									</div>-->
		<!--									<div class="col-10 pl-2">-->
		<!--										<div class="text-dark">Sharon Lessman</div>-->
		<!--										<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>-->
		<!--										<div class="text-muted small mt-1">5h ago</div>-->
		<!--									</div>-->
		<!--								</div>-->
		<!--							</a>-->
		<!--						</div>-->
		<!--						<div class="dropdown-menu-footer">-->
		<!--							<a href="#" class="text-muted">Show all messages</a>-->
		<!--						</div>-->
		<!--					</div>-->
		<!--				</li>-->
		<!--				<li class="nav-item dropdown">-->
		<!--					<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">-->
  <!--              <i class="align-middle" data-feather="settings"></i>-->
  <!--            </a>-->

		<!--					<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">-->
  <!--              <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>-->
  <!--            </a>-->
		<!--					<div class="dropdown-menu dropdown-menu-right">-->
		<!--						<a class="dropdown-item" href="user-management.php"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>-->
		<!--						<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>-->
		<!--						<div class="dropdown-divider"></div>-->
		<!--						<a class="dropdown-item" href="pages-settings.php"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>-->
		<!--						<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a>-->
		<!--						<div class="dropdown-divider"></div>-->
		<!--						<a class="dropdown-item" href="#">Log out</a>-->
		<!--					</div>-->
		<!--				</li>-->
		<!--			</ul>-->
		<!--		</div>-->
		<!--	</nav>-->

			<main class="content">
				<div class="container-fluid p-0">
					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3><strong>Analytics</strong> Dashboard</h3>
						</div>

						<div class="col-auto ml-auto text-right mt-n1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
									<li class="breadcrumb-item"><a href="#">AdminKit</a></li>
									<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
									<li class="breadcrumb-item active" aria-current="page">Analytics</li>
								</ol>
							</nav>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-xxl-12 d-flex">
							<div class="w-100">
								<div class="row">
									    <div class="col-sm-2 col-xl-2 col-xxl-2">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Sales</h5>
												<h1 class="display-5 mt-1 mb-3 salesTxtColor">$2.382</h1>
												<!--<div class="mb-1">-->
												<!--	<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>-->
												<!--	<span class="text-muted">Since last week</span>-->
												<!--</div>-->
											</div>
										</div>
										</div>
										<?php $userInfo = $this->session->userdata('userInfo');?>
							               <?php if(isset($userInfo[0]['store_id'])==''):?>
										<div class="col-sm-2 col-xl-2 col-xxl-2">
										<div class="card">
                                          
											<div class="card-body">
												<h5 class="card-title mb-4">Visitors</h5>
											<h1 class="display-5 mt-1 mb-3 VisitorsTxtColor">14.212</h1>
												
											</div>
										
											
										</div>
                                            
										</div>
									<?php  endif;?>
										<div class="col-sm-2 col-xl-2 col-xxl-2">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Earnings</h5>
												<h1 class="display-5 mt-1 mb-3 EarningsTxtColor">$21.300</h1>
												<!--<div class="mb-1">-->
												<!--	<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>-->
												<!--	<span class="text-muted">Since last week</span>-->
												<!--</div>-->
											</div>
										</div>
										</div>
										<div class="col-sm-2 col-xl-2 col-xxl-2">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Orders</h5>
												<h1 class="display-5 mt-1 mb-3 OrdersTxtColor">64</h1>
												<!--<div class="mb-1">-->
												<!--	<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>-->
												<!--	<span class="text-muted">Since last week</span>-->
												<!--</div>-->
											</div>
										</div>
									<!--</div>-->
								</div>
								<?php $userInfo = $this->session->userdata('userInfo'); ?>
                                   <?php if(isset($userInfo[0]['store_id'])==''):?>
								        <div class="col-sm-2 col-xl-2 col-xxl-2">
										<div class="card">
				                        
											<div class="card-body">
												<h5 class="card-title mb-4">Stores</h5>
												<h1 class="display-5 mt-1 mb-3 StoresTxtColor">554</h1>
												<!--<div class="mb-1">-->
												<!--	<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>-->
												<!--	<span class="text-muted">Since last week</span>-->
												<!--</div>-->
											</div>
										
										</div>
									<!--</div>-->
								</div>
							<?php endif;?>
							<?php $userInfo= $this->session->userdata('userInfo');?>
							<?php if(isset($userInfo[0]['store_id'])==''):?>
								       <div class="col-sm-2 col-xl-2 col-xxl-2">
										<div class="card">
											
											<div class="card-body">
												<h5 class="card-title mb-4">Total Users</h5>
												<h1 class="display-5 mt-1 mb-3 usersTxtColor">6400</h1>
												<!--<div class="mb-1">-->
												<!--	<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>-->
												<!--	<span class="text-muted">Since last week</span>-->
												<!--</div>-->
											</div>
											
										</div>
									<!--</div>-->
								</div>
							<?php endif;?>
									<!--<div class="col-sm-6">-->
									<!--	<div class="card">-->
									<!--		<div class="card-body">-->
									<!--			<h5 class="card-title mb-4">Earnings</h5>-->
									<!--			<h1 class="display-5 mt-1 mb-3">$21.300</h1>-->
									<!--			<div class="mb-1">-->
									<!--				<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>-->
									<!--				<span class="text-muted">Since last week</span>-->
									<!--			</div>-->
									<!--		</div>-->
									<!--	</div>-->
									<!--	<div class="card">-->
									<!--		<div class="card-body">-->
									<!--			<h5 class="card-title mb-4">Orders</h5>-->
									<!--			<h1 class="display-5 mt-1 mb-3">64</h1>-->
									<!--			<div class="mb-1">-->
									<!--				<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>-->
									<!--				<span class="text-muted">Since last week</span>-->
									<!--			</div>-->
									<!--		</div>-->
									<!--	</div>-->
									<!--</div>-->
								</div>
							</div>
						</div>
                        
                        <div class="row">
						<div class="col-xl-9 col-xxl-9">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Recent Movement</h5>
								</div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3 col-md-3 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Browser Usage</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>Chrome</td>
													<td class="text-right">4306</td>
												</tr>
												<tr>
													<td>Firefox</td>
													<td class="text-right">3801</td>
												</tr>
												<tr>
													<td>IE</td>
													<td class="text-right">1689</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Real-Time</h5>
								</div>
								<div class="card-body px-4">
									<div id="world_map" style="height:350px;"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 col-xxl-3 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Monthly Sales</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-bar"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!--<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">-->
						<!--	<div class="card flex-fill">-->
						<!--		<div class="card-header">-->

						<!--			<h5 class="card-title mb-0">Calendar</h5>-->
						<!--		</div>-->
						<!--		<div class="card-body d-flex">-->
						<!--			<div class="align-self-center w-100">-->
						<!--				<div class="chart">-->
						<!--					<div id="datetimepicker-dashboard"></div>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
					</div>

					<!--<div class="row">-->
					<!--	<div class="col-12 col-lg-8 col-xxl-9 d-flex">-->
					<!--		<div class="card flex-fill">-->
					<!--			<div class="card-header">-->

					<!--				<h5 class="card-title mb-0">Latest Projects</h5>-->
					<!--			</div>-->
					<!--			<table class="table table-hover my-0">-->
					<!--				<thead>-->
					<!--					<tr>-->
					<!--						<th>Name</th>-->
					<!--						<th class="d-none d-xl-table-cell">Start Date</th>-->
					<!--						<th class="d-none d-xl-table-cell">End Date</th>-->
					<!--						<th>Status</th>-->
					<!--						<th class="d-none d-md-table-cell">Assignee</th>-->
					<!--					</tr>-->
					<!--				</thead>-->
					<!--				<tbody>-->
					<!--					<tr>-->
					<!--						<td>Project Apollo</td>-->
					<!--						<td class="d-none d-xl-table-cell">01/01/2020</td>-->
					<!--						<td class="d-none d-xl-table-cell">31/06/2020</td>-->
					<!--						<td><span class="badge badge-success">Done</span></td>-->
					<!--						<td class="d-none d-md-table-cell">Vanessa Tucker</td>-->
					<!--					</tr>-->
					<!--					<tr>-->
					<!--						<td>Project Fireball</td>-->
					<!--						<td class="d-none d-xl-table-cell">01/01/2020</td>-->
					<!--						<td class="d-none d-xl-table-cell">31/06/2020</td>-->
					<!--						<td><span class="badge badge-danger">Cancelled</span></td>-->
					<!--						<td class="d-none d-md-table-cell">William Harris</td>-->
					<!--					</tr>-->
					<!--					<tr>-->
					<!--						<td>Project Hades</td>-->
					<!--						<td class="d-none d-xl-table-cell">01/01/2020</td>-->
					<!--						<td class="d-none d-xl-table-cell">31/06/2020</td>-->
					<!--						<td><span class="badge badge-success">Done</span></td>-->
					<!--						<td class="d-none d-md-table-cell">Sharon Lessman</td>-->
					<!--					</tr>-->
					<!--					<tr>-->
					<!--						<td>Project Nitro</td>-->
					<!--						<td class="d-none d-xl-table-cell">01/01/2020</td>-->
					<!--						<td class="d-none d-xl-table-cell">31/06/2020</td>-->
					<!--						<td><span class="badge badge-warning">In progress</span></td>-->
					<!--						<td class="d-none d-md-table-cell">Vanessa Tucker</td>-->
					<!--					</tr>-->
					<!--					<tr>-->
					<!--						<td>Project Phoenix</td>-->
					<!--						<td class="d-none d-xl-table-cell">01/01/2020</td>-->
					<!--						<td class="d-none d-xl-table-cell">31/06/2020</td>-->
					<!--						<td><span class="badge badge-success">Done</span></td>-->
					<!--						<td class="d-none d-md-table-cell">William Harris</td>-->
					<!--					</tr>-->
					<!--					<tr>-->
					<!--						<td>Project X</td>-->
					<!--						<td class="d-none d-xl-table-cell">01/01/2020</td>-->
					<!--						<td class="d-none d-xl-table-cell">31/06/2020</td>-->
					<!--						<td><span class="badge badge-success">Done</span></td>-->
					<!--						<td class="d-none d-md-table-cell">Sharon Lessman</td>-->
					<!--					</tr>-->
					<!--					<tr>-->
					<!--						<td>Project Romeo</td>-->
					<!--						<td class="d-none d-xl-table-cell">01/01/2020</td>-->
					<!--						<td class="d-none d-xl-table-cell">31/06/2020</td>-->
					<!--						<td><span class="badge badge-success">Done</span></td>-->
					<!--						<td class="d-none d-md-table-cell">Christina Mason</td>-->
					<!--					</tr>-->
					<!--					<tr>-->
					<!--						<td>Project Wombat</td>-->
					<!--						<td class="d-none d-xl-table-cell">01/01/2020</td>-->
					<!--						<td class="d-none d-xl-table-cell">31/06/2020</td>-->
					<!--						<td><span class="badge badge-warning">In progress</span></td>-->
					<!--						<td class="d-none d-md-table-cell">William Harris</td>-->
					<!--					</tr>-->
					<!--				</tbody>-->
					<!--			</table>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--	<div class="col-12 col-lg-4 col-xxl-3 d-flex">-->
					<!--		<div class="card flex-fill w-100">-->
					<!--			<div class="card-header">-->

					<!--				<h5 class="card-title mb-0">Monthly Sales</h5>-->
					<!--			</div>-->
					<!--			<div class="card-body d-flex w-100">-->
					<!--				<div class="align-self-center chart chart-lg">-->
					<!--					<canvas id="chartjs-dashboard-bar"></canvas>-->
					<!--				</div>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->

				</div>
			</main>
			
<?php include_once('footer.php')  ?>
			