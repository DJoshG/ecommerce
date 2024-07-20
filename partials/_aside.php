<aside>
    <div class="top">
        <div class="logo">
            <img src="images/newlogo.png" alt="" sizes="" srcset="">
            <h2>EGA <span class="danger">TOR</span></h2>
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
        </div>
    </div>     

    <div class="sidebar close-sidebar">
        <ul class="sidebar-list">
            <li class="dropdown">
                <div class="title">
                    <a href="dashboard.php" class="<?php if($page == "dashboard.php"){echo "link active";}else{echo "link";}?>">
                        <span class="material-icons-sharp">grid_view</span>
                        <h3 class="name">Dashboard</h3>
                    </a>
                </div>
            </li>
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <span class="material-icons-sharp">person_outline</span>
                        <h3 class="name">People</h3>
                    </a>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="submenu">
                    <a href="suppliers.php" class="<?php if($page == "suppliers.php"){echo "links active";}else{echo "links";}?>">
                        <span class="material-icons-sharp">wifi</span>
                        <h3 class="name">Suppliers</h3>
                    </a> 
                    <a href="customers.php" class="<?php if($page == "customers.php"){echo "links active";}else{echo "links";}?>">
                        <span class="material-icons-sharp">male</span>
                        <h3 class="name">Customers</h3>
                    </a>                  
                </div>
            </li>
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <span class="material-icons-sharp">receipt_long</span>
                        <h3 class="name">Transactions</h3>
                    </a>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="submenu">
                    <a href="orders.php" class="<?php if($page == "orders.php"){echo "links active";}else{echo "links";}?>">
                        <span class="material-icons-sharp">shopping_bag</span>
                        <h3 class="name">Orders</h3>
                    </a>
                    <a href="expenses.php" class="<?php if($page == "expenses.php"){echo "links active";}else{echo "links";}?>">
                        <span class="material-icons-sharp">insights</span>
                        <h3 class="name">Expenses</h3>
                    </a>
                </div>
            </li>
            <li class="dropdown">
                <div class="title">   
                    <a href="messages.php" class="<?php if($page == "messages.php"){echo "link active";}else{echo "link";}?>">
                        <span class="material-icons-sharp">mail_outline</span>
                        <h3 class="name">Messages</h3>
                        <span class="message-count">26</span>
                    </a>
                </div>
            </li>
            <li class="dropdown">
                <div class="title">
                    <a href="products.php" class="<?php if($page == "products.php"){echo "link active";}else{echo "link";}?>">
                        <span class="material-icons-sharp">inventory</span>
                        <h3 class="name">Products/Inventory</h3>
                    </a>
                </div>
            </li>
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <span class="material-icons-sharp">place</span>
                        <h3 class="name">Places</h3>
                    </a>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="submenu">
                    <a href="places.php" class="<?php if($page == "places.php"){echo "links active";}else{echo "links";}?>">
                        <span class="material-icons-sharp">store</span>
                        <h3 class="name">Shops and Warehouses</h3>
                    </a>
                    <a href="ecommerce.php" class="<?php if($page == "ecommerce.php"){echo "links active";}else{echo "links";}?>">
                        <span class="material-icons-sharp">bolt</span>
                        <h3 class="name">Online Store</h3>
                    </a>
                </div>
            </li>
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <span class="material-icons-sharp">report_gmailerrorred</span>
                        <h3 class="name">Reports</h3>
                    </a>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="submenu">
                    <a href="returns.php" class="<?php if($page == "returns.php"){echo "links active";}else{echo "links";}?>">
                        <span class="material-icons-sharp">assignment_return</span>
                        <h3 class="name">Returns</h3>
                    </a>                    
                </div>
            </li>
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <span class="material-icons-sharp">settings</span>
                        <h3 class="name">Settings</h3>
                    </a>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="submenu">
                    <a href="users.php" class="<?php if($page == "users.php"){echo "links active";}else{echo "links";}?>">
                        <span class="material-icons-sharp">manage_accounts</span>
                        <h3 class="name">Accounts</h3>
                    </a>
                    <a href="profile.php" class="<?php if($page == "profile.php"){echo "links active";}else{echo "links";}?>">
                        <span class="material-icons-sharp">camera</span>
                        <h3 class="name">Profile</h3>
                    </a>
                    <a href="about_company.php" class="<?php if($page == "about_company.php"){echo "links active";}else{echo "links";}?>">
                        <span class="material-icons-sharp">business</span>
                        <h3 class="name">About_company</h3>
                    </a>
                </div>
            </li>
            <li class="dropdown">
                <div class="title">
                    <a href="add_product.php" class="<?php if($page == "add_product.php"){echo "link active";}else{echo "link";}?>">
                        <span class="material-icons-sharp">add</span>
                        <h3 class="name">Add Product</h3>
                    </a>
                </div>
            </li>
            <li class="dropdown">
                <div class="title">
                    <a href="create_order.php" class="<?php if($page == "create_order.php"){echo "link active";}else{echo "link";}?>">
                        <span class="material-icons-sharp">border_color</span>
                        <h3 class="name">Order Product</h3>
                    </a>
                </div>
            </li>
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <span class="material-icons-sharp">logout</span>
                        <h3 class="name">Logout</h3>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</aside>