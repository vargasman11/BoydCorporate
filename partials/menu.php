    <!-- ----------------------------------------------------------------------- -->
    <!--                                  menu                                   -->
    <!-- ----------------------------------------------------------------------- -->
    <div class="container" id="nav-container">
        <nav>
            <img src="Assests/logos/boyd-logo-1.png" id="nav-logo">
            <!-- <div class="hamburger"> -->
            <!-- <button id="menu-btn" onclick="showMenu()"><i class="fa fa-bars"></i></button> -->
            <button id="menu-btn" class="hamburger hamburger--spin" type="button" onclick="showMenu()">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <!-- </div> -->
        </nav>

        <div class="dropDownSection" id="dropDownSection" style="display:none">
            <div class="" id="leftSection">
                <div id="left-half">
                    <ul>
                        <li><button type="button" class="btn"><a href="#">Home</a></button></li>
                        <li>
                            <button type="button" class="btn" data-toggle="collapse" data-target="#AboutUs">About
                                Us <i class="fa fa-plus"></i></button>
                            <div id="AboutUs" class="collapse">
                                <ul class="sub-menu">
                                    <li><a href="#">Hello</a></li>
                                    <li><a href="#">Hello</a></li>
                                    <li><a href="#">Hello</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button type="button" class="btn" data-toggle="collapse"
                                data-target="#CustomerService">Customer Service <i class="fa fa-plus"></i></button>
                            <div id="CustomerService" class="collapse">
                                <ul class="sub-menu">
                                    <li><a href="#">Load Tracking</a></li>
                                    <li><a href="#">Request a Quote</a></li>
                                    <li><a href="#">Credit Applications</a></li>
                                    <li><a href="#">Service Maps</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button type="button" class="btn" data-toggle="collapse" data-target="#DriverService">Driver
                                Service <i class="fa fa-plus"></i></button>
                            <div id="DriverService" class="collapse">
                                <ul class="sub-menu">
                                    <li><a href="#">Load Tracking</a></li>
                                    <li><a href="#">Request a Quote</a></li>
                                    <li><a href="#">Credit Applications</a></li>
                                    <li><a href="#">Service Maps</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button type="button" class="btn" data-toggle="collapse"
                                data-target="#EmployeeServices">Employee Services <i class="fa fa-plus"></i></button>
                            <div id="EmployeeServices" class="collapse">
                                <ul class="sub-menu">
                                    <li><a href="#">Load Tracking</a></li>
                                    <li><a href="#">Request a Quote</a></li>
                                    <li><a href="#">Credit Applications</a></li>
                                    <li><a href="#">Service Maps</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

<!-- RIGHT HALF -->

                <div id="right-half">
                    <ul>
                        <li>
                            <button type="button" class="btn" data-toggle="collapse"
                                data-target="#Employment">Employment <i class="fa fa-plus"></i></button>
                            <div id="Employment" class="collapse">
                                <ul class="sub-menu">
                                    <li><a href="#">Hello</a></li>
                                    <li><a href="#">Hello</a></li>
                                    <li><a href="#">Hello</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><button type="button" class="btn"><a href="#">Contact Us</a></button></li>
                        <li>
                            <button type="button" class="btn" data-toggle="collapse"
                                data-target="#Chaplain">Support/Chaplain <i class="fa fa-plus"></i></button>
                            <div id="Chaplain" class="collapse">
                                <ul class="sub-menu">
                                    <li><a href="#">Load Tracking</a></li>
                                    <li><a href="#">Request a Quote</a></li>
                                    <li><a href="#">Credit Applications</a></li>
                                    <li><a href="#">Service Maps</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><button type="button" class="btn"><a href="#">Logistics Services</a></button></li>
                        <li><button type="button" class="btn"><a href="#">Company Store</a></button></li>
                    </ul>
                </div>

            </div>
            <!-- Right Section with search and icons -->
            <div id="rightSection">
                <div class="search-section">
                    <form action="">
                        <span class="dropDownSearch"><input type="text" placeholder="Search.."><i
                                class="fa fa-search"></i></span>
                    </form>
                </div>
                <div class="social-links">
                    <ul>
                        <li><a href="" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
