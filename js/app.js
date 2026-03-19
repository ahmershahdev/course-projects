// --- INITIALIZATION ---
$(document).ready(() => {
  initLenis();
  initThree();
  initTimer();
  initCharts();
  loadLogs();
  initTheme();
});

// --- 1. SMOOTH SCROLLING (Lenis) ---
import Lenis from "https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.27/+esm";
import * as THREE from "https://cdn.jsdelivr.net/npm/three@0.158.0/build/three.module.js";

function initLenis() {
  const lenis = new Lenis();
  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);
}

// --- 2. 3D INTERACTIVE SPHERE (Three.js) ---
let scene, camera, renderer, sphere;
function initThree() {
  scene = new THREE.Scene();
  camera = new THREE.PerspectiveCamera(
    75,
    window.innerWidth / window.innerHeight,
    0.1,
    1000,
  );
  renderer = new THREE.WebGLRenderer({
    canvas: document.getElementById("sphere-canvas"),
    alpha: true,
    antialias: true,
  });
  renderer.setSize(window.innerWidth, window.innerHeight);

  // Create a wireframe sphere
  const geometry = new THREE.IcosahedronGeometry(2, 2);
  const material = new THREE.MeshBasicMaterial({
    color: 0x6366f1,
    wireframe: true,
    transparent: true,
    opacity: 0.3,
  });
  sphere = new THREE.Mesh(geometry, material);
  scene.add(sphere);

  camera.position.z = 5;

  function animate() {
    requestAnimationFrame(animate);
    sphere.rotation.y += 0.005;
    sphere.rotation.x += 0.002;
    renderer.render(scene, camera);
  }
  animate();

  window.addEventListener("resize", () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
  });
}

// --- 3. TIMER LOGIC ---
let timerInterval;
let timeLeft = 1500; // 25 mins

function initTimer() {
  $("#start-btn").click(function () {
    if ($(this).text() === "Start") {
      startTimer();
      $(this).text("Pause").removeClass("btn-primary").addClass("btn-warning");
    } else {
      clearInterval(timerInterval);
      $(this).text("Start").removeClass("btn-warning").addClass("btn-primary");
    }
  });

  $("#reset-btn").click(() => {
    clearInterval(timerInterval);
    timeLeft = 1500;
    updateTimerDisplay();
    $("#start-btn")
      .text("Start")
      .removeClass("btn-warning")
      .addClass("btn-primary");
  });

  $(".mode-btn").click(function () {
    $(".mode-btn").removeClass("active");
    $(this).addClass("active");
    timeLeft = parseInt($(this).data("time"));
    updateTimerDisplay();
  });
}

function startTimer() {
  timerInterval = setInterval(() => {
    timeLeft--;
    updateTimerDisplay();
    if (timeLeft <= 0) {
      clearInterval(timerInterval);
      confetti({ particleCount: 150, spread: 70, origin: { y: 0.6 } });
      alert("Session Complete!");
    }
  }, 1000);
}

function updateTimerDisplay() {
  const mins = Math.floor(timeLeft / 60);
  const secs = timeLeft % 60;
  $("#time-left").text(
    `${mins.toString().padStart(2, "0")}:${secs.toString().padStart(2, "0")}`,
  );
}

// --- 4. DATA LOGGING & LOCALSTORAGE ---
let studyData = JSON.parse(localStorage.getItem("studySphereData")) || [];

function loadLogs() {
  const logBody = $("#log-body");
  logBody.empty();
  let totalMinutes = 0;

  studyData.forEach((item, index) => {
    totalMinutes += parseInt(item.minutes);
    logBody.append(`
            <tr>
                <td>${item.subject}</td>
                <td>${item.minutes} mins</td>
                <td>${item.date}</td>
                <td><button class="btn btn-sm text-danger" onclick="deleteLog(${index})"><i class="bi bi-trash"></i></button></td>
            </tr>
        `);
  });

  $("#total-hours").text((totalMinutes / 60).toFixed(1));
  $("#current-streak").text(calculateStreak());
}

$("#log-form").submit(function (e) {
  e.preventDefault();
  const newSession = {
    subject: $("#log-subject").val(),
    minutes: $("#log-minutes").val(),
    date: new Date().toLocaleDateString(),
  };
  studyData.push(newSession);
  localStorage.setItem("studySphereData", JSON.stringify(studyData));
  loadLogs();
  bootstrap.Modal.getInstance($("#addLogModal")).hide();
  this.reset();
});

function deleteLog(index) {
  studyData.splice(index, 1);
  localStorage.setItem("studySphereData", JSON.stringify(studyData));
  loadLogs();
}

function calculateStreak() {
  if (studyData.length === 0) return 0;
  return new Set(studyData.map((d) => d.date)).size; // Simple streak logic by unique days
}

// --- 5. CHARTS (Chart.js) ---
function initCharts() {
  const ctx = document.getElementById("progressChart").getContext("2d");
  new Chart(ctx, {
    type: "line",
    data: {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
      datasets: [
        {
          label: "Study Minutes",
          data: [30, 45, 60, 20, 90, 120, 40],
          borderColor: "#6366f1",
          tension: 0.4,
          fill: true,
          backgroundColor: "rgba(99, 102, 241, 0.1)",
        },
      ],
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: {
        y: { beginAtZero: true, grid: { color: "rgba(255,255,255,0.05)" } },
      },
    },
  });
}

// --- 6. THEME TOGGLE ---
function initTheme() {
  $("#theme-toggle").click(() => {
    const currentTheme = $("html").attr("data-theme");
    const nextTheme = currentTheme === "dark" ? "light" : "dark";
    $("html").attr("data-theme", nextTheme);
    $("#theme-icon").toggleClass("bi-moon-stars-fill bi-sun-fill");

    // Update Three.js Sphere color based on theme
    sphere.material.color.set(nextTheme === "dark" ? 0x6366f1 : 0x4338ca);
  });
}
