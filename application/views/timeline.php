<body class="bg-light">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-2">
            <div class="card">
                <div class="card-body text-center">
                    <img class="img img-responsive rounded-circle mb-3" width="160" src="<?php echo base_url('assets/img/default.svg')?>" />
                    <p><?php echo $this->session->userdata('username'); ?></p>
                </div>
            </div>           
        </div>

        <div class="col-md-8">
            <form action="<?php echo base_url('index.php/pesbuk/addStatus')?>" method="post" />
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="status" id="status" placeholder="Apa yang kamu pikirkan?"></textarea>
                </div>
                <div class="col-md-2">
                  <input type="submit" class="btn btn-primary btn-block" id="postStatus" name="postStatus" value="Post" />
                </div>
            </form>         
        </div>
    </div>
    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
      <?php foreach($info as $data): ?>
            <div class="card mb-3">
                <div class="card-body">
                  <?php echo $data['status'];?>
                </div>
            </div>
      <?php endforeach  ?>
      </div>
    </div>
</div>

</body>
</html>