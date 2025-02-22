<?php
include_once "../include/backendHeader.php";
?>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Banner Section</h1>
<div class="card">
    <div class="card-body">
        <form action="../controller/bannerUpdateController.php" method="POST" enctype="multipart/form-data">
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Update Banner</button>
            </div>

            <div class="form-group">
                <label for="bannerTitle">Banner Title <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control" placeholder="Banner Title">
            </div>
            <div class="form-group">
                <label for="detail">Banner Detail</label>
                <textarea name="detail" class="form-control" placeholder="Banner Detail"></textarea>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="cta_text">Call To Action</label>
                        <input type="text" name="cta_text" class="form-control" placeholder="Call to Action">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="cta_link">Call To Action URL</label>
                        <input type="text" name="cta_link" class="form-control" placeholder="Call to Action URL">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="bannerTitle">Video URL</label>
                <input type="text" name="video_url" class="form-control" placeholder="Video URL">
            </div>
            <div class="form-group">
                <label for="banner_img">Image URL<span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="banner_img" placeholder="Banner Image">
            </div>
        </form>
    </div>
</div>

<?php
include_once "../include/backendFooter.php";
?>