        function toggleMenu() {
            document.getElementById("nav-links").classList.toggle("active");
        }

        document.addEventListener("DOMContentLoaded", function () {
            // Initialize particles for About Section
            particlesJS("particles-js", {
                particles: {
                    number: { value: 50, density: { enable: true, value_area: 800 } },
                    color: { value: "#ffffff" },
                    shape: { type: "circle" },
                    opacity: { value: 0.5, random: true },
                    size: { value: 4, random: true },
                    move: { enable: true, speed: 5, direction: "none", out_mode: "out" }
                }
            });

            // Initialize particles for Education Section
            particlesJS("particles-snow-js", {
                particles: {
                    number: {
                        value: 50, // Number of snowflakes
                        density: { enable: true, value_area: 550 }
                    },
                    color: { value: "#ffffff" }, // White snowflakes
                    shape: {
                        type: "polygon", // Fixed spelling from "porygon" to "polygon"
                        polygon: { nb_sides: 6 } // Adjust to control shape (e.g., hexagonal snowflakes)
                    },
                    opacity: {
                        value: 0.5,
                        random: true,
                        anim: { enable: false }
                    },
                    size: {
                        value: 5,
                        random: true,
                        anim: { enable: false }
                    },
                    move: {
                        enable: true,
                        speed: 1, // Slow falling speed
                        direction: "bottom", // Moves downward like snowfall
                        random: true,
                        straight: false,
                        out_mode: "out"
                    },
                    line_linked: {
                        enable: false // No lines connecting particles
                    }
                },
                interactivity: {
                    detect_on: "canvas",
                    events: {
                        onhover: { enable: true, mode: "bubble" }, // Snowflakes slightly enlarge on hover
                        onclick: { enable: true, mode: "push" } // More snowflakes appear on click
                    },
                    modes: {
                        bubble: { distance: 100, size: 8, duration: 1, opacity: 0.8 },
                        push: { particles_nb: 3 }
                    }
                }
            });

             // Experience entries with start & end month/year
            const experienceEntries = [
                { startMonth: 11, startYear: 2022, endMonth: 5, endYear: 2024 },  // Nov 2022 - May 2024
                { startMonth: 7, startYear: 2021, endMonth: 6, endYear: 2022 },  // July 2021 - June 2022
                { startMonth: 9, startYear: 2020, endMonth: 6, endYear: 2021 },  // Sept 2020 - June 2021
                { startMonth: 3, startYear: 2019, endMonth: 8, endYear: 2020 }  // Mar 2019 - Aug 2020
            ];

            let totalMonths = 0;

            experienceEntries.forEach(entry => {
                let monthsDiff = (entry.endYear - entry.startYear) * 12 + (entry.endMonth - entry.startMonth);
                totalMonths += monthsDiff;
            });

            // Convert total months to years and months
            let years = Math.floor(totalMonths / 12);
            let months = totalMonths % 12;

            // Display result
            document.getElementById("total-experience").textContent = `${years} years and ${months} months`;
        });
        
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
            // Filtering Work Items
            const filterButtons = document.querySelectorAll(".filter-btn");
            const workItems = document.querySelectorAll(".work-item");

            filterButtons.forEach(button => {
                button.addEventListener("click", function () {
                    const filter = this.getAttribute("data-filter");

                    filterButtons.forEach(btn => btn.classList.remove("active"));
                    this.classList.add("active");

                    workItems.forEach(item => {
                        if (filter === "all" || item.classList.contains(filter)) {
                            item.style.display = "flex";
                            setTimeout(() => (item.style.opacity = "1"), 200); // Smooth fade-in effect
                        } else {
                            item.style.opacity = "0";
                            setTimeout(() => (item.style.display = "none"), 200); // Smooth fade-out effect
                        }
                    });
                });
            });
        });
   
        document.addEventListener("DOMContentLoaded", function() {
            const backToTop = document.getElementById("backToTop");
            const footer = document.getElementById("footer");
            const lastSection = document.querySelector(".last-section");
    
            if (!lastSection) {
                console.error("Error: .last-section element not found.");
                return;
            }
    
            window.addEventListener("scroll", () => {
                if (window.scrollY > 300) {
                    backToTop.classList.add("show");
                } else {
                    backToTop.classList.remove("show");
                }
    
                const rect = lastSection.getBoundingClientRect();
                if (rect.top <= window.innerHeight) {
                    footer.classList.add("show");
                } else {
                    footer.classList.remove("show");
                }
            });
    
            backToTop.addEventListener("click", () => {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        });

        document.addEventListener("DOMContentLoaded", () => {
            const progressBars = document.querySelectorAll(".progress");
        
            function animateProgressBars() {
                progressBars.forEach(bar => {
                    const percent = bar.getAttribute("data-percent");
                    bar.style.width = percent + "%";
                    bar.classList.add("animated"); // Adds the animations dynamically
                });
            }
        
            function handleScroll() {
                const section = document.querySelector(".skills-section");
                if (!section) return;
        
                const sectionPos = section.getBoundingClientRect().top;
                const screenPos = window.innerHeight / 1.3;
        
                if (sectionPos < screenPos) {
                    animateProgressBars();
                    window.removeEventListener("scroll", handleScroll);
                }
            }
        
            window.addEventListener("scroll", handleScroll);
            handleScroll();
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("contactForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let name = document.getElementById("name").value.trim();
                let email = document.getElementById("email").value.trim();
                let message = document.getElementById("message").value.trim();

                let spinner = document.querySelector(".loading-spinner");
        
                if (!name || !email || !message) {
                    Swal.fire("Oops!", "Please fill in all fields.", "warning");
                    return;
                }
        
                let formData = new FormData(document.getElementById("contactForm"));
                // Show loading spinner
                spinner.style.display = "block";
        
                fetch("send_email.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    spinner.style.display = "none"; // Hide loading
                    if (data.success) {
                        Swal.fire("Success!", "Your message has been sent.", "success");
                        document.getElementById("contactForm").reset();
                    } else {
                        Swal.fire("Error!", data.message, "error");
                    }
                })
                .catch(error => {
                    spinner.style.display = "none"; // Hide loading
                    Swal.fire("Error!", "Something went wrong. Try again.", "error");
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            loadComments();
        
            document.getElementById("commentForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let name = document.getElementById("comments_name").value.trim();
                let comment = document.getElementById("comments_comment").value.trim();
                let spinner = document.querySelector(".comment_loading_spinner");
        
                if (!name || !comment) {
                    Swal.fire({
                        title: "Oops!",
                        text: "All fields are required.",
                        icon: "warning",
                        background: "#222",
                        color: "#fff"
                    });
                    return;
                }
        
                let formData = new FormData(document.getElementById("commentForm"));
                for (let pair of formData.entries()) {
                    console.log(pair[0] + ": " + pair[1]);
                }
                spinner.style.display = "block"; // Show loading spinner
        
                fetch("submit_comment.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    spinner.style.display = "none"; // Hide loading spinner
                    if (data.success) {
                        Swal.fire({
                            title: "Success!",
                            text: data.message,
                            icon: "success",
                            background: "#222",
                            color: "#fff"
                        });
                        document.getElementById("commentForm").reset();
                        loadComments(); // Reload comments
                    } else {
                        Swal.fire({
                            title: "Error!",
                            text: data.message,
                            icon: "error",
                            background: "#222",
                            color: "#fff"
                        });
                    }
                })
                .catch(error => {
                    spinner.style.display = "none"; // Hide loading spinner
                    Swal.fire({
                        title: "Error!",
                        text: "Something went wrong. Try again.",
                        icon: "error",
                        background: "#222",
                        color: "#fff"
                    });
                });
            });
        });
        
        // Pagination Logic
        function loadComments(page = 1) {
            fetch(`fetch_comments.php?page=${page}`)
                .then(response => response.json())
                .then(data => {
                    let commentsList = document.getElementById("comments-list");
                    if (!commentsList) {
                        console.error("Error: Element #comments-list not found.");
                        return;
                    }
        
                    commentsList.innerHTML = "";
        
                    if (!data.comments || data.comments.length === 0) {
                        commentsList.innerHTML = "<p>No comments yet. Be the first to comment!</p>";
                        return;
                    }
        
                    data.comments.forEach(comment => {
                        let commentElement = document.createElement("div");
                        commentElement.classList.add("comment");
                        commentElement.innerHTML = `
                            <strong>${comment.name}</strong> <br>
                            ${comment.comment} <br>
                            <small>${comment.created_at}</small>
                        `;
                        commentsList.appendChild(commentElement);
                    });
        
                    updatePaginationButtons(data.totalPages);
                })
                .catch(error => {
                    console.error("Error fetching comments:", error);
                });
        }
        
        function updatePaginationButtons(totalPages) {
            let pagination = document.getElementById("pagination-controls");
            if (!pagination) {
                console.error("Error: Element #pagination-controls not found.");
                return;
            }
            
            pagination.innerHTML = "";
        
            if (totalPages > 1) {
                if (currentPage > 1) {
                    pagination.innerHTML += `<button onclick="changePage(${currentPage - 1})">Previous</button>`;
                }
        
                for (let i = 1; i <= totalPages; i++) {
                    pagination.innerHTML += `<button onclick="changePage(${i})" class="${i === currentPage ? 'active' : ''}">${i}</button>`;
                }
        
                if (currentPage < totalPages) {
                    pagination.innerHTML += `<button onclick="changePage(${currentPage + 1})">Next</button>`;
                }
            }
        }
        
        let currentPage = 1;
        
        function changePage(page) {
            currentPage = page;
            loadComments(page);
        }
        
        // ✅ Call the function after DOM loads
        document.addEventListener("DOMContentLoaded", function () {
            loadComments();
        });
        