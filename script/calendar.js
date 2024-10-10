
let nav = 0;
let clicked = null;
let events = localStorage.getItem('events') ? JSON.parse(localStorage.getItem('events')) : [];

const calendrier = document.getElementById('calendar');
const nouvel_evenement_modal = document.getElementById('newEventModal');
const suppression_evenement_modal = document.getElementById('deleteEventModal');
const retour = document.getElementById('modalBackDrop');
const titre_evenement = document.getElementById('eventTitleInput');
const jours_semaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

function openModal(date) {
  clicked = date;

  const congés = events.find(e => e.date === clicked);

  if (congés) {
    document.getElementById('eventText').innerText = congés.title;
    suppression_evenement_modal.style.display = 'block';
  } else {
    nouvel_evenement_modal.style.display = 'block';
  }

  retour.style.display = 'block';
}

function load() {
  const dt = new Date();

  if (nav !== 0) {
    dt.setMonth(new Date().getMonth() + nav);
  }

  const day = dt.getDate();
  const month = dt.getMonth();
  const year = dt.getFullYear();

  const firstDayOfMonth = new Date(year, month, 1);
  const daysInMonth = new Date(year, month + 1, 0).getDate();
  
  const dateString = firstDayOfMonth.toLocaleDateString('fr-fr', {
    weekday: 'long',
    year: 'numeric',
    month: 'numeric',
    day: 'numeric',
  });
  console.log(dateString);

  const paddingDays = jours_semaine.indexOf(dateString.split(' ')[0]);
  console.log(paddingDays);
  document.getElementById('monthDisplay').innerText = 
    `${dt.toLocaleDateString('fr-fr', { month: 'long' })} ${year}`;

  calendrier.innerHTML = '';

  for(let i = 1; i <= paddingDays + daysInMonth; i++) {
    const daySquare = document.createElement('div');
    daySquare.classList.add('day');

    const dayString = `${month + 1}/${i - paddingDays}/${year}`;

    if (i > paddingDays) {
      daySquare.innerText = i - paddingDays;
      const congés = events.find(e => e.date === dayString);

      if (i - paddingDays === day && nav === 0) {
        daySquare.id = 'currentDay';
      }

      if (congés) {
        const eventDiv = document.createElement('div');
        eventDiv.classList.add('event');
        eventDiv.innerText = "En attente de validation :" + congés.title;
        daySquare.appendChild(eventDiv);
      }

      daySquare.addEventListener('click', () => openModal(dayString));
    } else {
      daySquare.classList.add('padding');
    }

    calendrier.appendChild(daySquare);    
  }
}

function closeModal() {
  titre_evenement.classList.remove('error');
  nouvel_evenement_modal.style.display = 'none';
  suppression_evenement_modal.style.display = 'none';
  retour.style.display = 'none';
  titre_evenement.value = '';
  clicked = null;
  load();
}

function saveEvent() {
  if (titre_evenement.value) {
    titre_evenement.classList.remove('error');

    events.push({
      date: clicked,
      title: titre_evenement.value,
    });

    localStorage.setItem('events', JSON.stringify(events));
    closeModal();
  } else {
    titre_evenement.classList.add('error');
  }
}

function deleteEvent() {
  events = events.filter(e => e.date !== clicked);
  localStorage.setItem('events', JSON.stringify(events));
  closeModal();
}

function initButtons() {
  document.getElementById('nextButton').addEventListener('click', () => {
    nav++;
    load();
  });

  document.getElementById('backButton').addEventListener('click', () => {
    nav--;
    load();
  });

  document.getElementById('saveButton').addEventListener('click', saveEvent);
  document.getElementById('cancelButton').addEventListener('click', closeModal);
  document.getElementById('deleteButton').addEventListener('click', deleteEvent);
  document.getElementById('closeButton').addEventListener('click', closeModal);
}

initButtons();
load();