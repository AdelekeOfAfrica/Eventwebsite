<!DOCTYPE html>
<html lang="en">
<head>
@include('Backend.backend_includes.style')
    
</head>
<body>
   
@include('Backend.header')
@include('Backend.sidebar')
<div id="content" class="content">
    <section class="section-padding" style="margin-top:80px;">
        <div class="container-fluid">
        <div class="d-flex justify-content-end mb-2">
            <button class="btn btn-primary" id="createBannerBtn"  data-toggle="modal" data-target="#createEventPictureModal">Create New Entry</button>
        </div>
       
</div>




        </div>
    </section>
</div>


</body>
@include('Backend.backend_includes.js')
</html>