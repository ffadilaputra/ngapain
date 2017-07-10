<script src="<?php echo base_url('assets/library/jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/semantic/semantic.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatable/jquery.dataTables.min.js') ?>"></script>
 <script>
        $(function(){
            $('#list').DataTable();
             $('.dataTables_length select').addClass('ui dropdown').dropdown();
             $('.dataTables_filter').addClass('ui input');
             $('.dataTables_paginate paging_simple_numbers').addClass('ui stackable pagination menu');
        });
    </script>

</body>
</html>