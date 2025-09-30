document.querySelectorAll(".status-select").forEach(select => {
    select.addEventListener("change", function() {
      let row = this.closest("tr");
      if (this.value !== "new") row.remove();
    });
  });