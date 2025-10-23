document.addEventListener("DOMContentLoaded", function () {
  const calendarEl = document.getElementById("calendar");
  if (!calendarEl) return;

  const calendar = new FullCalendar.Calendar(calendarEl, {
    locale: "fr",
    initialView: "multiMonthYear",
    multiMonthMaxColumns: 4,
    headerToolbar: false,
    events: [
      { title: "Réunion équipe", start: "2025-10-23" },
      { title: "Lancement projet", start: "2025-10-25", end: "2025-10-26" },
    ],
  });
  calendar.render();
});
