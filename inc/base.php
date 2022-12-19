<!DOCTYPE html>
<html lang="id">
<base href="/hoedhoed/" />
<?php 
  $_SERVER['HH'] = $_SERVER['DOCUMENT_ROOT'] . '/hoedhoed/'; 
  $anticache = date ('s'.'i'.'H'.'d'.'m'.'Y');
  
  $kanal_array = array();
  $kanal_array[]=array('kanal_id'=>'home','kanal_name'=>'Home','kanal_link'=>'','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'news','kanal_name'=>'News','kanal_link'=>'news/','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'ekonomi','kanal_name'=>'Ekonomi','kanal_link'=>'news/','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'budaya','kanal_name'=>'Budaya','kanal_link'=>'news/','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'entertainment','kanal_name'=>'Entertainment','kanal_link'=>'news/','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'lifestyle','kanal_name'=>'Lifestyle','kanal_link'=>'news/','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'tech','kanal_name'=>'Tech','kanal_link'=>'news/','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'sport','kanal_name'=>'Sport','kanal_link'=>'news/','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'otomotif','kanal_name'=>'Otomotif','kanal_link'=>'news/','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'agama','kanal_name'=>'Agama','kanal_link'=>'news/','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'foto','kanal_name'=>'Foto','kanal_link'=>'news/','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'video','kanal_name'=>'Video','kanal_link'=>'news/','custom_class'=>'');
  $kanal_array[]=array('kanal_id'=>'infografik','kanal_name'=>'Infografik','kanal_link'=>'news/','custom_class'=>'');
?>