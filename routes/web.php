<?php 

// Route::get('/','BlogController@listBlog');
// Route::get('/blogs/{blogid}/view','MyController@displayBlog');
// Route::get('/blogs/addcomment','BlogController@newComment');
// Route::post('/blog/newEntryView','BlogController@saveComment');

Route::get('/','Membercontroller@registration');
Route::get('/member/{blogid}/view','Membercontroller@displayMember');
Route::post('/member/Save','Membercontroller@saveMember');
Route::get('/view/members','Membercontroller@listMember');


 ?>