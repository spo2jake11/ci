<main class='container mx-auto'>
    <h2 class='text-center'>EDIT YOUR CONTENT HERE!!!</h2>

    <section class='my-5 px-5 container-sm'>
        <form action="" method="post" class='form form-group'>
            <!-- Input for title -->
            <label for="title" class='form-label mx-3'>Title</label>
            <input type="text" name="title" id="title" placeholder='Title' class='form-control mx-3 mb-3'>

            <!-- Input for project summary -->
            <label for="summary" class='form-label mx-3'>Project Summary</label>
            <textarea name="summary" id="summary" cols="30" rows="5" placeholder='Summary' class='form-control mx-3 mb-3'></textarea>

            <!-- Separate group for image or thumbnail -->
            <div class='row form-group'>
                <div class="col d-flex flex-column">
                    <label for="image" class='form-label mx-3'>Upload Image:</label>
                    <input type="file" name="image" id="image" accept="image/*" class='form-control mx-3'>
                    <small class='form-text text-muted mx-3 mb-3'>Supported formats: JPG, PNG, GIF (Max 5MB)</small>
                </div>
                <div class="col d-flex flex-column" style="max-height: 200px; overflow: hidden;">
                    <img id ='preview' src="" alt="" class="img-fluid" style="max-height: 200px; margin-top: 10px;">
                </div>
            </div>

            <!-- Another seaparate group just for adding tags of language used for the project -->
            <div class="form-group " id="Ptags">
                <label for="language" class="form-label d-block mx-3">Language Used</label>
                <input type="text" name="language" id="language" class="tagCol form-control ml-3     d-inline-flex" style="max-width: 200px;">
                <input type="button" value="Add Language" class="btn btn-secondary d-block mx-3 my-2" id="addLangBtn">
            </div>

            <!-- Input for github link -->
            <label for="link" class="form-label mx-3">Link to Github</label>
            <input type="text" name="link" class="form-control mx-3 mb-3">

            <input type="submit" value="Add Project" class="btn btn-primary d-block mx-3 my-4 ">
        </form>
    </section>
</main>


<script>

    // Image preview functionality
    image.onchange = evt => {
        const [file] = image.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
    const tagList = [];
    const count = 0;

    // Event listener for adding new language tags
    document.getElementById('addLangBtn').addEventListener('click', function() {
        tagList.push(document.getElementById('language').value);
        
        const addTag = document.createElement('input');
        addTag.type = 'text';
        addTag.name = 'language';
        addTag.id = 'language' + count;
        addTag.className = 'tagCol form-control d-inline-flex ml-3 my-2';
        addTag.style.maxWidth = '200px';
        document.getElementById('Ptags').insertBefore(addTag, document.getElementById('addLangBtn'));

    });
    
</script>