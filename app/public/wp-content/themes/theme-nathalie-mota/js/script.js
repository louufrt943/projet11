document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("contact-modal");
    const closeBtn = document.querySelector(".close");

    document.querySelectorAll(".open-modal").forEach(button => {
        button.addEventListener("click", () => {
            modal.style.display = "block";
        });
    });

    closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});
