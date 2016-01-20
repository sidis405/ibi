function mixIt()
{

    // console.log("mixed");

    var mixedFilter = {


        $filters: null,
        $reset: null,
        groups: [],
        outputArray: [],
        outputString: '',

        init: function(){


            var self = this;

            self.$filters = $('#js-filters');
            self.$reset = $('#js-reset');
            self.$container = $('#prodotti-container');
            self.$filters.find('.filter-block').each(function(){

              var $this = $(this);
              
                self.groups.push({

                    $inputsSelect : $this.find('select'),
                    $inputsText : $this.find('input[type="text"]'),
                    active : ''

                });

            });

            self.bindHandlers();


        },

        // The bindHandlers method will listen for whenever a button is clicked.
        bindHandlers: function(){

            var self = this;

            // Handle button clicks
            self.$filters.on('click', '.filter', function(e) {

                e.preventDefault();

                var $button = $(this);

                // If the button is active, remove the active class, else make active and deactivate others.
                $button.hasClass('active') ?
                $button.removeClass('active') :
                $button.addClass('active').siblings('.filter').removeClass('active');

                self.parseFilters();
            });

            // Handle dropdown changes clicks
            self.$filters.on('change', 'select', function() {

                self.parseFilters();

            });

            // Handle key up on inputs
            self.$filters.on('keyup', 'input[type="text"]', function() {

                var $input = $(this);
                // console.log($input.val());            
                $input.attr('data-filter', '[class*="'+$input.val().toLowerCase().replace(/ /, '-')+'"]');
                if ($input.val() == '')
                  $input.attr('data-filter', '');
                // console.log($input.attr('data-filter'));
                self.parseFilters();

            });


            // Handle reset click
            self.$reset.on('click', function(e){

                e.preventDefault();

                self.$filters.find('.filter').removeClass('active');
                self.$filters.find('.show-all').addClass('active');
                self.$filters.find('select').val('');
                self.$filters.find('input[type="text"]').val('').attr('data-filter', '');

                self.parseFilters();

            });
        },
        
        parseFilters: function() {
            
            var self = this;
            
            for(var i = 0, group; group = self.groups[i]; i++){
                
              var activeSelect = group.$inputsSelect.length ? group.$inputsSelect.val()  || '' : '';
              var activeText = group.$inputsText.length ? group.$inputsText.attr('data-filter') : ''; 
              
              group.active = activeSelect+activeText;
              
              // console.log(group.active);
            } 

            self.concatenate();
            
        },
        
        // The "concatenate" method will crawl through each group, concatenating filters as desired:

        concatenate: function(){
            var self = this;

            self.outputString = ''; // Reset output string

            for(var i = 0, group; group = self.groups[i]; i++){
              self.outputString += group.active;
            }

            // If the output string is empty, show all rather than none:
            !self.outputString.length && (self.outputString = 'all');

            // console.log(self.outputString);

            // ^ we can check the console here to take a look at the filter string that is produced

            // Send the output string to MixItUp via the 'filter' method:
            if(self.$container.mixItUp('isLoaded')){
                self.$container.mixItUp('filter', self.outputString);
            }
        }


    };


    // On document ready, initialise our code.

    $(function(){
          
      // Initialize buttonFilter code
          
      mixedFilter.init();
          
      // Instantiate MixItUp
          
      $('#prodotti-container').mixItUp({
        controls: {
          enable: false // we won't be needing these
        },
        callbacks: {
          onMixFail: function(){
            // console.log('no-results');
          }
        }
      });    
    });
}

mixIt();






