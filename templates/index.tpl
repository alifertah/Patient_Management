{extends file='layout.tpl'}

{block name=title}Patient List{/block}

{block name=content}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Patient List</h1>
            <a href="create.php" class="btn btn-primary mb-3">Add New Patient</a>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Patient Details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Doctor</th>
                                <th>Deparment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $patients as $patient}
                            <tr>
                                <td>{$patient.name}</td>
                                <td>{$patient.age}</td>
                                <td>{$patient.address}</td>
                                <td>{$patient.doctor}</td>
                                <td>{$patient.deparment}</td>
                                <td>
                                    <a href="read.php?id={$patient.id}" class="btn btn-info">View</a>
                                    <a href="update.php?id={$patient.id}" class="btn btn-warning">Edit</a>
                                    <a href="delete.php?id={$patient.id}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{/block}
