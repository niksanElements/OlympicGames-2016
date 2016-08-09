<!-- ####################################################################################################### -->
<div class="wrapper col2">
    <div id="topbar">
        <div id="topnav">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="../../pages/style-demo.html">History</a></li>
                <li><a href="../../pages/full-width.html">News</a></li>
                <li><a href="#">Olympic Info</a>
                    <ul>
                        <li><a href="#">Stadions</a></li>
                        <li><a href="#">Veneues</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Shedule</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </li>
                <li class="last"><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div id="search">
            <form action="#" method="post">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
                    <input type="submit" name="go" id="go" value="Search" />
                </fieldset>
            </form>
        </div>
        <br class="clear" />
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
    <div id="container">
        <div id="content">
            <form id='register' action='./user/registration' method='post'
                  accept-charset='UTF-8'>
                <fieldset >
                    <legend>Please Register</legend>
                    <input type='hidden' name='submitted' id='submitted' value='1'/>

                    <label for='fullName' >Write your Full Name*: </label>
                    <input type='text' name='fullName' id='fullName' maxlength="50" /> <br>
                    <label for='email' >Email Address*:</label>
                    <input type='text' name='email' id='email' maxlength="50" /> <br>
                    
                    <label for='username' >UserName*:</label>
                    <input type='text' name='username' id='username' maxlength="50" /><br>

                    <label for='password' >Password*:</label>
                    <input type='password' name='password' id='password' maxlength="50" /><br>
                    <label for='password' >Repeat Password*:</label>
                    <input type='password' name='password-repeat' id='password' maxlength="50" /><br>
                    <input type='submit' name='Submit' value='Submit' /><br>

                </fieldset>
            </form>


        </div>

        <br class="clear" />
    </div>
    <br class="clear" />
</div>
