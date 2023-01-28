<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function templete() {
	return 'base_url("assets/template/admin/")';
}

function is_login() {
	if (!empty($_SESSION['user'])) {
		return TRUE;
	} else {
		return FALSE;
	}
}

function is_admin() {
	if ($_SESSION['level'] != '100') {
		redirect('login');
		die;
	}
}

function must_login() {
	if (!is_login()) {
		redirect('login');
		die;
	}
}

function get_ip()
{
    return $_SERVER['REMOTE_ADDR'];
}

function pg_admin() {
	if ($_SESSION['level'] == '100') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function pg_kepsek() {
	if ($_SESSION['level'] == '1') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function pg_wakasek() {
	if ($_SESSION['level'] == '2') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function pg_katas() {
	if ($_SESSION['level'] == '3') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function pg_kalab() {
	if ($_SESSION['level'] == '4') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function pg_kapus() {
	if ($_SESSION['level'] == '5') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function pg_pelab() {
	if ($_SESSION['level'] == '6') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function pg_wali() {
	if ($_SESSION['level'] == '7') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function pg_guru() {
	if ($_SESSION['level'] == '8') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function pg_bk() {
	if ($_SESSION['level'] == '10') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function pg_uks() {
	if ($_SESSION['level'] == '11') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function pg_osis() {
	if ($_SESSION['level'] == '12') {
		return TRUE;
	} else {
		return FALSE;
	}
}