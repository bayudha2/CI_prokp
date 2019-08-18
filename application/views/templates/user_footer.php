<!-- Footer -->
<div class="" style="padding:40px;color:rgb(255,255,255);background-color:rgba(255,255,255,0);margin-top:0px; ">
    <footer style="margin-top:0px;">
        <ul class="list-inline" style="color:rgb(255,255,255); text-align:center;">
            <li class="list-inline-item" style="color:black;">Provinsi Jawa Barat</li>
            <li class="list-inline-item" style="color:black;">Diskominfo Jawa Barat</a></li>
        </ul>
        <p class="text-center copyright" style="color:black; font-size:80%;">Dinas Komunikasi dan Informatika Provinsi Jawa Barat © 2019</p>
    </footer>
</div>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script> -->
<script type="text/javascript" src="assets/js/table.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script>

    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url:"<?= base_url('admin/changeaccess'); ?>", 
            type: "post",
            data: {
                menuId: menuId,
                roleId: roleId
            },

            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });
    });

</script>



</html>
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>
