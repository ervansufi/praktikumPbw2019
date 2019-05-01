<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Profile</div>
                
                <div class="card-body">
                    <form method="POST" action="">

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="id" value="">
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" value="" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Foto Profil</label>

                            <div class="col-md-6">
                                <img src="<?php echo base_url('assets/img/default.svg')?>" width=50px height=50px>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-2">
                                <input type="submit" class="btn btn-primary btn-block" name="update" value="Update" />
                            </div>
                        </div>                       
                    </form>
                }
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
