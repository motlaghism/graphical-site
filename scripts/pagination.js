// global JavaScript variable
var numbersOfSamples = null;
var currentPage = 1;
var numberPerPage = 12;
var numberOfPages = 3;
var list = new Array();
var pageList = new Array();

window.addEventListener("load", pageFullyLoaded, false);

function pageFullyLoaded() {
    load();
    firstPage();
}
function pager() {
    numberOfPages = getNumberOfPages();
    var ulPage = document.getElementById("ulPage");
    for (var i = 0; i < numberOfPages; i++) {
        ulPage.innerHTML += "<li onclick='thisPage(event)'> <a href='#'>" + (i + 1) + " </a></li>";
    }
}
function makeList() {
    numbersOfSamples = document.getElementById("samples").childElementCount;
    for (x = 0; x < numbersOfSamples; x++)
        list.push(document.getElementById("samples").children[x]);
    pager();

}
function getNumberOfPages() {
    numberOfPages = Math.ceil(list.length / numberPerPage);
    return numberOfPages;
}
function load() {
    makeList();
    numberOfPages = getNumberOfPages();
}

function nextPage() {
    currentPage++;
    loadList();
}
function previousPage() {
    currentPage--;
    loadList();
}
function thisPage(event) {
    var target = event.target || event.srcElement;
    currentPage = target.innerHTML;
    loadList();
}
function firstPage() {
    currentPage = 1;
    loadList();
}
function lastPage() {
    currentPage = numberOfPages;
    loadList();
}
function loadList() {
    var begin = ((currentPage - 1) * numberPerPage);
    var end = begin + numberPerPage;
    pageList = list.slice(begin, end);
    currentPageStyle();
    drawList();    // draws out our data
    check();         // determines the states of the pagination buttons
}
function drawList() {
    document.getElementById("samples").innerHTML = "";

    for (r = 0; r < pageList.length; r++) {
        document.getElementById("samples").appendChild(pageList[r]);
    }
}
function check() {
    document.getElementById("next").disabled = (currentPage == numberOfPages ? true : false);
    document.getElementById("previous").disabled = (currentPage == 1 ? true : false);
    document.getElementById("first").disabled = (currentPage == 1 ? true : false);
    document.getElementById("last").disabled = (currentPage == numberOfPages ? true : false);
}

function currentPageStyle() {
    var liPage = document.getElementById("ulPage").children;
    for (var i = 0; i < numberOfPages; i++) {
        if (i == currentPage - 1)
        {
            liPage[i].style.color = "white";
            liPage[i].style.backgroundColor = "#90103B";
            liPage[i].style.cursor = "default";
        } else {
            liPage[i].style.color = "#90103B";
            liPage[i].style.backgroundColor = "white";
            liPage[i].style.cursor = "pointer";
        }
    }
}