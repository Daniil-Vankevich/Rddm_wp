<!-- block footer -->
<footer class="footer">
	<div class="container">
		<div class="footer__content">
			<div class="footer-logo">
				<img src="./img/logo/Logo38.png" alt="logo_school38">
			</div>
			<nav class="footer__nav">
				<ul class="footer-info">
					<li class="footer-info__item">
						<h3 class="footer-title">Коротко о нас</h3>
						<div class="footer__description footer__description-first">Муниципальное бюджетное общеобразовательное учреждение"Средняя общеобразовательная школа №38г. Шахты Ростовской области"</div>
					</li>
					<li class="footer-info__item">
						<h3 class="footer-title">
							<?php
							wp_nav_menu([
								'theme_location' => 'bottom',
								'menu' => '',
								'container' => '',
								'container_class' => '',
								'menu_class' => '',
								'menu_id' => '',
								'li_class'  => '',
								'items_wrap' => '%3$s',
							]);
							?>
							<!-- <a class="footer-title-link" href="./answerQuestion.php">Вопрос-ответ</a> -->
						</h3>
						<div class="footer__description">На этой странице можно найти ответы на вопросы о «Движении первых». Выберите интересующую вас тему.</div>
					</li>
					<li class="footer-info__item">
						<h3 class="footer-title footer-title-third">Мы в соц. сетях
						</h3>
						<div class="footer__description">Подпишитесь на нас в социальных сетях, чтобы не пропустить публикацию новостей о нашем движении.</div>
					</li>
				</ul>
			</nav>
			<div class="footer__icon">
				<a class="footer-link-vk" href="https://vk.com/school38info" target="_blank"><img src="./img/footer/footer new vk.png" alt=""></a>
				<a class="footer-link-site_school" href="http://school38.info/" target="_blank"><img src="./img/footer/link-schoolnew.png" alt=""></a>
				<a class="footer-link-rddm" href="https://будьвдвижении.рф/" target="_blank"><img src="./img/footer/rddm new.png" alt=""></a>
			</div>
		</div>
	</div>
</footer>
<!-- END block footer -->
</div>
<script src="./js/index.js"></script>

<?php
wp_footer();
?>
</body>

</html>