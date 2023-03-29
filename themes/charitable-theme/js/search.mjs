// import $ from "jquery";
class Search {
    constructor() {
      this.openButton = document.querySelector(".js-search-trigger");
      this.closeButton = document.querySelector(".search-overlay__close");
      this.searchOverlay = document.querySelector(".search-overlay");
      this.searchField = document.querySelector("#search-term");
      this.resultsDiv = $("#search-overlay__results");
      this.events();
    }
  
    events() {
      this.openButton.addEventListener("click", this.openOverlay.bind(this));
      this.closeButton.addEventListener("click", this.closeOverlay.bind(this));
      this.searchField.addEventListener("keydown",this.typingLogic);
      
    }


    getResults(){
        console.log("results");
    }

    typingLogic(){
        setTimeout(function(){
            this.resultsDiv.html('hello');
        });
        
    }
  
    openOverlay() {
      this.searchOverlay.classList.add("search-overlay--active");
      document.body.classList.add("body-no-scroll");
    }
  
    closeOverlay() {
      this.searchOverlay.classList.remove("search-overlay--active");
      document.body.classList.remove("body-no-scroll");
    }
  }
  


document.addEventListener('DOMContentLoaded', () => {
    new Search();
  });
  