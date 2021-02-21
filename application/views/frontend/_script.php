<script src="<?= base_url('js/assets/js/bundle.js?ver=1.4.0')?>"></script>
<script src="<?= base_url('js/assets/js/scripts.js?ver=1.4.0')?>"></script>
<script src="<?= base_url('js/assets/js/apps/messages.js?ver=1.4.0')?>"></script>
<!-- JavaScript -->
<script src="<?= base_url('js/assets/js/charts/chart-invest.js?ver=1.4.0')?>"></script>

<!-- sweetalert -->
<script type="text/javascript" src="<?= base_url('js/sweetalert/sweetalert.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/bootstrap-select-1.13.9/dist/js/bootstrap-select.min.js')?>"></script>
<!-- Javascript -->
<!-- popup js -->
<script type="text/javascript" src="<?= base_url('js/sweetalert/sweetalert.js')?>"></script>
<!-- fin -->

<script src="<?= base_url('js/js/popup.js')?>"></script>
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



         /*
        DEBIT SCRIPT PARTAGE DE BUTTON RESEAUX SOCIAUX
      */
    var url_default = window.location.pathname;
    var domaine ="http://localhost"+url_default;
    var url_share = domaine;

    // console.log(url_share);
    var popupCenter = function(url, title, width, height){
          var popupWidth = width || 640;
          var popupHeight = height || 320;
          var windowLeft = window.screenLeft || window.screenX;
          var windowTop = window.screenTop || window.screenY;
          var windowWidth = window.innerWidth || document.documentElement.clientWidth;
          var windowHeight = window.innerHeight || document.documentElement.clientHeight;
          var popupLeft = windowLeft + windowWidth / 2 - popupWidth / 2 ;
          var popupTop = windowTop + windowHeight / 2 - popupHeight / 2;
          var popup = window.open(url, title, 'scrollbars=yes, width=' + popupWidth + ', height=' + popupHeight + ', top=' + popupTop + ', left=' + popupLeft);
          popup.focus();
          return true;
      };


      $(document).on('click', '.btn_twitter', function(event) {
        event.preventDefault();
        /* Act on the event */
        var url = url_share;
          var shareUrl = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.title) +
              "&via=RogerPatrona" +
              "&url=" + encodeURIComponent(url);
          popupCenter(shareUrl, "Partager sur Twitter");
      });

      $(document).on('click', '.btn_facebook', function(event) {
        event.preventDefault();
        /* Act on the event */
        var url = url_share;
          var shareUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url);
          popupCenter(shareUrl, "Partager sur facebook");
      });

      $(document).on('click', '.btn_google', function(event) {
        event.preventDefault();
        /* Act on the event */
        var url = url_share;
          var shareUrl = "https://plus.google.com/share?url=" + encodeURIComponent(url);
          popupCenter(shareUrl, "Partager sur Google+");
      });

      $(document).on('click', '.btn_linkedin', function(event) {
        event.preventDefault();
        /* Act on the event */
        var url = url_share;
          var shareUrl = "https://www.linkedin.com/shareArticle?url=" + encodeURIComponent(url);
          popupCenter(shareUrl, "Partager sur Linkedin");
      });

      /*
        FIN SCRIPT PARTAGE DE BUTTON RESEAUX SOCIAUX
      */


    });
</script>