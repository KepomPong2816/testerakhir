<footer class="main-footer">
        <div class="footer-left">
        
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <script>
  Morris.Bar({
          element: 'myfirstchart',
          data: <?php echo $grafik;?>,
          xkey: 'status_rental',
          ykeys: ['denda', 'harga', 'total_denda'],
          labels: ['Denda/Hari', 'Harga Sewa', 'Total Denda']
        });
</script>
  <script src="<?= base_url('assets/assets_stisla'); ?>/assets/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('assets/assets_stisla'); ?>/assets/js/scripts.js"></script>
  <script src="<?= base_url('assets/assets_stisla'); ?>/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/assets_stisla'); ?>/assets/js/page/index-0.js"></script>
  <script src="<?= base_url('assets/assets_stisla'); ?>/js/jquery-3.5.1.min.js"></script>
  <script>
  $(function() {
  $('[data-toggle="tooltip"]').tooltip();
  });
  </script>
  
  <script src="<?= base_url('assets/assets_stisla'); ?>/js/myscript.js"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#userTable').DataTable({
                "ajax": "<?php echo site_url('data'); ?>", // Replace 'data' with the route you defined in Step 6
            });
        });
    </script>
</body>
</html>