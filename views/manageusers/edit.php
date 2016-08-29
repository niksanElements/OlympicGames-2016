<h1>Edit Users</h1>
<main>
    <div class="container">

        <form method="post">
            <table class="table table-responsive">
                <tr>
                    <th>ID:</th>
                    <th><?=$this->user["id"]?></th>
                </tr>
                <tr>
                    <th>Username:</th>
                    <th><input class="form-control" type="text" name="username" value="<?=$this->user["username"]?>" /></th>
                </tr>
                <tr>
                    <th>Full name:</th>
                    <th><input class="form-control" type="text" name="full_name" value="<?=$this->user["full_name"]?>" /></th>
                </tr>
                <tr>
                    <th>E-mail:</th>
                    <th><input class="form-control" type="text" name="email" value="<?=$this->user["email"]?>" /></th>
                </tr>
                <tr>
                    <th>Status:</th>
                    <th>
                        <?php if($this->user["status"] == "A"){ ?>
                            <input type="radio" name="status" value="A" checked="checked" />
                            Admin
                            <input type="radio" name="status" value="U" />
                            User
                            <input type="radio" name="status" value="R" />
                            Redactor
                        <?php } else if($this->user["status"] == "U"){ ?>
                            <input type="radio" name="status" value="A" />
                            Admin
                            <input type="radio" name="status" value="U" checked="checked" />
                            User
                            <input type="radio" name="status" value="R" />
                            Redactor
                        <?php } else{ ?>
                            <input type="radio" name="status" value="A" />
                            Admin
                            <input type="radio" name="status" value="U"  />
                            User
                            <input type="radio" name="status" value="R" checked="checked"/>
                            Redactor
                        <?php } ?>
                    </th>
                </tr>
                <tr>
                    <th>Password:</th>
                    <th><input class="form-control" type="password" name="password" placeholder="Password" /></th>
                </tr>
                <tr>
                    <th>Confirm Password:</th>
                    <th><input class="form-control" type="password" name="password_confirm" placeholder="Confirm Passowrd"/></th>
                </tr>
                <tr>
                    <th colspan="2">
                        <button class="btn btn-primary" type="submit" name="submit-edit">
                            <span class="glyphicon glyphicon-save"> Save</span>
                    </th>
                </tr>
            </table>
        </form>
        <a class="btn btn-primary pull-right" href="<?=APP_ROOT?>/manageusers" >
            <span class="glyphicon glyphicon-backward"> <b>Back</b></span></a>
    </div>
</main>