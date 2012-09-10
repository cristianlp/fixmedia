<aside id="sidebar">
	<section class="likes">
		<a href="https://twitter.com/fixmedia_org" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir a @fixmedia_org</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		<div class="fb-like" data-href="http://fixmedia.org" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false"></div>
	</section>
	<? if (isset($sites_most_fixes)) :?>
	<section class="block ranking">
		<h3 class="title">Fuentes con más fixes</h3>
		<? foreach ($sites_most_fixes as $site) :?>
			<div class="row clearfix">
				<span class="pos">1</span> <span class="site"><a href="<?= site_url($this->router->reverseRoute('source-profile', array('sitename' => $site->site))); ?>"><?= $site->site; ?></a></span> <span class="votes"><?= $site->votes; ?></span>
			</div>
		<? endforeach; ?> 
	</section>
	<? endif; ?>
	<? if (isset($sites_most_reported)) :?>
	<section class="block ranking">
		<h3 class="title">Fuentes con más reportes</h3>
		<? foreach ($sites_most_reported as $site) :?>
			<div class="row clearfix">
				<span class="pos">1</span> <span class="site"><a href="<?= site_url($this->router->reverseRoute('source-profile', array('sitename' => $site->site))); ?>"><?= $site->site; ?></a></span> <span class="votes"><?= $site->reports; ?></span>
			</div>
		<? endforeach; ?> 
	</section>
	<? endif; ?>
	<? $this->load->view('includes/mini-faqs'); ?>
</aside>