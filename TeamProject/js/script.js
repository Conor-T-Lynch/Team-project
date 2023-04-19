//@reference.Dani Krossing, (11/10/2020), youtube. Available at://www.youtube.com/watch?v=gCo6JqGMi30&ab_channel=DaniKrossing

//javascript to change the color to blue when scrolling over different navigation buttons on the web pages
let pageUrl = window.location.pathname;
let getNav = document.querySelectorAll("nav div ul li a");

for (let i = 0; i < getNav.length; i++) {
  // Get URL info
  let pageUrlName = pageUrl.split("/");
  let pageUrlLength = pageUrlName.length - 1;
  // Get links info
  let pageNav = getNav[i].pathname;
  let pageNavName = pageNav.split("/");
  let pageNavLength = pageNavName.length - 1;
  let pageFinalName = pageNavName[pageNavLength];
  let pageNavExists = pageUrl.includes(pageFinalName);
  // Change links color
  if (pageNavExists == true) {
    getNav[i].style.cssText = "color: blue;";
  }
  else if (pageUrlName[pageUrlLength] == "") {
    getNav[0].style.cssText = "color: blue;";
  }
}
