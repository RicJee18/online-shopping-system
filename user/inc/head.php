
 <!-- HEADER DESKTOP-->
 <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search here..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        
                                    <?php
                                        if(!empty($_SESSION["shopping_cart"])) {
                                            $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                                        ?>
                                        <a href="chart.php"><i class="zmdi zmdi-shopping-cart"></i><span class="quantity"><?php echo $cart_count; ?></span></a>
                                        <?php
                                        }
                                        ?>
        
                                    </div>  
                                </div>
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <i class="fas fa-user"></i>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <?php  if (isset($_SESSION['username'])) : ?>
                                                        <?php echo $_SESSION['username']; ?>
                                                       
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['username'];?></span>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>

                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="index.php?logout='1'">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->