<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <span class="display-4">SILAKAN LOGIN</span>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('auth/login') ?>" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Masukan Email " name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Masukan password" name="password">
                        </div>
                        <button class="btn btn-success" type="submit">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .container{
        margin-top: 10rem;
        margin-left: 25rem;
    }
</style>