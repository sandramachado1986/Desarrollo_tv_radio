

// Function to fetch TV schedule data from the server (replace the URL with your
// actual endpoint)

moment.updateLocale('es', {
    months: (
        'Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre' +
        '_Diciembre'
    ).split('_'),
    monthsShort: 'Enero._Feb._Mar_Abr._May_Jun_Jul._Ago_Sept._Oct._Nov._Dec.'.split(
        '_'
    ),
    weekdays: 'Domingo_Lunes_Martes_Miércoles_Jueves_Viernes_Sábado'.split('_'),
    weekdaysShort: 'Dom._Lun._Mar._Mié._Jue._Vie._Sáb.'.split('_'),
    weekdaysMin: 'Do_Lu_Ma_Mi_Ju_Vi_Sa'.split('_')
});

// Function to get the current day and time in Argentina
function getCurrentDateTime() {
    return moment().tz('America/Argentina/Buenos_Aires');
}

// Function to format the time
function formatTime(time) {
    return moment(time, 'HH:mm:ss').format('HH:mm:ss');
}
async function fetchTVSchedule() {
    try {
        const response = await fetch('http://localhost:8888/test.json', {
            method: 'GET',
            headers: {
                'Accept': 'application/json'
            }
        });

        if (!response.ok) {
            throw new Error(`Server returned ${response.status} ${response.statusText}`);
        }
        const data = await response.json();
        
        return data;
    } catch (error) {
        console.error('Error fetching TV schedule  :', error.message);
        return [];
    }
}
async function displayShows() {
    document
        .getElementById('loadingIndicator')
        .style
        .display = 'block';
    const schedule = await fetchTVSchedule();
    const currentDateTime = getCurrentDateTime();
    const currentDay = currentDateTime.format('dddd');
    const currentTime = currentDateTime.format('HH:mm:ss');


// Function to display the current and next shows

   

    for (const entry of schedule) {
        // Aquí puedes acceder a cada programa individualmente utilizando la variable entry
      
        
        const currentShowContainer = document.getElementById('currentShowContainer');
        if (entry) {
            const currentShowTemplate = document
                .getElementById('currentShowTemplate')
                .innerHTML;
            const formattedStartTime = formatTime(entry.time);
            const formattedEndTime = formatTime(
                moment(entry.time, 'HH:mm:ss').add(1, 'hours').format('HH:mm:ss')
            );
            const currentShowHTML = currentShowTemplate
                .replace(
                    '{{showName}}',
                    entry.show
                )
                .replace('{{showStaff}}', entry.show)
                .replace('{{day}}', entry.day)
                .replace('{{startTime}}', formattedStartTime)
                .replace('{{endTime}}', formattedEndTime)
                .replace(
                    '{{imageUrl}}',
                    entry.imageUrl
                        ? "/storage/app/public/"+entry.imageUrl
                        : '/resources/views/frontend_radio_news/iconos/512.png'
                ); // Use a default value if imageUrl is not present
            currentShowContainer.innerHTML = currentShowHTML;
           
        }
         else {
            const lastCurrentShow = currentShowContainer.innerHTML;
            if (lastentry.trim() !== '') {
                currentShowContainer.innerHTML = lastCurrentShow;
            } else {
                currentShowContainer.innerHTML = 'No show currently scheduled no puedo traer nada .';
            }
        }
     
        
    }
    
    // Display the current show
    
    
/*
    // Display the next show
    const nextShowContainer = document.getElementById('nextShowContainer');
    if (nextShow) {
        const nextShowTemplate = document.getElementById('nextShowTemplate').innerHTML;

    
        const formattedStartTime = formatTime(nextShow.time);
        const nextShowHTML = nextShowTemplate
            .replace('{{showName}}', nextShow.show)
            .replace('{{day}}', currentDay)
            .replace('{{startTime}}', formattedStartTime)
            .replace(
                '{{imageUrl}}',
                nextShow.imageUrl
                    ? nextShow.imageUrl
                    : './resources/views/frontend_radio_news/iconos/iconos/512.png'
            ); // Use a default value if imageUrl is not present
        nextShowContainer.innerHTML = nextShowHTML;
    } else {
        nextShowContainer.innerHTML = 'No next show scheduled.';
    }
    document
        .getElementById('loadingIndicator')
        .style
        .display = 'none';
        */

        
}

// Call the displayShows function on page load
displayShows();

// Set up interval to reload the schedule every minute (60000 milliseconds)
setInterval(displayShows, 60000);

    function initPlayers() {
   var playerContainers = document.querySelectorAll('.player-container');

   playerContainers.forEach(function (container) {
      initPlayer(container);
   });
}

function initPlayer(container) {
   var player = container.querySelector('.player');
   var playBtn = container.querySelector('.play-btn');

   function togglePlay() {
      if (player.paused === false) {
         player.pause();
         $('#play-btn').removeClass('pause');
      } else {
         player.play();
         $('#play-btn').addClass('pause');
      }
   }

   playBtn.addEventListener('click', function () {
      togglePlay();
   });
}

initPlayers();
var buttons = document.querySelectorAll('.play-btn');

buttons.forEach(function (button) {
   button.addEventListener('click', function () {
      // Llama a la función para actualizar el progreso aquí
      updateProgress();
   });
});

function updateProgress() {
   // Aquí puedes agregar la lógica para actualizar el progreso de todos los reproductores
}

// Llamada a la función fetchTVSchedule()
