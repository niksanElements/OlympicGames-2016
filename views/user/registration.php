    <form class="col-lg-12 col-lg-push-3"id='register' method='post'
          accept-charset='UTF-8'>
        <fieldset >
            <legend>Please, Register!</legend>
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
