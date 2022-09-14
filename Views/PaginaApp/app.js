const music = new Audio('teste1.mp3');

const songs = [
    {
        id: '1',
        songName: `Faded<br>
        <div class="subtitle">Alan Walker</div>`,
        poster: "imgs/capa_faded.png"
    }
]

Array.from(document.getElementsByIdClassName('songItem')).forEach((element, i)=>{
    element.getElementsByTagName('img')[0].scr = songs[i].poster;
    element.getElementsByTagName('h5')[0].innerHTML = songs[i].songName;
    
})

let masterPlay = document.getElementById('masterPlay');

masterPlay.addEventListener('click',()=>{
    if(music.paused || music.currentTime <=0){
        music.play();   
        play.classList.remove('bi-play-fill');
        play.classList.add('bi-pause-fill');
    }else{
        music.pause();
        play.classList.add('bi-play-fill');
        play.classList.remove('bi-pause-fill');
    }
})