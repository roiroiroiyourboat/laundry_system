<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="users.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                    <a href="/laundry_system/main/dashboard/dashboard.php" class="sidebar-link">
                        <i class="bx bxs-grid-alt"></i>
                        <span class="nav-item">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/laundry_system/main/my_profile/profile.php" class="sidebar-link">
                        <i class='bx bxs-user'></i>
                        <span class="nav-item">Profile</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/laundry_system/main/users/users.php" class="sidebar-link">
                        <i class='bx bxs-group'></i>
                        <span class="nav-item">Users</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/laundry_system/main/records/records.php" class="sidebar-link">
                        <i class='bx bxs-folder-open'></i>
                        <span class="nav-item">Records</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/laundry_system/main/transaction/transaction.php" class="sidebar-link">
                        <i class='bx bx-transfer-alt'></i>
                        <span class="nav-item">Transaction</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/laundry_system/main/sales_report/report.php" class="sidebar-link">
                        <i class='bx bx-line-chart'></i>
                        <span class="nav-item">Sales Report</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/laundry_system/main/settings/settings.php" class="sidebar-link">
                        <i class='bx bxs-cog'></i>
                        <span class="nav-item" >Settings</span>
                    </a>
                </li>

                <hr style="border: 1px solid #232946; margin: 8px">

                <li class="sidebar-item">
                    <a href="/laundry_system/main/archived/archived.php" class="sidebar-link">
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
        
        <!-------------MAIN CONTENT------------->
        <div class="main p-3">
            <div class="header-con">
                <h1>
                   Users
                </h1>
            </div>

            <!--OTHER CONTENT-->
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="users.js"></script>

</html>