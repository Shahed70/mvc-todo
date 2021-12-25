<?php require 'header.view.php' ?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="">
                <form action="/update" method="POST">
                    <input type="hidden" name="id" value="<?= $todo->id ?>">
                    <table>
                        <tr>
                            <td>Title</td>
                            <td>
                                <div class="input-group">
                                    <input name="title" type="text" value="<?= $todo->title ?>" required class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                <div class="input-group">
                                    <input name="status" type="number" value="<?= $todo->completed ?>" required class="form-control">
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
    </div>
</div>

<?php require 'footer.view.php' ?>