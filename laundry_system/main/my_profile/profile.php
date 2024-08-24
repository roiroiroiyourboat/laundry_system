<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="progress"></div>
    <div class="wrapper">

        <aside id="sidebar">
                <div class="d-flex">
                    <button id="toggle-btn" type="button">
                        <i class='bx bx-menu-alt-left' ></i>
                    </button>

                    <div class="sidebar-logo">
                        <a href="#">Azia Skye</a>
                    </div>
                </div>

                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="/laundry-ms/main/dashboard/dashboard.php" class="sidebar-link">
                            <i class="bx bxs-grid-alt"></i>
                            <span class="nav-item">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/laundry-ms/main/my_profile/profile.php" class="sidebar-link">
                            <i class='bx bxs-user'></i>
                            <span class="nav-item">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/laundry-ms/main/users/users.php" class="sidebar-link">
                            <i class='bx bxs-group'></i>
                            <span class="nav-item">Users</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/laundry-ms/main/records/records.php" class="sidebar-link">
                            <i class='bx bxs-folder-open'></i>
                            <span class="nav-item">Records</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/laundry-ms/main/transaction/transaction.php" class="sidebar-link">
                            <i class='bx bx-transfer-alt'></i>
                            <span class="nav-item">Transaction</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/laundry-ms/main/sales_report/report.php" class="sidebar-link">
                            <i class='bx bx-line-chart'></i>
                            <span class="nav-item">Sales Report</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/laundry-ms/main/settings/settings.php" class="sidebar-link">
                            <i class='bx bxs-cog'></i>
                            <span class="nav-item" >Settings</span>
                        </a>
                    </li>

                    <hr style="border: 1px solid #232946; margin: 8px">

                    <li class="sidebar-item">
                        <a href="/laundry-ms/main/archived/archived.php" class="sidebar-link">
                            <i class='bx bxs-archive-in'></i>
                            <span class="nav-item">Archived</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-footer">
                    <a href="#" class="sidebar-link">
                        <i class='bx bx-log-out'></i> 
                        <span>Logout</span>
                    </a>
                </div>
            </aside>

            <!---------MAIN CONTENT------------->
            <div class="main p-3">
                <div class="header-con">
                    <h1>My Profile</h1>
                </div>

                <div class="user_container" id="user_container">
                    <form action="" method="post" class="user_form" id="user_form">
                        <div class="row">
                            <div class="col">
                                <img id="profile-picture-preview" src="/laundry-ms/main/images/user-img.jpg" alt="Profile Picture Preview" class="img-fluid">
                            </div>
                        </div>

                        <div class="row">
                            <h4 class="text-center">Personal Details</h4>
                            <div class="col">
                                <label for="form-label">First Name</label>
                                <input type="text" id="fname" name="fname" class="form-control" readonly>
                            </div>
                            <div class="col">
                                <label for="form-label">Last Name</label>
                                <input type="text" name="lname" id="lname" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="form-label">Username</label>
                                <input type="text" id="username" name="username" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <h4 class="text-center">Password</h4>
                            <div class="col">
                                <label for="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="button" class="btn btn-success" id="btn_edit">
                                <i class='bx bxs-edit'></i>
                                Edit Profile
                            </button>
                        </div>
                    </form>
                </div>

                <div class="edit_user" id="edit_user">
                    <form action="" method="post" class="edit_user_form" id="edit_user_form">
                        <div class="row">
                            <h3>Edit Profile</h3>
                            <p>Update your personal information.</p>
                            <hr>
                            <div class="col">
                                <label for="profilePicture" class="form-label">Profile Picture</label>
                                <br>
                                <img id="preview_profile_pic" src="/laundry-ms/main/images/user-img.jpg" alt="Profile Picture Preview">
                                <input class="form-control" type="file" id="updateProfilePicture" accept="image/jpeg, image/png, image/jpg">
                            </div>
                        </div>

                        <div class="row">
                            <h4 class="text-center">Personal Details</h4>
                            <div class="col">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" id="edit_fname" name="edit_fname" class="form-control">
                            </div>
                            <div class="col">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" id="edit_lname" name="edit_fname" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="edit_username" name="edit_username" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <h4 class="text-center">Password</h4>
                            <div class="col">
                                <label for="current_pass" class="form-label">Current Password</label>
                                <div class="password-wrapper">
                                    <input type="password" id="current_pass" name="current_pass" class="form-control">
                                    <i class='bx bx-show toggle-password' data-target="#current_pass"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="new_pass" class="form-label">New Password</label>
                                <div class="password-wrapper">
                                    <input type="password" id="new_pass" name="new_pass" class="form-control" minlength="8">
                                    <i class='bx bx-show toggle-password' data-target="#new_pass"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="confirm_pass" class="form-label">Confirm Password</label>
                                <div class="password-wrapper">
                                    <input type="password" id="confirm_pass" name="confirm_pass" class="form-control" minlength="8">
                                    <i class='bx bx-show toggle-password' data-target="#confirm_pass"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="button" class="btn btn-light" id="btnBack">Back</button>
                            <button type="button" class="btn btn-primary" id="btnSaveChanges">Save Changes</button>
                        </div>
                    </form>
                </div>

            </div> <!--end of main content-->

    </div> <!--end of wrapper-->

    <!---------------JAVASCRIPT------------------>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="profile.js"></script>
</body>
</html>