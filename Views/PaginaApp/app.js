const music = new Audio('/Imgs/musicas/mp3/rockstar_postMalone.mp3');

const songs = [
    {
        id: '1',
        songName: `Rockstar <br>
        <div class="subtitle">Post Malone</div>`,
        poster: "/Imgs/musicas/banner/rockstar_postmalone.jpg"
    },
    {
        id: '2',
        songName: `Beliver <br>
        <div class="subtitle">Imagine Dragons</div>`,
        poster: "/Imgs/musicas/banner/Believer_Imagine_Dragons.jpg"
    },
    {
        id: '3',
        songName: `Save Yours Tears
        <br>
        <div class="subtitle">The Weekend</div>`,
        poster: "/Imgs/musicas/banner/save_your_tears_the_weekend.jpg"
    },
    {
        id: '4',
        songName: `As It Was
        <br>
        <div class="subtitle">Harry Styles</div>`,
        poster: "/Imgs/musicas/banner/as_it_was_Harry_styles.webp"
    },
    {
        id: '5',
        songName: `Paradise
        <br>
        <div class="subtitle">Cold Play</div>`,
        poster: "/Imgs/musicas/banner/paradise_coldplay.png"
    },
    {
        id: '6',
        songName: `Stay
        <br>
        <div class="subtitle">The Score</div>`,
        poster: "/Imgs/musicas/banner/stay_theScore.jpg"
    },
    {
        id: '7',
        songName: `idfc
        <br>
        <div class="subtitle">blackbear</div>`,
        poster: "/Imgs/musicas/banner/idfc_blackbear.webp"
    },
    {
        id: '8',
        songName: `Ride
        <br>
        <div class="subtitle">Twenty One Pilots</div>`,
        poster: "/Imgs/musicas/banner/Twenty_One_Pilots_Ride.png"
    },
    {
        id: '9',
        songName: `Locked Out Of Heaven
        <br>
        <div class="subtitle">Bruno Mars</div>`,
        poster: "/Imgs/musicas/banner/Heaven_bruno_mars.jpg"
    },
    {
        id: '10',
        songName: `Faded
        <br>
        <div class="subtitle">Alan Walker</div>`,
        poster: "/Imgs/capa_faded.png"
    },
    {
        id: '11',
        songName: `Montero
        <br>
        <div class="subtitle">Lin Nas X</div>`,
        poster: "/Imgs/musicas/banner/montero_lilnasx.jpeg"
    },
    {
        id: '12',
        songName: `I Aint´t Worried
        <br>
        <div class="subtitle">One Republic</div>`,
        poster: "/Imgs/musicas/banner/i_aint_worried_one_republic.jpg"
    },
    {
        id: '13',
        songName: `Bones
        <br>
        <div class="subtitle">Imagine Dragons</div>`,
        poster: "/Imgs/musicas/banner/Bones_imagine_Dragons.webp"
    },
    {
        id: '14',
        songName: `Sweet Child O' Mine
        <br>
        <div class="subtitle">Gun's N Roses</div>`,
        poster: "/Imgs/musicas/banner/sweet_child.jpg"
    },
    {
        id: '15',
        songName: ``,
        poster: ""
    },
    {
        id: '16',
        songName: ``,
        poster: ""
    },
    {
        id: '17',
        songName: ``,
        poster: ""
    },
    {
        id: '18',
        songName: ``,
        poster: ""
    },
    {
        id: '19',
        songName: ``,
        poster: ""
    },
    {
        id: '20',
        songName: ``,
        poster: ""
    },

]

let masterPlay = document.getElementById('masterPlay');

masterPlay.addEventListener('click',()=>{
    if (music.paused || music.currentTime <=0) {
        music.play();   
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
    } else {
        music.pause();
        masterPlay.classList.add('bi-play-fill');
        masterPlay.classList.remove('bi-pause-fill');
    }
} )

const makeAllPlays = () =>{
    Array.from(document.getElementsByClassName('musicPlay')).forEach((element)=>{
            element.classList.add('bi-play-fill');
            element.classList.remove('bi-pause-fill');
    })
}

const makeAllBackgrounds = () =>{
    Array.from(document.getElementsByClassName('SongItems')).forEach((element)=>{
            element.style.background = "rgb(120, 68, 124, 0)";
    })
}

let index = 0;
let poster_master_play = document.getElementById('poster_master_play');
let title = document.getElementById('title')
Array.from(document.getElementsByClassName('musicPlay')).forEach((element)=>{
    element.addEventListener('click', (e)=>{
        makeAllPlays();
        index = e.target.id;
        e.target.classList.remove('bi-play-fill');
        e.target.classList.add('bi-pause-fill');
        music.scr = `Imgs/musicas/mp3/${index}.mp3`;
        poster_master_play.scr = `Imgs/musicas/banner/${index}.jpg`
        music.play();
        let song_title = songs.filter((ele)=>{
            return ele.id == index;
        })

        song_title.forEach(ele =>{
            let{songName} = ele;
            title.innerHTML = songName;
        })

        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
        music.addEventListener('ended', ()=>{
            masterPlay.classList.add('bi-play-fill');
            masterPlay.classList.remove('bi-pause-fill');
        })
        makeAllBackgrounds();
        Array.from(document.getElementsByClassName('SongItems'))[`${index-1}`].style.background = "rgb(120, 68, 124, .1)";
    })
})

let currentStart = document.getElementById('currentStart');
let currentEnd = document.getElementById('currentEnd');
let seek = document.getElementById('seek');
let bar2 = document.getElementById('bar2');
let dot = document.getElementsByClassName('dot')[0];

music.addEventListener('timeupdate',()=>{
    let music_curr = music.currentTime;
    let music_dur = music.duration;

    let min = Math.floor(music_dur/60);
    let sec = Math.floor(music_dur%60);
    if (sec<10) {
        sec = `0${sec}`
    }
    currentEnd.innerText = `${min}:${sec}`;

    let min1 = Math.floor(music_curr/60);
    let sec1 = Math.floor(music_curr%60);
    if (sec1<10) {
        sec1 = `0${sec1}`
    }

    currentStart.innerText = `${min1}:${sec1}`;

    let progressbar = parseInt((music.currentTime/music.duration)*100);
    seek.value = progressbar;
    let seekbar = seek.value;
    bar2.style.width = `${seekbar}%`;
    dot.style.left = `${seekbar}%`;
})

seek.addEventListener('change', ()=>{
    music.currentTime =seek.value * music.duration/100;
})
music.addEventListener('ended', ()=> {
    masterPlay.classList.add('bi-play-fill');
            masterPlay.classList.remove('bi-pause-fill');
})

let vol_icon = document.getElementById('vol_icon');
let vol = document.getElementById('vol');
let vol_dot = document.getElementById('vol_dot');
let vol_bar = document.getElementsByClassName('dot')[0];

vol.addEventListener('change', ()=>{
    if (vol.value == 0) {
        vol_icon.classList.remove(bi-volume-down-fill);
        vol_icon.classList.add(bi-volume-mute-fill);
        vol_icon.classList.remove(bi-volume-up-fill);
    }
    if (vol.value > 0) {
        vol_icon.classList.add(bi-volume-down-fill);
        vol_icon.classList.remove(bi-volume-mute-fill);
        vol_icon.classList.remove(bi-volume-up-fill);
    }
    if (vol.value > 50) {
        vol_icon.classList.remove(bi-volume-down-fill);
        vol_icon.classList.remove(bi-volume-mute-fill);
        vol_icon.classList.add(bi-volume-up-fill);
    }

    let vol_a = vol.value;
    vol_bar.style.width = `${vol_a}%`;
    vol_dot.style.left = `${vol_a}%`;
    music.valume = vol_a/100;
})