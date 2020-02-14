<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">Sistem Informasi Data Stock Oli pada PT. AKA Honda Kisaran</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=stockoli&actions=tampil">Data Stock Oli</li>
                        <li><a href="?page=karyawan&actions=tampil">Karyawan</a></li>
                    </ul>
                </li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jenis Oli <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=evalube&actions=tampil">Evalube</a></li>
                        <li><a href="?page=federal&actions=tampil">Federal</a></li>
                        <li><a href="?page=mesran&actions=tampil">Mesran</a></li>
                        <li><a href="?page=ahm&actions=tampil">AHM</a></li>
                        <li><a href="?page=castrol&actions=tampil">Castrol</a></li>
                        <li><a href="?page=enduro&actions=tampil">Enduro</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=evalube&actions=report">Evalube</a></li>
						<li><a href="?page=federal&actions=report">Federal</a></li>
                        <li><a href="?page=mesran&actions=report">Mesran</a></li>
                        <li><a href="?page=ahm&actions=report">AHM</a></li>
                        <li><a href="?page=castrol&actions=report">Castrol</a></li>
                        <li><a href="?page=enduro&actions=report">Enduro</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>
               <?php } 
                
                 elseif (isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
                     <li><a href="?page=karyawan&actions=tampil">Karyawan</a></li>
                
                <?php } ?>

                <li><a href="?page=about&actions=tampil">About</a></li>
                <li><a href="?page=kontak&actions=tampil">Contact</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>

        </div>
    </div>
</nav>
