<?php
class subMenu extends Walker_Nav_Menu
{
	function end_el(&$output, $item, $depth = 1, $args = array())
	{

		if ('Item 5' == $item->title) {
			$output .= '<ul class="subMenu">
        <li class="menu__item-subMenu" <a class="menu__link-sub" href="./documents.html"> Документы </a> </li>
				<li class="menu__item-subMenu" <a class="menu__link-sub" href="./contacts.html"> Контакты </a> </li>
				<li class="menu__item-subMenu" <a class="menu__link-sub" href="./answerQuestion.html"> Вопрос-ответ </a> </li>
				<li class="menu__item-subMenu" <a class="menu__link-sub" href="./сhronology.html"> Хронология </a> </li>
				<li class="menu__item-subMenu" <a class="menu__link-sub" href="./mission.html"> Миссия и ценности </a> </li>
        </ul>';
		}
		$output .= "</li>\n";
	}
}
