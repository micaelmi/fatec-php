const fact = document.querySelector("#fact");

async function fetchMeowFact() {
    try {
        const response = await fetch('https://meowfacts.herokuapp.com/?lang=por');
        const data = await response.json();
        console.log(data);
        fact.innerHTML = data.data[0];
    } catch (error) {
        console.error(error);
    }
}
// fetchMeowFact();

function loadAPI() {
    setTimeout(() => {
        fetchMeowFact();
    }, 2000);
}
let num = 0;
do {
    loadAPI();
    num++;
} while (num < 10);