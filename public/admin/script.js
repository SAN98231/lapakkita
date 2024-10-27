// Example: add functionality or interactivity to the dashboard
document.addEventListener("DOMContentLoaded", function () {
    console.log("Admin Dashboard loaded");

    // You can add more interactivity here if needed, like sidebar collapse or dynamic content
    const modal = document.getElementById("addUserModal");
    const openModalBtn = document.querySelector(".btn-success");
    const closeModalBtn = document.querySelector(".close-btn");

    // Show modal when "Add User +" button is clicked
    openModalBtn.addEventListener("click", () => {
        modal.style.display = "flex";
    });

    // Hide modal when close button (×) is clicked
    closeModalBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    // Hide modal when clicking outside the modal content
    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});
