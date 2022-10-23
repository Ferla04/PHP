<div class="col-md-8">
    <table class="table table-bordered bg-dark text-light">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                $query = 'SELECT * FROM task';
                $tasks = mysqli_query( $connection, $query );

                while( $row = mysqli_fetch_array( $tasks ) ){ 
            ?> 
                <tr>
                    <td> <?php echo $row['title']?> </td>
                    <td> <?php echo $row['description']?> </td>
                    <td> <?php echo $row['date']?> </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
</div>