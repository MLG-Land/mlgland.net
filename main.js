document.getElementById("scroll_down_it_wont_hurt_you").addEventListener("click", () => {
    window.scrollBy(0, 200)
})

axios.get('alerts.html').then((res) => {
    document.getElementById("alerts_body").innerHTML = res.data
})

axios.get('updates.html').then((res) => {
    document.getElementById("updates_body").innerHTML = res.data
})