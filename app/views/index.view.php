<?php require 'header.view.php' ?>

<div class="container my-5">
        <div class="row">
                <div class="col-md-6">
                        <table class="table border">
                                <thead>
                                        <tr>
                                                <th>Todo List</th>
                                                <th>Status</th>
                                                <th colspan="2" class="text-center">Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php foreach ($todos as $todo) : ?>
                                                <tr>
                                                        <td><?= $todo->title ?></td>
                                                        <td><?= $todo->completed ? 'Completed' : 'Uncomplete'  ?></td>
                                                        <td>
                                                          <a class="btn btn-primary" href="/edit?id=<?=  $todo->id ?>">Edit</a>
                                                            <a class="btn btn-danger" href="/delete?id=<?=  $todo->id ?>">Delete</a>
                                                        </td>
                                                </tr>
                                        <?php endforeach ?>
                                </tbody>
                        </table>
                </div>
                <div class="col-md-6">
                        <div class="">
                                <form action="/addTodo" method="POST">
                                        <table>
                                                <tr>
                                                        <td>Title</td>
                                                        <td>
                                                                <div class="input-group">
                                                                        <input name="title" type="text" required class="form-control">
                                                                </div>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td>Status</td>
                                                        <td>
                                                                <div class="input-group">
                                                                        <input name="status" min="0" max="1" type="number" required class="form-control">
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