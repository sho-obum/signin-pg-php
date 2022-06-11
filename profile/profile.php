<?php
    session_start();
    echo "Welcome ".$_SESSION['email'];
?>

<body>
    <br>
    <button>
        <a href="../logout.php">Logout !</a>
    </button>
</body>