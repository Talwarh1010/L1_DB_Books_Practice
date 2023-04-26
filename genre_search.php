<?php include "topbit.php";

if(isset($_POST['find_genre']))
{
$genre=test_input(mysqli_real_escape_string($dbconnect,$_POST["genre"]));


$find_sql = "SELECT * FROM `book_reviews` WHERE `Genre` LIKE '%$genre%' ORDER BY `Genre` ASC";
$find_query = mysqli_query($dbconnect, $find_sql);
$find_rs = mysqli_fetch_assoc($find_query);
$count = mysqli_num_rows($find_query);
?>

<div class="box main">
        <h2>Genre search</h2>
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
                        <?php echo $find_rs['Title']; ?>
                    </span>
                </p>

                <p>Author:<span class="sub_heading">
                        <?php echo $find_rs['Author']; ?>
                    </span>
                </p>

                <p>Genre:<span class="sub_heading">
                        <?php echo $find_rs['Genre']; ?>
                    </span>
                </p>

                <p>Rating: <span class="sub_heading">
                    <?php
                    for ($x=0; $x < $find_rs['Rating']; $x++)
                    {
                        echo "&#9733";
                    }
                    
                    ?>
                </span></php>
                <p><span class="sub_heading">Review / Response</span>
                </p>

                <p>
                    <?php echo $find_rs['Review']; ?>

                </p>
        

            </div>
            <br />
            <?php
                }
                while ($find_rs = mysqli_fetch_assoc($find_query));
            }

            }
            ?>


</div> <!-- / main -->

<?php
include "bottombit.php";
?>