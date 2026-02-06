<section class="container my-5">

    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($projects as $project): ?>
                <tr>
                    <td><?= $project['id'] ?></td>
                    <td><img src="<?= base_url('assets/images/' . $project['img']) ?>" alt="<?= $project['title'] ?>" style="max-width: 100px;"></td>
                    <td><?= $project['title'] ?></td>
                    <td>
                        <button class="btn btn-sm btn-danger mx-1" onclick="deleteProject(<?= $project['id'] ?>)">Delete</button>
                        <button class="btn btn-sm btn-primary mx-1" onclick="editProject(<?= $project['id'] ?>)">Edit</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<script>
    // Function to handle project deletion. It prompts the user for confirmation and if confirmed, it redirects to the deleteProject method of the Custom controller with the project ID as a parameter.
    function deleteProject(id) {
        if (confirm('Are you sure you want to delete this project?')) {
            window.location.href = 'Custom/deleteProject/' + id;
        }
    }

    // Function to handle project editing. It redirects to the editProject method of the Custom controller with the project ID as a parameter.
    function editProject(id) {
        window.location.href = 'Custom/editProject/' + id;
    }
</script>