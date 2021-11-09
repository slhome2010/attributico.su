<?php

$responce = array(
	'lastversion' => 'v3.1.9',
	'news' => '<h4>Есть обновления!</h4> 
				<p class="lead">Версия 3.1.9.</p>
				<ul>
				<li>Добавлен инструмент "Заменить разделитель";</li>
				<li>Добавлен инструмент "Сменить регистр";</li>
				<li>Сделана валидация разделителя в настройках модуля;</li> 
				<li>Фильтр в инструментах вынесен отдельным блоком;</li>                   
				</ul>',
	'well' => '<p class="lead">Вы используете последнюю версию модуля <span> Attribut<b style="color: #2199C7;">&</b>co</span> !</p>',
	'links' => '<div class="form-group">
					<h4>Обновления будут доступны по следующим ссылкам:</h4> 
					<ul class="list-group">											
						<li class="list-group-item"><a class="link" target="_blanc" href="https://opencartforum.com/files/file/3213-attributco-opencart-atributy-eto-legko/"><span class="txt_orange">Opencartforum.com</span></a></li>								   
						<li class="list-group-item"><a class="link" target="_blanc" href="https://liveopencart.ru/opencart-moduli-shablony/moduli/filtryi/attribut-co-opencart-atributyi-eto-legko"><span class="txt_orange">Liveopencart.ru</span></a></li>								  
						<li class="list-group-item"><a class="link" target="_blanc" href="http://attributico.su/common/download.html"><span class="txt_orange">attributico.su</span></a> (Архив версий)</li>
					</ul>								
				</div>',
	'copyright' => '<strong>Документация:</strong> <a href="http://attributico.su/doc/ru/attributico.html">http://attributico.su/doc/ru/attributico.html</a><br/>
					<p>Copyright &copy; 2016-2021&nbsp; Comtronics</p>',
);

echo json_encode($responce);