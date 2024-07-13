{extends file='layout.tpl'}

{block name=title}Edit Patient{/block}

{block name=content}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Patient</h1>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Patient</h3>
                </div>
                <form action="update.php?id={$patient.id}" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{$patient.name}" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age" value="{$patient.age}" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{$patient.address}" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{/block}
