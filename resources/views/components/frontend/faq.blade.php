<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-center mb-4">Frequently Asked Questions</h2>

    <?php foreach ($g_faqs as $key => $faq): ?>
    <div class="border-b py-4">
        <button class="faq-toggle flex justify-between items-center w-full text-left text-lg font-medium" data-index="<?php echo $key; ?>">
            <span class="title-text-bold-medium text-secondary-950"><?php echo $faq->question; ?></span>
            <span class="faq-icon text-xl font-bold transition-transform duration-300">+</span>
        </button>
        <div class="faq-content mt-2 body-text-regular-large  text-gray-600 overflow-hidden transition-all duration-300 <?php echo $key === 0 ? '' : 'hidden'; ?>">
            <?php echo $faq->answer; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggles = document.querySelectorAll(".faq-toggle");
        const contents = document.querySelectorAll(".faq-content");
        const icons = document.querySelectorAll(".faq-icon");
        let activeIndex = 0; // First item open by default

        contents[0].classList.remove("hidden");
        icons[0].textContent = "−";

        toggles.forEach((toggle, index) => {
            toggle.addEventListener("click", function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector(".faq-icon");

                if (activeIndex === index) {
                    content.style.maxHeight = null;
                    content.classList.add("hidden");
                    icon.textContent = "+";
                    activeIndex = null;
                } else {
                    contents.forEach((c, i) => {
                        c.style.maxHeight = null;
                        c.classList.add("hidden");
                        icons[i].textContent = "+";
                    });

                    content.classList.remove("hidden");
                    content.style.maxHeight = content.scrollHeight + "px";
                    icon.textContent = "−";
                    activeIndex = index;
                }
            });
        });
    });
</script>
