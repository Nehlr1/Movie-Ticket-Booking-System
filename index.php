<?php
  session_start();
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Home page</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <script src="test.js"></script>
</head>
<body>
  <div class="container">

    <div class="nav-wrapper">
      <div class="left-side">
        <div class="nav-link-wrapper">
          <a href="index.php">HOME</a>
        </div>        
        <div class="nav-link-wrapper">
          <a href="about.php">ABOUT</a>
        </div>
        <div class="nav-link-wrapper">
          <a href="vouchars.php">VOUCHARS</a>
        </div>
        <div class="nav-link-wrapper">
          <a href="booking.php">BOOK  NOW</a>
        </div> 
        
        <?php 
          if(!empty($_SESSION["username"])){
            $moviename = $_SESSION["username"] . "movie";
            if(isset($_COOKIE[$moviename]))
              echo "<div class=nav-link-wrapper>
                        <a>Last Ticket You Had Purchased: $_COOKIE[$moviename] </a>
                    </div>";
          }
        ?>
      </div>
      
      <div class="right-side">
        <div class="search-link-wrapper">
          <form>
            <input type="search" id="myInput" onkeyup="myFunction()" placeholder="Search Movies..." title="Type in a name">
          </form>
        </div>
        
          <?php
            if(empty($_SESSION["username"]))
              print "<div class=nav-link-wrapper><div><a href=login.php class=userlogin>LOGIN</a></div></div>";
            else{
              print "<div class=dropdown>
              <button class=dropbtn>Hi, $_SESSION[username]</button>
              <div class=dropdown-content>";
              if(!empty($_SESSION["userpoint"]))
                print "<p>Point: $_SESSION[userpoint]</p>";
              else
                print "<p>Point: 0</p>";
              
              print "<a href=logoutSession.php>Logout</a>
                      </div>
                      </div>";
            }
          ?>
        
      </div>
    </div>

    <div class="content-wrapper">
      <div class="movie-items-wrapper">

        <div class="movie-item-wrapper" id="dolittle">
          <div class="movie-img-background" style="background-image:url(images/movie1.jpg)"></div>

          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=hej47fWFLQs" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">Dr. John Dolittle lives in solitude behind the high walls of his lush manor in 19th-century England. His only companionship comes from an array of exotic animals that he speaks to on a daily basis. But when young Queen Victoria becomes gravely ill, the eccentric doctor and his furry friends embark on an epic adventure to a mythical island to find the cure.<br><br>IMDB Rating: 5.6/10</div>
          </div>
        </div>

        <div class="movie-item-wrapper" id="sonic">
          <div class="movie-img-background" style="background-image:url(images/movie2.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=szby7ZHLnkA" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">The world needed a hero -- it got a hedgehog. Powered with incredible speed, Sonic embraces his new home on Earth -- until he accidentally knocks out the power grid, sparking the attention of uncool evil genius Dr. Robotnik. Now, it's supervillain vs. supersonic in an all-out race across the globe to stop Robotnik from using Sonic's unique power to achieve world domination.<br><br>IMDB Rating: 6.6/10</div>
          </div>
        </div>

        <div class="movie-item-wrapper" id = "scoob">
          <div class="movie-img-background" style="background-image:url(images/movie3.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=vf1aW1z437I" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">With hundreds of cases solved and adventures shared, Scooby and the gang face their biggest, most challenging mystery ever -- a plot to unleash the ghost dog Cerberus upon the world. As they race to stop this global dog-pocalypse, the gang discovers that Scooby has a secret legacy and an epic destiny greater than anyone could have imagined.<br><br>IMDB Rating: 5.7/10</div>
          </div>
        </div>

        <div class="movie-item-wrapper" id="no time no die">
          <div class="movie-img-background" style="background-image:url(images/movie4.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=b7WPKBir2Z8" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">Recruited to rescue a kidnapped scientist, globe-trotting spy James Bond finds himself hot on the trail of a mysterious villain, who's armed with a dangerous new technology.<br><br>IMDB Rating: No rating yet</div>
          </div>
        </div>

        <div class="movie-item-wrapper" id="joker">
          <div class="movie-img-background" style="background-image:url(images/movie5.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=zAGVQLHvwOY" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham City. Arthur wears two masks -- the one he paints for his day job as a clown, and the guise he projects in a futile attempt to feel like he's part of the world around him. Isolated, bullied and disregarded by society, Fleck begins a slow descent into madness as he transforms into the criminal mastermind known as the Joker.<br><br>IMDB Rating: 8.5</div>
          </div>
        </div>

        <div class="movie-item-wrapper" id="avengers endgame">
          <div class="movie-img-background" style="background-image:url(images/movie6.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=TcMBFSGVi1c" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.<br><br>IMDB Rating: 8.4</div>
          </div>
        </div>

        <div class="movie-item-wrapper" id="star wars">
          <div class="movie-img-background" style="background-image:url(images/movie7.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=8Qn_spdM5Zg" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">When it's discovered that the evil Emperor Palpatine did not die at the hands of Darth Vader, the rebels must race against the clock to find out his whereabouts. Finn and Poe lead the Resistance to put a stop to the First Order's plans to form a new Empire, while Rey anticipates her inevitable confrontation with Kylo Ren. Warning: Some flashing-lights scenes in this film may affect photosensitive viewers.<br><br>IMDB Rating: 6.7</div>
          </div>
        </div>

        <div class="movie-item-wrapper" id="toy story 4">
          <div class="movie-img-background" style="background-image:url(images/movie8.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=wmiIUN-7qhE" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">Woody attempts to make Forky, a toy, suffering from existential crisis, realise his importance in the life of Bonnie, their owner. However, things become difficult when Gabby Gabby enters their lives.<br><br>IMDB Rating: 7.4</div>
          </div>
        </div>

        <div class="movie-item-wrapper" id="jumanji">
          <div class="movie-img-background" style="background-image:url(images/movie9.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=rBxcF-r9Ibs" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">When Spencer goes missing, the gang returns to Jumanji to travel unexplored territories and help their friend escape the world's most dangerous game.<br><br>IMDB Rating: 6.7</div>
          </div>
        </div>

        <div class="movie-item-wrapper" id="captain marvel">
          <div class="movie-img-background" style="background-image:url(images/movie10.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=Z1BCujX3pw8" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">Amidst a mission, Vers, a Kree warrior, gets separated from her team and is stranded on Earth. However, her life takes an unusual turn after she teams up with Fury, a S.H.I.E.L.D. agent.<br><br>IMDB Rating: 6.9</div>
          </div>
        </div>

        <div class="movie-item-wrapper" id="once upon a time">
          <div class="movie-img-background" style="background-image:url(images/movie11.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=ELeMaP8EPAA" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">Rick, a washed-out actor, and Cliff, his stunt double, struggle to recapture fame and success in 1960s Los Angeles. Meanwhile, living next door to Rick is Sharon Tate and her husband Roman Polanski.<br><br>IMDB Rating: 7.7</div>
          </div>
        </div>

        <div class="movie-item-wrapper" id="frozen">
          <div class="movie-img-background" style="background-image:url(images/movie12.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="book-wrapper">
              <a href="https://www.youtube.com/watch?v=Zi4LMpSDccc" target="_blank">Trailer</a>
            </div>

            <div class="subtitle">Elsa the Snow Queen has an extraordinary gift -- the power to create ice and snow. But no matter how happy she is to be surrounded by the people of Arendelle, Elsa finds herself strangely unsettled. After hearing a mysterious voice call out to her, Elsa travels to the enchanted forests and dark seas beyond her kingdom -- an adventure that soon turns into a journey of self-discovery<br><br>IMDB Rating: 6.9</div>
          </div>
        </div>

      </div>
    </div>
  </div>
  
</body>
<script>
  const movieItems = document.querySelectorAll('.movie-item-wrapper');

  movieItems.forEach(movieItem => {
    movieItem.addEventListener('mouseover', () => {
      console.log(movieItem.childNodes[1].classList)
      movieItem.childNodes[1].classList.add('img-darken');
    });

    movieItem.addEventListener('mouseout', () => {
      console.log(movieItem.childNodes[1].classList)
      movieItem.childNodes[1].classList.remove('img-darken');
    });
  });

</script>
</html>