<?php 
session_start();

$servername = "localhost";
$username = "test";
$password = "";
$db = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Seminarska</title>
</head>
<body bgcolor="#FAFAFA">
    <article>
        <header>
            <div>
                <div align="center">
                    <table frame="box">
                        <tr>
                            <th><button><img src="Slike\MenuTab.png" alt="Italian Trulli" align="middle"></button></th>
                            <th><a href="https://www.youtube.com/"><img src="Slike\YTLogo.png" alt="Italian Trulli" align="middle"></a></th>
                            <th width="40%"><p></p></th>
                            <th align="center">
                                <textarea id="Search" name="Search" rows="2" cols="75">Search...</textarea>
                            </th>
                            <th>
                                <button><img src="Slike\SpyGlass.png" alt="Italian Trulli" align="middle"></button>
                            </th>
                            <th>
                                <button><img src="Slike\MicLogo.png" alt="Italian Trulli" align="middle"></button>
                            </th>
                            <th width="40%"><p></p></th>
                            <th><button><img src="Slike\9dotthing.png" alt="Italian Trulli" align="middle"></button></th>
                            <th><button><img src="Slike\3dotthing.png" alt="Italian Trulli" align="middle"></button></th>
                            <!--<th><a href="login.php"><img src="Slike\LoginButton.png" alt="Italian Trulli" align="middle"></a></th>-->
                            <?php 
                            if(isset($_SESSION["id"])){
                                echo "<th id='EVIL'><a href='logout.php' border:'1'><img src='Slike\Logout.png' alt='Italian Trulli' align='middle'></a></th>";
                            }else{
                                
                                echo "<th><a href='login.php'><img src='Slike\LoginButton.png' alt='Italian Trulli' align='middle'></a></th>";
                            }
                            ?>
                    </table>
                </div>
            </div>

        </header>

        <div>
            <br />
            <video width="1500" height="800" controls>
                <source src="Slike\Video.mp4" type="video/mp4">
            </video>
            <div align="right">
                <table align="right" border="1">
                    <tr>
                        <th rowspan="4"><a href="https://www.youtube.com/watch?v=-PAjWI4sO6Y&ab_channel=SsethTzeentach"><img src="Slike\Video1.png" alt="Italian Trulli" align="middle" height="150" width="170"></a></th>
                        <th height="35px" width="400px"><b>Path Of Exile Review | Sponsored by Tibet™</b></th>
                    </tr>
                    <tr>
                        <th align="left"><pre>2,8 mio. ogledov    pred 3 leti</pre></th>
                    </tr>
                    <tr>
                        <th align="left">SsethTzeentach</th>
                    </tr>
                    <tr>
                        <th align="left">The best free to play Chinese goldfarming simulator of our time. ----------------------- Send Sseth Shekels: ...</th>
                    </tr>
                    <tr><th height="10px" colspan="2"></th></tr>
                    <tr>
                        <th rowspan="4"><a href="https://www.youtube.com/watch?v=C4Aw_OQkhzI&ab_channel=UberDanger"><img src="Slike\Video2.png" alt="Italian Trulli" align="middle" height="150" width="170"></a></th>
                        <th height="35px" width="400px"><b>Spore Pacifist Run | Rise of the Ghandicus ☮</b></th>
                    </tr>
                    <tr>
                        <th align="left"><pre>4.8 mio. ogledov    pred 3 leti</pre></th>
                    </tr>
                    <tr>
                        <th align="left">UberDanger</th>
                    </tr>
                    <tr>
                        <th align="left">This is the tale of the Ghandicus empire and their peaceful crusade of tranquility. All music used and other information you don't care about: (open description) Link to my Discord server:...</th>
                    </tr>
                    <tr><th height="10px" colspan="2"></th></tr>
                    <tr>
                        <th rowspan="4"><a href="https://www.youtube.com/watch?v=PFx2QM0Z8Qo&ab_channel=Pyrocynical"><img src="Slike\Video3.png" alt="Italian Trulli" align="middle" height="150" width="170"></a></th>
                        <th height="35px" width="400px"><b>The best (and worst) show you haven't seen</b></th>
                    </tr>
                    <tr>
                        <th align="left"><pre>7.2 mio. ogledov    pred 2 meseci</pre></th>
                    </tr>
                    <tr>
                        <th align="left">Pyrocynical</th>
                    </tr>
                    <tr>
                        <th align="left"></th>
                    </tr>
                    <tr><th height="10px" colspan="2"></th></tr>
                    <tr>
                        <th rowspan="4"><a href="https://www.youtube.com/watch?v=3GOZpZy804E"><img src="Slike\Video4.png" alt="Italian Trulli" align="middle" height="150" width="170"></a></th>
                        <th height="35px" width="400px"><b>I accidentally the RotMG</b></th>
                    </tr>
                    <tr>
                        <th align="left"><pre>533 tis. ogledov    pred 9 leti</pre></th>
                    </tr>
                    <tr>
                        <th align="left">HenezRS</th>
                    </tr>
                    <tr>
                        <th align="left">This video is crap and you should not watch it. Be warned that the level of swag, thug and/or baylifing may lead to blindness or a false sense of self respect. The video also contains topless...</th>
                    </tr>
                    <tr><th height="10px" colspan="2"></th></tr>
                    <tr>
                        <th rowspan="4"><a href="https://www.youtube.com/watch?v=th_LYe97ZVc&list=PLHf0nQmXTTZuhbWtt3rYJ-eQw93rXIY1N"><img src="Slike\Video5.png" alt="Italian Trulli" align="middle" height="150" width="170"></a></th>
                        <th height="35px" width="400px"><b>Game theory fnaf (in order)</b></th>
                    </tr>
                    <tr>
                        <th align="left"><pre>Posodobljeno pred 6 dnevi</pre></th>
                    </tr>
                    <tr>
                        <th align="left">Dragon_Lord1604</th>
                    </tr>
                    <tr>
                        <th align="left"></th>
                    </tr>
                    <tr><th height="10px" colspan="2"></th></tr>
                    <tr>
                        <th rowspan="4"><a href="https://www.youtube.com/watch?v=n_zQR6c3Dfk&ab_channel=Markiplier"><img src="Slike\Video6.png" alt="Italian Trulli" align="middle" height="150" width="170"></a></th>
                        <th height="35px" width="400px"><b>3 SCARY GAMES #75</b></th>
                    </tr>
                    <tr>
                        <th align="left"><pre>3,6 mio. ogledov    pred 3 leti</pre></th>
                    </tr>
                    <tr>
                        <th align="left">Markiplier</th>
                    </tr>
                    <tr>
                        <th align="left">Watch out for BUFF IMPOSTER in the latest episode of 3 Scary Games! LISTEN TO DISTRACTIBLE ►► https://podlink.to/distractiblepodcast MORE Scary Games ► https://www.youtube.com/playlist?list=P...</th>
                    </tr>
                    <tr><th height="10px" colspan="2"></th></tr>
                    <tr>
                        <th rowspan="4"><a href="https://www.youtube.com/watch?v=Gp9gFXf56yQ&ab_channel=DreamMusic"><img src="Slike\Video7.png" alt="Italian Trulli" align="middle" height="150" width="170"></a></th>
                        <th height="35px" width="400px"><b>Dream - Mask (Official Lyric Video)</b></th>
                    </tr>
                    <tr>
                        <th align="left"><pre>26 mio. ogledov    pred 7 meseci</pre></th>
                    </tr>
                    <tr>
                        <th align="left">Dream Music</th>
                    </tr>
                    <tr>
                        <th align="left">Follow Dream: Instagram: @Dream​WasTaken Twitter: @Dream Produced by: Perish: Twitter: @perishbeats Instagram: ...</th>
                    </tr>
                    <tr><th height="10px" colspan="2"></th></tr>
                    <tr>
                        <th rowspan="4"><a href="https://www.youtube.com/watch?v=Cbj4b9YjQGg&ab_channel=KitchenNightmares"><img src="Slike\Video8.png" alt="Italian Trulli" align="middle" height="150" width="170"></a></th>
                        <th height="35px" width="400px"><b>oh great heavens | Kitchen Nightmares</b></th>
                    </tr>
                    <tr>
                        <th align="left"><pre>876 tis. ogledov    pred 2 dnevoma</pre></th>
                    </tr>
                    <tr>
                        <th align="left">Kitchen Nightmares</th>
                    </tr>
                    <tr>
                        <th align="left">this could be used for every single kn moment #GordonRamsay #KitchenNightmares If you liked this clip check out the rest of ...</th>
                    </tr>

                </table>
            </div>
            <table frame="box">
                <tr>
                    <th width="550px">
                        <font face="Roboto"><h1>1 Hour of Silence Occasionally Broken by Neco Arc</h1></font>
                    </th>
                </tr>
                <tr>
                    <th align="left" width="200px">
                        <font face="Roboto"><pre>728.802 ogledi      5. sep. 2021</pre></font>
                    </th>
                    <th width="114px"></th>
                    <th width="250px" align="center">
                        <input type="checkbox" id="Like" name="sidebar" value="Like">
                        <label for="Like"><img src="Slike\Like.png" alt="Italian Trulli" align="middle"></label>

                        <input type="checkbox" id="Disslike" name="sidebar" value="Disslike">
                        <label for="Disslike"><img src="Slike\Disslike.png" alt="Italian Trulli" align="middle"></label>

                    </th>
                    <th><button><img src="Slike\Share.png" alt="Italian Trulli" align="middle"></button></th>
                    <th><button><img src="Slike\Save.png" alt="Italian Trulli" align="middle"></button></th>
                    <th><button><img src="Slike\More.png" alt="Italian Trulli" align="middle"></button></th>
                </tr>

                <tr>
                    <th height="80px"><a href="https://www.youtube.com/channel/UCygjhYqPPe5T5ElQ7A1576A"><img src="Slike\Account.png" alt="Italian Trulli" align="left"></a></th>

                    <th align="right" width="250px" colspan="5">
                        <select name="Subscription" id="Subscritpion">
                            <option value="Unsubscribe">Unsubscribe</option>
                            <option value="Subscrive">Subscribe</option>
                        </select>
                    </th>
                </tr>
            </table>
            <br />
            <table border="0">
                <tr>
                    <th width="1190px"></th>
                </tr>
            </table>
            <br />

            <?php 
                if(isset($_SESSION["id"])){
                    echo "
                    <table>
                    <tr>
                    <th>    
                    <form action='' method='POST'>
                    <label for='Comment'>Comment :</label>
                    <textarea id='Comment' name='Comment' rows='1' cols='60'>Comment...</textarea>
                    <br><br>
                    <input type='submit' name='CommentSubmit' value='Submit Comment'>
                    </form>
                    </th>
                    </tr>
                    </table>";

                    if(isset($_POST["Comment"])){
                        $comment = $_POST["Comment"];

                        $sql = "INSERT INTO comments (`idComment`,`Comment`,`Date`,`idUporabnik`) VALUES (null,'$comment',null,'$_SESSION[id]');";
                        if(isset($_POST["CommentSubmit"])){
                            $conn -> query($sql);
                        }

                    }
                }
                else{
                    echo "            
                    <table border='1'>
                    <tr>
                    <th>    
                    <label for='Comment'>Login to Comment</label>
                    </th>
                    </tr>
                    </table>";
                }
            ?>

            <ul align="left">
                <?php 
                
                $comment = "SELECT uporabniki.username as username,Date,Comment FROM comments, uporabniki WHERE comments.idUporabnik = uporabniki.id;
                ";
                $result = $conn->query($comment);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "                
                <br>
                <li>
                    <table frame='box'>
                        <tr>
                            <th width='50px' height='50px' rowspan='2'><a href='#'><img src='Slike\user.png' width='50px' height='50px'alt='Italian Trulli'></a></th>
                            <th colspan='2'>
                                <pre><b>$row[username]</b>    $row[Date]</pre>
                            </th>
                        </tr>
                        <tr><th colspan='2' width='1100px'>$row[Comment]</th></tr>
                        <tr>
                    </table>
                </li>";
                }
                } else {
                echo "0 results";
                }
                $conn->close();

                ?>
            </ul>

        </div>
    </article>
    <footer>
        <audio controls>
            <source src="Slike\Sound.mp3" type="audio/mp3">
        </audio>
    </footer>
    <script defer>
        document.getElementById("EVIL").style.border="1px solid black"
    </script>
</body>
</html>