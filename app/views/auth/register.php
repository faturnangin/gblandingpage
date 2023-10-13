<div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div> 
<div style="margin-top:50px" class="col-md-10 mx-auto col-lg-4">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="<?=BASEURL;?>/auth/signup">
                <div class="form-floating mb-3">
                    <input name="id" type="hidden" class="form-control" id="id" placeholder="id">
                </div>
                <div class="form-floating mb-3">
                    <label for="username">Username</label>
                    <input name="username" type="text" class="form-control" id="username" placeholder="username">
                </div>
                <div class="form-floating mb-3">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="password">
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
        </div>
    </div>
</div>