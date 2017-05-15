<?php
/**
* The default footer file
*/
?>

		<!-- this is where the footer file will begin -->
		<div id="push"></div>
	</div>   
	<footer>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span4">
					<div class="company text-center">
						&copy; 2013 Trilogy Benefits, Inc.
					</div>
				</div>
				<div class="span4 text-center">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-nav',
							'container' => false,
							'menu_class' => 'nav nav-pills',
						));
					?>
				</div>
				<div class="span4">
					<div class="social text-center">
						<i class="icon-hand-right icon-white"></i>
						<a href="http://www.linkedin.com/company/trilogy-benefits-inc." target="_blank">
							<img src="http://trilogybenefits.com/wp-content/uploads/2013/09/linkedinc-32x32.png" alt="linkedin"></img>
						</a>
						<a href="https://www.facebook.com/pages/Trilogy-Benefits/134945669879105" target="_blank">
							<img src="http://trilogybenefits.com/wp-content/uploads/2013/09/facebookc-32x32.png" id="fb" alt="facebook"></img>
						</a>
						<i class="icon-hand-left icon-white"></i>
					</div>
				</div>
			</div>
		</div>
	</footer>

		<!--MODAL WINDOW, "SMALL GROUP CHECKLIST"-->
    <div id="small-list" class="modal hide fade" aria-labelledby="modalLabel" aria-hidden="true"><!--aria-labelledby= window will be labeled with value given by whatever tag has id="modelLabel"-->
    	<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-white"></i></button>
    			<h3 id="modalLabel">Small Group Checklist:</h3>
    	</div>
    	<div class="modal-body">
    		<form>
    			<div class="controls control-group">
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Educate employees on their requirement to purchase health insurance or pay a tax.
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Determine group size and if you are considered a large employer under the Affordable Care Act.
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Determine large group status based on Internal Revenue Codes&rsquo; controlled group rules.
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Amend new hire waiting period to be no more than 90 days.
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Have you enforced the new, lower maximum ($2,500) for FSA plans?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Are you preparing for the new non-discrimination rules on offering health benefits to employees?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Provide all employees and participants your plan&rsquo;s Summary of Benefits and Coverage.
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Begin collecting spouse and dependent child(s) dates of birth to determine rates.
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Have you increased the Medicare payroll tax for higher earning employees?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Have you designated a private room for nursing mothers?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Are you prepared to distribute a written notice explaining the Exchange to all employees/new hires?
	    			</label>
    			</div>
    		</form>
    	</div>
    	<div class="modal-footer">
    		<button class="btn btn-inverse" href="" rel="">print</button>
    		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">close</button>
    	</div>
    </div>

    	<!--MODAL WINDOW, "LARGE GROUP CHECKLIST"-->
    <div id="large-list" class="modal hide fade" aria-labelledby="modalLabel" aria-hidden="true">
    	<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-white"></i></button>
    			<h3 id="modalLabel">Large Group Checklist:</h3>
    	</div>
    	<div class="modal-body">
    		<form>
    			<div class="controls control-group">
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Educate employees on their requirement to purchase health insurance or pay a tax.
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Have you reviewed the impact of Pay-or-Play penalties for 2015?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Ensure employee contributions are lower than 9.5% of W2 income, based on the lowest plan offered?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Are you offering &ldquo;minimum essential coverage&rdquo; in your plan?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Do you have a plan to track if any employee accepts a government subsidy through the Exchange?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Amend new hire waiting period to be no more than 90 days.
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Have you enforced the new, lower maximum ($2,500) for FSA plans?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Are you preparing for the new non-discrimination rules on offering health benefits to employees?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Provide all employees and participants your plan&rsquo;s Summary of Benefits and Coverage.
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Have you increased the Medicare payroll tax for higher earning employees?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Have you designated a private room for nursing mothers?
	    			</label>
	    			<label class="checkbox span5">
	    				<input type="checkbox" disabled>Are you prepared to distribute a written notice explaining the Exchange to all employees/new hires?
	    			</label>
    			</div>
    		</form>
    	</div>
    	<div class="modal-footer">
    		<button class="btn btn-inverse" href="" rel="">print</button>
    		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">close</button>
    	</div>
    </div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php wp_footer();?>
  </body>
</html>