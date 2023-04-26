<div class="box side">


        <h3> Search | <a class="side" href="show_all.php">Show All</a>
        </h3>

        <i> Type part of the title / author name and then search</i>

        <hr />

        <form method="post" action="title_search.php"enctype="multipart/form-data">
                <input class="search" type="text" name="title" size="40" value="" required placeholder="Title..." />

                <input class="submit" type="submit" name="find_title"
                value="Search" />
        
        </form>

        <hr />
        
        <form method="post" action="author_search.php"enctype="multipart/form-data">
                <input class="search" type="text" name="author" size="40" value="" required placeholder="Author..." />

                <input class="submit" type="submit" name="find_author"
                value="Search" />
        
        </form>
        <hr />
                
        <form method="post" action="genre_search.php"enctype="multipart/form-data">
                <select name= "genre" required>
                    <option value="" disabled selected>Genre...</option>
                    <option value="Sci Fi">Science Fiction</option>
                </select>
                <input class="submit" type="submit" name="find_genre"
                value="Search" />

        
        </form>
        <hr />
        Rating Search
</div>
<div class="box footer">
    CC Harveer Talwar 2023
</div>    <!-- / footer -->
    
</div>  <!-- / wrapper  -->
    
</body>        
