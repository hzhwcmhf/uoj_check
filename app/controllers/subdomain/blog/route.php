<?php

Route::pattern('blog_username', '[a-zA-Z0-9_\-]{1,20}');

Route::group([
		'domain' => UOJConfig::$data['web']['blog']['host']."|".UOJConfig::$data['web']['blog']['host'].":".UOJConfig::$data['web']['blog']['port'],
		'onload' => function() {
			UOJContext::setupBlog();
		}
	], function() {
		Route::any('/blog/{blog_username}', '/subdomain/blog/index.php');
		Route::any('/blog/{blog_username}/archive', '/subdomain/blog/archive.php');
		Route::any('/blog/{blog_username}/aboutme', '/subdomain/blog/aboutme.php');
		Route::any('/blog/{blog_username}/click-zan', '/click_zan.php');
		Route::any('/blog/{blog_username}/blog/{id}', '/subdomain/blog/blog.php');
		Route::any('/blog/{blog_username}/slide/{id}', '/subdomain/blog/slide.php');
		Route::any('/blog/{blog_username}/blog/(?:{id}|new)/write', '/subdomain/blog/blog_write.php');
		Route::any('/blog/{blog_username}/slide/(?:{id}|new)/write', '/subdomain/blog/slide_write.php');
		Route::any('/blog/{blog_username}/blog/{id}/delete', '/subdomain/blog/blog_delete.php');
	}
);
