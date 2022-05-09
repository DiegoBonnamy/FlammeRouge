<?php
    include("fragments/head.php");

    session_destroy();

    // Redirection
    echo "<script>document.location.replace('index');</script>";
?>

<body class="text-center text-white" style="padding:10%;">

</body>
</html>