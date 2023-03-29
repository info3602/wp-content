// import $ from "jquery";
class Search {
    constructor() {
      this.openButton = document.querySelector(".js-search-trigger");
      this.closeButton = document.querySelector(".search-overlay__close");
      this.searchOverlay = document.querySelector(".search-overlay");
      this.searchField = document.querySelector("#search-term");
      this.resultsDiv = document.querySelector(".search-overlay__results");
      this.typiningTimer;
      this.isSpinnerVisible = false;
      this.previousValue=""
      this.events();
    }
  
    events() {
      this.openButton.addEventListener("click", this.openOverlay.bind(this));
      this.closeButton.addEventListener("click", this.closeOverlay.bind(this));
      this.searchField.addEventListener("keydown", this.typingLogic.bind(this));
      
    }


    getResults(term){
        console.log("results");
        this.resultsDiv.innerHTML="Imagine Search Results Here"
    }

    
    typingLogic(){
        console.log(this.searchField.value.localeCompare(this.previousValue) )
        if(this.searchField.innerHTML.localeCompare(this.previousValue) !== 0){ 
            
            clearTimeout(this.typingTimer);
            if(this.searchField.value !== ""){ 
                if(!this.isSpinnerVisible){
                    this.resultsDiv.innerHTML = '<div class="spinner-loader"></div>';
                    this.isSpinnerVisible = true;
                }
            }
            else{
                this.resultsDiv.innerHTML = "";
                this.isSpinnerVisible = false;
            }

            this.typingTimer = setTimeout(this.getResults(this.searchField.value).bind(this),2000);
            }
        this.previousValue = this.searchField.value;
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
  