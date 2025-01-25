<form action="Pointjawaban/prosesoption" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              Nama Kuisoner yg Anda Pilih:
            <input type="text" readonly style="color:red;" name="kuisoner_proses_name" class="kuisoner_proses_name">
                <div class="form-group">
                    <label>Jawaban</label>
                    <input type="text" class="form-control" name="desc_jawaban_proses" placeholder="Jawaban">
                </div>
                
                <div class="form-group">
                    <label>Point Jawaban</label>
                    <input type="text" class="form-control" name="point_jawaban_proses" placeholder="Point">
                </div>

                
                <input type="hidden" name="kuisoner_proses_id" class="kuisoner_proses_id">
            </div>
            <div class="modal-footer">
                <button type="submit" name="add" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
   <script>
    $(document).ready(function(){
     
        // get Edit Product
        $('.btn-detail').on('click',function(){
          const id = $(this).data('id');
            // get data from button edit
            window.location.replace("https://quesioner.my.id/ecommerce/Pointjawaban/detail/"+id);
            $('#myModal').modal('show');

        }
        )}
  );


        

</script>
<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
    
    <!-- Modal content -->

<div class="modal-content">
 
 

  <div class="modal-header">
    <span class="close">&times;</span>
   
  </div>
  <div class="modal-body">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Add Jawaban</h4>
                  <p class="mb-0"></p>
                </div>
                <div class="card-body">

<?php echo form_open('pointjawaban/proses'); ?>
	
<input type="hidden" name="id_kuisoner_add" value="">
<div class="form-group row">
	Jawaban
				<input type="text" name="descjawaban"    class="form-control form-control-lg"  value="" required>
		
</div>
<div class="form-group row">
		
		Bobot Poin
				<input type="text" name="bobotpoin"   class="form-control form-control-lg"  value="" required>
		
		</tr>
</div>
		
<div class="form-group row">
		
				<button type="submit" class="btn btn-info" name="add">Simpan</button>
				<a href="<?=site_url('pointjawaban');?>"><button class="btn btn-info" type="button">Kembali</button></a>
			
</div>

  <div class="modal-footer">
    
  </div></div>  
  </div></div>  
  </div></div>
</div>

   
<script>
    $(document).ready(function(){

        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');
           
            // Set data to Form Edit
          
            $('.kuisoner_proses_name').val(name);
            $('.kuisoner_proses_id').val(id);
            // Call Modal Edit
            $('#editModal').modal('show');
        });

        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.productID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
        
    });
</script>