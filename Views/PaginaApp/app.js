const music = new Audio('');

const songs = [
    {
        id: '1',
        songName: `Rockstar <br>
        <div class="subtitle">Post Malone</div>`,
        poster: "/Imgs/musicas/banner/1.jpg"
    },
    {
        id: '2',
        songName: `Beliver <br>
        <div class="subtitle">Imagine Dragons</div>`,
        poster: "/Imgs/musicas/banner/2.jpg"
    },
    {
        id: '3',
        songName: `Save Yours Tears
        <br>
        <div class="subtitle">The Weekend</div>`,
        poster: "/Imgs/musicas/banner/3.jpg"
    },
    {
        id: '4',
        songName: `As It Was
        <br>
        <div class="subtitle">Harry Styles</div>`,
        poster: "/Imgs/musicas/banner/4.jpg"
    },
    {
        id: '5',
        songName: `Paradise
        <br>
        <div class="subtitle">Cold Play</div>`,
        poster: "/Imgs/musicas/banner/5y.jpg"
    },
    {
        id: '6',
        songName: `Stay
        <br>
        <div class="subtitle">The Score</div>`,
        poster: "/Imgs/musicas/banner/6.jpg"
    },
    {
        id: '7',
        songName: `idfc
        <br>
        <div class="subtitle">blackbear</div>`,
        poster: "/Imgs/musicas/banner/7.jpg"
    },
    {
        id: '8',
        songName: `Ride
        <br>
        <div class="subtitle">Twenty One Pilots</div>`,
        poster: "/Imgs/musicas/banner/8.jpg"
    },
    {
        id: '9',
        songName: `Locked Out Of Heaven
        <br>
        <div class="subtitle">Bruno Mars</div>`,
        poster: "/Imgs/musicas/banner/9.jpg"
    },
    {
        id: '10',
        songName: `Faded
        <br>
        <div class="subtitle">Alan Walker</div>`,
        poster: "/Imgs/10.png"
    },
    {
        id: '11',
        songName: `Montero
        <br>
        <div class="subtitle">Lin Nas X</div>`,
        poster: "/Imgs/musicas/banner/11.jpg"
    },
    {
        id: '12',
        songName: `I Aint Worried
        <br>
        <div class="subtitle">One Republic</div>`,
        poster: "/Imgs/musicas/banner/12.jpg"
    },
    {
        id: '13',
        songName: `Bones
        <br>
        <div class="subtitle">Imagine Dragons</div>`,
        poster: "/Imgs/musicas/banner/13.jpg"
    },
    {
        id: '14',
        songName: `Sweet Child O' Mine
        <br>
        <div class="subtitle">Gun's N Roses</div>`,
        poster: "/Imgs/musicas/banner/14.jpg"
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

// Array.from(document.getElementsByClassName('songItems')).forEach((element, i)=>{
//     element.getElementsByTagName('img')[0].src = songs[i].poster;
//     element.getElementsByTagName('h5')[0].innerHTML = songs[i].songName;
// })

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

// const makeAllBackgrounds = () =>{
//     Array.from(document.getElementsByClassName('songItems')).forEach((element)=>{
//             element.style.background = "#4d1458";
//     })
// }

let index = 0;
let poster_master_play = document.getElementById('poster_master_play');
let title = document.getElementById('title')

Array.from(document.getElementsByClassName('musicPlay')).forEach((element)=>{
    element.addEventListener('click', (e)=>{
        index = e.target.id;
        makeAllPlays();
        e.target.classList.remove('bi-play-fill');
        e.target.classList.add('bi-pause-fill');
        music.src = `/Imgs/musicas/mp3/${index}.mp3`;
        poster_master_play.src = `/Imgs/musicas/banner/${index}.jpg`;
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
    music.currentTime = seek.value * music.duration/100;
})
music.addEventListener('ended', ()=> {
    index -= 0;
    index += 1;
    if(index > Array.from(document.getElementsByClassName('songItem')).Length){
        index = 1;
    }
    music.src = `/Imgs/musicas/mp3/${index}.mp3`;
        poster_master_play.src = `/Imgs/musicas/banner/${index}.jpg`;
        music.play();
        let song_title = songs.filter((ele)=>{
            return ele.id == index;
        })

        song_title.forEach(ele =>{
            let{songName} = ele;
            title.innerHTML = songName;
        })
        makeAllPlays()

        document.getElementById(`${index}`).classList.add('bi-play-fill');
        document.getElementById(`${index}`).classList.remove('bi-pause-fill');
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
    music.volume = vol_a/100;
})

let back = document.getElementById('skip1')
let next = document.getElementById('skip2')

back.addEventListener('click', ()=> {
    index -= 1;
    if(index < 1){
        index = Array.from(document.getElementsByClassName('songItem')).Length;
    }
    music.src = `/Imgs/musicas/mp3/${index}.mp3`;
        poster_master_play.src = `/Imgs/musicas/banner/${index}.jpg`;
        music.play();
        let song_title = songs.filter((ele)=>{
            return ele.id == index;
        })

        song_title.forEach(ele =>{
            let{songName} = ele;
            title.innerHTML = songName;
        })
        makeAllPlays()

        document.getElementById(`${index}`).classList.remove('bi-play-fill');
        document.getElementById(`${index}`).classList.add('bi-pause-fill');
})

next.addEventListener('click', ()=> {
    index -= 0;
    index += 1;
    if(index > Array.from(document.getElementsByClassName('songItem')).Length){
        index = 1;
    }
    music.src = `/Imgs/musicas/mp3/${index}.mp3`;
        poster_master_play.src = `/Imgs/musicas/banner/${index}.jpg`;
        music.play();
        let song_title = songs.filter((ele)=>{
            return ele.id == index;
        })

        song_title.forEach(ele =>{
            let{songName} = ele;
            title.innerHTML = songName;
        })
        makeAllPlays()

        document.getElementById(`${index}`).classList.remove('bi-play-fill');
        document.getElementById(`${index}`).classList.add('bi-pause-fill');
})

let left_scroll = document.getElementById('left_scroll');
let right_scroll = document.getElementById('right_scroll');
let pop_songs = document.getElementsByClassName('pop_songs')[0];

left_scroll.addEventListener('click', ()=>{
    pop_songs.scrollLeft -= 330;
})
right_scroll.addEventListener('click', ()=>{
    pop_songs.scrollLeft += 330;
})