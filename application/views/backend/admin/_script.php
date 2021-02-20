<script type="text/javascript" src="<?php echo(base_url()) ?>js/js/canavas.js"></script>
<script type="text/javascript" src="<?php echo(base_url()) ?>js/js/stripe.js"></script>


<script src="<?= base_url('js/assets/js/bundle.js?ver=1.4.0')?>"></script>
<script src="<?= base_url('js/assets/js/scripts.js?ver=1.4.0')?>"></script>
<script src="<?= base_url('js/assets/js/apps/messages.js?ver=1.4.0')?>"></script>

<!-- datatables plagun -->

<script type="text/javascript" src="<?= base_url('js/assets/dataTables/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/assets/js/popper.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/assets/js/bootstrap.min.js')?>"></script>
<!-- fin datatables plagun -->

<!-- sweetalert -->
<script type="text/javascript" src="<?= base_url('js/sweetalert/sweetalert.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/bootstrap-select-1.13.9/dist/js/bootstrap-select.min.js')?>"></script>
<!-- Javascript -->
<script src="<?= base_url('js/plugins/bundles/fullcalendarscripts.bundle.js')?>"></script>
<!--/ calender javascripts -->


<script src="<?= base_url('js/plugins/summernote/summernote-bs4.min.js')?>"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote();
  })
</script>


<script type="text/javascript">
    $(document).ready(function(){
        //alert("boom");

        var limit = 7;
        var start = 0;
        var action = 'inactive';

        function lazzy_loader(limit)
        {
          var output = '';
          for(var count=0; count<limit; count++)
          {
            output += '<div class="post_data">';
            output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
            output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
            output += '</div>';
          }
          $('#load_data_message').html(output);
        }

        lazzy_loader(limit);

         setTimeout(function(){
             $('#load_data').append('');
             $('#load_data_message').html("");
          }, 1000);


    });
</script>



