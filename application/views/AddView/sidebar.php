<?php include_once('header.php');  ?>
<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
                    <span class="align-middle">E-commerce</span>
                </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="<?php echo base_url('Admin/index') ?>">
                        <i class='fas fa-sliders-h' aria-hidden="true"></i>
                        <span class="align-middle">Dashboard</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/UserManagement') ?>">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="align-middle">User Management</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/StoreManagement') ?>">
                        <i class="fas fa-hdd"></i> <span class="align-middle">Store Management</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/productManagement') ?>">
                        <i class="fab fa-product-hunt"></i>
                        <span class="align-middle">Product Management</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/invantoryManagement') ?>">
                        <i class="fas fa-dolly-flatbed"></i>
                        <span class="align-middle">Invantory Management</span>
                        </a>
					</li>
					
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/subadminManagement') ?>">
                        <i class="fas fa-user-lock"></i>
                        <span class="align-middle">Sub Admin Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/categorymanagement')?>">
                        <i class="fas fa-cubes"></i>
                        <span class="align-middle">Category Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/ordersManagement')?>">
                        <i class="fas fa-border-all"></i>
                        <span class="align-middle">Orders Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/paymentManagement')?>">
                        <i class="fas fa-money-bill-wave"></i>
                        <span class="align-middle">Payment Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/refundManagement')?>">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span class="align-middle">Refund Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/campaignManagement')?>">
                        <i class="far fa-sun"></i>
                        <span class="align-middle">Campaign Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/offerManagement')?>">
                        <i class="fas fa-percent"></i>
                        <span class="align-middle">Offers Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/newsManagement')?>">
                        <i class="far fa-newspaper"></i>
                        <span class="align-middle">News Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/ratingManagement')?>">
                        <i class="far fa-star"></i>
                        <span class="align-middle">Rating Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
                        <i class="far fa-clipboard"></i>
                        <span class="align-middle">Report Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/feedbackManagement')?>">
                        <i class="far fa-comment-alt"></i>
                        <span class="align-middle">Feedback Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
                        <i class="far fa-bell"></i>
                        <span class="align-middle">Notification Management</span>
                        </a>
					</li>
					
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('Admin/dealsManagement')?>">
                        <i class="fab fa-ideal"></i>
                        <span class="align-middle">Deals Management</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
                        <i class="fas fa-phone-volume"></i>
                        <span class="align-middle">Support Management</span>
                        </a>
					</li>
				</ul>

				
			</div>
		</nav>
		
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>

				<form class="form-inline d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<div class="input-group-append">
							<button class="btn" type="button">
                <i class="align-middle" data-feather="search"></i>
              </button>
						</div>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="<?= base_url() ?>assets/main/img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="<?= base_url() ?>assets/main/img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="<?= base_url() ?>assets/main/img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="<?= base_url() ?>assets/main/img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="<?= base_url() ?>assets/main/img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url('Admin/logout')?>">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
