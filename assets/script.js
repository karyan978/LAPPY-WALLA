
      const toggleBtn = document.getElementById("modeToggle");
      const body = document.body;
    
      toggleBtn.addEventListener("click", () => {
        body.classList.toggle("dark-mode");
    
        // Change emoji based on mode
        if (body.classList.contains("dark-mode")) {
          toggleBtn.innerText = "🌞";
        } else {
          toggleBtn.innerText = "🌙";
        }
      });
    