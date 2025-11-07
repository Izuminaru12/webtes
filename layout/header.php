<header>
    <nav>
        <a href="index.php" class="brand">MyWebApp</a>
        <div class= "dropdown">
            <button class="dropbtn">☰</button>
            <div class="dropdown-content">
            
            <?php if(isset($_SESSION["username"])): ?>
                <a href="home.php">Home</a>
                <a href="profile.php">Profile</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
            
            </div>
        </div>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropbtn = document.querySelector('.dropbtn');
    const dropdownContent = document.querySelector('.dropdown-content');

    if (dropbtn && dropdownContent) {
        dropbtn.addEventListener('click', function(event) {
            event.stopPropagation(); 
            dropdownContent.classList.toggle('show');
        });
        dropdownContent.addEventListener('click', function(event) {
            event.stopPropagation();
        });
        window.addEventListener('click', function(event) {
            if (dropdownContent.classList.contains('show')) {
                dropdownContent.classList.remove('show');
            }
        });
    }
});
</script>