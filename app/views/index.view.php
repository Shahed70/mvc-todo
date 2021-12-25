<?php require 'header.view.php' ?>

<ul>
        <?php foreach ($todos as $todo) : ?>
                <li><?php echo $todo->title ?></li>
        <?php endforeach ?>
</ul>

<div class="container">
        <div class="d-flex justify-content-center">
                <form action="/names" method="POST">
                        <table>
                                <tr>
                                        <td>Title</td>
                                        <td>
                                                <div class="input-group">
                                                        <input name="title" type="text" class="form-control">
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <td>Status</td>
                                        <td>
                                                <div class="input-group">
                                                        <input name="status" type="number" class="form-control">
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <td></td>
                                        <td> <button class="btn btn-primary" type="submit"> Submit </button></td>
                                </tr>
                        </table>

                </form>
        </div>
</div>


<?php require 'footer.view.php' ?>