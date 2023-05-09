<style>


.logo {
  display: inline-block;
  font-size: 10%;
  font-weight:initial
  font-family:  Verdana, sans-serif;
  /* text-transform: uppercase; */
  color: rgb(14, 13, 13);
  transform: skewX(-19deg);
}





/* الخط اليدوي */
    @font-face {
        font-family: 'Indie Flower', cursive;
        src: url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
    }
    
    /* تطبيق الخط اليدوي على عنوان h1 */
    h1  {
        font-family: 'Indie Flower', cursive;
        font-size: 3rem;
        position: relative;
        overflow: hidden; /* لإخفاء الخط في البداية */
        animation: typing 5s steps(34) 1s 1 normal both;
    }
   
   
    
    /* أنيميشن الكتابة اليدوية */
    @keyframes typing {
        0% {
            width: 0;
        }
        50% {
            width: 100%;
        }
        100% {
            width: 100%;
            opacity: 2;
        }
    }
    
    /* أنيميشن تحريك الخط */
    @keyframes moveLine {
        0% {
            width: 0%;
        }
        50% {
            width: 100%;
        }
        100% {
            width: 50%;
        }
    }

  

    p {
        
        font-family: 'Indie Flower', cursive;
        /* font-size: 3rem; */
        position: relative;
        overflow: hidden; /* لإخفاء الخط في البداية */
        animation: typing 7s steps(40) 1s 1 normal both;
    }
</style>
