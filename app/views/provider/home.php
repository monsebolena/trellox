<?php include("app/views/partials/menu.php") ?>
<div class="container">
    <h1>Providers list</h1>
    <a href="<?= base_url() ?>provider/new"><i class="fa-solid fa-plus"></i>New provider</a>
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col" class="text-end">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $provider) { ?>
                    <tr>
                        <th scope="row"><?= $provider->provider_id ?></th>
                        <td><?= $provider->name ?></td>
                        <td class="text-end">
                            <i class="fa-solid fa-user-pen"></i>
                            <a href="<?= base_url() ?>provider/delete/<?= $provider->provider_id ?>"><i
                                    class="fa-solid fa-trash"></i></a>
                            <a href="<?= base_url() ?>provider/show/<?= $provider->provider_id ?>"><i
                                    class="fa-solid fa-eye"></i></a>
                        </td>
                    </tr>
                <?php } ?>


            </tbody>
        </table>
    </div>
</div>
<?php include("app/views/partials/footer.php") ?>