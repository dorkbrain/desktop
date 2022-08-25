function attachEvents(){
  $('.icon, .icon-text').click(event => {
    dest = $(event.target).parent()[0].dataset.url;
    window.open(dest, "_blank");        
  });
}