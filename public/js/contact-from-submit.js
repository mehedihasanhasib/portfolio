const contactForm = document.querySelector("#contact-form");

contactForm.addEventListener("submit", function (event) {
    event.preventDefault();
    const formData = new FormData(this);
    const jsonData = JSON.stringify(Object.fromEntries(formData));
    const url = this.action;

    async function submitForm() {
        const res = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-Token": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
            },
            body: jsonData,
        });

        const data = await res.json();

        if (res.status === 422) {
            const errors = data.errors;
            const errorElements = document.querySelectorAll(".errors");

            errorElements.forEach((element) => {
                element.innerText = "";
            });

            for (const key in errors) {
                if (Object.prototype.hasOwnProperty.call(errors, key)) {
                    const element = errors[key];
                    console.log(element);
                    element.forEach((error) => {
                        document.querySelector(`.${key}Error`).innerText =
                            error;
                    });
                }
            }
        }
    }

    submitForm();
});
