<script src="<?php echo base_url('assets/library/jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatable/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/semantic/semantic.min.js') ?>"></script>

 <script>
        $(function(){
            $('#list').dataTable({
            "autofill"   : true,
            "processing" : true,
            "serverSide" : true,
            "lengthMenu" : [[1,3,6,-1],[1,3,6,"All"]],
            "ajax" : {
            	url:"<?php echo site_url('story/ajax_view') ?>",
            	type:"POST"
            },	
            "columnsDefs":[
            	{
            		"targets":0,
            		"data":"title",
            	},
            	{
            		"targets":1,
            		"data":"date",
            	},
            	
            ]
            });
             $('.dataTables_length select').addClass('ui dropdown').dropdown();
             $('.dataTables_filter').addClass('ui input');
        });
    </script>

</body>
</html>