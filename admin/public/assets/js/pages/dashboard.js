   // ماه‌ها
   const months = ["فروردین","اردیبهشت","خرداد","تیر","مرداد","شهریور","مهر","آبان","آذر","دی","بهمن","اسفند"];

   // چارت فروش محصول
   new Chart(document.getElementById("salesChart"), {
     type: "bar",
     data: {
       labels: months,
       datasets: [{
         label: "فروش (تومان)",
         data: [1200000, 1500000, 800000, 2000000, 2500000, 2200000, 3000000, 2700000, 1800000, 2300000, 2600000, 3100000],
         backgroundColor: "rgba(54, 162, 235, 0.6)",
         borderColor: "rgba(54, 162, 235, 1)",
         borderWidth: 1
       }]
     },
     options: {
       responsive: true,
       plugins: { legend: { position: "top" } },
       scales: {
         y: { beginAtZero: true }
       }
     }
   });

   // چارت کاربران
   new Chart(document.getElementById("usersChart"), {
     type: "line",
     data: {
       labels: months,
       datasets: [{
         label: "تعداد کاربران",
         data: [50, 70, 100, 150, 200, 220, 300, 400, 450, 500, 600, 700],
         fill: true,
         backgroundColor: "rgba(255, 99, 132, 0.2)",
         borderColor: "rgba(255, 99, 132, 1)",
         borderWidth: 2,
         tension: 0.3
       }]
     },
     options: {
       responsive: true,
       plugins: { legend: { position: "top" } },
       scales: {
         y: { beginAtZero: true }
       }
     }
   });