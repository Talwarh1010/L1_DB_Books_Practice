<?php include "topbit.php";
$showall_sql = 'SELECT * FROM `book_reviews` ORDER BY `book_reviews`.`Title` ASC';
$showall_query = mysqli_query($dbconnect, $showall_sql);
$showall_rs = mysqli_fetch_assoc($showall_query);
$count = mysqli_num_rows($showall_query);
?>

<div class="box main">
        <h2>All Items</h2>
        <?php
        
    if ($count < 1)
    {
    ?>
    <div class="error">
        Sorry! There are no results that match your search.
        Please use the search box in the sidebar to try again.

    </div>

    <?php
    } 
    else {
        do {
        ?>
            <div class="results">
                <p>Title: <span class="sub_heading">
                        <?php echo $showall_rs['Title']; ?>
                    </span>
                </p>

                <p>Author:<span class="sub_heading">
                        <?php echo $showall_rs['Author']; ?>
                    </span>
                </p>

                <p>Genre:<span class="sub_heading">
                        <?php echo $showall_rs['Genre']; ?>
                    </span>
                </p>

                <p>Rating: <span class="sub_heading">
                    <?php
                    for ($x=0; $x < $showall_rs['Rating']; $x++)
                    {
                        echo "&#9733";
                    }
                    
                    ?>
                </span></php>
                <p><span class="sub_heading">Review / Response</span>
                </p>

                <p>
                    <?php echo $showall_rs['Review']; ?>

                </p>
        

            </div>
            <br />
            <?php
                }
                while ($showall_rs = mysqli_fetch_assoc($showall_query));
            }

            ?>


</div> <!-- / main -->

<?php
include "bottombit.php";
?>