<?php
function create($sClass, $iNumber = 1, $aAttr = []) {
	return factory($sClass, $iNumber)->create($aAttr);
}

function createOne($sClass, $aAttr = []) {
	return factory($sClass)->create($aAttr);
}