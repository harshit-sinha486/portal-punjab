<?
    include('login.php');
    session_start(['username']);
    session_start(['password']);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Portal Patiala</title>
    <link rel="stylesheet" type="text/css" href="sitecss.css">
</head>
<body>
    <nav class="menu">
        <header>Menu</header>
        <ol>
            <li class="menu=item"><a href="hackathon.html">Home</a></li>
            <li class="menu=item"><a>Department</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="faculty.html">Education</a></li>
                <li class="menu-item"><a href="faculty.html">Health</a></li>
                <li class="menu-item"><a href="faculty.html">Municipal Cooperation</a></li>
                </ol>
            </li>
            <li class="menu=item"><a href="">About</a></li>
            <li class="menu-item"><a href="contact us.html">Contact</a></li>
        </ol>
        <footer>
        <button aria-label="toogle menu">Toogle</button>
        </footer>
        
    </nav>
</body>
</html>