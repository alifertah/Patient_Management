{extends file='layout.tpl'}

{block name=title}Create Patient{/block}

{block name=content}
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create Patient</h3>
    </div>
    <form method="POST" action="create.php">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" id="age" placeholder="Enter age">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Enter address">
            </div>
            <div class="form-group">
                <label for="doctor">Doctor</label>
                <input type="text" name="doctor" class="form-control" id="address" placeholder="Enter address">
            </div>
            <div class="form-group">
                <label for="deparment">Deparment</label>
                <input type="text" name="deparment" class="form-control" id="address" placeholder="Enter address">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
{/block}
