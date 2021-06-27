$(function() {
    breed.run({
      scope: 'people',
      input: data,
      runEnd: function(){
          for(i=1 ; i<=breed.getPageCount('people') ; i++){
            $('ul').append(
              $('<li>',{
                html: i,
              onclick: "breed.paginate({scope: 'people', page: " + i + "});"
            })
          );
        }
      }
    });
  });