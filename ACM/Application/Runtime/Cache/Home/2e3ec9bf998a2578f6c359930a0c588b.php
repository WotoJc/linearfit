<?php if (!defined('THINK_PATH')) exit();?><style media="screen">
    .news {
        /*margin-top: 15px;*/
    }

    .news .news-content {
        margin-left: 5px;
        height: 120px;
        width: 100%;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 6;
        overflow: hidden;
    }

    .check-wrap {
        padding: 0px 30px;
    }

    .check-btn {
        margin-top: 15px;
        border: 0;
        border-radius: 0;
        background-color: #8e44ad;
        font-weight: 300;
        border: 0;
        transition: all .3s;
    }
</style>

<div class="col-md-12 box news widget-border box-right">
    <p class="text-uppercase text-info">
        <h6>通知</64>
    </p>
    <div class="row news-content">
        <h4>标题：<?php echo ($inform["title"]); ?></h4>
        <p style="text-indent:2em"><?php echo ($inform["content"]); ?></p>
    </div>
    <div class="row">
        <div class="col-md-12 check-wrap">
            <button type="button" class="btn btn-primary check-btn col-md-12" id="btn-informModal">查看</button>
        </div>
    </div>
</div>

<div class="modal fade" id="informModal" tabindex="-1" role="dialog" aria-labelledby="informModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">通知详情</h4>
      </div>
      <div class="modal-body">
             <h3 style="font-weight:bolder;"><?php echo ($inform["title"]); ?></h3>
            <p class="lead" style="text-indent:2em;"><?php echo ($inform["content"]); ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
    $(function(){
        $("#btn-informModal").click(function(){
            $('#informModal').modal('show');
        });
    });
</script>