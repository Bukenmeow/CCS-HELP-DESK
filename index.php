<?php
session_start();
include("connection/db.php");
include("func/func.php");

$user_data = check_login($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>CCS - DHVSU HELP DESK</title>
	<link href="imgs/ccslogo.png" type="image/png" rel="icon">
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/perfect-scrollbar.min.css" >
	<link rel="stylesheet" href="dist/css/themify-icons.css">
	<link rel="stylesheet" href="dist/css/emoji.css">
	<link rel="stylesheet" href="dist/css/style.css" >
	<link rel="stylesheet" href="dist/css/responsive.css" >
	
</head>
	<body>
		<main>
			<div class="layout">
				<div class="navigation">
					<div class="container">
						<div class="inside">
							<div class="nav nav-tab menu">
								<a href="#settings" data-toggle="tab" title="User Setting">
									<i class="ti-panel"></i>
									Setting
								</a>
								<a href="#members" data-toggle="tab" title="All members">
									<i class="ti-home"></i>
									All Friends
								</a>
								<a href="#discussions" data-toggle="tab" class="active" title="Chat">
									<i class="ti-comment-alt"></i>
									Recent Chat
								</a>
								<a href="#notifications" data-toggle="tab" class="f-grow1" title="Notifications">
									<i class="ti-bell"></i>
									Notifications
								</a>
								<a href="#" id="dark" class="dark-theme" title="Use Night Mode">
									<i class="ti-wand"></i>
									Night Mode
								</a>
								<a href="logout.php" class="btn power" title="Sign Out"><i class="ti-power-off"></i></a>
							</div>
						</div>
					</div>
				</div><!-- Navigation -->

				<div class="sidebar" id="sidebar">
					<div class="container">
						<div class="col-md-12">
							<div class="tab-content">
								<!-- Start of Contacts -->
								<div class="tab-pane fade" id="members">
									<figure class="setting"><img class="avatar-xl" src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"></figure>
									<span class="logo"><img alt="" src="dist/img/logo.png"></span>
									<div class="search">
										<form class="form-inline position-relative">
											<input type="search" class="form-control" id="people" placeholder="Search for people...">
											<button type="button" class="btn btn-link loop"><i class="ti-search"></i></button>
										</form>
										<button class="btn create" data-toggle="modal" data-target="#exampleModalCenter">
											<i class="ti-user">+</i></button>
									</div>
									<div class="list-group sort">
										<button class="btn filterMembersBtn active show" data-toggle="list" data-filter="all">All</button>
										<button class="btn filterMembersBtn" data-toggle="list" data-filter="online">Online</button>
										<button class="btn filterMembersBtn" data-toggle="list" data-filter="offline">Offline</button>
									</div>						
									<div class="contacts">
										<h1>Contacts</h1>
										<div class="btn-group add-group" role="group">
											<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											  Add +
											</button>
											<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
											  <a class="dropdown-item" href="#">New user</a>
											  <a class="dropdown-item" href="#">New Group +</a>
												<a class="dropdown-item" href="#">Private Chat +</a>
											</div>
										  </div>
										<div class="list-group" id="contacts" role="tablist">
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-1.jpg" data-toggle="tooltip" data-placement="top" title="Sarah" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>Sarah Dalton</h5>
													<p>Sofia, Bulgaria</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-1.jpg" data-toggle="tooltip" data-placement="top" title="Bob Frank" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>Bob Frank</h5>
													<p>Washington, USA</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-2.jpg" data-toggle="tooltip" data-placement="top" title="Lucy" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>Lucy Grey</h5>
													<p>Shanghai, China</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-2.jpg" data-toggle="tooltip" data-placement="top" title="james idoms" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>james idoms</h5>
													<p>Helena, Montana</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-3.jpg" data-toggle="tooltip" data-placement="top" title="Linda Gates" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>Linda gates</h5>
													<p>Indore, India</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Karen joye" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<h5>Karen joye</h5>
													<p>Chisinau, Moldova</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-6.jpg" data-toggle="tooltip" data-placement="top" title="Lisa Honey" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<h5>Lisa Honey</h5>
													<p>Vienna, Austria</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-3.jpg" data-toggle="tooltip" data-placement="top" title="Daniel Cabral" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<h5>Daniel Cabral</h5>
													<p>Oslo, Norway</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-4.jpg" data-toggle="tooltip" data-placement="top" title="Jhon Doe" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<h5>Jhon Doe</h5>
													<p>London, United Kingdom</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- End of Contacts -->
								<!-- Start of Discussions -->
								<div id="discussions" class="tab-pane fade in active show">
									<figure class="setting"><img class="avatar-xl" src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"></figure>
									<span class="logo"><img src="dist/img/logo.png" alt=""></span>
									<div class="search">
										<form class="form-inline position-relative">
											<input type="search" class="form-control" id="conversations" placeholder="Search for conversations...">
											<button type="button" class="btn btn-link loop"><i class="ti-search"></i></button>
										</form>
										<button class="btn create" data-toggle="modal" data-target="#startnewchat"><i class="ti-pencil"></i></button>
									</div>
									<div class="list-group sort">
										<button class="btn filterDiscussionsBtn active show" data-toggle="list" data-filter="all">All</button>
										<button class="btn filterDiscussionsBtn" data-toggle="list" data-filter="read">Favourit</button>
										<button class="btn filterDiscussionsBtn" data-toggle="list" data-filter="unread">Unread</button>
									</div>						
									<div class="discussions" id="scroller">
										<h1>Chats</h1>
										<div class="btn-group add-group" role="group">
											<button id="btnGroupDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											  Add +
											</button>
											<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
											  <a class="dropdown-item" href="#">New user</a>
											  <a class="dropdown-item" href="#">New Group +</a>
												<a class="dropdown-item" href="#">Private Chat +</a>
											</div>
										  </div>
										<div class="list-group" id="chats" role="tablist">
											<a href="#list-chat" class="filterDiscussions all unread single active" id="list-chat-list" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-1.jpg" data-toggle="tooltip" data-placement="top" title="Sarah" alt="avatar">
												<div class="status online"></div>
												
												<div class="data">
													<h5>Sarah Dalton</h5>
													<div class="new bg-yellow">
														<span>5+</span>
													</div>
													<span>Mon</span>
													<p>A new feature has been updated...</p>
												</div>
											</a>									
											<a href="#list-empty" class="filterDiscussions all unread single" id="list-empty-list" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-1.jpg" data-toggle="tooltip" data-placement="top" title="Michael" alt="avatar">
												<div class="status offline"></div>
												
												<div class="data">
													<h5>Bob Frank</h5>
													<div class="new bg-red">
														<span>9+</span>
													</div>
													<span>Sun</span>
													<p>How can i improve my chances?</p>
												</div>
											</a>									
											<a href="#list-chat" class="filterDiscussions all read single" id="list-chat-list2" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-2.jpg" data-toggle="tooltip" data-placement="top" title="Lucy" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>Lucy Grey</h5>
													<span>Tus</span>
													<p>Typing...</p>
												</div>
											</a>
											<a href="#list-empty" class="filterDiscussions all read single" id="list-empty-list2" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-2.jpg" data-toggle="tooltip" data-placement="top" title="james idoms" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<h5>james idoms</h5>
													<span>5 mins</span>
													<p>By injected humour, or randomi...</p>
												</div>
											</a>
											<a href="#list-chat" class="filterDiscussions all read single" id="list-chat-list3" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-3.jpg" data-toggle="tooltip" data-placement="top" title="Linda Gates" alt="avatar">
												<div class="status away"></div>
												<div class="data">
													<h5>Linda gates</h5>
													<span>Mon</span>
													<p>No more running out of the office...</p>
												</div>
											</a>
											<a href="#list-empty" class="filterDiscussions all read single" id="list-empty-list3" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Karen joye" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>Karen joye</h5>
													<span>Fri</span>
													<p>All your favourite books at...</p>
												</div>
											</a>
											<a href="#list-chat" class="filterDiscussions all unread single" id="list-chat-list4" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-6.jpg" data-toggle="tooltip" data-placement="top" title="Lisa Honey" alt="avatar">
												<div class="status offline"></div>
												
												<div class="data">
													<h5>Lisa Honey</h5>
													<div class="new bg-indigo">
														<span>1+</span>
													</div>
													<span>Feb 10</span>
													<p>Be the first to know about...</p>
												</div>
											</a>
											<a href="#list-empty" class="filterDiscussions all read single" id="list-empty-list4" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-3.jpg" data-toggle="tooltip" data-placement="top" title="Daniel Cabral" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<h5>Daniel Cabral</h5>
													<span>Feb 9</span>
													<p>Dear Daniel Cabral, your massage is today...</p>
												</div>
											</a>
											<a href="#list-chat" class="filterDiscussions all unread single" id="list-chat-list5" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-4.jpg" data-toggle="tooltip" data-placement="top" title="Jhon Doe" alt="avatar">
												<div class="status online"></div>
												
												<div class="data">
													<h5>Jhon Doe</h5>
													<div class="new bg-green">
														<span>4+</span>
													</div>
													<span>Thu</span>
													<p>Unfortunately session cancelled..</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- End of Discussions -->
								<!-- Start of Notifications -->
								<div id="notifications" class="tab-pane fade">
									<figure class="setting"><img class="avatar-xl" src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"></figure>
									<span class="logo"><img alt="" src="dist/img/logo.png"></span>
									<div class="search">
										<form class="form-inline position-relative">
											<input type="search" class="form-control" id="notice" placeholder="Filter notifications...">
											<button type="button" class="btn btn-link loop">
												<i class="ti-filter"></i></button>
										</form>
									</div>
									<div class="list-group sort">
										<button class="btn filterNotificationsBtn active show" data-toggle="list" data-filter="all">All</button>
										<button class="btn filterNotificationsBtn" data-toggle="list" data-filter="latest">Latest</button>
										<button class="btn filterNotificationsBtn" data-toggle="list" data-filter="oldest">Oldest</button>
									</div>						
									<div class="notifications">
										<h1>Notifications</h1>
										<div class="list-group" id="alerts" role="tablist">
											<a href="#" class="filterNotifications all latest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-1.jpg" data-toggle="tooltip" data-placement="top" title="Sarah" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<p>Sarah has accepted your friend request on Talkshak.</p>
													<span>Oct 17, 2018</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all latest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-1.jpg" data-toggle="tooltip" data-placement="top" title="Michael" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<p>Michael, you have a new friend suggestion today.</p>
													<span>Jun 21, 2018</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all latest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-2.jpg" data-toggle="tooltip" data-placement="top" title="james idoms" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<p>james idoms have just sent you a new message.</p>
													<span>Feb 15, 2018</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all latest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-6.jpg" data-toggle="tooltip" data-placement="top" title="Lisa Honey" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<p>Lisa Honey has a birthday today. Wish her all the best.</p>
													<span>Mar 23, 2018</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all latest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-3.jpg" data-toggle="tooltip" data-placement="top" title="Sarah" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<p>Linda Gates has accepted your friend request on Talkshak.</p>
													<span>Jan 5, 2018</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all oldest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Sarah" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<p>Karen joye have just sent you a new message.</p>
													<span>Dec 22, 2017</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all oldest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-2.jpg" data-toggle="tooltip" data-placement="top" title="Sarah" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<p>Michael, you have a new friend suggestion today.</p>
													<span>Nov 29, 2017</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all oldest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-3.jpg" data-toggle="tooltip" data-placement="top" title="Sarah" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<p>Daniel Cabral have just sent you a new message.</p>
													<span>Sep 31, 2017</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all oldest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-4.jpg" data-toggle="tooltip" data-placement="top" title="Sarah" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<p>Jhon Doe has a birthday today. Wish him all the best.</p>
													<span>Jul 19, 2017</span>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- End of Notifications -->
								<!-- Start of Settings -->
								<div class="tab-pane fade" id="settings">			
									<div class="settings">
										<div class="profile">
											<img class="avatar-xl" src="dist/img/avatars/avatar-male-1.jpg" alt="avatar">
											<h1><a href="#">Bob Frank</a></h1>
											<span>New York, USA</span>
											
										</div>
										<div class="categories" id="accordionSettings">
											<h1>Settings</h1>
											<!-- Start of My Account -->
											<div class="category">
												<a href="#" class="title collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													<i class="ti-user"></i>
													<div class="data">
														<h5>My Account</h5>
														<p>Update your profile details</p>
													</div>
													<i class="ti-angle-down"></i>
												</a>
												<div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionSettings">
													<div class="content">
														<div class="upload">
															<div class="data">
																<img class="avatar-xl" src="dist/img/avatars/avatar-male-1.jpg" alt="image">
																<label>
																	<input type="file">
																	<span class="btn button">Upload avatar</span>
																</label>
															</div>
															<p>For best results, use an image at least 200px by 200px in .jpg or .png format!</p>
														</div>
														<form>
															<div class="parent">
																<div class="field">
																	<label for="firstName">First name <span>*</span></label>
																	<input type="text" class="form-control" id="firstName" placeholder="First name" value="Bob" required>
																</div>
																<div class="field">
																	<label for="lastName">Last name <span>*</span></label>
																	<input type="text" class="form-control" id="lastName" placeholder="Last name" value="Frank" required>
																</div>
															</div>
															<div class="field">
																<label for="email">Email <span>*</span></label>
																<input type="email" class="form-control" id="email" placeholder="Enter your email address" value="bobfrank@gmail.com" required>
															</div>
															<div class="field">
																<label for="password">Password</label>
																<input type="password" class="form-control" id="password" placeholder="Enter a new password" value="password" required>
															</div>
															<div class="field">
																<label for="location">Location</label>
																<input type="text" class="form-control" id="location" placeholder="Enter your location" value="New York, USA" required>
															</div>
															<button class="btn btn-link w-100">Delete Account</button>
															<button type="submit" class="btn button w-100">Apply</button>
														</form>
													</div>
												</div>
											</div>
											<!-- End of My Account -->
											<!-- Start of Chat History -->
											<div class="category">
												<a href="#" class="title collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
													<i class="ti-comments"></i>
													<div class="data">
														<h5>Chats</h5>
														<p>Check your chat history</p>
													</div>
													<i class="ti-angle-down"></i>
												</a>
												<div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionSettings">
													<div class="content layer">
														<div class="history">
															<p>When you clear your conversation history, the messages will be deleted from your own device.</p>
															<p>The messages won't be deleted or cleared on the devices of the people you chatted with.</p>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="same-address">
																<label class="custom-control-label" for="same-address">Hide will remove your chat history from the recent list.</label>
															</div>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="save-info">
																<label class="custom-control-label" for="save-info">Delete will remove your chat history from the device.</label>
															</div>
															<button type="submit" class="btn button w-100">Clear Chat History</button>
														</div>
													</div>
												</div>
											</div>
											<!-- End of Chat History -->
											<!-- Start of Notifications Settings -->
											<div class="category">
												<a href="#" class="title collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
													<i class="ti-bell"></i>
													<div class="data">
														<h5>Notifications</h5>
														<p>Turn notifications on or off</p>
													</div>
													<i class="ti-angle-down"></i>
												</a>
												<div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionSettings">
													<div class="content no-layer">
														<div class="set">
															<div class="details">
																<h5>Desktop Notifications</h5>
																<p>You can set up Talkshak to receive notifications when you have new messages.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Unread Message Badge</h5>
																<p>If enabled shows a red badge on the Talkshak app icon when you have unread messages.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Taskbar Flashing</h5>
																<p>Flashes the Talkshak app on mobile in your taskbar when you have new notifications.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Notification Sound</h5>
																<p>Set the app to alert you via notification sound when you have unread messages.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Vibrate</h5>
																<p>Vibrate when receiving new messages (Ensure system vibration is also enabled).</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Turn On Lights</h5>
																<p>When someone send you a text message you will receive alert via notification light.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<!-- End of Notifications Settings -->
											<!-- Start of Connections -->
											<div class="category">
												<a href="#" class="title collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
													<i class="ti-reload"></i>
													<div class="data">
														<h5>Connections</h5>
														<p>Sync your social accounts</p>
													</div>
													<i class="ti-angle-down"></i>
												</a>
												<div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionSettings">
													<div class="content">
														<div class="app">
															<img src="dist/img/integrations/slack.svg" alt="app">
															<div class="permissions">
																<h5>Skrill</h5>
																<p>Read, Write, Comment</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="app">
															<img src="dist/img/integrations/dropbox.svg" alt="app">
															<div class="permissions">
																<h5>Dropbox</h5>
																<p>Read, Write, Upload</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="app">
															<img src="dist/img/integrations/drive.svg" alt="app">
															<div class="permissions">
																<h5>Google Drive</h5>
																<p>No permissions set</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<div class="app">
															<img src="dist/img/integrations/trello.svg" alt="app">
															<div class="permissions">
																<h5>Trello</h5>
																<p>No permissions set</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<!-- End of Connections -->
											<!-- Start of Appearance Settings -->
											<div class="category">
												<a href="#" class="title collapsed" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
													<i class="ti-pencil"></i>
													<div class="data">
														<h5>Appearance</h5>
														<p>Customize the look of Talkshak</p>
													</div>
													<i class="ti-angle-down"></i>
												</a>
												<div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionSettings">
													<div class="content no-layer">
														<div class="set">
															<div class="details">
																<h5>Turn Off Lights</h5>
																<p>The dark mode is applied to core areas of the app that are normally displayed as light.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round mode"></span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<!-- End of Appearance Settings -->
											<!-- Start of Language -->
											<div class="category">
												<a href="#" class="title collapsed" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
													<i class="ti-flag"></i>
													<div class="data">
														<h5>Language</h5>
														<p>Select preferred language</p>
													</div>
													<i class="ti-angle-down"></i>
												</a>
												<div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionSettings">
													<div class="content layer">
														<div class="language">
															<label for="country">Language</label>
															<select class="custom-select" id="country" required>
																<option value="">Select an language...</option>
																<option>English, UK</option>
																<option>English, US</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<!-- End of Language -->
											<!-- Start of Privacy & Safety -->
											<div class="category">
												<a href="#" class="title collapsed" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
													<i class="ti-lock"></i>
													<div class="data">
														<h5>Privacy & Safety</h5>
														<p>Control your privacy settings</p>
													</div>
													<i class="ti-angle-down"></i>
												</a>
												<div class="collapse" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordionSettings">
													<div class="content no-layer">
														<div class="set">
															<div class="details">
																<h5>Keep Me Safe</h5>
																<p>Automatically scan and delete direct messages you receive from everyone that contain explict content.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>My Friends Are Nice</h5>
																<p>If enabled scans direct messages from everyone unless they are listed as your friend.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Everyone can add me</h5>
																<p>If enabled anyone in or out your friends of friends list can send you a friend request.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Friends of Friends</h5>
																<p>Only your friends or your mutual friends will be able to send you a friend reuqest.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Data to Improve</h5>
																<p>This settings allows us to use and process information for analytical purposes.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Data to Customize</h5>
																<p>This settings allows us to use your information to customize Talkshak for you.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<!-- End of Privacy & Safety -->
											<!-- Start of Logout -->
											<div class="category">
												<a href="logout.php" class="title collapsed">
													<i class="ti-power-off"></i>
													<div class="data">
														<h5>Power Off</h5>
														<p>Log out of your account</p>
													</div>
													<i class="ti-angle-down"></i>
												</a>
											</div>
											<!-- End of Logout -->
										</div>
									</div>
								</div>
								<!-- End of Settings -->
							</div>
						</div>
					</div>
				</div><!-- Sidebar -->

				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="requests">
							<div class="title">
								<h1>Add your friends</h1>
								<button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
							</div>
							<div class="content">
								<form>
									<div class="form-group">
										<label for="user">Username:</label>
										<input type="text" class="form-control" id="user" placeholder="Add recipient..." required>
										<div class="user" id="contact">
											<img class="avatar-sm" src="dist/img/avatars/avatar-female-5.jpg" alt="avatar">
											<h5>Karen joye</h5>
											<button type="reset" class="btn"><i class="ti-close"></i></button>
										</div>
									</div>
									<div class="form-group">
										<label for="welcome">Message:</label>
										<textarea class="text-control" id="welcome" placeholder="Send your welcome message...">Hi Karen joye, I'd like to add you as a contact.</textarea>
									</div>
									<button type="submit" class="btn button w-100">Send Friend Request</button>
								</form>
							</div>
						</div>
					</div>
				</div><!-- Add Friends -->

				<div class="modal fade" id="startnewchat" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="requests">
							<div class="title">
								<h1>Start new chat</h1>
								<button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
							</div>
							<div class="content">
								<form>
									<div class="form-group">
										<label for="participant">Recipient:</label>
										<input type="text" class="form-control" id="participant" placeholder="Add recipient..." required>
										<div class="user" id="recipient">
											<img class="avatar-sm" src="dist/img/avatars/avatar-female-5.jpg" alt="avatar">
											<h5>Karen joye</h5>
											<button type="reset" class="btn"><i class="ti-close"></i></button>
										</div>
									</div>
									<div class="form-group">
										<label for="topic">Topic:</label>
										<input type="text" class="form-control" id="topic" placeholder="What's the topic?" required>
									</div>
									<div class="form-group">
										<label for="message">Message:</label>
										<textarea class="text-control" id="message" placeholder="Send your welcome message...">Hmm, are you friendly?</textarea>
									</div>
									<button type="submit" class="btn button w-100">Start New Chat</button>
								</form>
							</div>
						</div>
					</div>
				</div><!-- Create Chat -->
				
				<div class="main" id="chat-dialog">
					<div class="tab-content" id="nav-tabContent">
						<!-- Start of Babble -->
                        <div class="babble tab-pane fade active show" id="list-chat" role="tabpanel" aria-labelledby="list-chat-list">
						<!-- Start of Chat -->
						<div class="chat" id="chat1">
							<div class="top">
								<div class="container">
									<div class="col-md-12">
										<div class="inside">
											<div class="status online"></div>
											<div class="data">
												<h5><a href="#">Sarah Dalton</a></h5>
												<span>Active now</span>
											</div>
											<button class="btn d-md-block d-none audio-call" title="Audio call">
												<i class="ti-headphone-alt"></i>
											</button>
											<button class="btn d-md-block d-none video-call" title="Video call">
												<i class="ti-video-camera"></i>
											</button>
											<button class="btn d-md-block d-none" title="More Info">
												<i class="ti-info"></i>
											</button>
											<div class="dropdown">
												<button class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="ti-view-grid"></i>
												</button>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item audio-call"><i class="ti-headphone-alt"></i>Voice Call</a>
													<a href="#" class="dropdown-item video-call"><i class="ti-video-camera"></i>Video Call</a>
													<hr>
													<a href="#" class="dropdown-item"><i class="ti-server"></i>Clear History</a>
													<a href="#" class="dropdown-item"><i class="ti-hand-stop"></i>Block Contact</a>
													<a href="#" class="dropdown-item"><i class="ti-trash"></i>Delete Contact</a>
												</div>
											</div>
											<button class="btn back-to-mesg" title="Back">
												<i class="ti-arrow-right"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="content" id="content">
								<div class="container">
									<div class="col-md-12">
										<div class="date">
											<hr>
											<span>Yesterday</span>
											<hr>
										</div>
										<div class="message">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Karen joye" alt="avatar">
											<div class="text-main">
												<div class="text-group">
													<div class="text">
														<p>Where was i, i worry about my viewrs missing me too much!</p>
													</div>
												</div>
												<span>09:46 AM</span>
											</div>
										</div>
										<div class="message me">
											<div class="text-main">
												<div class="text-group me">
													<div class="text me">
														<p>But if you are not available to talk, then would't they miss you more?</p>
													</div>
												</div>
												<span>11:32 AM</span>
											</div>
										</div>
										<div class="message">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Karen joye" alt="avatar">
											<div class="text-main">
												<div class="text-group">
													<div class="text">
														<p>Aren't you sweet.</p>
													</div>
												</div>
												<span>02:56 PM</span>
											</div>
										</div>
										<div class="message me">
											<div class="text-main">
												<div class="text-group me">
													<div class="text me">
														<p>That's not an answer..</p>
													</div>
												</div>
												<div class="text-group me">
													<div class="text me">
														<p>I am tres sorry, what were you saying?</p>
													</div>
												</div>
												<span>10:21 PM</span>
											</div>
										</div>
										<div class="message">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Karen joye" alt="avatar">
											<div class="text-main">
												<div class="text-group">
													<div class="text">
														<p>Great start guys, why can you only talk at certain time on certain days?</p>
													</div>
												</div>
												<span>11:07 PM</span>
											</div>
										</div>
										<div class="date">
											<hr>
											<span>Today</span>
											<hr>
										</div>
										<div class="message me">
											<div class="text-main">
												<div class="text-group me">
													<div class="text me">
														<p>hmmmm, Well done all. send me document please</p>
													</div>
												</div>
												<span>10:21 PM</span>
											</div>
										</div>
										<div class="message">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Karen joye" alt="avatar">
											<div class="text-main">
												<div class="text-group">
													<div class="text">
														<div class="attachment">
															<button class="btn attach" title="Click to download"><i class="ti-file"></i></button>
															<div class="file">
																<h5><a href="#" title="Click to download">Policy Sheet.pdf</a></h5>
																<span>80kb Document</span>
															</div>
														</div>
													</div>
												</div>
												<span>11:07 PM</span>
											</div>
										</div>
										<div class="message me">
											<div class="text-main">
												<div class="text-group me">
													<div class="text me">
														<p>i have received the .pdf document please send me jpeg file for our requirement..</p>
													</div>
												</div>
												<span><i class="ti-check"></i>10:21 PM</span>
											</div>
										</div>
										<div class="message">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Karen joye" alt="avatar">
											<div class="text-main">
												<div class="text-group">
													<div class="text typing">
														<div class="wave">
															<span class="dot"></span>
															<span class="dot"></span>
															<span class="dot"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="col-md-12">
									<div class="bottom">
										<form class="text-area">
											<textarea class="form-control" placeholder="Start typing for reply..." rows="1"></textarea>
											<div class="add-smiles">
												<span title="add icon" class="em em-blush"></span>
											</div>
											<div class="smiles-bunch">
												<i class="em em---1"></i>
												<i class="em em-smiley"></i>
												<i class="em em-anguished"></i>
												<i class="em em-laughing"></i>
												<i class="em em-angry"></i>
												<i class="em em-astonished"></i>
												<i class="em em-blush"></i>
												<i class="em em-disappointed"></i>
												<i class="em em-worried"></i>
												<i class="em em-kissing_heart"></i>
												<i class="em em-rage"></i>
												<i class="em em-stuck_out_tongue"></i>
												<i class="em em-expressionless"></i>
												<i class="em em-bikini"></i>
												<i class="em em-christmas_tree"></i>
												<i class="em em-facepunch"></i>
												<i class="em em-pushpin"></i>
												<i class="em em-tada"></i>
												<i class="em em-us"></i>
												<i class="em em-rose"></i>
											</div>
											<button type="submit" class="btn send"><i class="ti-location-arrow"></i></button>
										</form>
										<label>
											<input type="file">
											<span class="btn attach"><i class="ti-clip"></i></span>
										</label> 
									</div>
								</div>
							</div>
						</div>
						<!-- End of Chat -->
						<!-- Start of Call -->
                            <div class="call" id="call1">
                                <div class="content">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="inside">
                                                <div class="panel">
                                                    <div class="participant">
                                                        <img class="avatar-xxl" src="dist/img/avatars/avatar-female-5.jpg" alt="avatar">
                                                        <span>Connecting to Sarah</span>
														<div class="wave">
															<span class="dot"></span>
															<span class="dot"></span>
															<span class="dot"></span>
														</div>
                                                    </div>                            
                                                    <div class="options">
                                                        <button class="btn option"><i class="ti-microphone"></i></button>
                                                        <button class="btn option"><i class="ti-video-camera"></i></button>
                                                        <button class="btn option"><i class="ti-user">+</i></button>
                                                        <button class="btn option"><i class="ti-volume"></i></button>
														<button class="btn option"><i class="ti-comment"></i></button>
                                                    </div>
													<button class="btn option call-end"><i class="ti-close"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Call -->
                        </div>
                        <!-- End of Babble -->
                        <!-- Start of Babble -->
                        <div class="babble tab-pane fade" id="list-empty" role="tabpanel" aria-labelledby="list-empty-list">
						<!-- Start of Chat -->
						<div class="chat" id="chat">
							<div class="top">
								<div class="container">
									<div class="col-md-12">
										<div class="inside">
											<div class="status offline"></div>
											<div class="data">
												<h5><a href="#">Bob Frank</a></h5>
												<span>Inactive</span>
											</div>
											<button class="btn d-md-block d-none audio-call" title="Audio call"><i class="ti-headphone-alt"></i></button>
											<button class="btn d-md-block d-none video-call" title="Video call"><i class="ti-video-camera"></i></button>
											<button class="btn d-md-block d-none" title="More Info"><i class="ti-info"></i></button>
											<div class="dropdown">
												<button class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-view-grid"></i></button>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="ti-headphone-alt"></i>Voice Call</a>
													<a href="#" class="dropdown-item"><i class="ti-video-camera"></i>Video Call</a>
													<hr>
													<a href="#" class="dropdown-item"><i class="ti-server"></i>Clear History</a>
													<a href="#" class="dropdown-item"><i class="ti-hand-stop"></i>Block Contact</a>
													<a href="#" class="dropdown-item"><i class="ti-trash"></i>Delete Contact</a>
												</div>
											</div>
											<button class="btn back-to-mesg" title="Back">
												<i class="ti-arrow-right"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="content empty">
								<div class="container">
									<div class="col-md-12">
										<div class="no-messages">
											<i class="ti-comments"></i>
											<p>Seems people are shy to start the chat. Break the ice send the first message.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="col-md-12">
									<div class="bottom">
										<form class="text-area">
											<textarea class="form-control" placeholder="Start typing for reply..." rows="1"></textarea>
											<div class="add-smiles">
												<span title="add icon" class="em em-blush"></span>
											</div>
											<div class="smiles-bunch">
												<i class="em em---1"></i>
												<i class="em em-smiley"></i>
												<i class="em em-anguished"></i>
												<i class="em em-laughing"></i>
												<i class="em em-angry"></i>
												<i class="em em-astonished"></i>
												<i class="em em-blush"></i>
												<i class="em em-disappointed"></i>
												<i class="em em-worried"></i>
												<i class="em em-kissing_heart"></i>
												<i class="em em-rage"></i>
												<i class="em em-stuck_out_tongue"></i>
												<i class="em em-expressionless"></i>
												<i class="em em-bikini"></i>
												<i class="em em-christmas_tree"></i>
												<i class="em em-facepunch"></i>
												<i class="em em-pushpin"></i>
												<i class="em em-tada"></i>
												<i class="em em-us"></i>
												<i class="em em-rose"></i>
											</div>
											<button type="submit" class="btn send"><i class="ti-location-arrow"></i></button>
										</form>
										<label>
											<input type="file">
											<span class="btn attach"><i class="ti-clip"></i></span>
										</label> 
									</div>
								</div>
							</div>
						</div>
						<!-- End of Chat -->
						<!-- Start of Call -->
                            <div class="call" id="call2">
                                <div class="content">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="inside">
                                                <div class="panel">
                                                    <div class="participant">
                                                        <img class="avatar-xxl" src="dist/img/avatars/avatar-female-2.jpg" alt="avatar">
                                                        <span>Connecting to sarah</span>
														<div class="wave">
															<span class="dot"></span>
															<span class="dot"></span>
															<span class="dot"></span>
														</div>
                                                    </div>                            
                                                    <div class="options">
                                                        <button class="btn option"><i class="ti-microphone"></i></button>
                                                        <button class="btn option"><i class="ti-video-camera"></i></button>
                                                        <button class="btn option"><i class="ti-user">+</i></button>
                                                        <button class="btn option"><i class="ti-volume"></i></button>
														<button class="btn option"><i class="ti-comment"></i></button>
                                                    </div>
													<button class="btn option call-end"><i class="ti-close"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Call -->
                        </div>
                        <!-- End of Babble -->
                        
					</div>
				</div>
			</div> <!-- Layout -->
		</main>

		<script src="dist/js/jquery3.3.1.js"></script>
		<script src="dist/js/vendor/jquery-slim.min.js"></script>
		<script src="dist/js/vendor/popper.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
		<script src="dist/js/perfect-scrollbar.min.js"></script>
		<script src="dist/js/script.js"></script>
		<script defer src="jscript.js"></script>
		<script defer src="https://unpkg.com/swup@4"></script>
	</body>
</html>