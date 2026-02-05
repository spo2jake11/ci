<section class="pb-5" id="projects">
    <h2 class="my-5">Projects</h2>

<?php
    foreach ($docs as $doc) :
    ?>

    <div class="card mx-auto my-5 position-relative" style="max-width: 900px;">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img src="<?= base_url('assets/images/'.$doc['img']) ?>" alt="<?= $doc['title'] ?>" class="card-img img-fluid">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title"><?= $doc['title'] ?></h5>
                    <p class="card-text"><?= $doc['summary'] ?></p>
                    <?php
                        $tag = explode(',', $doc['tags']);
                        foreach ($tag as $t) {
                            echo '<span class="badge badge-info mr-1">' . trim($t) . '</span>';
                        }
                    ?>
                    <br>

                    <a href="<?= $doc['link']?>" class="card-link btn btn-primary my-4">View Project</a>
                </div>
            </div>
        </div>
    </div>

<?php

    endforeach;
    ?>
</section>