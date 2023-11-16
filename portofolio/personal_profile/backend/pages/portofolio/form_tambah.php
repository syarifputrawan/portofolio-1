<?php include "../../include/header.php" ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container mt-4">
        <h2>Portfolio Entry</h2>
        <form action="<?= BASE_URL . 'aksi/portofolio/tambah.php' ?>" method="post" enctype="multipart/form-data">
      
            <div class="form-group">
                <label for="project">Project Name</label>
                <input type="text" class="form-control" id="project" name="project" placeholder="Enter the project name">
            </div>
            <div class="form-group">
                <label for="description">Project Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter project description"></textarea>
            </div>
            
            <div class="form-group">
                <label for="foto">Upload Photo</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php include "../../include/footer.php" ?>