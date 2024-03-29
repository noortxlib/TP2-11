<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/adminstyle.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <span class="logo_name">STEPCORRECT</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Users</span>
                </a>
            </li>
            <li>
                <a href="adminproduct.php" action="adminproduct.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Product</span>
                </a>
            </li>
            <li>
                <a href="adminorders.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Order list</span>
                </a>
            </li>
            
            <li class="log_out">
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="users">Users</span>
            </div>
            
        </nav>

        <div class="home-content">

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Users</div>
                            <table>
                                <br>
                                <tr>
                                    <th>User ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email address</th>
                                    <th>Address</th>
                                    <th>Telephone number</th>
                                    <th></th>
                                </tr>
                                <?php
                    $sql = "SELECT user_id, user_firstname, user_lastname, user_email, user_address, telephone_number FROM user";
                    $results = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($results) > 0) {
                        while ($row = mysqli_fetch_array($results)) {
                            echo "<tr>";
                            echo "<td>" . $row['user_id'] . "</td>";
                            echo "<td>" . $row['user_firstname'] . "</td>";
                            echo "<td>" . $row['user_lastname'] . "</td>";
                            echo "<td>" . $row['user_email'] . "</td>";
                            echo "<td>" . $row['user_address'] . "</td>";
                            echo "<td>" . $row['telephone_number'] . "</td>";
                            echo "<td> <a href='edituser.php?id=" . $row['user_id'] . "'>Edit User</a> </td>";
                        }
                    } else {
                        echo "<script> alert(\"There are no Users\") </script>";
                    }
                    ?>
                            </table>
                    </div>
                </div>
                <script>
                let sidebar = document.querySelector(".sidebar");
                let sidebarBtn = document.querySelector(".sidebarBtn");
                sidebarBtn.onclick = function() {
                    sidebar.classList.toggle("active");
                    if (sidebar.classList.contains("active")) {
                        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                    } else
                        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                }
                </script>

</body>

</html>