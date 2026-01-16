fetch("counter.php")
  .then(res => res.text())
  .then(num => {
    document.getElementById("counter").textContent = num;
  })
  .catch(() => {
    document.getElementById("counter").textContent = "—";
  });
