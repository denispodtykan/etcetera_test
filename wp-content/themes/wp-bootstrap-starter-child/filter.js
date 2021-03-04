jQuery(function($){
   
    setTimeout(function(){
        $('#filter').trigger("submit");
        //load by default
    },100)

    $(document).on("click", ".page-link", function (event) {
        // click to pagination
        event.preventDefault();
        $("#filter").children("input[name='page']").val($(this).attr('value'));
        submitFilterForm();
    });


    $(document).on('click','#filter .reset',function(){
        // click reset form filter
        $('#filter').trigger("reset");
        submitFilterForm(true);
    })

	$('#filter').submit(function(){
        submitFilterForm(true);
		return false;
    });

    function submitFilterForm(ifClickButton){
        var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(),
            type:filter.attr('method'),
			beforeSend:function(xhr){
                if(ifClickButton){
                    filter.find('button').text('Processing...'); // changing the button label
                }
			},
			success:function(data){
                if(ifClickButton){
                    filter.find('button').text('Apply filter'); // changing the button label back
                }
				$('#response').html(data); // insert data
			}
		});
    }
});

