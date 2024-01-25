let i = 0;
let imgArr = [
  "./images/hwei.jpg",
  "./images/featured-news-2.jpg",
  "./images/featured-news-3.jpg",
];
let titleArr = [
  "Hwei Champion Spotlight",
  "Patch 13.24 notes",
  "Moments & Memories | Worlds 2023",
];
let newsTypeArr = ["GAME UPDATES", "GAME UPDATES", "ESPORTS"];
let descArr = [
  "Unlock your artistic potential with the Hwei Champion Spotlight.",
  "Check out the latest League patch notes",
  "Recall the best moments from Worlds 2023",
];
let dateArr = ["2 Days ago", "3 Weeks Ago", "2 Weeks Ago"];
let linksArr = [
  "https://www.youtube.com/watch?v=1qGkmv80KD0",
  "https://www.leagueoflegends.com/en-us/news/game-updates/patch-13-24-notes/",
  "https://www.youtube.com/watch?v=HPFBmpY8E6g",
];

let img = document.getElementById("featured-img");
let title = document.getElementById("featured-title");
let type = document.getElementById("featured-type");
let desc = document.getElementById("featured-desc");
let date = document.getElementById("featured-date");
let link = document.getElementById("featured-news-container");

const changeNews = (prev, next) => {
  console.log(prev, next);
  console.log(i, imgArr.length);
  if (next) {
    if (i == imgArr.length - 1) {
      i = 0;
      img.src = imgArr[i];
      title.innerHTML = titleArr[i];
      type.innerHTML = newsTypeArr[i];
      desc.innerHTML = descArr[i];
      date.innerHTML = dateArr[i];
      link.href = linksArr[i];
      return;
    }
    i++;
    img.src = imgArr[i];
    title.innerHTML = titleArr[i];
    type.innerHTML = newsTypeArr[i];
    desc.innerHTML = descArr[i];
    date.innerHTML = dateArr[i];
    link.href = linksArr[i];
  } else if (prev) {
    if (i == 0) {
      i = imgArr.length - 1;
      img.src = imgArr[i];
      title.innerHTML = titleArr[i];
      type.innerHTML = newsTypeArr[i];
      desc.innerHTML = descArr[i];
      date.innerHTML = dateArr[i];
      link.href = linksArr[i];
      return;
    }
    i--;
    img.src = imgArr[i];
    title.innerHTML = titleArr[i];
    type.innerHTML = newsTypeArr[i];
    desc.innerHTML = descArr[i];
    date.innerHTML = dateArr[i];
    link.href = linksArr[i];
  }
};
console.log(title.innerHTML);
