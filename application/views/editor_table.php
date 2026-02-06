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
                        <button class="btn btn-sm btn-danger mx-1">Delete</button>
                        <button class="btn btn-sm btn-primary mx-1">Edit</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>