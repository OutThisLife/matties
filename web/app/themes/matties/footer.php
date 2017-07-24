<?php
/**
 * matties
 *
 * Footer
 */
?>

<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
	<div id="footer-top">
		<a href="javascript:;">Follow / Newsletter</a>
		<a href="tel:5124441888">(512) 444-1888</a>
	</div>

	<div id="footer-bottom">
		<a class="exit"></a>
		<p class="hide-for-small">
			Reserve a table at our a la carte brunch, every Saturday and Sunday from 11am - 2pm
		</p>

		<a href="javascript:;" onClick="javascript:header.querySelector('.popup-link a').click();">
			<span class="hide-for-small">RESERVE NOW</span>
			<span class="show-for-small">RESERVE A TABLE &raquo;</span>
		</a>
	</div>

	<?php if (!is_front_page()): ?>
	<div id="footer-page" itemscope itemtype="http://schema.org/WPFooter">
		<ul><?=BackEnd::getMenu('footer')?></ul>
	</div>
	<?php endif ?>
</footer>

</div> <!-- End #container -->

<?=BackEnd::getOption('extra-scripts')?>
<?php wp_footer() ?>

<script src="<?=assetDir?>/js/dist/main.js?v=<?=ASSET_VERSION?>"></script>
<script id="rc-script" src="https://www.reservecloud.com/scripts/portals/rcPortal.js" rc-target="eventLeads" defer></script>

</body>
</html>
