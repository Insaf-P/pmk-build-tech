 <!-- Main navigation -->
 <div class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.php" ><img src="images/logo.svg" alt="logo"></a>
            </div>
            <nav>
                <ul class="primary-nav">
                    <li><a class="<?php if($page == 'legacy.php'){echo 'active-btn';}?>" href="legacy.php">Legacy</a></li>
                    <li><a class="<?php if($page == 'project.php'){echo 'active-btn';}?>" href="project.php">Project</a></li>
                    <li><a class="<?php if($page == 'service.php'){echo 'active-btn';}?>" href="service.php">Services</a></li>
                    <li><a class="<?php if($page == 'updates.php'){echo 'active-btn';}?>" href="updates.php">Updates</a></li>
                    <li><a class="contact-btn" href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>