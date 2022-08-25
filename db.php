<?php
    $records = [

        [
            'cover' => "https://m.media-amazon.com/images/I/71Zizm13xKL._SS500_.jpg",
            'title' => "New Jersey",
            'author' => "Bon Jovi",
            'year' => "1988"
        ],
        [
            'cover' => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
            'title' => "Live at Wembley 86",
            'author' => "Queen",
            'year' => "1992"
        ],
        [
            'cover' => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
            'title' => "Ten's Summoner's Tales",
            'author' => "Sting",
            'year' => "1993"
        ],
        [
            'cover' => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
            'title' => "Steve Gadd Band",
            'author' => "Steve Gadd Band",
            'year' => "2018"
        ],
        [
            'cover' => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
            'title' => "Brave new World",
            'author' => "Iron Maiden",
            'year' => "2000"
        ],
        [
            'cover' => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
            'title' => "One more car, one more raider",
            'author' => "Eric Clapton",
            'year' => "2002"
        ],
        [
            'cover' => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
            'title' => "Made in Japan",
            'author' => "Deep Purple",
            'year' => "1972"
        ],
        [
            'cover' => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
            'title' => "And Justice for All",
            'author' => "Metallica",
            'year' => '1988'
        ],
        [
            'cover' => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
            'title' => "Hard Wired",
            'author' => "Dave Weckl",
            'year' => "1994"
        ],

        [
            'cover' => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
            'title' => "Bad",
            'author' => "Michael Jackson",
            'year' => '1987'
        ],
    ];
    

header('Content-Type: application/json');

echo json_encode($records);

?>