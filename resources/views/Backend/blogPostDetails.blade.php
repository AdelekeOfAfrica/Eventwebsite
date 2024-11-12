<!DOCTYPE html>
<html lang="en">
<head>
    @include('Backend.backend_includes.style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 1040px;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            margin-bottom: 30px;
        }

        .form-title {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .breadcrumb-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .back-button {
            font-size: 0.9rem;
            color: #ffffff;
            background-color: #007bff;
            border-radius: 5px;
            padding: 8px 12px;
            text-decoration: none;
            border: none;
        }

        .form-group label {
            font-weight: bold;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-container {
                width: 90%;
                padding: 15px;
            }

            .form-title {
                font-size: 1.5rem;
            }

            .breadcrumb-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .back-button {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    @include('Backend.header')
    @include('Backend.sidebar')

    <div id="content" class="content">
        <section class="section-padding" style="margin-top:80px;">
            <div class="container-fluid d-flex justify-content-center">
                <div class="form-container">
                    <!-- Breadcrumb Navigation -->
                    <div class="breadcrumb-container">
                        <h2 class="form-title">Blog Details</h2>
                        <a href="/backend-blog-post" class="btn btn-primary back-button">Back to Blog Posts</a>
                    </div>

                    <!-- Form Starts Here -->
                    <form method="post" action="{{ route('updateBlogPostDetails') }}" id="bannerForm" enctype="multipart/form-data" onsubmit="formatContent()">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="blogId" name="blogId" value="{{ $blogPostDetails->id }}">

                        <!-- Main Image Upload with Preview -->
                        <div class="form-group text-center">
                            <div class="mb-3">
                                <img id="eventImage" src="{{ asset($blogPostDetails->image_path) }}" alt="Main Image" class="img-fluid border rounded shadow-sm" style="max-width: 100%; height: auto;">
                            </div>
                            <input type="file" class="form-control-file" id="imageUpload" name="imageUpload" accept="image/*">
                        </div>

                        <!-- Additional Images -->
                        <div class="form-group">
                            <label for="otherImages">Additional Images</label>
                            <div class="mb-3">
                            @if(!empty($blogPostDetails->other_images) && is_array(json_decode($blogPostDetails->other_images, true)))
                                @foreach(json_decode($blogPostDetails->other_images, true) as $otherImage)
                                    <img src="{{ asset($otherImage) }}" alt="Additional Image" class="img-fluid border rounded shadow-sm mr-2 mb-2" style="max-width: 100px; height: auto;">
                                @endforeach
                            @endif
                            </div>
                            <input type="file" class="form-control-file" id="otherImages" name="other_images[]" accept="image/*" multiple>
                            <small class="form-text text-muted">Upload additional images for the blog post.</small>
                        </div>

                        <!-- Title Field -->
                        <div class="form-group">
                            <label for="eventName">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog title" value="{{ $blogPostDetails->title }}" required>
                        </div>

                        <!-- Content Field -->
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter blog content" required>{{ $blogPostDetails->content }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Update Blog Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    @include('Backend.backend_includes.js')

    <script>
        // Function to format content into paragraphs on form submit
        function formatContent() {
            let contentField = document.getElementById('content');
            let content = contentField.value;

            // Add a newline after each full stop followed by a space or the end of text
            content = content.replace(/\\.(\\s|$)/g, '.\n\n');

            // Update the content field with formatted text
            contentField.value = content;
        }
    </script>
</body>
</html>
