

<?php if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == '2') { ?>
    
	<div class="navbar-wrapper">
		<div class="navbar-inverse" role="navigation">
			<div class="container">
				<div style="height: 50px;" class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Nav Starts -->

				<div style="margin-right: 50px;" class="navbar-collapse  collapse">
					<nav class="shift">
						<ul class="nav navbar-nav navbar-left">
							<li class="active"><a href="agent-index.php">Home</a></li>
							<li class="active"><a href="agent-about.php">About</a></li>
							<li class="active"><a href="agent-agents.php">Agents</a></li>
							<li class="active"><a href="agent-blog.php">Blog</a></li>
							<li class="active"><a href="agent-contact.php">Contact</a></li>      
						</ul>
					</nav>
				</div>
			<!-- #Nav Ends -->
			</div>
		</div>
	</div>
    <?php if(isset($_SESSION['first_name'])) { ?> 
            <!-- #Header Starts -->
    <div class="container">
        <div class="dropdown" style="z-index:11;">
            <button style="background-color: #000; font-color: white; float: right; margin-right: -50px;margin-top:-43px;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span style="color: white" class="glyphicon glyphicon-user "><?php echo "<span style='color: #FFF;'> ".$_SESSION["first_name"]." </span>" ?></span> <span class="caret white"></span></button>

            <ul style="margin-top: -10px;margin-left: 1032px;" class="dropdown-menu">
                <li class="dropdown-header">Account Settings</li>
                <li><a href="edit-profile.php">Profile</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Done browsing?</li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <?php } ?>


<?php } else if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '3') { ?>

    <div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
            <div class="container">
                <div style="height: 50px;" class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Nav Starts -->
                <div class="navbar-collapse collapse">
                    <nav class="shift">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="active"><a href="about.php">About</a></li>
                            <li class="active"><a href="agents.php">Agents</a></li>
                            <li class="active"><a href="buysalerent.php">Browse</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>          
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($_SESSION['first_name'])) { ?> 
            <!-- #Header Starts -->
    <div class="container">
        <div class="dropdown" style="z-index:11;">
            <button style="background-color: #000; font-color: white; float: right; margin-right: -50px;margin-top:-43px;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span style="color: white" class="glyphicon glyphicon-user "><?php echo "<span style='color: #FFF;'> ".$_SESSION["first_name"]." </span>" ?></span> <span class="caret white"></span></button>

            <ul style="margin-top: -10px;margin-left: 1032px;" class="dropdown-menu">
                <li class="dropdown-header">Account Settings</li>
                <li><a href="edit-profile.php">Profile</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Done browsing?</li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <?php } ?>
<?php } else { ?>


    <div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
            <div class="container">
                <div style="height: 50px;" class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Nav Starts -->
                <div class="navbar-collapse collapse">
                    <nav class="shift">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="active"><a href="about.php">About</a></li>
                            <li class="active"><a href="agents.php">Agents</a></li>
                            <li class="active"><a href="buysalerent.php">Browse</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>          
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<!-- #Header Starts -->
<div class="container">
<!-- Header Starts -->
    <div class="header">
        <a href="index.php"><img style="margin-top: -30px;" src="images/logo2.png" alt="Housefinder"><img style="margin-top: 50px; margin-left: -210px; margin-bottom: -20px;" src="images/title.png"></a>
    </div>
<!-- #Header Starts -->
</div>