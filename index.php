<?php

$target = 'PirmadIeNis';

switch (strtoupper($target)) {
	case 'PIRMADIENIS':
		print 'Pirmadienis';
		break;
	case 'ANTRADIENIS':
		print 'Antradienis';
		break;
	case 'TRECIADIENIS':
		print 'Trečiadienis';
		break;
	case 'KETVIRTADIENIS':
		print 'Ketvirtadienis';
		break;
	case 'PENKTADIENIS':
		print 'Penktadienis';
		break;
	case 'ŠESTADIENIS':
		print 'Šeštadienis';
		break;
	case 'SEKMADIENIS':
		print 'Sekmadienis';
		break;
	default:
		print 'Nera tokios savaites dienos';
		break;
}