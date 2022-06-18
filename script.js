
const wrapper = document.querySelector(".wrapper");
const selectBtn = wrapper.querySelector(".select-btn");
/*
*/
//selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));
//selectBtn.addEventListener("click", function() { wrapper.classList.toggle("active")});
selectBtn.addEventListener(
    "click", function() {
        document.getElementById("img").classList.toggle("active")
    }
    );
 