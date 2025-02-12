const contactForm = document.querySelector("#contact-form");
const loader = document.querySelector("#loader");

function hideLoader() {
    loader.classList.add("hidden");
}

function showLoader() {
    loader.classList.remove("hidden");
}

// contactForm.addEventListener("submit", function (event) {
//     event.preventDefault();

//     showLoader();

//     const formData = new FormData(this);
//     const jsonData = JSON.stringify(Object.fromEntries(formData));
//     const url = this.action;

//     async function submitForm() {
//         try {
//             const res = await fetch(url, {
//                 method: "POST",
//                 headers: {
//                     "Content-Type": "application/json",
//                     "X-CSRF-Token": document.querySelector(
//                         'meta[name="csrf-token"]'
//                     ).content,
//                 },
//                 body: jsonData,
//             });

//             const response = await res.json();

//             if (res.ok) {
//                 if (response.success) {
//                     toast("success", "Form submitted successfully!");
//                 }
//             } else {
//                 const statusCode = res.status;
//                 if (statusCode === 422) {
//                     const errors = data.errors;
//                     const errorElements = document.querySelectorAll(".errors");

//                     errorElements.forEach((element) => {
//                         element.innerText = "";
//                     });

//                     for (const key in errors) {
//                         if (Object.prototype.hasOwnProperty.call(errors, key)) {
//                             const element = errors[key];
//                             console.log(element);
//                             element.forEach((error) => {
//                                 document.querySelector(
//                                     `.${key}Error`
//                                 ).innerText = error;
//                             });
//                         }
//                     }
//                 }
//             }
//         } catch (error) {
//             console.log(error);
//         } finally {
//             hideLoader();
//             contactForm.reset();
//         }
//     }

//     submitForm();
// });
