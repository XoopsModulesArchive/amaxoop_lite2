<?php
if(!defined('AMAXOOP_GEN_PARAMETERS_INCLUDED')) {
define('AMAXOOP_GEN_PARAMETERS_INCLUDED', 1) ;

define ("_AMAXOOP_TARGET_WINDOW",	"amaxoop");

if (!isset($SearchIndexes['Books'])) {
	if ($xoopsConfig['language'] = 'japanese') {
		$SearchIndexes = array(
			'Books'			=> '�ܡ��½��',
			'ForeignBooks'		=> '�ܡ��ν��',
			'Music'			=> '�ߥ塼���å�',
			'Classical'		=> '���饷�å�����',
			'DVD'			=> 'DVD',
			'VHS'			=> '�ӥǥ�',
			'Electronics'		=> '���쥯�ȥ�˥���',
			'Software'		=> '���եȥ�����',
			'VideoGames'		=> '������',
			'Kitchen'		=> '�ۡ�������å���',
			'Toys'			=> '���������ۥӡ�',
			'Grocery'		=> '���ʡ�����',
			'SportingGoods'		=> '���ݡ���',
			'HealthPersonalCare'	=> '�إ륹���ӥ塼�ƥ���',
			'Watches'		=> '����',
			'Baby'			=> '�٥ӡ����ޥ��˥ƥ�',
			'Apparel'		=> '���ѥ������塼��',
			'Blended'		=> '���Τ���'
		);
	} else {
		$SearchIndexes = array(
			'Books'			=> 'Japanese Books',
			'ForeignBooks'		=> 'Foreign Books',
			'Music'			=> 'Music',
			'Classical'		=> 'Classical',
			'DVD'			=> 'DVD',
			'VHS'			=> 'VHS',
			'Electronics'		=> 'Electronics',
			'Software'		=> 'Software',
			'VideoGames'		=> 'Video Games',
			'Kitchen'		=> 'Kitchen',
			'Toys'			=> 'Toys',
			'Grocery'		=> 'Grocery',
			'SportingGoods'		=> 'SportingGoods',
			'HealthPersonalCare'	=> 'Health and Personal Care',
			'Watches'		=> 'Watches',
			'Baby'			=> 'Baby',
			'Apparel'		=> 'Apparel',
			'Blended'		=> 'Blended'
		);
	}
}

}
?>