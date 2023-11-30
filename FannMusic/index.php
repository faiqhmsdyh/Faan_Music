<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>FaanMusic</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="shortcut icon" href="images/faan logo.jpg" type="image/x-icon"> 
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline';" />
</head>

<body>
    <div class="container">
        <div class="left">
            <div style="height:5px"></div>
        <div class="menu">
            <ul>
                <li>
                <a href="../FannMusic/index.php">
                <img src="assets/Home.svg" alt="" class="gray-filtered">
                    <span>Home</span>
                </a>
                </li>
            </ul>
        </div>

            <hr width="100%">
            <div style="height: 0px;"></div>

        <div class="menu playlists">
            <ul>
                <li>
                    <a><h2>Favorite Artist</h2></a>
                </li>
                <li>
                    <a href="../FannMusic/Album - Alan Walker/indexalan.php">
                        <span>Alan Walker</span>
                    </a>
                </li>
                <li>
                    <a href="../FannMusic/Album - Billie Eilish/indexbillie.php">
                        <span>Billie Eilish</span>
                    </a>
                </li>
                <li>
                    <a href="../FannMusic/Album - Tulus/indextulus.php">
                        <span>Tulus</span>
                    </a>
                </li>
                <li>
                    <a href="../FannMusic/Album - Rizky Febian/indexrizky.php">
                        <span>Rizky Febian</span>
                    </a>
                </li>
                <li>
                    <a href="../FannMusic/Album - Tiara Andini/indextiara.php">
                        <span>Tiara Andini</span>
                    </a>
                </li>

                    <hr width="100%">

                <li>
                    <a><h2>K-POP</h2></a>
                </li>
                <li>
                    <a href="../FannMusic/Album - Black Pink/indexblack.php">
                        <span>Black Pink</span>
                    </a>
                </li>
                <li>
                    <a href="../FannMusic/Album - EXO/indexexo.php">
                        <span>EXO</span>
                    </a>
                </li>
                <li>
                    <a href="../FannMusic/Album - BTS/indexbts.php">
                        <span>BTS</span>
                    </a>
                </li>
                <li>
                    <a href="../FannMusic/Album - NewJeans/indexnewj.php">
                        <span>Newjeans</span>
                    </a>
                </li>
                <li>
                    <a href="../FannMusic/Album - Seventeen/indexseven.php">
                        <span>Seventeen</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>

        <div class="right">
            <div class="playlist-header">
                <div class="playlist-top">
                    <div class="playlist-arrows"> </div>
            
            <div class="playlist-top-email">
                <div class="arrow-container">
                    <img src="assets/Profile.svg" alt="">
                    <a href="../LoginFaan/Login.php">
                        <span>LOGOUT</span>
                    </a>
                </div>
            </div>
            </div>

            <div class="playlist-content">
                <div class="playlist-cover">
                    <img src="images/Faan logo.jpg" alt="">
                </div>
                <div class="playlist-info">
                    <div class="playlist-public"> WELCOME AND ENJOY!</div>
                    <div class="playlist-title">FAAN MUSIC</div>
                    <div class="playlist-description">Hidupkan nyalimu, Ekspresikan cintamu, Bagikan antusiasmu,<br> 
                        Ambil tindakan menuju impianmu, Menari dan bernyanyi untuk musikmu.</div>
                    <div style="height: 10px;"></div>
                    <div class="playlist-stats"></div>
                </div>
            </div>
        </div>

        <div class="playlist-songs-container">
            <div class="playlist-buttons">
                <div class="playlist-buttons-left"></div>
                <div class="playlist-buttons-right"></div>
            </div>

            <main>
                <div id="playlist">
                    <h2>Played Frequently</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Artist</th>
                                <th>Title</th>
                            </tr>
                        </thead>
                        <tbody id="song-list"></tbody>
                    </table>
                </div>
                
                <div id="player">
                    <h2>Now Playing</h2>
                    <div class="audio-container">
                        <img id="rotating-image" src="Faan logo.jpg" alt="Rotating Image">
                        <div class="audio-controls">
                            <audio id="audio-player" controls>
                                <source src="" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <p id="current-song"></p>
                        </div>
                    </div>
                </div>
            </main>
    </div>
                
    <script src="app.js"></script>

</body>
</html>
                    