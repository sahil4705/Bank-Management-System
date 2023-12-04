<div id="bg-modal" class="bg-modal">
            <div class="modal-content">
<div class="header">
                    <div class="close">+</div>
                    <h1 id="heading">User Login</h1>
                </div>
                <form id="loginform" method="post">
                    <div class="input">
                        <label>Username</label>
                        <input type="text" name="user" id="user">
                    </div>
                    <div class="input">
                        <label>Password</label>
                        <input type="password" name="pwd" id="pwd">
                    </div>
                    <div class="input">
                        <button type="submit" class="btn" id="btn" name="userlogin">Login</button>
                    </div>
                    <p>
                        Dont Have Account? <a id="user_add" href="#">Sign up</a>
                    </p>
                </form>
                 <!-- sign up form -->
                 <form id="signupform" method="post">
                    <div class="input">
                        <label>Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="input">
                        <label>Email</label>
                        <input type="email" name="semail" id="semail" required>
                    </div>
                    <div class="input">
                        <label>Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="input">
                        <label>Confirm password</label>
                        <input type="password" name="cpassword" id="cpassword">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="signupbtn" id="signupbtn" name="signup">Sign Up</button>
                    </div>
                    
                </form>
                <!-- staff login form -->
                <form id="stafffrom" method="post">
                    <div class="input">
                        <label>Username</label>
                        <input type="text" name="suser" id="suser">
                    </div>
                    <div class="input">
                        <label>Password</label>
                        <input type="password" name="spwd" id="spwd">
                    </div>
                    <div style="padding:2px"></div>
                    <div class="input">
                        <button type="submit" class="sbtn" id="sbtn" name="stafflogin">Login</button>
                    </div>
                </form>
                </div>
        </div>
