{extends file='layout.tpl'}

{block name=title}Patient Details{/block}

{block name=content}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Patient Details</h1>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Patient Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {$patient.name}</p>
                    <p><strong>Age:</strong> {$patient.age}</p>
                    <p><strong>Address:</strong> {$patient.address}</p>
                    <p><strong>Doctor:</strong> {$patient.doctor}</p>
                    <p><strong>Department:</strong> {$patient.deparment}</p>
                    <a href="index.php" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
{/block}
