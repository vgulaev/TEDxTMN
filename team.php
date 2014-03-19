<?php
$currentmenuitem = "5";
require("head.php");
?>
<script type="text/javascript">
	function showcomment(str)
	{
		$("#commentgrosheva").hide();
		$("#commentputilcheva").hide();
		$("#commentgulyaev").hide();
		$("#" + str).show();
	}
</script>
<div id = "maincontainer" class="container">
<p style="font-size: 30px;font-weight: bold;">Команда</p>
<table>
	<tbody>
		<tr>
			<td>
				<img src="img\team\grosheva.jpg">
			</td>
			<td style="padding-left: 50px;">
				<p style="font-weight: bold;">ГРОШЕВА ЮЛИЯ</p>
				<p>вопросы спонсорского участия и стратегического партнерства</p>
				<p><a href="mailto:fondshedevr@yandex.ru">fondshedevr@yandex.ru</a></p>
				<p><button type="button" class="btn btn-default" onclick="showcomment('commentgrosheva')">Почему TED?</button></p>
				<div id = "commentgrosheva" style="display: none">
				<p>Каждого из нас однажды вдохновляет идея. Но только самые смелые начинают действовать. И тут нужна поддержка, которая поможет родить вам новый мир, полный надежд и открытий, ваш мир!</p>
				<p>Тед -это как раз та атмосфера, аура, которая позволяет получить Заряд вдохновения в чистом виде... без привязки к роду деятельности.</p>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<img src="img\team\putilcheva.jpg">
			</td>
			<td style="padding-left: 50px;">
				<p style="font-weight: bold;">ПУТИЛЬЦЕВА ЕЛЕНА</p>
				<p>вопросы спонсорского участия и стратегического партнерства</p>
				<p><a href="mailto:fondshedevr@yandex.ru">fondshedevr@yandex.ru</a></p>
				<p><button type="button" class="btn btn-default" onclick="showcomment('commentputilcheva')">Мысли о TED</button></p>
				<div id = "commentputilcheva" style="display: none">
				<p>Формат этого события даст возможность каждому человеку развить в себе нечто новое: кто-то неожиданно найдет себя на совершенно ином поприще, кто-то обретет новые полезные знакомства, которые в дальнейшем выльются в масштабные проекты, кто-то просто отдохнет от повседневности и взглянет на обычные вещи под новым углом. Инициирование перемен — вот, к чему призывает команда <span class = "tedxredcolor">TEDx</span> tmn! Сделаем же нашу жизнь ярче, а концентрацию интересных личностей на квадратный метр — насыщеннее</p>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<img src="img\team\shevchik.jpg">
			</td>
			<td style="padding-left: 50px;">
				<p style="font-weight: bold;">ШЕВЧИК ТАТЬЯНА</p>
				<p>общие и организационные вопросы</p>
				<p><a href="mailto:fondshedevr@yandex.ru">fondshedevr@yandex.ru</a></p>
			</td>
		</tr>
		<tr>
			<td>
				<img src="img\team\gulyaev.jpg">
			</td>
			<td style="padding-left: 50px;">
				<p style="font-weight: bold;">ГУЛЯЕВ ВАЛЕНТИН</p>
				<p>разработка темы, подбор TEDTalks</p>
				<p><a href="mailto:vgulaev@yandex.ru">vgulaev@yandex.ru</a></p>
				<p><button type="button" class="btn btn-default" onclick="showcomment('commentgulyaev')">еще о TED...</button></p>
				<div id = "commentgulyaev" style="display: none">
				<p>Знакомство с TED изменило мою жизнь:)) Приходите к нам и я расскажу чем TED может быть полезен для Вас!</p>
				</div>
			</td>
		</tr>
	</tbody>
</table>
</div>

<?php
require("footer.php");
?>