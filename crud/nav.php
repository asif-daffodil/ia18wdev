<nav>
    <ul>
        <li><a href="./index.php">Student List</a></li>
        <li><a href="./addStudent.php">Add Student</a></li>
        <?php if(!isset($_SESSION['uname'])){ ?>
        <li><a href="./login.php">Login</a></li>
        <?php }else{ ?>
        <li>
            <a href=""><?= $_SESSION['name'] ?></a>
            <ul class="dd">
                <li><a href="./changePassword.php">Change Password</a></li>
                <li><a href="./logout.php">logout</a></li>
            </ul>
        </li>
        <?php } ?>
    </ul>
</nav>