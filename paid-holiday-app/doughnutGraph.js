const ctx = document.getElementById("myDoughnutGraph").getContext("2d");

const data = {
  labels: ["Congés pris", "Congés restant"],
  datasets: [
    {
      data: [18, 25 - 18],
      backgroundColor: ["#3F86FF", "#85AEFF"],
      borderWidth: 0,
    },
  ],
};

const options = {
  cutout: "65%",
  circumference: 360,
  plugins: {
    legend: { display: false },
    tooltip: { enabled: true },
  },
};

const myDoughnut = new Chart(ctx, {
  type: "doughnut",
  data,
  options,
});
